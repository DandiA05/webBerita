<?php

namespace App\Exports;

use App\Models\NewsInd;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\DB;

class ExportNewsInd implements FromQuery {
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function query()
    {
       // return NewsInd::all()->take(10)->get();
        //return NewsInd::query()->select('tanggal_berita','title','content','status','user_input','user_update','tanggal_update')->take(10);
        return NewsInd::query()->get();
       // return NewsInd::query()->dd();
       //Model::query()->take(10)->get();
       
        
       // return NewsInd::query()->take(10);
    }

    // public function headings(): array
    // {
    //     return [
    //         'Tanggal Berita',
    //         'Title',
    //         'Content',
    //         'Status',
    //         'User Input',
    //         'User Update',
    //         'Tanggal Update',
    //         'id_category',
    //     ];
    // }


}

