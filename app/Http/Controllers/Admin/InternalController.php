<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InternalRequest;
use App\Models\Admin\Usulan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;


class InternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $items = Usulan::with([
            'details', 'user'
        ])->get();

        return view('pages.admin.usulan.internal.index', compact('items'))
            ->with('no', 1);
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

    public function edit($id)
    {
        $item = Usulan::findOrFail($id);

        return view('pages.admin.usulan.internal.edit', [
            'item' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InternalRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Usulan::create($data);
        return redirect()->route('internal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Usulan::with([
            'details', 'user', 'dosen', 'rekening', 'usulanMahasiswa'
        ])->findOrFail($id);

        return view('pages.admin.usulan.internal.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InternalRequest $request, $id)
    {
        $data = $request->all();

        $item = Usulan::findOrFail($id);
        $item->update($data);

        return redirect()->route('internal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Usulan::findOrFail($id);
        $item->delete();

        return redirect()->route('internal.index');
    }
}
