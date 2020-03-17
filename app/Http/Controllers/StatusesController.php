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
        
        $this->validate($request, [
            'img' => 'required|mimetypes:image/jpeg,image/png,image/bmp',
            'audio' => 'required|mimetypes:audio/mpeg',
            'content' => 'max:140',
        ],[
            'img.required'  => '请选择图片',
            'audio.required' => '请选择音频',
            'audio.mimetypes' => '音频必须是 mp3 格式',
            'content.max' => '介绍内容过长'
        ]);
        $img = $request->file('img')->store('public/cover');
        $audio = $request->file('audio')->store('public/audio');


        Auth::user()->statuses()->create([
            'content' => $request['content'],
            'img_path' => $img,
            'audio_path' => $audio,
        ]);
        session()->flash('success', '发布成功 ！');
        return redirect()->back();
    }

    public function messages()
    {
        return [

        ];
    }
}
