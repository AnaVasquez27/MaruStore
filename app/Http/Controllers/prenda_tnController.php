<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createprenda_tnRequest;
use App\Http\Requests\Updateprenda_tnRequest;
use App\Repositories\prenda_tnRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class prenda_tnController extends AppBaseController
{
    /** @var  prenda_tnRepository */
    private $prendaTnRepository;

    public function __construct(prenda_tnRepository $prendaTnRepo)
    {
        $this->prendaTnRepository = $prendaTnRepo;
    }

    /**
     * Display a listing of the prenda_tn.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prendaTns = $this->prendaTnRepository->paginate(10);

        return view('prenda_tns.index')
            ->with('prendaTns', $prendaTns);
    }

    /**
     * Show the form for creating a new prenda_tn.
     *
     * @return Response
     */
    public function create()
    {
        return view('prenda_tns.create');
    }

    /**
     * Store a newly created prenda_tn in storage.
     *
     * @param Createprenda_tnRequest $request
     *
     * @return Response
     */
    public function store(Createprenda_tnRequest $request)
    {
        $input = $request->all();

        $prendaTn = $this->prendaTnRepository->create($input);

        Flash::success('Prenda Tn saved successfully.');

        return redirect(route('prendaTns.index'));
    }

    /**
     * Display the specified prenda_tn.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prendaTn = $this->prendaTnRepository->find($id);

        if (empty($prendaTn)) {
            Flash::error('Prenda Tn not found');

            return redirect(route('prendaTns.index'));
        }

        return view('prenda_tns.show')->with('prendaTn', $prendaTn);
    }

    /**
     * Show the form for editing the specified prenda_tn.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prendaTn = $this->prendaTnRepository->find($id);

        if (empty($prendaTn)) {
            Flash::error('Prenda Tn not found');

            return redirect(route('prendaTns.index'));
        }

        return view('prenda_tns.edit')->with('prendaTn', $prendaTn);
    }

    /**
     * Update the specified prenda_tn in storage.
     *
     * @param int $id
     * @param Updateprenda_tnRequest $request
     *
     * @return Response
     */
    public function update($id, Updateprenda_tnRequest $request)
    {
        $prendaTn = $this->prendaTnRepository->find($id);

        if (empty($prendaTn)) {
            Flash::error('Prenda Tn not found');

            return redirect(route('prendaTns.index'));
        }

        $prendaTn = $this->prendaTnRepository->update($request->all(), $id);

        Flash::success('Prenda Tn updated successfully.');

        return redirect(route('prendaTns.index'));
    }

    /**
     * Remove the specified prenda_tn from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prendaTn = $this->prendaTnRepository->find($id);

        if (empty($prendaTn)) {
            Flash::error('Prenda Tn not found');

            return redirect(route('prendaTns.index'));
        }

        $this->prendaTnRepository->delete($id);

        Flash::success('Prenda Tn deleted successfully.');

        return redirect(route('prendaTns.index'));
    }
}
