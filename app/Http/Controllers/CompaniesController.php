<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Companies::paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create')->with('status.companies', 'Su empresa a sido agredada exitosamente');
    }

    public function store(Request $request)
    {
        $companies = Companies::create([
            'name' => $request->input('name'),
            'nit' => $request->input('nit'),
        ]);
        return redirect('companies')->with('create.companies', 'Se ha agregado una nueva empresa');
    }

    public function show($id)
    {
        $companies = Companies::find($id);
        return view('companies.show', compact('companies'));
    }

    public function destroy($id)
    {
        $companies = Companies::find($id)->delete();
        return redirect('companies')->with('destroy', 'Se ha eliminado la empresa: ' . $id);
    }

    public function edit($id)
    {
        $companies = Companies::find($id);
        return view('companies.edit',compact('companies'));
    }

    public function update(Request $request,$id){
        $companies =Companies::find($id)->update([
            'name' => $request->input('name'),
            'nit' => $request->input('nit'),
        ]);
        return redirect('companies')->with('companies.status','Se a actualizado correctamente');
    }

}
