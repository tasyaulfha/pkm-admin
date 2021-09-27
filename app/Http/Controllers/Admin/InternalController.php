<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InternalRequest;

use App\Models\Admin\Internal;
use Illuminate\Support\Str;
use App\Models\User;    

class InternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Internal::with([
            'details','dosen','skema', 'user'
        ])->get();

        return view('pages.admin.usulan.internal.index',[
            'items' => $items
        ]);
       
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
    public function store(InternalRequest $request)
    {
        $data = $request->all();
        $data['slug'] =Str::slug($request->title);
       
        Internal::create($data);
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
        $item = Internal::with([
            'details','dosen','skema', 'user'
        ])->findOrFail($id);
        
        return view('pages.admin.usulan.internal.detail',[
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

        $item=Internal::findOrFail($id);
        $item->update($data);
       
        return redirect()->route('pages.admin.usulan.internal.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Internal::findOrFail($id);
        $item->delete();

        return redirect()->route('internal.index');  

    }
}
