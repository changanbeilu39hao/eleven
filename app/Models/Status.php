<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['img_path', 'audio_path', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
