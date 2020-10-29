<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * @var string
     */
    private $model;

    public function __construct() {
        $this->model = Developer::class;
    }

    public function index() {
        $data = $this->model::all();
        return view('frontend.developer.index', compact('data'));
    }
}
