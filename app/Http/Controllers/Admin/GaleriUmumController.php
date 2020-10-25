<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GaleriUmumDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGaleriUmumRequest;
use App\Http\Requests\UpdateGaleriUmumRequest;
use App\Repositories\GaleriUmumRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class GaleriUmumController extends AppBaseController
{
    /** @var  GaleriUmumRepository */
    private $galeriUmumRepository;

    public function __construct(GaleriUmumRepository $galeriUmumRepo)
    {
        $this->galeriUmumRepository = $galeriUmumRepo;
    }

    /**
     * Display a listing of the GaleriUmum.
     *
     * @param GaleriUmumDataTable $galeriUmumDataTable
     * @return Response
     */
    public function index(GaleriUmumDataTable $galeriUmumDataTable)
    {
        return $galeriUmumDataTable->render('galeri_umums.index');
    }

    /**
     * Show the form for creating a new GaleriUmum.
     *
     * @return Response
     */
    public function create()
    {
        return view('galeri_umums.create');
    }

    /**
     * Store a newly created GaleriUmum in storage.
     *
     * @param CreateGaleriUmumRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriUmumRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('galeri_umum', 'public');
            $input['photo'] = $path;
        }

        $galeriUmum = $this->galeriUmumRepository->create($input);

        Flash::success('Galeri Umum saved successfully.');

        return redirect(route('galeriUmums.index'));
    }

    /**
     * Display the specified GaleriUmum.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galeriUmum = $this->galeriUmumRepository->find($id);

        if (empty($galeriUmum)) {
            Flash::error('Galeri Umum not found');

            return redirect(route('galeriUmums.index'));
        }

        return view('galeri_umums.show')->with('galeriUmum', $galeriUmum);
    }

    /**
     * Show the form for editing the specified GaleriUmum.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galeriUmum = $this->galeriUmumRepository->find($id);

        if (empty($galeriUmum)) {
            Flash::error('Galeri Umum not found');

            return redirect(route('galeriUmums.index'));
        }

        return view('galeri_umums.edit')->with('galeri_umum', $galeriUmum);
    }

    /**
     * Update the specified GaleriUmum in storage.
     *
     * @param int $id
     * @param UpdateGaleriUmumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriUmumRequest $request)
    {
        $galeriUmum = $this->galeriUmumRepository->find($id);
        $input = $request->all();
        if (empty($galeriUmum)) {
            Flash::error('Galeri Umum not found');

            return redirect(route('galeriUmums.index'));
        }

        if ($request->hasFile('photo')) {
            Storage::delete("public/" . $galeriUmum->photo);

            $path = $request->file('photo')->store('galeri_umum', 'public');
            $input['photo'] = $path;
        }

        $galeriUmum = $this->galeriUmumRepository->update($input, $id);

        Flash::success('Galeri Umum updated successfully.');

        return redirect(route('galeriUmums.index'));
    }

    /**
     * Remove the specified GaleriUmum from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galeriUmum = $this->galeriUmumRepository->find($id);

        if (empty($galeriUmum)) {
            Flash::error('Galeri Umum not found');

            return redirect(route('galeriUmums.index'));
        }

        Storage::delete("public/" . $galeriUmum->photo);

        $this->galeriUmumRepository->delete($id);

        Flash::success('Galeri Umum deleted successfully.');

        return redirect(route('galeriUmums.index'));
    }
}
