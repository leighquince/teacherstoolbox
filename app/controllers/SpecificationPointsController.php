<?php

class SpecificationPointsController extends BaseController {

    /**
     * Specificationpoint Repository
     *
     * @var Specificationpoint
     */
    protected $specificationpoint;

    public function __construct(Specificationpoint $specificationpoint)
    {
        $this->specificationpoint = $specificationpoint;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $specificationpoints = $this->specificationpoint->all();

        return View::make('specificationpoints.index', compact('specificationpoints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('specificationpoints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Specificationpoint::$rules);

        if ($validation->passes())
        {
            $this->specificationpoint->create($input);

            return Redirect::route('specificationpoints.index');
        }

        return Redirect::route('specificationpoints.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $specificationpoint = $this->specificationpoint->findOrFail($id);

        return View::make('specificationpoints.show', compact('specificationpoint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $specificationpoint = $this->specificationpoint->find($id);

        if (is_null($specificationpoint))
        {
            return Redirect::route('specificationpoints.index');
        }

        return View::make('specificationpoints.edit', compact('specificationpoint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Specificationpoint::$rules);

        if ($validation->passes())
        {
            $specificationpoint = $this->specificationpoint->find($id);
            $specificationpoint->update($input);

            return Redirect::route('specificationpoints.show', $id);
        }

        return Redirect::route('specificationpoints.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->specificationpoint->find($id)->delete();

        return Redirect::route('specificationpoints.index');
    }

}