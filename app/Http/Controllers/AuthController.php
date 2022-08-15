<?php

namespace App\Http\Controllers;

use JWTAuth;
use Exception;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;    
    }

    public function register(Request $request)
    {
    	try {
            $user = $this->authService->register($request);
            
            if(!$user) {
                return $this->successResponse(null, "Failed to load Data");
            }
                
            return $this->successResponse($user, "Success");
          } catch (Exception $err) {
            return $this->errorResponse($err->getMessage(), $err->getCode());
          }
    }
 
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = JWTAuth::attempt($credentials);
        if (!$token) {
            return $this->successResponse(null, "Unauthorized");
        }

        $data = [
            "access_token" => $token,
            "token_type" => "bearer"
        ];

        return $this->successResponse($data, "Success");
    }
 
    public function logout(Request $request)
    {
        //valid credential
        $validator = Validator::make($request->only('token'), [
            'token' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 200);
        }

		//Request is validated, do logout        
        try {
            JWTAuth::invalidate($request->token);
 
            return response()->json([
                'success' => true,
                'message' => 'User has been logged out'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, user cannot be logged out'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}