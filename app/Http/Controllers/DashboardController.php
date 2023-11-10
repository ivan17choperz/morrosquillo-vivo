<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Speice;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // crear metodos para las graficas

    public function getDataSpeicesChart()
    {
        $data = Speice::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as mes, COUNT(*) as cantidad')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        return response()->json($data);
    }
    public function getDataStudentsChart()
    {
        $data = User::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as mes, COUNT(*) as cantidad')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        return response()->json($data);
    }

    public function getDataCoursesChart()
    {
        $data = Curso::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as mes, COUNT(*) as cantidad')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        return response()->json($data);
    }
}
