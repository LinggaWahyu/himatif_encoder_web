<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\KomunitasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKomunitasRequest;
use App\Http\Requests\UpdateKomunitasRequest;
use App\Repositories\KomunitasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class KomunitasController extends AppBaseController
{
    /** @var  KomunitasRepository */
    private $komunitasRepository;

    public function __construct(KomunitasRepository $komunitasRepo)
    {
        $this->komunitasRepository = $komunitasRepo;
    }

    /**
     * Display a listing of the Komunitas.
     *
     * @param KomunitasDataTable $komunitasDataTable
     * @return Response
     */
    public function index(KomunitasDataTable $komunitasDataTable)
    {
        return $komunitasDataTable->render('komunitas.index');
    }

    /**
     * Show the form for creating a new Komunitas.
     *
     * @return Response
     */
    public function create()
    {
        return view('komunitas.create');
    }

    /**
     * Store a newly created Komunitas in storage.
     *
     * @param CreateKomunitasRequest $request
     *
     * @return Response
     */
    public function store(CreateKomunitasRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('komunitas', 'public');
            $input['image'] = $path;
        }

        $komunitas = $this->komunitasRepository->create($input);

        Flash::success('Komunitas saved successfully.');

        return redirect(route('komunitas.index'));
    }

    /**
     * Display the specified Komunitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $komunitas = $this->komunitasRepository->find($id);

        if (empty($komunitas)) {
            Flash::error('Komunitas not found');

            return redirect(route('komunitas.index'));
        }

        return view('komunitas.show')->with('komunitas', $komunitas);
    }

    /**
     * Show the form for editing the specified Komunitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $komunitas = $this->komunitasRepository->find($id);

        if (empty($komunitas)) {
            Flash::error('Komunitas not found');

            return redirect(route('komunitas.index'));
        }

        return view('komunitas.edit')->with('komunitas', $komunitas);
    }

    /**
     * Update the specified Komunitas in storage.
     *
     * @param int $id
     * @param UpdateKomunitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKomunitasRequest $request)
    {
        $komunitas = $this->komunitasRepository->find($id);
        $input = $request->all();
        if (empty($komunitas)) {
            Flash::error('Komunitas not found');

            return redirect(route('komunitas.index'));
        }

        if ($request->hasFile('image')) {
            Storage::delete("public/" . $komunitas->image);

            $path = $request->file('image')->store('komunitas', 'public');
            $input['image'] = $path;
        }

        $komunitas = $this->komunitasRepository->update($input, $id);

        Flash::success('Komunitas updated successfully.');

        return redirect(route('komunitas.index'));
    }

    /**
     * Remove the specified Komunitas from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $komunitas = $this->komunitasRepository->find($id);

        if (empty($komunitas)) {
            Flash::error('Komunitas not found');

            return redirect(route('komunitas.index'));
        }

        Storage::delete("public/" . $komunitas->image);

        $this->komunitasRepository->delete($id);

        Flash::success('Komunitas deleted successfully.');

        return redirect(route('komunitas.index'));
    }
}
