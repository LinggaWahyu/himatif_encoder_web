<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class KontakController extends Controller
{
    /**
     * @var string
     */
    private $model;

    public function __construct() {
        $this->model = Kontak::class;
    }

    public function index() {
        return view('frontend.kontak.index');
    }

    public function store(Request $request) {
        $input = $request->all();

        Kontak::create($input);
        Flash::success('Berhasil di kirim');
        return redirect()->back();
    }
}
