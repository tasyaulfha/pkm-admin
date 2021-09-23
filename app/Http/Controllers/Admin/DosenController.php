<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dosen;
use App\Exports\DosenExport;
use App\Imports\DosenImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Admin\DosenRequest;


class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $dosen=Dosen::all();

        return view('pages.admin.dosen.index',compact('dosen'));

    }

    public function dosenexport(){
        return Excel::download(new DosenExport,'dosen.xlsx');
    }
    public function dosenimport(DosenRequest $request){
       $file= $request->file('file');
       $namafile=$file->getClientOriginalName();
       $file->move('DataDosen', $namafile);

       Excel::import(new DosenImport, public_path('/DataDosen/'.$namafile));
       return redirect()->route('dosen.index');  


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dosen.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request)
    {
        $data = $request->all();
       
        Dosen::create($data);
        return redirect()->route('dosen.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Dosen::findOrFail($id);

        return view('pages.admin.dosen.edit', [
            'item' =>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request, $id)
    {
        $data = $request->all();

        $item=Dosen::findOrFail($id);
        $item->update($data);
       
        return redirect()->route('dosen.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Dosen::findOrFail($id);
        $item->delete();

        return redirect()->route('dosen.index');  
    }
}
