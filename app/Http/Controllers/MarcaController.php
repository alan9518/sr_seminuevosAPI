<?php

    /* ==========================================================================
    ** Marcas Controller
    ** php artisan makle:controller --resource
    ** 19/01/2019
    ** Alan Medina Silva
    ** ========================================================================== */

namespace App\Http\Controllers;

// --------------------------------------
// Imports
// --------------------------------------
    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Model\Marca; // Model
    use App\Http\Resources\Marca as MarcaResource; // Resource


class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Marcas
        $marcas = Marca::paginate(15);

        // Return a Collection of marcas as a Resource
        return MarcaResource::collection($marcas);
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
    public function store(Request $request)
    {
        // Detect between a post or put request
        $marca = $request->isMethod('put') 
                ? Marca :: findOrFail($request->id) : new Marca;

        // Overaerite or Create Marca Valuesk
        $marca->id = $request->input('id');
        $marca->nombre = $request->input('nombre');

        // If Save was succesfull, return response
        if($marca->save()) {
            return new MarcaResource($marca);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Single Marca
        $marca =  Marca::findOrFail($id);

        // Return as a Resource
        return new MarcaResource($marca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Marca
        $marca =  Marca::findOrFail($id);

        if($marca->delete()) {
            return new MarcaResource($marca);
        }
    }
}
