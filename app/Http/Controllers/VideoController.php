<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    //
    public function index(string $id_curso)
    {
        $videos = Video::get();
        $curso = Curso::find($id_curso);
        return view(
            'videos.add',
            [
                'curso' => $curso,
                'videos' => $videos,
            ]
        );
    }

    public function store(Request $req, String $id_curso)
    {

        // $video = $req->file('video');
        // $nombre_video = Str::uuid() . '.' . $video->extension();
        // $pathSave = $video->storeAs('videos', $nombre_video, 'public');

        Video::create([
            'title' => $req->get('title'),
            'url' => $req->get('url'),
            'id_curso' => $id_curso
        ]);
        return back()->with('success', 'Video cargado con exito');
    }
}
