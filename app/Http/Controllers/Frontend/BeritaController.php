<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Repositories\BeritaRepository;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    /**
     * @var string
     */
    private $model;

    public function __construct() {
        $this->model = Berita::class;
    }

    public function index() {
        $data = $this->model::where('isshow', 1)->orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.berita.index', compact('data'));
    }

    public function show($slug) {
        $data = $this->model::where('slug', $slug)->first();
        $newestBerita = $this->model::orderBy('created_at', 'desc')->limit(3)->get();
        return view('frontend.berita.show', compact('data','newestBerita'));
    }
}
