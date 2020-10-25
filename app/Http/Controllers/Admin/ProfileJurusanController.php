<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileJurusan;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ProfileJurusanController extends Controller
{
    /**
     * @var string
     */
    private $profileJurusan;

    public function __construct()
    {
        $this->profileJurusan = ProfileJurusan::class;
    }

    public function index()
    {
        $data = $this->profileJurusan::first();
        return view('profile_jurusan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if (empty($input['id'])) {
            $response = $this->profileJurusan::create($input);
        } else {
            $response = $this->profileJurusan::find($input['id']);
            $response->update($input);
        }

        Flash::success('Profile Jurusan saved successfully.');
        return redirect()->back();
    }
}
