<?php

namespace App\Http\Controllers;

use App\typeTransfer;
use Illuminate\Http\Request;

class TypeTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return typeTransfer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return typeTransfer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\typeTransfer  $typeTransfer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return typeTransfer::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeTransfer  $typeTransfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = typeTransfer::findOrFail($id);
        $type->update($request->all());
        return $type;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\typeTransfer  $typeTransfer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = typeTransfer::findOrFail($id);
        $type->delete();
        return 204;
    }
}
