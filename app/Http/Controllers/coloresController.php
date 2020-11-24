<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecoloresRequest;
use App\Http\Requests\UpdatecoloresRequest;
use App\Repositories\coloresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class coloresController extends AppBaseController
{
    /** @var  coloresRepository */
    private $coloresRepository;

    public function __construct(coloresRepository $coloresRepo)
    {
        $this->coloresRepository = $coloresRepo;
    }

    /**
     * Display a listing of the colores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $colores = $this->coloresRepository->paginate(10);

        return view('colores.index')
            ->with('colores', $colores);
    }

    /**
     * Show the form for creating a new colores.
     *
     * @return Response
     */
    public function create()
    {
        return view('colores.create');
    }

    /**
     * Store a newly created colores in storage.
     *
     * @param CreatecoloresRequest $request
     *
     * @return Response
     */
    public function store(CreatecoloresRequest $request)
    {
        $input = $request->all();

        $colores = $this->coloresRepository->create($input);

        Flash::success('Colores saved successfully.');

        return redirect(route('colores.index'));
    }

    /**
     * Display the specified colores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $colores = $this->coloresRepository->find($id);

        if (empty($colores)) {
            Flash::error('Colores not found');

            return redirect(route('colores.index'));
        }

        return view('colores.show')->with('colores', $colores);
    }

    /**
     * Show the form for editing the specified colores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $colores = $this->coloresRepository->find($id);

        if (empty($colores)) {
            Flash::error('Colores not found');

            return redirect(route('colores.index'));
        }

        return view('colores.edit')->with('colores', $colores);
    }

    /**
     * Update the specified colores in storage.
     *
     * @param int $id
     * @param UpdatecoloresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecoloresRequest $request)
    {
        $colores = $this->coloresRepository->find($id);

        if (empty($colores)) {
            Flash::error('Colores not found');

            return redirect(route('colores.index'));
        }

        $colores = $this->coloresRepository->update($request->all(), $id);

        Flash::success('Colores updated successfully.');

        return redirect(route('colores.index'));
    }

    /**
     * Remove the specified colores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $colores = $this->coloresRepository->find($id);

        if (empty($colores)) {
            Flash::error('Colores not found');

            return redirect(route('colores.index'));
        }

        $this->coloresRepository->delete($id);

        Flash::success('Colores deleted successfully.');

        return redirect(route('colores.index'));
    }
}
