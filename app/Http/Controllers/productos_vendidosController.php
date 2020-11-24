<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createproductos_vendidosRequest;
use App\Http\Requests\Updateproductos_vendidosRequest;
use App\Repositories\productos_vendidosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class productos_vendidosController extends AppBaseController
{
    /** @var  productos_vendidosRepository */
    private $productosVendidosRepository;

    public function __construct(productos_vendidosRepository $productosVendidosRepo)
    {
        $this->productosVendidosRepository = $productosVendidosRepo;
    }

    /**
     * Display a listing of the productos_vendidos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productosVendidos = $this->productosVendidosRepository->paginate(10);

        return view('productos_vendidos.index')
            ->with('productosVendidos', $productosVendidos);
    }

    /**
     * Show the form for creating a new productos_vendidos.
     *
     * @return Response
     */
    public function create()
    {
        return view('productos_vendidos.create');
    }

    /**
     * Store a newly created productos_vendidos in storage.
     *
     * @param Createproductos_vendidosRequest $request
     *
     * @return Response
     */
    public function store(Createproductos_vendidosRequest $request)
    {
        $input = $request->all();

        $productosVendidos = $this->productosVendidosRepository->create($input);

        Flash::success('Productos Vendidos saved successfully.');

        return redirect(route('productosVendidos.index'));
    }

    /**
     * Display the specified productos_vendidos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productosVendidos = $this->productosVendidosRepository->find($id);

        if (empty($productosVendidos)) {
            Flash::error('Productos Vendidos not found');

            return redirect(route('productosVendidos.index'));
        }

        return view('productos_vendidos.show')->with('productosVendidos', $productosVendidos);
    }

    /**
     * Show the form for editing the specified productos_vendidos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productosVendidos = $this->productosVendidosRepository->find($id);

        if (empty($productosVendidos)) {
            Flash::error('Productos Vendidos not found');

            return redirect(route('productosVendidos.index'));
        }

        return view('productos_vendidos.edit')->with('productosVendidos', $productosVendidos);
    }

    /**
     * Update the specified productos_vendidos in storage.
     *
     * @param int $id
     * @param Updateproductos_vendidosRequest $request
     *
     * @return Response
     */
    public function update($id, Updateproductos_vendidosRequest $request)
    {
        $productosVendidos = $this->productosVendidosRepository->find($id);

        if (empty($productosVendidos)) {
            Flash::error('Productos Vendidos not found');

            return redirect(route('productosVendidos.index'));
        }

        $productosVendidos = $this->productosVendidosRepository->update($request->all(), $id);

        Flash::success('Productos Vendidos updated successfully.');

        return redirect(route('productosVendidos.index'));
    }

    /**
     * Remove the specified productos_vendidos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productosVendidos = $this->productosVendidosRepository->find($id);

        if (empty($productosVendidos)) {
            Flash::error('Productos Vendidos not found');

            return redirect(route('productosVendidos.index'));
        }

        $this->productosVendidosRepository->delete($id);

        Flash::success('Productos Vendidos deleted successfully.');

        return redirect(route('productosVendidos.index'));
    }
}
