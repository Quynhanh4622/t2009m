<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function list()
    {
        $list = Library::all();
        return view('/library/list',
            [
                'list' => $list
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('/library/form');
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $store = new Library();
        $store->fill($request->all());
        $store->save();
        return redirect('/library/list');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Library $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library, $id)
    {
        $edit = Library::find($id);
        return view('/library/edit',
            [
                'edit' =>$edit
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Library $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library, $id)
    {
        $update = Library::find($id);
        $update->update($request->all());
        $update->save();
        return redirect('/library/list');

    }

    /**
     * Remove the specified resource from storage.

     */
    public function delete(Library $library, $id)
    {
        $delete = Library::find($id);
        $delete->delete();
        return redirect('/library/list');
    }
}
