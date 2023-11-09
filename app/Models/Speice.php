<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_scientific',
        'name_common',
        'description',
        'clas_tax',
        'averange_size',
        'url',
        'references'
    ];

    public function images()
    {
        return $this->belongsTo(ImageSpeice::class);
    }
}
