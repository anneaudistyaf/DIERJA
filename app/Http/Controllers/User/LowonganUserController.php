<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ApplyLowongan;
use App\Models\company;
use App\Models\jobs;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class LowonganUserController extends Controller
{
    public function index()
    {
        $jobs = jobs::all();
        // $client = new Client();
        // $url = "http://127.0.0.1:8080/api/jobs";
        // $response = $client->request('GET', $url, [
        //     'verify'  => false,
        // ]);
        // $jobs = json_decode($response->getBody());
        // dd($jobs);
        return view('lowongan', compact('jobs'));
    }
    public function detail($id)
    {
        $jobs = jobs::find($id);
        $apply = ApplyLowongan::where([
            ['id', Auth::id()],
            ['jobs_id', $id],
        ])->first();
        return view('detaillowongan', compact('jobs', 'apply'));
    }
    public function registerJobs($id)
    {
        // dd($id);
        $jobs = jobs::find($id);

        $user = User::where('id', Auth::id())->first();

        try {
            DB::beginTransaction();
            $apply = new ApplyLowongan;
            $apply->nama = $user->name;
            $apply->posisi = $jobs->posisi;
            $apply->status = 0;
            $apply->id = $user->id;
            $apply->jobs_id = $jobs->jobs_id;
            $apply->company_id = $jobs->company->company_id;
            $apply->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('failed', 'CV tidak terkirim');
        }
        return redirect()->back()->with('success', 'CV terkirim');
    }
    public function detailPerusahaan($id)
    {
        $company = company::find($id);

        return view('detail-perusahaan', compact('company'));
    }
}
