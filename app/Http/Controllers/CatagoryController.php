<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function data(Request $request)
    {
        $categorys = DB::table('category')->paginate(15);
        if ($request->ajax()) {
            return view('category.category', compact('categorys'));
        }
        //return $categorys;
        //return view('category.data', ['categorys' => $categorys]);
        return view('category.data', compact('categorys'));
    }

    public function add()
    {
        return view ('category.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('category')->insert([
            'category' => $request->category,
            'status' => $request->status,
            'user_input' => $request->user_input,
            'tanggal_input' => $request->tanggal_input,
            'tanggal_update' => $request->tanggal_update,
            'user_update' => $request->user_update
        ]);

        return redirect('Catagory')->with('status', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {

        $category = DB::table('category')->where('id', $id)->first();
        //dd($category);
        return view ('category.edit', compact('category'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('category')->where('id', $id)
        ->update([
            'category' => $request->category,
            'status' => $request->status,
            'user_input' => $request->user_input,
            'tanggal_input' => $request->tanggal_input,
            'tanggal_update' => $request->tanggal_update,
            'user_update' => $request->user_update
        ]);

        return redirect('Catagory')->with('status', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('category')->where('id', $id)->delete();

        return redirect('Catagory')->with('status', 'Data berhasil dihapus!');
    }

}
