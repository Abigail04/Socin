<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

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
                'idproduct'=>'required|max:8|unique:idproduct,email',
                'descripcion'=>'required|max:60',
                'unidad'=>'required|max:20',
                'precioc'=>'required',
                'preciov'=>'required',
                'cantidad'=>'required|integer',
            ];
	}

}
