<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index(){

    $listBook = DB::table('books')->orderBy('created_at','desc')->paginate(5);
    $counterBook = DB::table('books')->count();
    $counterBookBulanan = DB::table('books')->count();
    $counterTahanan = DB::table('books')->where('books.status_wbp','Tahanan')->count();
    $counterNarapidana = DB::table('books')->where('books.status_wbp','Narapidana')->count();
    $counterWBP = DB::table('wbps')->count();
    return view('dashboard/index',[

        'listBook' => $listBook,
        'counterBook' => $counterBook,
        'counterWBP' => $counterWBP,
        'counterTahanan' => $counterTahanan,
        'counterNarapidana' => $counterNarapidana,
        'counterBookBulanan' => $counterBookBulanan
    ]);

    }
}
