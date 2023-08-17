<?php

namespace App\Http\Controllers;

use App\Models\afiliados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class afiliadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('store');
        // dd($request);
        $afiliado = $request->all();
        $afiliado = afiliados::create($afiliado);
        Session::flash('message', 1);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function show(afiliados $afiliados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function edit(afiliados $afiliados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, afiliados $afiliados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\afiliados  $afiliados
     * @return \Illuminate\Http\Response
     */
    public function destroy(afiliados $afiliados)
    {
        //
    }
}
