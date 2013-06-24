<?php

class SpecificationsController extends BaseController {

    /**
     * Specification Repository
     *
     * @var Specification
     */
    protected $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $specifications = $this->specification->all();

        return View::make('specifications.index', compact('specifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('specifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Specification::$rules);

        if ($validation->passes())
        {
            $this->specification->create($input);

            return Redirect::route('specifications.index');
        }

        return Redirect::route('specifications.create')
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
        $specification = $this->specification->findOrFail($id);

        return View::make('specifications.show', compact('specification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $specification = $this->specification->find($id);

        if (is_null($specification))
        {
            return Redirect::route('specifications.index');
        }

        return View::make('specifications.edit', compact('specification'));
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
        $validation = Validator::make($input, Specification::$rules);

        if ($validation->passes())
        {
            $specification = $this->specification->find($id);
            $specification->update($input);

            return Redirect::route('specifications.show', $id);
        }

        return Redirect::route('specifications.edit', $id)
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
        $this->specification->find($id)->delete();

        return Redirect::route('specifications.index');
    }

}