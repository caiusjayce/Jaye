<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMPLteamsRequest;
use App\Http\Requests\UpdateMPLteamsRequest;
use App\Repositories\MPLteamsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MPLteamsController extends AppBaseController
{
    /** @var  MPLteamsRepository */
    private $mPLteamsRepository;

    public function __construct(MPLteamsRepository $mPLteamsRepo)
    {
        $this->mPLteamsRepository = $mPLteamsRepo;
    }

    /**
     * Display a listing of the MPLteams.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mPLteams = $this->mPLteamsRepository->all();

        return view('m_p_lteams.index')
            ->with('mPLteams', $mPLteams);
    }

    /**
     * Show the form for creating a new MPLteams.
     *
     * @return Response
     */
    public function create()
    {
        return view('m_p_lteams.create');
    }

    /**
     * Store a newly created MPLteams in storage.
     *
     * @param CreateMPLteamsRequest $request
     *
     * @return Response
     */
    public function store(CreateMPLteamsRequest $request)
    {
        $input = $request->all();

        $mPLteams = $this->mPLteamsRepository->create($input);

        Flash::success('M P Lteams saved successfully.');

        return redirect(route('mPLteams.index'));
    }

    /**
     * Display the specified MPLteams.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mPLteams = $this->mPLteamsRepository->find($id);

        if (empty($mPLteams)) {
            Flash::error('M P Lteams not found');

            return redirect(route('mPLteams.index'));
        }

        return view('m_p_lteams.show')->with('mPLteams', $mPLteams);
    }

    /**
     * Show the form for editing the specified MPLteams.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mPLteams = $this->mPLteamsRepository->find($id);

        if (empty($mPLteams)) {
            Flash::error('M P Lteams not found');

            return redirect(route('mPLteams.index'));
        }

        return view('m_p_lteams.edit')->with('mPLteams', $mPLteams);
    }

    /**
     * Update the specified MPLteams in storage.
     *
     * @param int $id
     * @param UpdateMPLteamsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMPLteamsRequest $request)
    {
        $mPLteams = $this->mPLteamsRepository->find($id);

        if (empty($mPLteams)) {
            Flash::error('M P Lteams not found');

            return redirect(route('mPLteams.index'));
        }

        $mPLteams = $this->mPLteamsRepository->update($request->all(), $id);

        Flash::success('M P Lteams updated successfully.');

        return redirect(route('mPLteams.index'));
    }

    /**
     * Remove the specified MPLteams from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mPLteams = $this->mPLteamsRepository->find($id);

        if (empty($mPLteams)) {
            Flash::error('M P Lteams not found');

            return redirect(route('mPLteams.index'));
        }

        $this->mPLteamsRepository->delete($id);

        Flash::success('M P Lteams deleted successfully.');

        return redirect(route('mPLteams.index'));
    }
}
