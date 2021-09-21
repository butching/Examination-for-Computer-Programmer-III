<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use App\Models\Region;
use Carbon\Carbon;


class SiteController extends Controller
{
    public function index()
    {
        $data = Volunteer::orderBy('LastName')->get();
        return view('index')->with('data', $data);
    }

    public function delete($id)
    {
        Volunteer::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function new()
    {
        return view('form')->with('regions', Region::all());
    }

    public function create(Request $request)
    {
        $data = new Volunteer();
        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Age = $request->Age;
        $data->BirthDate = Carbon::createFromFormat('d/m/Y', $request->BirthDate)->format('Y-m-d');
        $data->sex_id = $request->sex_id;
        $data->region_code = $request->region_code;
        $data->save();

        return redirect('/');
    }

    public function update(Request $request)
    {
        $data = Volunteer::findOrFail($request->id);
        
        
        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Age = $request->Age;
        $data->BirthDate = Carbon::createFromFormat('d/m/Y', $request->BirthDate)->format('Y-m-d');
        $data->sex_id = $request->sex_id;
        $data->region_code = $request->region_code;
        $data->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = Volunteer::findOrFail($id);
        $data['regions'] =  Region::all();

        return view('form')->with($data);
    }
}
