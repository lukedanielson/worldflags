<?php namespace App\Http\Requests\Api\V1;

use App\Http\Requests\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApiContentMarkupRequest extends Request {

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
			'q' => 'required',
		];
	}


	/**
	 * Get the proper failed validation response for the request.
	 *
	 * @param  array  $errors
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
//	public function response(array $errors)
//	{
//		if ($this->ajax())
//		{
//			return new JsonResponse($errors, 422);
//		}
//
//		return $this->redirector->to($this->getRedirectUrl())
//			->withInput($this->except($this->dontFlash))
//			->withErrors($errors, $this->errorBag);
//	}

	/**
	 * Get the response for a forbidden operation.
	 *
	 * @return \Illuminate\Http\Response
	 */
//	public function forbiddenResponse()
//	{
//		return new Response('Forbidden', 403);
//	}
}
