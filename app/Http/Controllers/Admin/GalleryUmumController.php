<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriUmum;
use Illuminate\Http\Request;

class GalleryUmumController extends Controller
{
    /**
     * @var string
     */
    private $galery;

    public function __construct() {
        $this->galery = GaleriUmum::class;
    }

    public function index() {
        $data = $this->galery::paginate(6);
        return view('frontend.gallery.index');
    }
}
