<?php

namespace App\Http\Controllers;

use App\Models\DiningArea;
use Illuminate\Http\Request;

class DiningAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $list = DiningArea::all();
        return response()->json($list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\DiningArea $diningArea
     * @return \Illuminate\Http\Response
     */
    public function show(DiningArea $diningArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DiningArea $diningArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiningArea $diningArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\DiningArea $diningArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiningArea $diningArea)
    {
        //
    }
}
