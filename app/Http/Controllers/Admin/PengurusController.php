<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PengurusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePengurusRequest;
use App\Http\Requests\UpdatePengurusRequest;
use App\Models\Divisi;
use App\Models\JabatanPengurus;
use App\Repositories\PengurusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class PengurusController extends AppBaseController
{
    /** @var  PengurusRepository */
    private $pengurusRepository;

    public function __construct(PengurusRepository $pengurusRepo)
    {
        $this->pengurusRepository = $pengurusRepo;
    }

    /**
     * Display a listing of the Pengurus.
     *
     * @param PengurusDataTable $pengurusDataTable
     * @return Response
     */
    public function index(PengurusDataTable $pengurusDataTable)
    {
        return $pengurusDataTable->render('penguruses.index');
    }

    /**
     * Show the form for creating a new Pengurus.
     *
     * @return Response
     */
    public function create()
    {
        $jabatanPengurus = JabatanPengurus::select('id', 'nama')->pluck('nama', 'id');
        $divisi = Divisi::select('id', 'name')->pluck('name', 'id');
        return view('penguruses.create', compact('jabatanPengurus', 'divisi'));
    }

    /**
     * Store a newly created Pengurus in storage.
     *
     * @param CreatePengurusRequest $request
     *
     * @return Response
     */
    public function store(CreatePengurusRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('pengurus', 'public');
            $input['photo'] = $path;
        }

        $pengurus = $this->pengurusRepository->create($input);

        Flash::success('Pengurus saved successfully.');

        return redirect(route('penguruses.index'));
    }

    /**
     * Display the specified Pengurus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengurus = $this->pengurusRepository->find($id);

        if (empty($pengurus)) {
            Flash::error('Pengurus not found');

            return redirect(route('penguruses.index'));
        }

        return view('penguruses.show')->with('pengurus', $pengurus);
    }

    /**
     * Show the form for editing the specified Pengurus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengurus = $this->pengurusRepository->find($id);

        if (empty($pengurus)) {
            Flash::error('Pengurus not found');

            return redirect(route('penguruses.index'));
        }

        return view('penguruses.edit')->with('pengurus', $pengurus);
    }

    /**
     * Update the specified Pengurus in storage.
     *
     * @param  int              $id
     * @param UpdatePengurusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePengurusRequest $request)
    {
        $pengurus = $this->pengurusRepository->find($id);
        $input = $request->all();
        if (empty($pengurus)) {
            Flash::error('Pengurus not found');

            return redirect(route('penguruses.index'));
        }

        if ($request->hasFile('photo')) {
            Storage::delete("public/".$pengurus->photo);

            $path = $request->file('photo')->store('pengurus', 'public');
            $input['photo'] = $path;
        }

        $pengurus = $this->pengurusRepository->update($request->all(), $id);

        Flash::success('Pengurus updated successfully.');

        return redirect(route('penguruses.index'));
    }

    /**
     * Remove the specified Pengurus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengurus = $this->pengurusRepository->find($id);

        if (empty($pengurus)) {
            Flash::error('Pengurus not found');

            return redirect(route('penguruses.index'));
        }

        Storage::delete("public/".$pengurus->photo);

        $this->pengurusRepository->delete($id);

        Flash::success('Pengurus deleted successfully.');

        return redirect(route('penguruses.index'));
    }
}
