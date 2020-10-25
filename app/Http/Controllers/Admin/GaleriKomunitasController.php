<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GaleriKomunitasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGaleriKomunitasRequest;
use App\Http\Requests\UpdateGaleriKomunitasRequest;
use App\Models\Komunitas;
use App\Repositories\GaleriKomunitasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class GaleriKomunitasController extends AppBaseController
{
    /** @var  GaleriKomunitasRepository */
    private $galeriKomunitasRepository;

    public function __construct(GaleriKomunitasRepository $galeriKomunitasRepo)
    {
        $this->galeriKomunitasRepository = $galeriKomunitasRepo;
    }

    /**
     * Display a listing of the GaleriKomunitas.
     *
     * @param GaleriKomunitasDataTable $galeriKomunitasDataTable
     * @return Response
     */
    public function index(GaleriKomunitasDataTable $galeriKomunitasDataTable)
    {
        return $galeriKomunitasDataTable->render('galeri_komunitas.index');
    }

    /**
     * Show the form for creating a new GaleriKomunitas.
     *
     * @return Response
     */
    public function create()
    {
        $komunitas = Komunitas::select('id', 'name')->pluck('name', 'id');
        return view('galeri_komunitas.create', compact('komunitas'));
    }

    /**
     * Store a newly created GaleriKomunitas in storage.
     *
     * @param CreateGaleriKomunitasRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriKomunitasRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('galeri_komunitas', 'public');
            $input['photo'] = $path;
        }

        $galeriKomunitas = $this->galeriKomunitasRepository->create($input);

        Flash::success('Galeri Komunitas saved successfully.');

        return redirect(route('galeriKomunitas.index'));
    }

    /**
     * Display the specified GaleriKomunitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galeriKomunitas = $this->galeriKomunitasRepository->find($id);

        if (empty($galeriKomunitas)) {
            Flash::error('Galeri Komunitas not found');

            return redirect(route('galeriKomunitas.index'));
        }

        return view('galeri_komunitas.show')->with('galeriKomunitas', $galeriKomunitas);
    }

    /**
     * Show the form for editing the specified GaleriKomunitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galeriKomunitas = $this->galeriKomunitasRepository->find($id);
        $komunitas = Komunitas::select('id', 'name')->pluck('name', 'id');

        if (empty($galeriKomunitas)) {
            Flash::error('Galeri Komunitas not found');

            return redirect(route('galeriKomunitas.index'));
        }

        return view('galeri_komunitas.edit')->with(['galeriKomunitas' => $galeriKomunitas, 'komunitas'=> $komunitas]);
    }

    /**
     * Update the specified GaleriKomunitas in storage.
     *
     * @param int $id
     * @param UpdateGaleriKomunitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriKomunitasRequest $request)
    {
        $galeriKomunitas = $this->galeriKomunitasRepository->find($id);
        $input = $request->all();

        if (empty($galeriKomunitas)) {
            Flash::error('Galeri Komunitas not found');

            return redirect(route('galeriKomunitas.index'));
        }

        if ($request->hasFile('photo')) {
            Storage::delete("public/" . $galeriKomunitas->photo);

            $path = $request->file('photo')->store('galeri_komunitas', 'public');
            $input['photo'] = $path;
        }

        $galeriKomunitas = $this->galeriKomunitasRepository->update($input, $id);

        Flash::success('Galeri Komunitas updated successfully.');

        return redirect(route('galeriKomunitas.index'));
    }

    /**
     * Remove the specified GaleriKomunitas from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galeriKomunitas = $this->galeriKomunitasRepository->find($id);

        if (empty($galeriKomunitas)) {
            Flash::error('Galeri Komunitas not found');

            return redirect(route('galeriKomunitas.index'));
        }

        Storage::delete("public/" . $galeriKomunitas->photo);

        $this->galeriKomunitasRepository->delete($id);

        Flash::success('Galeri Komunitas deleted successfully.');

        return redirect(route('galeriKomunitas.index'));
    }
}
