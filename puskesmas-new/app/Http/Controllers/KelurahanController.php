<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController
{
    public function index(){
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan'));
    }
}
