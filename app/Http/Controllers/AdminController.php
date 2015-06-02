<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\EditUserRequestUserRequest;
use Illuminate\Support\Facades\Request;
//Use Illuminate\Http\Request;
use App\User;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {

    /**
     * @var Request
     */

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('administrador.menu');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('administrador.newser');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(CreateUserRequest $request)
	{
        $user = User::create(Request::all());
        $user->estado = 'Activo';
        $user->contrasena = \Hash::make('contrasena');
        $user->save();
        Session::flash('message','El usuario '.$user->name.' '.$user->appaterno.' ha sido Registrado');
        return \Redirect::route('users.index');
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
		$user = User::findOrFail($id);
        return view('administrador.moduser', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
        $user = User::findOrFail($id);
        $user->fill(Request::all());

        $user->save();
        Session::flash('message','El usuario '.$user->name.' '.$user->appaterno.' ha sido Modificado');

        return \Redirect::route('users.index');
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
