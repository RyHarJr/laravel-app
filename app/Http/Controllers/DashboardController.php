<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class DashboardController extends Controller
{
  public function index()
  {
    $prodiData = Prodi::withCount(['mahasiswa as mahasiswa_count' => function ($query) {
      $query->selectRaw('count(*)');
    }])->orderBy('nama_prodi')->get();

    $categories = $prodiData->pluck('nama_prodi')->toArray();
    $counts = $prodiData->pluck('mahasiswa_count')->map(fn($count) => (int) $count)->toArray();

    return view('dashboard', compact('categories', 'counts'));
  }
}
