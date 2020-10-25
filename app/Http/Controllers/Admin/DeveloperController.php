<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DeveloperDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDeveloperRequest;
use App\Http\Requests\UpdateDeveloperRequest;
use App\Repositories\DeveloperRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Response;

class DeveloperController extends AppBaseController
{
    /** @var  DeveloperRepository */
    private $developerRepository;

    public function __construct(DeveloperRepository $developerRepo)
    {
        $this->developerRepository = $developerRepo;
    }

    /**
     * Display a listing of the Developer.
     *
     * @param DeveloperDataTable $developerDataTable
     * @return Response
     */
    public function index(DeveloperDataTable $developerDataTable)
    {
        return $developerDataTable->render('developers.index');
    }

    /**
     * Show the form for creating a new Developer.
     *
     * @return Response
     */
    public function create()
    {
        return view('developers.create');
    }

    /**
     * Store a newly created Developer in storage.
     *
     * @param CreateDeveloperRequest $request
     *
     * @return Response
     */
    public function store(CreateDeveloperRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('developer', 'public');
            $input['photo'] = $path;
        }

        $developer = $this->developerRepository->create($input);

        Flash::success('Developer saved successfully.');

        return redirect(route('developers.index'));
    }

    /**
     * Display the specified Developer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $developer = $this->developerRepository->find($id);

        if (empty($developer)) {
            Flash::error('Developer not found');

            return redirect(route('developers.index'));
        }

        return view('developers.show')->with('developer', $developer);
    }

    /**
     * Show the form for editing the specified Developer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $developer = $this->developerRepository->find($id);

        if (empty($developer)) {
            Flash::error('Developer not found');

            return redirect(route('developers.index'));
        }

        return view('developers.edit')->with('developer', $developer);
    }

    /**
     * Update the specified Developer in storage.
     *
     * @param  int              $id
     * @param UpdateDeveloperRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeveloperRequest $request)
    {
        $developer = $this->developerRepository->find($id);
        $input = $request->all();
        if (empty($developer)) {
            Flash::error('Developer not found');

            return redirect(route('developers.index'));
        }

        if ($request->hasFile('photo')) {
            Storage::delete("public/" . $developer->photo);
            $path = $request->file('photo')->store('galeri_umum', 'public');
            $input['photo'] = $path;
        }

        $developer = $this->developerRepository->update($input, $id);

        Flash::success('Developer updated successfully.');

        return redirect(route('developers.index'));
    }

    /**
     * Remove the specified Developer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $developer = $this->developerRepository->find($id);

        if (empty($developer)) {
            Flash::error('Developer not found');

            return redirect(route('developers.index'));
        }

        Storage::delete("public/" . $developer->photo);

        $this->developerRepository->delete($id);

        Flash::success('Developer deleted successfully.');

        return redirect(route('developers.index'));
    }
}
