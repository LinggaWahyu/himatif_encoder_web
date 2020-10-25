<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    /**
     * @var string
     */
    private $model;

    public function __construct() {
        $this->model = Komunitas::class;
    }

    public function index() {
        $data = $this->model::where('type', Constants::TYPE_KOMUNITAS)->get();
        return view('frontend.komunitas.index', compact('data'));
    }

    public function show($id) {
        $data = $this->model::find($id);
        return view('frontend.komunitas.show', compact('data'));
    }
}
