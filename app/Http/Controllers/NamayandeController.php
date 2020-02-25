<?php

namespace App\Http\Controllers;

use App\namayande;
use Illuminate\Http\Request;

class NamayandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $a = namayande::where('province_id', $id)->get();
        return $a->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getbyid($id)
    {
        $a = namayande::where('id', $id)->first();
        return $a->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\namayande  $namayande
     * @return \Illuminate\Http\Response
     */
    public function show(namayande $namayande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\namayande  $namayande
     * @return \Illuminate\Http\Response
     */
    public function edit(namayande $namayande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\namayande  $namayande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, namayande $namayande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\namayande  $namayande
     * @return \Illuminate\Http\Response
     */
    public function destroy(namayande $namayande)
    {
        //
    }
}
