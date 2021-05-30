<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class LowonganController extends Controller
{
    public function index()
    {
        $jobs = jobs::where('company_id', Auth::guard('company')->user()->company_id)->get();
        return view('lowongan-perusahaan', compact('jobs'));
    }
    public function show()
    {
        return view('formlowongan');
    }
    public function detail($id)
    {
        $jobs = jobs::find($id);
        return view('detaillowongan', compact('jobs'));
    }
    public function add(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'posisi' => ['required', 'string', 'max:255'],
            'disabilitas' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'waktu' => ['required'],
            'jobs_description' => ['required'],
        ]);
        if ($validator->fails()) {
            dd($request->all());
            return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
        }
        try {
            DB::beginTransaction();
            $jobs = new jobs;
            $jobs->posisi = $request->posisi;
            $jobs->disabilitas = $request->disabilitas;
            $jobs->lokasi = $request->lokasi;
            $jobs->waktu = $request->waktu;
            $jobs->jobs_description = $request->jobs_description;
            $jobs->company_id = Auth::guard('company')->user()->company_id;
            $jobs->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed Upload!')->withErrors($validator);
        }
        return redirect('company/lowongan-perusahaan')->with('success', 'Success Upload!');
    }
    public function edit($id)
    {
        $jobs = jobs::find($id);
        return view('editFormLowongan', compact('jobs'));
    }
    public function update(Request $request, $id)
    {
        $jobs = jobs::find($id);
        $validator = Validator::make($request->all(), [
            'posisi' => ['required', 'string', 'max:255'],
            'disabilitas' => ['required', 'string', 'max:255'],
            'lokasi' => ['required', 'string', 'max:255'],
            'waktu' => ['required'],
            'jobs_description' => ['required'],
        ]);
        if ($validator->fails()) {

            return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
        }
        try {
            DB::beginTransaction();

            $jobs->posisi = $request->posisi;
            $jobs->disabilitas = $request->disabilitas;
            $jobs->lokasi = $request->lokasi;
            $jobs->waktu = $request->waktu;
            $jobs->jobs_description = $request->jobs_description;
            $jobs->update();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
        }
        return redirect('company/lowongan-perusahaan')->with('success', 'Success Update!');
    }
    public function delete($id)
    {
        $jobs = jobs::find($id);
        $jobs->delete();
        return redirect('company/lowongan-perusahaan')->with('success', 'Delete Success');
    }
}
