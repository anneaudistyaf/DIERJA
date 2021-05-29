<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\company;
use App\Models\jobs;
use App\Models\pelatihan;
use App\Models\sharing_post;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AdminPelatihanController extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia',];
    private $lokasi = [0 => 'Bogor', 1 => 'Bandung', 2 => 'Jakarta', 3 => 'Yogyakarta', 4 => 'Medan'];
    private $kategori = [1 => 'Cooking', 2 => 'Programming', 3 => 'Musik'];
    public function index()
    {
        $pelatihan = pelatihan::all();
        $jobs = jobs::all();
        $company = company::all();
        $user = User::all();
        $sharing = sharing_post::all();
        $disabilitas = $this->disabilitas;
        $lokasi = $this->lokasi;
        $kategori = $this->kategori;
        return view('admin', compact('pelatihan', 'jobs', 'company', 'user', 'sharing', 'disabilitas', 'lokasi', 'kategori'));
    }
    public function showAdd()
    {
        $pelatihan = pelatihan::all();
        return view('tambah-pelatihan', compact('pelatihan'));
    }
    public function edit($id)
    {
        $kategori = $this->kategori;
        $pelatihan = pelatihan::find($id);
        return view('edit-pelatihan', compact('pelatihan', 'kategori'));
    }
    public function add(Request $request)
    {
        // dd($request->kategori);

        try {
            if ($request->hasFile('file1') && $request->hasFile('file2')) {
                $validator = Validator::make($request->all(), [
                    'file1' => ['required', 'file'],
                    'file2' => ['required', 'file', 'mimes:mp4'],

                    'judul' => ['required'],
                    'author' => ['required', 'string', 'max:255'],
                    // 'kategori' => ['required'],
                    'deskripsi' => ['required'],

                ]);
                if ($validator->fails()) {

                    dd($request->all());
                    return redirect()->back()->with('failed', 'Failed Upload!')->withErrors($validator);
                }
                $file1 = $request->file('file1');
                $namafile1 = time() . "_" . $file1->getClientOriginalName();
                $file1->move('Thumbnail', $namafile1);
                $video = $request->file('file2');
                $namavideo = time() . "_" . $video->getClientOriginalName();
                $video->move('video_pelatihan', $namavideo);
                DB::beginTransaction();
                $pelatihan = new pelatihan;
                $pelatihan->judul = $request->judul;
                $pelatihan->author = $request->author;
                $pelatihan->kategori_id = $request->kategori;
                $pelatihan->thumbnail = $namafile1;
                $pelatihan->video = $namavideo;
                $pelatihan->deskripsi = $request->deskripsi;
                // $pelatihan->judul = 'ASsasdsa';
                // $pelatihan->author = 'asdasdasd';
                // $pelatihan->kategori_id = 0;
                // $pelatihan->thumbnail = 'asdasd';
                // $pelatihan->video = 'asdasdsa';
                // $pelatihan->deskripsi = 'asdasdasdsa';

                $pelatihan->save();

                DB::commit();
            } else {
                // dd($request->all());
                return redirect()->back()->with('failed', 'Failed Upload!');
            }
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('failed', 'Failed Upload!');
        }
        return redirect()->route('admin.index')->with('success', 'Edit Success');
    }
    public function update(Request $request, $id)
    {
        $pelatihan = pelatihan::find($id);

        try {
            if ($request->hasFile('file1') && $request->hasFile('file2')) {
                $validator = Validator::make($request->all(), [
                    'file1' => ['required', 'file', 'mimes:jpeg,jpg,png'],
                    'file2' => ['required', 'file', 'mimes:mp4'],

                    'judul' => ['required'],
                    'author' => ['required', 'string', 'max:255'],
                    // 'kategori' => ['required', 'string', 'max:255'],
                    'deskripsi' => ['required'],

                ]);
                if ($validator->fails()) {
                    dd($request->all());

                    return redirect()->back()->with('failed', 'Failed Upload!')->withErrors($validator);
                }
                $file1 = $request->file('file1');
                $namafile1 = time() . "_" . $file1->getClientOriginalName();
                $file1->move('Thumbnail', $namafile1);
                $video = $request->file('file2');
                $namavideo = $video->getClientOriginalName();
                $video->move('video_pelatihan', $namavideo);
                DB::beginTransaction();
                $pelatihan->judul = $request->judul;
                $pelatihan->author = $request->author;
                $pelatihan->kategori_id = $request->kategori;
                $pelatihan->thumbnail = $namafile1;
                $pelatihan->video = $namavideo;
                $pelatihan->deskripsi = $request->deskripsi;

                $pelatihan->update();

                DB::commit();
            } else {
                DB::beginTransaction();
                $pelatihan->judul = $request->judul;
                $pelatihan->author = $request->author;
                $pelatihan->kategori_id = $request->kategori;

                $pelatihan->deskripsi = $request->deskripsi;

                $pelatihan->update();

                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('failed', 'Failed Edit!');
        }
        return redirect()->route('admin.index')->with('success', 'Edit Success');
    }
    public function delete($id)
    {
        $pelatihan = pelatihan::find($id);
        $pelatihan->delete();
        return redirect()->route('admin.index')->with('success_pelatihan', 'Delete Success');
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success_user', 'Delete Success');
    }
    public function deleteJobs($id)
    {
        $job = jobs::find($id);
        $job->delete();
        return redirect()->route('admin.index')->with('success_job', 'Delete Success');
    }
    public function deletePerusahaan($id)
    {
        $company = company::find($id);
        $company->delete();
        return redirect()->route('admin.index')->with('success_company', 'Delete Success');
    }
    public function deleteSharing($id)
    {
        $sharing = sharing_post::find($id);
        $sharing->delete();
        return redirect()->route('admin.index')->with('success_sharing', 'Delete Success');
    }
}
