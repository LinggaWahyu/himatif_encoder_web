<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\GaleriUmum;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class GaleriUmumController extends Controller
{
    /**
     * @var string
     */
    private $model;

    public function __construct() {
        $this->model = GaleriUmum::class;
    }

    public function index() {
        $data = $this->model::orderBy('created_at', 'desc')->paginate(6);
        return view('frontend.gallery.index', compact('data'));
    }

    public function show($id) {
        $data = $this->model::find($id);
        return view('frontend.gallery.show', compact('data'));
    }
}
