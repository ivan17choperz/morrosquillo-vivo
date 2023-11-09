<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\UserCourse;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CoursesController extends Controller
{

    public function index()
    {
        $cursos = Curso::get();
        return view('courses.courses', [
            'cursos' => $cursos
        ]);
    }

    //todo-> creacion de un curso
    public function create()
    {
        $cursos = Curso::get();
        return view('admin.add-course', ['cursos' => $cursos]);
    }
    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'description' => 'required',
            'professional' => 'required',
            'hours' => 'required',
        ]);


        $curso = Curso::create([
            'title' => $req->get('title'),
            'description' => $req->get('description'),
            'professional' => $req->get('professional'),
            'hours' => $req->get('hours'),
        ]);

        return redirect("/admin/cursos/$curso->id/add/video");
    }

    //todo-> registro de un estudiante aun curso
    public function registerCourse(Request $req)
    {
        // get metoth auth form
        $user = auth()->user();
        // get form input hidden
        $id_curso = $req->get('id_curso');


        // Realiza una consulta para verificar si el usuario ya está inscrito en este curso
        $existingUser = DB::table('user_courses')
            ->where('id_user', $user->id)
            ->where('id_curso', $id_curso)
            ->first();

        if ($existingUser) {
            return redirect("/cursos/$id_curso/learn");
        }

        UserCourse::create([
            'id_user' => $req->get('id_user'),
            'id_curso' => $req->get('id_curso'),
        ]);

        return redirect("/cursos/$id_curso/learn");
    }

    public function show(string $id)
    {
        $user_id = Auth::user()->id;
        $curso = Curso::find($id);
        return view('courses.view-detail', [
            'id_curso' => $id,
            'user_id' => $user_id,
            'curso' => $curso
        ]);
    }


    public function startingCourse(string $id_curso)
    {

        $videos = Video::where('id_curso', $id_curso)->get();
        $curso = Curso::find($id_curso);

        return view('courses.learn', [
            'videos' => $videos,
            'curso' => $curso
        ]);
    }


    public function edit(string $id)
    {
        $curso = Curso::find($id);
        return view('admin.update-course', [
            'curso' => $curso
        ]);
    }

    public function update(Request $req, string $id)
    {
        $curso = Curso::find($id);

        if ($curso) {
            $req->validate([
                'title' => 'required',
                'description' => 'required',
                'professional' => 'required',
                'hours' => 'required',
            ]);

            Curso::find($id)->update([
                'title' => $req->get('title'),
                'description' => $req->get('description'),
                'professional' => $req->get('professional'),
                'hours' => $req->get('hours'),
            ]);
            return redirect('/admin/cursos/add');
        }

        return back();

    }

    public function destroy(string $id)
    {
        Curso::destroy($id);
        return redirect('/admin/cursos/add');
    }
}
