<?php

namespace App\Http\Controllers;

use App\Models\Reposicione;
use Illuminate\Http\Request;

/**
 * Class ReposicioneController
 * @package App\Http\Controllers
 */
class ReposicioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reposiciones = Reposicione::paginate();

        return view('reposicione.index', compact('reposiciones'))
            ->with('i', (request()->input('page', 1) - 1) * $reposiciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reposicione = new Reposicione();
        return view('reposicione.create', compact('reposicione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reposicione::$rules);

        $reposicione = Reposicione::create($request->all());

        return redirect()->route('reposiciones.index')
            ->with('success', 'Reposicione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reposicione = Reposicione::find($id);

        return view('reposicione.show', compact('reposicione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reposicione = Reposicione::find($id);

        return view('reposicione.edit', compact('reposicione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reposicione $reposicione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reposicione $reposicione)
    {
        request()->validate(Reposicione::$rules);

        $reposicione->update($request->all());

        return redirect()->route('reposiciones.index')
            ->with('success', 'Reposicione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reposicione = Reposicione::find($id)->delete();

        return redirect()->route('reposiciones.index')
            ->with('success', 'Reposicione deleted successfully');
    }
}
