<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Repositories\MahasiswaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MahasiswaController extends AppBaseController
{
    /** @var  MahasiswaRepository */
    private $mahasiswaRepository;


    public function __construct(MahasiswaRepository $mahasiswaRepo)
    {
        $this->mahasiswaRepository = $mahasiswaRepo;

        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the Mahasiswa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mahasiswaRepository->pushCriteria(new RequestCriteria($request));
        $mahasiswas = $this->mahasiswaRepository->all();

        return view('mahasiswas.index')
            ->with('mahasiswas', $mahasiswas);
    }

    /**
     * Show the form for creating a new Mahasiswa.
     *
     * @return Response
     */
    public function create()
    {
        $jurusan = \DB::table('tbl_jurusan')->orderBy('jurusan_id')->lists('nama_jurusan', 'jurusan_id');
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created Mahasiswa in storage.
     *
     * @param CreateMahasiswaRequest $request
     *
     * @return Response
     */
    public function store(CreateMahasiswaRequest $request)
    {
        $input = $request->all();

        $mahasiswa = $this->mahasiswaRepository->create($input);

        Flash::success('Mahasiswa saved successfully.');

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Display the specified Mahasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($mahasiswa_id)
    {
        $mahasiswa = $this->mahasiswaRepository->findWithoutFail($mahasiswa_id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswa.index'));
        }

        return view('mahasiswas.show')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for editing the specified Mahasiswa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($mahasiswa_id)
    {
        $mahasiswa = $this->mahasiswaRepository->findWithoutFail($mahasiswa_id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswa.index'));
        }

        return view('mahasiswas.edit')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the specified Mahasiswa in storage.
     *
     * @param  int              $id
     * @param UpdateMahasiswaRequest $request
     *
     * @return Response
     */
    public function update($mahasiswa_id, UpdateMahasiswaRequest $request)
    {
        $mahasiswa = $this->mahasiswaRepository->findWithoutFail($mahasiswa_id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswa.index'));
        }

        $mahasiswa = $this->mahasiswaRepository->update($request->all(), $mahasiswa_id);

        Flash::success('Mahasiswa updated successfully.');

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified Mahasiswa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($mahasiswa_id)
    {
        $mahasiswa = $this->mahasiswaRepository->findWithoutFail($mahasiswa_id);

        if (empty($mahasiswa)) {
            Flash::error('Mahasiswa not found');

            return redirect(route('mahasiswa.index'));
        }

        $this->mahasiswaRepository->delete($mahasiswa_id);

        Flash::success('Mahasiswa deleted successfully.');

        return redirect(route('mahasiswa.index'));
    }
}
