<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\CountCommit;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CountCommit::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
        if(CountCommit::where('name', $name)->exists()){ 
            return CountCommit::where('name', $name)->first();
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "Username GitHub not found in database"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $user = $request->user();
        if (!($user->tokenCan('commits:update'))) {
            $respon = [
                'status' => 'error',
                'message' => 'You dont have permission',
            ];
            return response()->json($respon, 400);  

        } else {

            $validatedData =  $request->validate([
                'name' => 'required|string|max:255',
                'full_name' => 'required|string|max:255',            
                'description' => 'required|string|max:255',
            ]);       

            if(CountCommit::where('name', $name)->exists()){

                $record = CountCommit::where('name', '=', $name)->first();

                $record->name = $validatedData['name'];
                $record->full_name = $validatedData['full_name'];
                $record->description = $validatedData['description'];            

                $record->save();

                return response()->json([
                    'status' => 'success',
                    'message' => "Update info in database succesfully"
                ], 200);

            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => "Username GitHub not found in database"
                ], 404);
            }

        }        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $name)
    {
        $user = $request->user();
        if (!($user->tokenCan('commits:delete'))) {
            $respon = [
                'status' => 'error',
                'message' => 'You dont have permission',
            ];
            return response()->json($respon, 400); 

        } else {  

            if(CountCommit::where('name', $name)->exists()){ 
                $record = CountCommit::where('name', $name)->first();

                $record->delete();

                return response()->json([
                    'status' => 'success',
                    'message' => "Record deleted successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => "Username GitHub not found in database"
                ], 404);
            }
            
        }
      
    }

    public function register(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);        

        $token = $user->createToken('auth_token', ['commits:guests'])->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Register successfully',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request){

        if (!Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        
        $user = $request->user();
        if ($user->id < 5) {
            $token = $user->createToken('auth_token')->plainTextToken;
            $previlege = 'admin';
        } else {
            $token = $user->createToken('auth_token', ['commits:guests'])->plainTextToken;            
            $previlege = 'guests';
        }

        return response()->json([
            'status' => 'success',
            'previlege' => $previlege,
            'message' => 'Login successfully',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        $respon = [
            'status' => 'success',
            'message' => 'Logout successfully',
            'errors' => null,
            'content' => null,
        ];
        return response()->json($respon, 200);
    }

    public function me(Request $request)
    {        
        return $request->user();   
    }


}
