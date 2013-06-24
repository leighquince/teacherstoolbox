<?php

class PapersController extends BaseController {

    /**
     * Paper Repository
     *
     * @var Paper
     */
    protected $paper;

    public function __construct(Paper $paper)
    {
        $this->paper = $paper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $papers = $this->paper->all();

        return View::make('papers.index', compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('papers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Paper::$rules);

        if ($validation->passes())
        {
            $this->paper->create($input);

            return Redirect::route('papers.index');
        }

        return Redirect::route('papers.create')
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
        $paper = $this->paper->findOrFail($id);

        return View::make('papers.show', compact('paper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $paper = $this->paper->find($id);

        if (is_null($paper))
        {
            return Redirect::route('papers.index');
        }

        return View::make('papers.edit', compact('paper'));
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
        $validation = Validator::make($input, Paper::$rules);

        if ($validation->passes())
        {
            $paper = $this->paper->find($id);
            $paper->update($input);

            return Redirect::route('papers.show', $id);
        }

        return Redirect::route('papers.edit', $id)
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
        $this->paper->find($id)->delete();

        return Redirect::route('papers.index');
    }

}