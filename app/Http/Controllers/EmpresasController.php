<?php

namespace App\Http\Controllers;

use App\Filters\EmpresasFilter;
use App\Http\Resources\EmpresasCollect\EmpresasCollection;
use App\Http\Resources\EmpresasResou\EmpresasResource;
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
        //$filter = new EmpresasFilter();
        //$queryItems = $filter->transform($request);
        //if(count($queryItems) == 0){
          //  return new EmpresasCollection(Empresas::paginate());
        //}
        //else
        //{
          //  $empresas = Empresas::where($queryItems)->paginate();
            //return new EmpresasCollection($empresas->appends($request->query()));
        //}

        $filter = new EmpresasFilter();
        $queryItems = $filter->transform($request);
        $includeContacto = $request->query('includeContacto');
        $empresas = Empresas::where($queryItems);
        if ($includeContacto) {
            $empresas = $empresas->with('contacto');
        }
        return new EmpresasCollection($empresas->paginate()->appends($request->query()));

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
        return new EmpresasResource($empresas);
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
