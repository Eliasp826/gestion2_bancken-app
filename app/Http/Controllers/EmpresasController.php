<?php

namespace App\Http\Controllers;

use App\Filters\EmpresasFilter;
use App\Http\Resources\Empresas\EmpresasCollection;
use App\Models\Empresas;
use App\Http\Requests\StoreEmpresasRequest;
use App\Http\Requests\UpdateEmpresasRequest;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EmpresasFilter();
        $queryItems = $filter->transform($request);

        $empresas = Empresas::where($queryItems);
        return new EmpresasCollection($empresas->paginate(15)->appends($request->query()));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpresasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresas $empresas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresasRequest $request, Empresas $empresas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresas $empresas)
    {
        //
    }
}
