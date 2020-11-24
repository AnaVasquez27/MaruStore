<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtallas_en_numerosRequest;
use App\Http\Requests\Updatetallas_en_numerosRequest;
use App\Repositories\tallas_en_numerosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tallas_en_numerosController extends AppBaseController
{
    /** @var  tallas_en_numerosRepository */
    private $tallasEnNumerosRepository;

    public function __construct(tallas_en_numerosRepository $tallasEnNumerosRepo)
    {
        $this->tallasEnNumerosRepository = $tallasEnNumerosRepo;
    }

    /**
     * Display a listing of the tallas_en_numeros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tallasEnNumeros = $this->tallasEnNumerosRepository->paginate(10);

        return view('tallas_en_numeros.index')
            ->with('tallasEnNumeros', $tallasEnNumeros);
    }

    /**
     * Show the form for creating a new tallas_en_numeros.
     *
     * @return Response
     */
    public function create()
    {
        return view('tallas_en_numeros.create');
    }

    /**
     * Store a newly created tallas_en_numeros in storage.
     *
     * @param Createtallas_en_numerosRequest $request
     *
     * @return Response
     */
    public function store(Createtallas_en_numerosRequest $request)
    {
        $input = $request->all();

        $tallasEnNumeros = $this->tallasEnNumerosRepository->create($input);

        Flash::success('Tallas En Numeros saved successfully.');

        return redirect(route('tallasEnNumeros.index'));
    }

    /**
     * Display the specified tallas_en_numeros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tallasEnNumeros = $this->tallasEnNumerosRepository->find($id);

        if (empty($tallasEnNumeros)) {
            Flash::error('Tallas En Numeros not found');

            return redirect(route('tallasEnNumeros.index'));
        }

        return view('tallas_en_numeros.show')->with('tallasEnNumeros', $tallasEnNumeros);
    }

    /**
     * Show the form for editing the specified tallas_en_numeros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tallasEnNumeros = $this->tallasEnNumerosRepository->find($id);

        if (empty($tallasEnNumeros)) {
            Flash::error('Tallas En Numeros not found');

            return redirect(route('tallasEnNumeros.index'));
        }

        return view('tallas_en_numeros.edit')->with('tallasEnNumeros', $tallasEnNumeros);
    }

    /**
     * Update the specified tallas_en_numeros in storage.
     *
     * @param int $id
     * @param Updatetallas_en_numerosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetallas_en_numerosRequest $request)
    {
        $tallasEnNumeros = $this->tallasEnNumerosRepository->find($id);

        if (empty($tallasEnNumeros)) {
            Flash::error('Tallas En Numeros not found');

            return redirect(route('tallasEnNumeros.index'));
        }

        $tallasEnNumeros = $this->tallasEnNumerosRepository->update($request->all(), $id);

        Flash::success('Tallas En Numeros updated successfully.');

        return redirect(route('tallasEnNumeros.index'));
    }

    /**
     * Remove the specified tallas_en_numeros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tallasEnNumeros = $this->tallasEnNumerosRepository->find($id);

        if (empty($tallasEnNumeros)) {
            Flash::error('Tallas En Numeros not found');

            return redirect(route('tallasEnNumeros.index'));
        }

        $this->tallasEnNumerosRepository->delete($id);

        Flash::success('Tallas En Numeros deleted successfully.');

        return redirect(route('tallasEnNumeros.index'));
    }
}
