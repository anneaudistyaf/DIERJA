<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\ApplyLowongan;
use App\Models\jobs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CompanynApplyController extends Controller
{
    private $disabilitas = [0 => 'Tuna rungu', 1 => 'Tuna wicara', 2 => 'Lumpuh', 3 => 'Disleksia',];
    public function index()
    {
        // dd(Auth::guard('company')->user()->company_id);
        $jobs =  DB::table('apply_lowongans')
            ->select('posisi')
            ->groupBy('posisi')
            ->get();

        $hasilJobs = array();
        foreach ($jobs as $data) {
            $array_detail = ApplyLowongan::where([
                    ['posisi', $data->posisi],
                    ['company_id', Auth::guard('company')->user()->company_id],
                ])
                ->orderBy('jobs_id', 'asc')
                ->get();
            array_push($hasilJobs, $array_detail);
        }
        // dd($hasilJobs);
        $apply = ApplyLowongan::where('company_id', Auth::guard('company')->user()->company_id)->get();
        $ds = $this->disabilitas;
        return view('lamaran', compact('hasilJobs', 'ds', 'apply', 'jobs'));
    }
    public function update(Request $request, $id)
    {
        $apply = ApplyLowongan::find($id);

        try {
            DB::beginTransaction();
            $apply->status = $request->status;
            $apply->update();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'Update Failed');
        }
        return redirect()->back()->with('success', 'Update Success');
    }
}
