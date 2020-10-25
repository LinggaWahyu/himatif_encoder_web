<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryBeritaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCategoryBeritaRequest;
use App\Http\Requests\UpdateCategoryBeritaRequest;
use App\Repositories\CategoryBeritaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CategoryBeritaController extends AppBaseController
{
    /** @var  CategoryBeritaRepository */
    private $categoryBeritaRepository;

    public function __construct(CategoryBeritaRepository $categoryBeritaRepo)
    {
        $this->categoryBeritaRepository = $categoryBeritaRepo;
    }

    /**
     * Display a listing of the CategoryBerita.
     *
     * @param CategoryBeritaDataTable $categoryBeritaDataTable
     * @return Response
     */
    public function index(CategoryBeritaDataTable $categoryBeritaDataTable)
    {
        return $categoryBeritaDataTable->render('category_beritas.index');
    }

    /**
     * Show the form for creating a new CategoryBerita.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_beritas.create');
    }

    /**
     * Store a newly created CategoryBerita in storage.
     *
     * @param CreateCategoryBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryBeritaRequest $request)
    {
        $input = $request->all();

        $categoryBerita = $this->categoryBeritaRepository->create($input);

        Flash::success('Category Berita saved successfully.');

        return redirect(route('categoryBeritas.index'));
    }

    /**
     * Display the specified CategoryBerita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoryBerita = $this->categoryBeritaRepository->find($id);

        if (empty($categoryBerita)) {
            Flash::error('Category Berita not found');

            return redirect(route('categoryBeritas.index'));
        }

        return view('category_beritas.show')->with('categoryBerita', $categoryBerita);
    }

    /**
     * Show the form for editing the specified CategoryBerita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoryBerita = $this->categoryBeritaRepository->find($id);

        if (empty($categoryBerita)) {
            Flash::error('Category Berita not found');

            return redirect(route('categoryBeritas.index'));
        }

        return view('category_beritas.edit')->with('categoryBerita', $categoryBerita);
    }

    /**
     * Update the specified CategoryBerita in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryBeritaRequest $request)
    {
        $categoryBerita = $this->categoryBeritaRepository->find($id);

        if (empty($categoryBerita)) {
            Flash::error('Category Berita not found');

            return redirect(route('categoryBeritas.index'));
        }

        $categoryBerita = $this->categoryBeritaRepository->update($request->all(), $id);

        Flash::success('Category Berita updated successfully.');

        return redirect(route('categoryBeritas.index'));
    }

    /**
     * Remove the specified CategoryBerita from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoryBerita = $this->categoryBeritaRepository->find($id);

        if (empty($categoryBerita)) {
            Flash::error('Category Berita not found');

            return redirect(route('categoryBeritas.index'));
        }

        $this->categoryBeritaRepository->delete($id);

        Flash::success('Category Berita deleted successfully.');

        return redirect(route('categoryBeritas.index'));
    }
}
