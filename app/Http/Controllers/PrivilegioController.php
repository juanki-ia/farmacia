<?php

namespace App\Http\Controllers;

use App\Models\Privilegio;
use Illuminate\Http\Request;

/**
 * Class PrivilegioController
 * @package App\Http\Controllers
 */
class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilegios = Privilegio::paginate();

        return view('privilegio.index', compact('privilegios'))
            ->with('i', (request()->input('page', 1) - 1) * $privilegios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $privilegio = new Privilegio();
        return view('privilegio.create', compact('privilegio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Privilegio::$rules);

        $privilegio = Privilegio::create($request->all());

        return redirect()->route('privilegios.index')
            ->with('success', 'Privilegio creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $privilegio = Privilegio::find($id);

        return view('privilegio.show', compact('privilegio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privilegio = Privilegio::find($id);

        return view('privilegio.edit', compact('privilegio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Privilegio $privilegio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privilegio $privilegio)
    {
        request()->validate(Privilegio::$rules);

        $privilegio->update($request->all());

        return redirect()->route('privilegios.index')
            ->with('success', 'Privilegio modificado con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $privilegio = Privilegio::find($id)->delete();

        return redirect()->route('privilegios.index')
            ->with('success', 'Privilegio eliminado con éxito.');
    }
}
