<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createprenda_tlRequest;
use App\Http\Requests\Updateprenda_tlRequest;
use App\Repositories\prenda_tlRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class prenda_tlController extends AppBaseController
{
    /** @var  prenda_tlRepository */
    private $prendaTlRepository;

    public function __construct(prenda_tlRepository $prendaTlRepo)
    {
        $this->prendaTlRepository = $prendaTlRepo;
    }

    /**
     * Display a listing of the prenda_tl.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prendaTls = $this->prendaTlRepository->paginate(10);

        return view('prenda_tls.index')
            ->with('prendaTls', $prendaTls);
    }

    /**
     * Show the form for creating a new prenda_tl.
     *
     * @return Response
     */
    public function create()
    {
        return view('prenda_tls.create');
    }

    /**
     * Store a newly created prenda_tl in storage.
     *
     * @param Createprenda_tlRequest $request
     *
     * @return Response
     */
    public function store(Createprenda_tlRequest $request)
    {
        $input = $request->all();

        $prendaTl = $this->prendaTlRepository->create($input);

        Flash::success('Prenda Tl saved successfully.');

        return redirect(route('prendaTls.index'));
    }

    /**
     * Display the specified prenda_tl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prendaTl = $this->prendaTlRepository->find($id);

        if (empty($prendaTl)) {
            Flash::error('Prenda Tl not found');

            return redirect(route('prendaTls.index'));
        }

        return view('prenda_tls.show')->with('prendaTl', $prendaTl);
    }

    /**
     * Show the form for editing the specified prenda_tl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prendaTl = $this->prendaTlRepository->find($id);

        if (empty($prendaTl)) {
            Flash::error('Prenda Tl not found');

            return redirect(route('prendaTls.index'));
        }

        return view('prenda_tls.edit')->with('prendaTl', $prendaTl);
    }

    /**
     * Update the specified prenda_tl in storage.
     *
     * @param int $id
     * @param Updateprenda_tlRequest $request
     *
     * @return Response
     */
    public function update($id, Updateprenda_tlRequest $request)
    {
        $prendaTl = $this->prendaTlRepository->find($id);

        if (empty($prendaTl)) {
            Flash::error('Prenda Tl not found');

            return redirect(route('prendaTls.index'));
        }

        $prendaTl = $this->prendaTlRepository->update($request->all(), $id);

        Flash::success('Prenda Tl updated successfully.');

        return redirect(route('prendaTls.index'));
    }

    /**
     * Remove the specified prenda_tl from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prendaTl = $this->prendaTlRepository->find($id);

        if (empty($prendaTl)) {
            Flash::error('Prenda Tl not found');

            return redirect(route('prendaTls.index'));
        }

        $this->prendaTlRepository->delete($id);

        Flash::success('Prenda Tl deleted successfully.');

        return redirect(route('prendaTls.index'));
    }
}
