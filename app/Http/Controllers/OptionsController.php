<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppOptionsRequest;
use App\Http\Requests\UpdateAppOptionsRequest;
use App\Models\AppOptions;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppOptionsRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(AppOptions $appOptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppOptionsRequest $request, AppOptions $appOptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppOptions $appOptions)
    {
        return response()->noContent(204, []);
    }
}
