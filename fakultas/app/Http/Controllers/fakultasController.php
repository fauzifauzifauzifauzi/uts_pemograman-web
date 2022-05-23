<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class fakultasController extends Controller
{
    public function index(){
        $fakultas = fakultas::all();
        return view('fakultas.index',compact(['fakultas']));
    }
    public function create()
    {
        return view('fakultas.create');
    }
    public function store(request $request)
    {
        //dd($request_>)
        fakultas::create($request->except(['_token','submit']));
    }
}
