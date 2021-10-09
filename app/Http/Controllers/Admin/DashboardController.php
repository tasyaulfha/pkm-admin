<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Usulan;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $usulan = Usulan::count();
        

        return view('pages.admin.dashboard')->with([
            'usulan'=>$usulan,
        ]);
    }
}
