<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\JabatanPengurusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJabatanPengurusRequest;
use App\Http\Requests\UpdateJabatanPengurusRequest;
use App\Repositories\JabatanPengurusRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class JabatanPengurusController extends AppBaseController
{
    /** @var  JabatanPengurusRepository */
    private $jabatanPengurusRepository;

    public function __construct(JabatanPengurusRepository $jabatanPengurusRepo)
    {
        $this->jabatanPengurusRepository = $jabatanPengurusRepo;
    }

    /**
     * Display a listing of the JabatanPengurus.
     *
     * @param JabatanPengurusDataTable $jabatanPengurusDataTable
     * @return Response
     */
    public function index(JabatanPengurusDataTable $jabatanPengurusDataTable)
    {
        return $jabatanPengurusDataTable->render('jabatan_penguruses.index');
    }

    /**
     * Show the form for creating a new JabatanPengurus.
     *
     * @return Response
     */
    public function create()
    {
        return view('jabatan_penguruses.create');
    }

    /**
     * Store a newly created JabatanPengurus in storage.
     *
     * @param CreateJabatanPengurusRequest $request
     *
     * @return Response
     */
    public function store(CreateJabatanPengurusRequest $request)
    {
        $input = $request->all();

        $jabatanPengurus = $this->jabatanPengurusRepository->create($input);

        Flash::success('Jabatan Pengurus saved successfully.');

        return redirect(route('jabatanPenguruses.index'));
    }

    /**
     * Display the specified JabatanPengurus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jabatanPengurus = $this->jabatanPengurusRepository->find($id);

        if (empty($jabatanPengurus)) {
            Flash::error('Jabatan Pengurus not found');

            return redirect(route('jabatanPenguruses.index'));
        }

        return view('jabatan_penguruses.show')->with('jabatanPengurus', $jabatanPengurus);
    }

    /**
     * Show the form for editing the specified JabatanPengurus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jabatanPengurus = $this->jabatanPengurusRepository->find($id);

        if (empty($jabatanPengurus)) {
            Flash::error('Jabatan Pengurus not found');

            return redirect(route('jabatanPenguruses.index'));
        }

        return view('jabatan_penguruses.edit')->with('jabatanPengurus', $jabatanPengurus);
    }

    /**
     * Update the specified JabatanPengurus in storage.
     *
     * @param  int              $id
     * @param UpdateJabatanPengurusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJabatanPengurusRequest $request)
    {
        $jabatanPengurus = $this->jabatanPengurusRepository->find($id);

        if (empty($jabatanPengurus)) {
            Flash::error('Jabatan Pengurus not found');

            return redirect(route('jabatanPenguruses.index'));
        }

        $jabatanPengurus = $this->jabatanPengurusRepository->update($request->all(), $id);

        Flash::success('Jabatan Pengurus updated successfully.');

        return redirect(route('jabatanPenguruses.index'));
    }

    /**
     * Remove the specified JabatanPengurus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jabatanPengurus = $this->jabatanPengurusRepository->find($id);

        if (empty($jabatanPengurus)) {
            Flash::error('Jabatan Pengurus not found');

            return redirect(route('jabatanPenguruses.index'));
        }

        $this->jabatanPengurusRepository->delete($id);

        Flash::success('Jabatan Pengurus deleted successfully.');

        return redirect(route('jabatanPenguruses.index'));
    }
}
