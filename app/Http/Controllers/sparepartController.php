<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sparepartController extends Controller
{
    public function sparepart()
    {
        $sparepart = DB::table('sparepart')->get();
        return view('sparepart', ['mobil1' => $sparepart]);
    }
}
