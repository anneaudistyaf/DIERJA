<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class CompanyProfileController extends Controller
{
    public function index($id)
    {
        $company = company::find($id);

        return view('profile-perusahaan', compact('company'));
    }
    public function edit($id)
    {
        $company = company::find($id);
        return view('edit-perusahaan', compact('company'));
    }
    public function update(Request $request, $id)
    {
        $company = company::find($id);

        try {
            if ($request->hasFile('file')) {
                $validator = Validator::make($request->all(), [
                    'file' => ['required', 'file', 'mimes:jpeg,png'],
                    'nama' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'phone' => ['required', 'string', 'max:255'],
                    'sektor' => ['required'],
                    'alamat' => ['required'],
                    'deskripsi' => ['required'],
                ]);
                if ($validator->fails()) {

                    return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
                }
                $file = $request->file('file');
                $namafile = $file->getClientOriginalName();
                $file->move('profileCompany', $namafile);
                DB::beginTransaction();
                $company->company_name = $request->nama;
                $company->email = $request->email;
                $company->phone = $request->phone;
                $company->sektor = $request->sektor;
                $company->alamat = $request->alamat;
                $company->profileImage = $namafile;
                $company->deskripsi = $request->deskripsi;
                $company->update();


                DB::commit();
            } else {
                $validator = Validator::make($request->all(), [

                    'nama' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'phone' => ['required', 'string', 'max:255'],
                    'sektor' => ['required'],
                    'alamat' => ['required'],
                    'deskripsi' => ['required'],
                ]);
                if ($validator->fails()) {

                    return redirect()->back()->with('failed', 'Failed Update!')->withErrors($validator);
                }
                DB::beginTransaction();
                $company->company_name = $request->nama;
                $company->email = $request->email;
                $company->phone = $request->phone;
                $company->sektor = $request->sektor;
                $company->alamat = $request->alamat;
                $company->deskripsi = $request->deskripsi;
                $company->update();


                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Failed Update!');
        }
        return redirect()->route('company.profile-perusahaan', $id)->with('success', 'Edit Success');
    }
}
