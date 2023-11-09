<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'professional',
        'hours'
    ];

    public function user()
    {
        return $this->hasMany(UserCourse::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class,'id_curso');
    }
}
