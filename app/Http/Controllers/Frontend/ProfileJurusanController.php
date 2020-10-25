<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use App\Models\Pengurus;
use App\Models\ProfileJurusan;
use Illuminate\Http\Request;

class ProfileJurusanController extends Controller
{
    /**
     * @var string
     */
    private $pengurus;

    public function __construct()
    {
        $this->pengurus = Pengurus::class;
        $this->divisi = Divisi::class;
        $this->profileJurusan = ProfileJurusan::class;
    }

    public function sejarah()
    {
        $data = $this->profileJurusan::first();
        return view('frontend.profile-jurusan.sejarah', compact('data'));
    }

    public function kepengurusan()
    {
        $divisi = $this->divisi::all();
        $pengurus = $this->pengurus::all();
        $data = array();

        foreach ($divisi as $key => $item) {
            foreach ($pengurus as $keys =>$value) {
                if ($item->divisi_id == $value->divisi_id) {
                    $data[$item->name][$keys] = $value;
                }
            }
        }
        return view('frontend.profile-jurusan.kepengurusan');
    }
}
