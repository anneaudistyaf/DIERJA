<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\sharing_post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserPost extends Controller
{
    public function post(Request $request)
    {
        $validation = $validator = Validator::make($request->all(), [
            'isisharing' => ['required'],
            'judulSharing' => ['required']

        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('errorMessage', 'failed upload!')->withErrors($validation);
        }

        try {
            DB::beginTransaction();
            $post = new sharing_post;
            $post->judul = $request->judulSharing;
            $post->konten = $request->isisharing;
            $post->user_id = Auth::id();
            $post->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('errorMessage', 'failed upload!');
        }
        return redirect()->back()->with('SuccesMessage', 'Post Succes Full');
    }
}
