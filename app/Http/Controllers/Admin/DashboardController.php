<?php

namespace App\Http\Controllers\Admin;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;

class DashboardController extends Controller
{

  
  public function index()
  {
      $petugas = Petugas::all()->count();

      $masyarakat = Masyarakat::all()->count();

      $pengaduanProses = Pengaduan::where('status', 'proses')->get()->count();

      $pengaduanSelesai = Pengaduan::where('status', 'selesai')->get()->count();

      return view('admin.dashboard.index', [
        'petugas' => $petugas,
        'masyarakat' => $masyarakat,
        'pengaduanProses' => $pengaduanProses,
        'pengaduanSelesai' => $pengaduanSelesai,
      ]);
    }
}
