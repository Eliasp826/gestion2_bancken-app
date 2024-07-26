<?php

namespace App\Http\Controllers;

use App\Filters\ContactoFilter;
use App\Http\Resources\ContactoCollect\ContactoCollection;
use App\Http\Resources\ContactoResou\ContactoResource;
use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Models\Empresas;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$filter = new ContactoFilter();
        //$queryItems = $filter->transform($request);
        //$includeEmpresas = $request->query('includeEmpresas');
        //$contacto = Contacto::where($queryItems);
        //if ($includeEmpresas) {
            //$contacto = $contacto->with('empresas');
        //}
        //return new ContactoCollection($contacto->paginate()->appends($request->query()));

        $filter = new ContactoFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0) {
            return new ContactoCollection(Contacto::paginate());
        }
        else
            {
              $contacto = Contacto::where($queryItems)->paginate();
              return new ContactoCollection($contacto->appends($request->query()));
           }
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
    public function store(StoreContactoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        $includeEmpresas = request()->query('includeEmpresas');
        if($includeEmpresas) {
            return new contactoResource($contacto->loadMissing('empresas'));
        }
        return new contactoResource($contacto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
