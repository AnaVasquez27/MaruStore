<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipos_de_prendasRequest;
use App\Http\Requests\UpdateTipos_de_prendasRequest;
use App\Repositories\Tipos_de_prendasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipos_de_prendasController extends AppBaseController
{
    /** @var  Tipos_de_prendasRepository */
    private $tiposDePrendasRepository;

    public function __construct(Tipos_de_prendasRepository $tiposDePrendasRepo)
    {
        $this->tiposDePrendasRepository = $tiposDePrendasRepo;
    }

    /**
     * Display a listing of the Tipos_de_prendas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tiposDePrendas = $this->tiposDePrendasRepository->paginate(10);

        return view('tipos_de_prendas.index')
            ->with('tiposDePrendas', $tiposDePrendas);
    }

    /**
     * Show the form for creating a new Tipos_de_prendas.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipos_de_prendas.create');
    }

    /**
     * Store a newly created Tipos_de_prendas in storage.
     *
     * @param CreateTipos_de_prendasRequest $request
     *
     * @return Response
     */
    public function store(CreateTipos_de_prendasRequest $request)
    {
        $input = $request->all();

        $tiposDePrendas = $this->tiposDePrendasRepository->create($input);

        Flash::success('Tipos De Prendas saved successfully.');

        return redirect(route('tiposDePrendas.index'));
    }

    /**
     * Display the specified Tipos_de_prendas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tiposDePrendas = $this->tiposDePrendasRepository->find($id);

        if (empty($tiposDePrendas)) {
            Flash::error('Tipos De Prendas not found');

            return redirect(route('tiposDePrendas.index'));
        }

        return view('tipos_de_prendas.show')->with('tiposDePrendas', $tiposDePrendas);
    }

    /**
     * Show the form for editing the specified Tipos_de_prendas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tiposDePrendas = $this->tiposDePrendasRepository->find($id);

        if (empty($tiposDePrendas)) {
            Flash::error('Tipos De Prendas not found');

            return redirect(route('tiposDePrendas.index'));
        }

        return view('tipos_de_prendas.edit')->with('tiposDePrendas', $tiposDePrendas);
    }

    /**
     * Update the specified Tipos_de_prendas in storage.
     *
     * @param int $id
     * @param UpdateTipos_de_prendasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipos_de_prendasRequest $request)
    {
        $tiposDePrendas = $this->tiposDePrendasRepository->find($id);

        if (empty($tiposDePrendas)) {
            Flash::error('Tipos De Prendas not found');

            return redirect(route('tiposDePrendas.index'));
        }

        $tiposDePrendas = $this->tiposDePrendasRepository->update($request->all(), $id);

        Flash::success('Tipos De Prendas updated successfully.');

        return redirect(route('tiposDePrendas.index'));
    }

    /**
     * Remove the specified Tipos_de_prendas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tiposDePrendas = $this->tiposDePrendasRepository->find($id);

        if (empty($tiposDePrendas)) {
            Flash::error('Tipos De Prendas not found');

            return redirect(route('tiposDePrendas.index'));
        }

        $this->tiposDePrendasRepository->delete($id);

        Flash::success('Tipos De Prendas deleted successfully.');

        return redirect(route('tiposDePrendas.index'));
    }
}
