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
            return response($user);
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

        return $this->successResponse($token, "Success");
        // //valid credential
        // $validator = Validator::make($credentials, [
        //     'email' => 'required|email',
        //     'password' => 'required|string|min:6|max:50'
        // ]);
        
        // // return ddd($validator);
        // //Send failed response if request is not valid
        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 200);
        // }

        // //Request is validated
        // //Crean token
        // try {
        //     $token = JWTAuth::attempt($credentials);

        //     if (!$token) {
        //         return response()->json([
        //         	'success' => false,
        //         	'message' => 'Login credentials are invalid.',
        //         ], 400);
        //     }
        // } catch (JWTException $e) {
    	// return $credentials;
        //     return response()->json([
        //         	'success' => false,
        //         	'message' => 'Could not create token.',
        //         ], 500);
        // }
 	
 		// //Token created, return with success response and jwt token
        // return response()->json([
        //     'success' => true,
        //     'token' => $token,
        // ]);
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