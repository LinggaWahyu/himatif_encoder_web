<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Divisi;
use App\Models\GaleriUmum;
use App\Models\Komunitas;
use App\Models\ProfileJurusan;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $profileJurusan = ProfileJurusan::first();
        $berita = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $divisi = Divisi::all();
        $komunitas = Komunitas::where('type', 'komunitas')->get();
        $partner = Komunitas::where('type', 'partner')->get();
        $gallery = GaleriUmum::limit(6)->get();
        return view('frontend.home.index', compact('berita', 'divisi', 'komunitas', 'profileJurusan', 'partner', 'gallery'));
    }
}
