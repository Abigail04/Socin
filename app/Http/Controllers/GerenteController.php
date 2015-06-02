<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\EditProductoRequest;
use Illuminate\Support\Facades\Request;
//Use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class GerenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('gerente.menu_g');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('gerente.newproduct');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(CreateProductoRequest $request)
    {
//		dd($request->all());    Solo imprime los datos del usuario....
        $producto = Producto::create(Request::all());
        $producto->save();
        Session::flash('message','El producto '.$producto->idproduct.' ha sido Registrado');
        return \Redirect::route('productos.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $producto = Producto::findOrFail($id);
        return view('gerente.modproduct', compact('producto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditProductoRequest $request, $id)
	{
        $producto = Producto::findOrFail($id);
        $producto->fill(Request::all());
        $producto->save();
        Session::flash('message','El producto '.$producto->idproduct.' ha sido Modificado');

        return \Redirect::route('productos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
