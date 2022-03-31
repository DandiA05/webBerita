<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportNewsInd;
use App\Models\NewsInd;
use Rap2hpoutre\FastExcel\FastExcel;
use Faker;
use DataTables;



class NewsindController extends Controller
{
    public function data(Request $request)
    {
        $newsind = DB::table('newsind')->leftJoin('category', function($join){$join->on('category.id','=','newsind.id_category');
        })->select('newsind.*','category.category')
        ->paginate(15);

        $newsindcount = DB::table('newsind')->count();

        if($request->has('search')){
            $newsind = DB::table('newsind')->where('title','LIKE','%'.$request->search.'%')
            ->orWhere('content','LIKE','%'.$request->search.'%')->paginate(15);
            $newsindcount = DB::table('newsind')->count();
        }

        if($request->has('filterdate')){

            $start_date = $request->start_date;
            $end_date = $request->end_date;
            $newsind = DB::table('newsind')->whereBetween('tanggal_berita',[$start_date,$end_date])->paginate(15);

        }
        
    
        //serverside
        if ($request->ajax()) {
            $data = DB::table('newsind')->leftJoin('category', function($join){$join->on('category.id','=','newsind.id_category');
            })->select('newsind.*','category.category')
            ->paginate(15);
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('detail', function($row){
                    $btn = '<a href="" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['detail'])

                ->make(true);
        }
 
        return view('newsind.data', compact('newsind'), compact('newsindcount'));
    }

    public function add()
    {
        return view ('newsind.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('newsind')->insert([
            'tanggal_berita' => $request->tanggal_berita,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'user_input' => $request->user_input,
            'user_update' => $request->user_update,
            'tanggal_update' => $request->tanggal_update,
            'id_category' => $request->id_category
        ]);

        return redirect('newsind')->with('status', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {

        $newsind = DB::table('newsind')->where('id', $id)->first();
        //dd($user);
        return view ('newsind.edit', compact('newsind'));
    }

    public function detail($id)
    {

        $newsind = DB::table('newsind')->where('id', $id)->first();
        //dd($user);
        return view ('newsind.detail', compact('newsind'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('newsind')->where('id', $id)
        ->update([
            'tanggal_berita' => $request->tanggal_berita,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'user_input' => $request->user_input,
            'user_update' => $request->user_update,
            'tanggal_update' => $request->tanggal_update
        ]);

        return redirect('newsind')->with('status', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('newsind')->where('id', $id)->delete();

        return redirect('newsind')->with('status', 'Data berhasil dihapus!');
    }

    //Maatwebsite
    public function get_newsind_data(Request $request)
    {
       // return Excel::download(new ExportNewsInd, 'newsind.xlsx');
        return (new ExportNewsInd)->download('newsind.xlsx');
        //// (new ExcelExport)->store('myFile.xlsx');
    }

    //filter
    public function search()
    {
        $search_text = $_GET['title-content'];
        $newsind = DB::table('newsind')->where('title', 'LIKE', '%'.$search_text.'%')->get();

        return view('newsind.data', compact('newsind'));
    }

}
