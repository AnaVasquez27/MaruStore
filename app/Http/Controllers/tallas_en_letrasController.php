<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtallas_en_letrasRequest;
use App\Http\Requests\Updatetallas_en_letrasRequest;
use App\Repositories\tallas_en_letrasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tallas_en_letrasController extends AppBaseController
{
    /** @var  tallas_en_letrasRepository */
    private $tallasEnLetrasRepository;

    public function __construct(tallas_en_letrasRepository $tallasEnLetrasRepo)
    {
        $this->tallasEnLetrasRepository = $tallasEnLetrasRepo;
    }

    /**
     * Display a listing of the tallas_en_letras.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tallasEnLetras = $this->tallasEnLetrasRepository->paginate(10);

        return view('tallas_en_letras.index')
            ->with('tallasEnLetras', $tallasEnLetras);
    }

    /**
     * Show the form for creating a new tallas_en_letras.
     *
     * @return Response
     */
    public function create()
    {
        return view('tallas_en_letras.create');
    }

    /**
     * Store a newly created tallas_en_letras in storage.
     *
     * @param Createtallas_en_letrasRequest $request
     *
     * @return Response
     */
    public function store(Createtallas_en_letrasRequest $request)
    {
        $input = $request->all();

        $tallasEnLetras = $this->tallasEnLetrasRepository->create($input);

        Flash::success('Tallas En Letras saved successfully.');

        return redirect(route('tallasEnLetras.index'));
    }

    /**
     * Display the specified tallas_en_letras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tallasEnLetras = $this->tallasEnLetrasRepository->find($id);

        if (empty($tallasEnLetras)) {
            Flash::error('Tallas En Letras not found');

            return redirect(route('tallasEnLetras.index'));
        }

        return view('tallas_en_letras.show')->with('tallasEnLetras', $tallasEnLetras);
    }

    /**
     * Show the form for editing the specified tallas_en_letras.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tallasEnLetras = $this->tallasEnLetrasRepository->find($id);

        if (empty($tallasEnLetras)) {
            Flash::error('Tallas En Letras not found');

            return redirect(route('tallasEnLetras.index'));
        }

        return view('tallas_en_letras.edit')->with('tallasEnLetras', $tallasEnLetras);
    }

    /**
     * Update the specified tallas_en_letras in storage.
     *
     * @param int $id
     * @param Updatetallas_en_letrasRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetallas_en_letrasRequest $request)
    {
        $tallasEnLetras = $this->tallasEnLetrasRepository->find($id);

        if (empty($tallasEnLetras)) {
            Flash::error('Tallas En Letras not found');

            return redirect(route('tallasEnLetras.index'));
        }

        $tallasEnLetras = $this->tallasEnLetrasRepository->update($request->all(), $id);

        Flash::success('Tallas En Letras updated successfully.');

        return redirect(route('tallasEnLetras.index'));
    }

    /**
     * Remove the specified tallas_en_letras from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tallasEnLetras = $this->tallasEnLetrasRepository->find($id);

        if (empty($tallasEnLetras)) {
            Flash::error('Tallas En Letras not found');

            return redirect(route('tallasEnLetras.index'));
        }

        $this->tallasEnLetrasRepository->delete($id);

        Flash::success('Tallas En Letras deleted successfully.');

        return redirect(route('tallasEnLetras.index'));
    }
}
