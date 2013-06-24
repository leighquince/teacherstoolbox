<?php

class UnitsController extends BaseController {

    /**
     * Unit Repository
     *
     * @var Unit
     */
    protected $unit;

    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $units = $this->unit->all();

        return View::make('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Unit::$rules);

        if ($validation->passes())
        {
            $this->unit->create($input);

            return Redirect::route('units.index');
        }

        return Redirect::route('units.create')
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
        $unit = $this->unit->findOrFail($id);

        return View::make('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $unit = $this->unit->find($id);

        if (is_null($unit))
        {
            return Redirect::route('units.index');
        }

        return View::make('units.edit', compact('unit'));
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
        $validation = Validator::make($input, Unit::$rules);

        if ($validation->passes())
        {
            $unit = $this->unit->find($id);
            $unit->update($input);

            return Redirect::route('units.show', $id);
        }

        return Redirect::route('units.edit', $id)
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
        $this->unit->find($id)->delete();

        return Redirect::route('units.index');
    }

}