<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

trait ApiResponser{

    protected function successResponse($data, $message = null, $code = 200)
	{
   		return response()->json([
      'meta' => 
              [
                'code'=> $code, 
                'message' => $message, 
              ],
      'count' => is_countable($data) ? count($data) : 0,
			'data' => $data
		], $code);
	}

	protected function errorResponse($message = null, $code)
	{
		return response()->json([
      'meta' => [
        'status' => 'Error',
        'code' => $code,
        'message' => $message,
      ],
			'data' => null
		], $code);
	}

}