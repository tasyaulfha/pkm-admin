<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Usulan;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $usulan = Usulan::count();
        $internal =Usulan::where('type','Seleksi Internal')->count();
        $camp =Usulan::where('type','PKM Camp')->count();
        $idea =Usulan::where('type','PKM Idea Challange')->count();


        return view('pages.admin.dashboard')->with([
            'usulan'=> $usulan,
            'internal'=>$internal,
            'camp'=>$camp,
            'idea'=>$idea,
        ]);
    }
}
