<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use Illuminate\Http\Request;

/**
 * Class EstanteController
 * @package App\Http\Controllers
 */
class EstanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estantes = Estante::paginate();

        return view('estante.index', compact('estantes'))
            ->with('i', (request()->input('page', 1) - 1) * $estantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estante = new Estante();
        return view('estante.create', compact('estante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estante::$rules);

        $estante = Estante::create($request->all());

        return redirect()->route('estantes.index')
            ->with('success', 'Estante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estante = Estante::find($id);

        return view('estante.show', compact('estante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estante = Estante::find($id);

        return view('estante.edit', compact('estante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estante $estante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estante $estante)
    {
        request()->validate(Estante::$rules);

        $estante->update($request->all());

        return redirect()->route('estantes.index')
            ->with('success', 'Estante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estante = Estante::find($id)->delete();

        return redirect()->route('estantes.index')
            ->with('success', 'Estante deleted successfully');
    }
}
