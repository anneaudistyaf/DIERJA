<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApplyLowongan;
use App\Models\cv;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserProfile extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia',];
    private $lokasi = [0 => 'Bogor', 1 => 'Bandung', 2 => 'Jakarta', 3 => 'Yogyakarta', 4 => 'Medan'];
    private $status = [0 => 'Menunggu konfirmasi', 1 => 'diterima', 2 => 'ditolak'];
    public function index($id)
    {
        $ds = $this->disabilitas;
        $usr = User::find($id);
        $cv = cv::where('id', $id)->first();
        $lokasi = $this->lokasi;
        $status = $this->status;
        $apply = ApplyLowongan::where('id', Auth::id())->get();
        if (Auth::check()) {
            return view('profile', compact('usr', 'ds', 'lokasi', 'cv', 'status', 'apply'));
        } else {
            return redirect('/');
        }
    }
    public function edit($id)
    {
        $ds = $this->disabilitas;
        $lokasi = $this->lokasi;
        $usr = User::find($id);
        if (Auth::check()) {
            return view('edit-user', compact('usr', 'ds', 'lokasi'));
        } else {
            return redirect('/');
        }
    }
    public function Update(Request $request, $id)
    {
        $user = User::find($id);
        $image = '/ProfileImage/' . $user->user_profile;
        $path = str_replace('\\', '/', public_path());
        // $file = $request->file('file');
        // $namafile = $file->getClientOriginalName();
        // dd($namafile);
        try {
            if ($request->hasFile('file')) {
                $validator = Validator::make($request->all(), [
                    'file' => ['required', 'file', 'mimes:jpeg,png'],
                    'nama' => ['required', 'string', 'max:255'],
                    'date' => ['required', 'date'],
                    'gender' => ['required'],
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
                    // dd($request->all());
                }
                $file = $request->file('file');
                $namafile = $file->getClientOriginalName();
                $file->move('profileImage', $namafile);
                DB::beginTransaction();
                $user->name = $request->nama;
                $user->date_of_birth = $request->date;
                $user->gender = $request->gender;
                $user->user_profile = $namafile;
                $user->disabilitas = $request->disabilitas;
                $user->location = $request->lokasi;
                $user->update();


                DB::commit();
            } else {
                DB::beginTransaction();
                $user->name = $request->nama;
                $user->date_of_birth = $request->date;
                $user->gender = $request->gender;
                $user->disabilitas = $request->disabilitas;
                $user->location = $request->lokasi;
                $user->update();
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
        }
        return redirect()->route('profile', $id)->with('succes', 'Edit Success');
    }
}
