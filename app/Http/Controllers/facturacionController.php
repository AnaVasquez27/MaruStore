<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacturacionRequest;
use App\Http\Requests\UpdatefacturacionRequest;
use App\Repositories\facturacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use \App\Models\clientes;

class facturacionController extends AppBaseController
{
    /** @var  facturacionRepository */
    private $facturacionRepository;

    public function __construct(facturacionRepository $facturacionRepo)
    {
        $this->facturacionRepository = $facturacionRepo;
    }

    /**
     * Display a listing of the facturacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facturacions = $this->facturacionRepository->paginate(10);

        return view('facturacions.index')
            ->with('facturacions', $facturacions);
    }

    /**
     * Show the form for creating a new facturacion.
     *
     * @return Response
     */
    public function create()
    {
        $clientes = clientes::all()->pluck('nombre', 'id');
        /*dd($clientes);*/
        return view('facturacions.create')->with('clientes',$clientes);
    }

    /**
     * Store a newly created facturacion in storage.
     *
     * @param CreatefacturacionRequest $request
     *
     * @return Response
     */
    public function store(CreatefacturacionRequest $request)
    {
        $input = $request->all();

        $facturacion = $this->facturacionRepository->create($input);

        Flash::success('Facturacion saved successfully.');

        return redirect(route('facturacions.index'));
    }

    /**
     * Display the specified facturacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facturacion = $this->facturacionRepository->find($id);

        if (empty($facturacion)) {
            Flash::error('Facturacion not found');

            return redirect(route('facturacions.index'));
        }

        return view('facturacions.show')->with('facturacion', $facturacion);
    }

    /**
     * Show the form for editing the specified facturacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturacion = $this->facturacionRepository->find($id);

        if (empty($facturacion)) {
            Flash::error('Facturacion not found');

            return redirect(route('facturacions.index'));
        }

        return view('facturacions.edit')->with('facturacion', $facturacion);
    }

    /**
     * Update the specified facturacion in storage.
     *
     * @param int $id
     * @param UpdatefacturacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacturacionRequest $request)
    {
        $facturacion = $this->facturacionRepository->find($id);

        if (empty($facturacion)) {
            Flash::error('Facturacion not found');

            return redirect(route('facturacions.index'));
        }

        $facturacion = $this->facturacionRepository->update($request->all(), $id);

        Flash::success('Facturacion updated successfully.');

        return redirect(route('facturacions.index'));
    }

    /**
     * Remove the specified facturacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturacion = $this->facturacionRepository->find($id);

        if (empty($facturacion)) {
            Flash::error('Facturacion not found');

            return redirect(route('facturacions.index'));
        }

        $this->facturacionRepository->delete($id);

        Flash::success('Facturacion deleted successfully.');

        return redirect(route('facturacions.index'));
    }
}
