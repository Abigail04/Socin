<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request {

    /**
     * @var Route
     */
    private $route;

    public function __construct(Route $route)
     {

         $this->route = $route;
     }

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name'=>'required|max:30',
            'appaterno'=>'required|alpha|max:30',
            'apmaterno'=>'required|alpha|max:30',
            'fecha'=>'required|before:2015-01-01',
            'direccion'=>'required|max:150',
            'celular'=>'required|max:15',
            'email'=>'email|required|unique:users,email,' . $this->route->getParameter('administrador'),
            'tipo'=>'required',
            'estado'=>'required',
		];
	}

}
