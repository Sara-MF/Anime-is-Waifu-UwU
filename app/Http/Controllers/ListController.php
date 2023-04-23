<?php

namespace App\Http\Controllers;

use App\Models\List;
use App\Http\Requests\StoreListRequest;
use App\Http\Requests\UpdateListRequest;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function empty() {
        
        // empty list
        return view('list.empty');

    }

    public function watching() {

        // watching list
        return view('list.watching');
    }

    public function completed() {

        // completed list
        return view('list.completed');
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
     * @param  \App\Http\Requests\StoreListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    // public function show(List $list)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    // public function edit(List $list)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListRequest  $request
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateListRequest $request, List $list)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    // public function destroy(List $list)
    // {
    //     //
    // }
}
