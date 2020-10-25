<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DivisiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDivisiRequest;
use App\Http\Requests\UpdateDivisiRequest;
use App\Repositories\DivisiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class DivisiController extends AppBaseController
{
    /** @var  DivisiRepository */
    private $divisiRepository;

    public function __construct(DivisiRepository $divisiRepo)
    {
        $this->divisiRepository = $divisiRepo;
    }

    /**
     * Display a listing of the Divisi.
     *
     * @param DivisiDataTable $divisiDataTable
     * @return Response
     */
    public function index(DivisiDataTable $divisiDataTable)
    {
        return $divisiDataTable->render('divisis.index');
    }

    /**
     * Show the form for creating a new Divisi.
     *
     * @return Response
     */
    public function create()
    {
        return view('divisis.create');
    }

    /**
     * Store a newly created Divisi in storage.
     *
     * @param CreateDivisiRequest $request
     *
     * @return Response
     */
    public function store(CreateDivisiRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('divisi', 'public');
            $input['photo'] = $path;
        }

        $divisi = $this->divisiRepository->create($input);

        Flash::success('Divisi saved successfully.');

        return redirect(route('divisis.index'));
    }

    /**
     * Display the specified Divisi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $divisi = $this->divisiRepository->find($id);

        if (empty($divisi)) {
            Flash::error('Divisi not found');

            return redirect(route('divisis.index'));
        }

        return view('divisis.show')->with('divisi', $divisi);
    }

    /**
     * Show the form for editing the specified Divisi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $divisi = $this->divisiRepository->find($id);

        if (empty($divisi)) {
            Flash::error('Divisi not found');

            return redirect(route('divisis.index'));
        }

        return view('divisis.edit')->with('divisi', $divisi);
    }

    /**
     * Update the specified Divisi in storage.
     *
     * @param int $id
     * @param UpdateDivisiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDivisiRequest $request)
    {
        $divisi = $this->divisiRepository->find($id);
        $input = $request->all();
        if (empty($divisi)) {
            Flash::error('Divisi not found');

            return redirect(route('divisis.index'));
        }

        if ($request->hasFile('photo')) {
            Storage::delete("public/".$divisi->photo);

            $path = $request->file('photo')->store('divisi', 'public');
            $input['photo'] = $path;
        }

        $divisi = $this->divisiRepository->update($input, $id);

        Flash::success('Divisi updated successfully.');

        return redirect(route('divisis.index'));
    }

    /**
     * Remove the specified Divisi from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $divisi = $this->divisiRepository->find($id);

        if (empty($divisi)) {
            Flash::error('Divisi not found');

            return redirect(route('divisis.index'));
        }

        Storage::delete("public/".$divisi->photo);

        $this->divisiRepository->delete($id);

        Flash::success('Divisi deleted successfully.');

        return redirect(route('divisis.index'));
    }
}
