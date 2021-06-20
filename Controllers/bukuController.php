<?php

namespace App\Http\Controllers;

use App\buku;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\bukuExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\controller;

class bukuController extends Controller
{
    public function index(){
        $kubu=DB::table('buku')->get();
        return view('buku142', [
            'buku142' => $kubu,
        ]);

    }
    public function export(){
		return Excel::download(new bukuExport, '1461900142.xlsx');
	}
}
