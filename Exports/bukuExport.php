<?php

namespace App\Exports;

use App\buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class bukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $laporan=DB::table('buku')->get();
        foreach($laporan as $kubu){
            $kubu = [
                'id_pin'=> $kubu->id_pin ?? '-',
                'bulaun'=> $kubu->bulan ?? '-',
                'tanggal'=> $kubu->tanggal ?? '-',
                'total'=> $kubu->total ?? '-',
            ];
        }
        $collection = new Collection($laporan);
        return $collection;
    }
}
