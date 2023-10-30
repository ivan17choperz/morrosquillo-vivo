<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSpeice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'speice_id'
    ];


    public function speice(){
        return $this->belongsTo(Speice::class);
    }
}
