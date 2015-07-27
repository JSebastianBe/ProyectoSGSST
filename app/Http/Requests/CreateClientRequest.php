<?php namespace EjemploCRUD\Http\Requests;

use EjemploCRUD\Http\Requests\Request;

class CreateClientRequest extends Request {

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
			'document' => 'required|unique:clients,document|numeric', 
			'document_type' => 'required', 
			'name' => 'required', 
			'last_name' => 'required',
			'email' => 'required|email|unique:clients,email',
			'telephone' => 'required|numeric',
		];
	}

}
