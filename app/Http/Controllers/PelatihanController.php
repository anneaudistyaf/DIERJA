<?php

namespace App\Http\Controllers;

use App\Models\pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihan = pelatihan::all();
        $category =  pelatihan::select('kategori_id')
            ->groupBy('kategori_id')
            ->get();

        $sorting = array();
        foreach ($category as $data) {
            $array_detail = pelatihan::where('kategori_id', $data->kategori_id)
                ->orderBy('kategori_id', 'asc')
                ->get();
            array_push($sorting, $array_detail);
        }
        // dd($sorting);
        return view('pelatihan', compact('sorting', 'pelatihan', 'category'));
    }
    public function detailpelatihan($id)
    {
        $pelatihan = pelatihan::find($id);
        return view('detailpelatihan', compact('pelatihan'));
    }
}
