<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        
        // $this->validate($request, [
        //     'content' => 'required|max:140',
        //     'img' => 'mimetypes:image/jpeg,image/png,image/bmp',
        //     'audio' => 'mimetypes:audio/mpeg'
        // ]);
        $img = $request->file('img')->store('cover');
        $audio = $request->file('audio')->store('audio');


        Auth::user()->statuses()->create([
            'content' => $request['content'],
            'img_path' => $img,
            'audio_path' => $audio,
        ]);
        session()->flash('success', '发布成功 ！');
        return redirect()->back();
    }
}
