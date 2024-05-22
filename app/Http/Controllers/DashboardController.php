<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $blogsCount = Blog::count();
        $usersCount = User::count();

        // Usar EXTRACT para obter o mês em PostgreSQL
        $blogData = Blog::select([
            DB::raw('EXTRACT(MONTH FROM created_at) as month'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();

        // Passar os dados para a view
        $blogDataJson = $blogData->mapWithKeys(function ($item) {
            return [(int)$item->month => (int)$item->total];
        })->toJson();

        // Usar EXTRACT para obter o dia em PostgreSQL
        $userData = User::select([
            DB::raw('EXTRACT(DAY FROM created_at) as day'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('day')
        ->orderBy('day', 'asc')
        ->get();

        // Passar os dados para a view
        $userDataJson = $userData->mapWithKeys(function ($item) {
            return [(int)$item->day => (int)$item->total];
        })->toJson();
        
        return view('admin.dashboard', compact('blogsCount', 'usersCount', 'blogDataJson', 'userDataJson'));
    }
}
