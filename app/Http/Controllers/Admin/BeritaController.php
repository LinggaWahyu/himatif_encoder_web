<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BeritaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\CategoryBerita;
use App\Repositories\BeritaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class BeritaController extends AppBaseController
{
    /** @var  BeritaRepository */
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param BeritaDataTable $beritaDataTable
     * @return Response
     */
    public function index(BeritaDataTable $beritaDataTable)
    {
        return $beritaDataTable->render('beritas.index');
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        $category_berita = CategoryBerita::select('id', 'name')->pluck('name', 'id');
        return view('beritas.create', compact('category_berita'));
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('berita', 'public');
            $input['thumbnail'] = $path;
        }

        $berita = $this->beritaRepository->create($input);

        Flash::success('Berita saved successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $berita = $this->beritaRepository->find($id);
        $category_berita = CategoryBerita::select('id', 'name')->pluck('name', 'id');

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.edit')->with(['berita' => $berita, 'category_berita' => $category_berita]);
    }

    /**
     * Update the specified Berita in storage.
     *
     * @param int $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->find($id);
        $input = $request->all();

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        if ($request->hasFile('thumbnail')) {
            Storage::delete("public/" . $berita->thumbnail);

            $path = $request->file('thumbnail')->store('berita', 'public');
            $input['thumbnail'] = $path;
        }

        $berita = $this->beritaRepository->update($input, $id);

        Flash::success('Berita updated successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        Storage::delete("public/" . $berita->thumbnail);

        $this->beritaRepository->delete($id);

        Flash::success('Berita deleted successfully.');

        return redirect(route('beritas.index'));
    }
}
