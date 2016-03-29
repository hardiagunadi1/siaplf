<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePersyaratanRequest;
use App\Http\Requests\UpdatePersyaratanRequest;
use App\Repositories\PersyaratanRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PersyaratanController extends AppBaseController
{
    /** @var  PersyaratanRepository */
    private $persyaratanRepository;

    public function __construct(PersyaratanRepository $persyaratanRepo)
    {
        $this->persyaratanRepository = $persyaratanRepo;

       /*    $this->middleware('auth'); */
    }

    /**
     * Display a listing of the Persyaratan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->persyaratanRepository->pushCriteria(new RequestCriteria($request));
        $persyaratans = $this->persyaratanRepository->all();

        return view('persyaratans.index')
            ->with('persyaratans', $persyaratans);
    }

    /**
     * Show the form for creating a new Persyaratan.
     *
     * @return Response
     */
    public function create()
    {
        return view('persyaratans.create');
    }

    /**
     * Store a newly created Persyaratan in storage.
     *
     * @param CreatePersyaratanRequest $request
     *
     * @return Response
     */
    public function store(CreatePersyaratanRequest $request)
    {
        $input = $request->all();

        $persyaratan = $this->persyaratanRepository->create($input);

        Flash::success('Persyaratan saved successfully.');

        return redirect(route('persyaratan.index'));
    }

    /**
     * Display the specified Persyaratan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($persyaratan_id)
    {
        $persyaratan = $this->persyaratanRepository->findWithoutFail($persyaratan_id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratan.index'));
        }

        return view('persyaratans.show')->with('persyaratan', $persyaratan);
    }

    /**
     * Show the form for editing the specified Persyaratan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($persyaratan_id)
    {
        $persyaratan = $this->persyaratanRepository->findWithoutFail($persyaratan_id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratan.index'));
        }

        return view('persyaratans.edit')->with('persyaratan', $persyaratan);
    }

    /**
     * Update the specified Persyaratan in storage.
     *
     * @param  int              $id
     * @param UpdatePersyaratanRequest $request
     *
     * @return Response
     */
    public function update($persyaratan_id, UpdatePersyaratanRequest $request)
    {
        $persyaratan = $this->persyaratanRepository->findWithoutFail($persyaratan_id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratan.index'));
        }

        $persyaratan = $this->persyaratanRepository->update($request->all(), $persyaratan_id);

        Flash::success('Persyaratan updated successfully.');

        return redirect(route('persyaratan.index'));
    }

    /**
     * Remove the specified Persyaratan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($persyaratan_id)
    {
        $persyaratan = $this->persyaratanRepository->findWithoutFail($persyaratan_id);

        if (empty($persyaratan)) {
            Flash::error('Persyaratan not found');

            return redirect(route('persyaratan.index'));
        }

        $this->persyaratanRepository->delete($persyaratan_id);

        Flash::success('Persyaratan deleted successfully.');

        return redirect(route('persyaratan.index'));
    }
}
