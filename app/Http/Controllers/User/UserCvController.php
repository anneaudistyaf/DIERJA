<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\cv;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserCvController extends Controller
{
    public function edit($id)
    {
        $cv = cv::where('id', $id)->first();

        if (empty($cv)) {

            return view('addcv');
        } else {
            return view('formcv', compact('cv'));
        }
    }
    public function showCv($id)
    {
        $cv = cv::where('id', $id)->first();


        return view('cvuser', compact('cv'));
    }
    public function add(Request $request, $id)
    {


        $cv = cv::where('id', $id)->first();
        if (empty($cv)) {
            $cv = new cv;
        }
        $validator = Validator::make($request->all(), [
            'keahlian' => ['required'],
            'pengalamanKerja' => ['required'],
            'tahunAwalKerja' => ['required'],
            'tahunAkhirKerja' => ['required'],
            'deskripsiKerja' => ['required'],
            'edukasi' => ['required'],
            'edukasiTahunAwal' => ['required'],
            'edukasiTahunAkhir' => ['required'],
            'skill' => ['required'],
            'sosialMedia' => ['required'],
            'optionSosialMedia' => ['required'],

        ]);
        if ($validator->fails()) {

            return redirect()->route('edit.cv', Auth::id())->withErrors($validator);
        }
        try {
            DB::beginTransaction();
            // $cv = new cv;
            $cv->keahlian = $request->keahlian;
            $cv->pengalamanKerja = $request->pengalamanKerja;
            $cv->tahunAwalKerja = $request->tahunAwalKerja;
            $cv->tahunAkhirKerja = $request->tahunAkhirKerja;
            $cv->deskripsiKerja = $request->deskripsiKerja;
            $cv->edukasi = $request->edukasi;
            $cv->edukasiTahunAwal = $request->edukasiTahunAwal;
            $cv->edukasiTahunAkhir = $request->edukasiTahunAkhir;
            $cv->skill = $request->skill;
            $cv->sosialMedia = $request->sosialMedia;
            $cv->id = $id;
            $cv->optionSosialMedia = $request->optionSosialMedia;
            $cv->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->route('edit.cv', Auth::id())->withErrors($validator)->with('error', 'Edit data failed');
        }
        return redirect()->route('profile', Auth::id())->with('success', 'Edit data Success');
    }
}
