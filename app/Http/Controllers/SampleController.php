<?php

namespace App\Http\Controllers;

use App\Http\Requests\SampleRequest;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        return view('sample', $request->all());
    }

    public function store(SampleRequest $request)
    {
        return view('sample', $request->all());
    }
}
