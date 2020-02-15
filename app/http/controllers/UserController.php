<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\DataRespond;
use App\Reponsitory\User\IUserReponsitory;

use JWTAuth;
use JWTAuthException;
use Hash;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(IUserReponsitory $userReponsitory)
    {
        $this->userReponsitory = $userReponsitory;
    }
    public function getall(){
        $data = new DataRespond;
        try{
            
            $data->data=  $this->userReponsitory->getall();
            
            $data->success= true;
            $data->message= "success";
        }
        catch(Exception $e){
            $data->success= false;
            $data->message= "error";
            $data->error= $e;
        }
        return  $data;
    } 
    public function getByID(Request $userid){
        $data = new DataRespond;
        try{
            $data->success= true;
            $data->data= $this->userReponsitory->findById($userid->userid);
            $data->message = "get success";
            
        }
        catch(Exception $e){
            $data->success=false;
            $data->error= $e;
        }
        return $data;
    }
    public function update(Request $user){
        try{
            $x= $user->all();
            $this->userReponsitory->update1($x,$user->userid);
            return "success" ;
        }
        catch(Exception $e){
            return "error";
        }
    }
    public function insert(Request $request){
        try{
            $user = new User();
            $user->password = Hash::make($request->password);
            $user->username = $request->username;
            $user->userid = $request->userid;
            $x = $user->toArray();
            $this->userReponsitory->insert($x);
            return "success";
        }
        catch(Exception $e){
            return "error";
        }
    }
    public function delete(Request $userid){
        try{
            $this->userReponsitory->delete($userid->userid);
            return "delete success";
        }
        catch(Exception $e){
            return "error";
        }
    }
    public function register(Request $request){
        try{
            $user = $this->user->create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password'))
              ]);
              return response()->json([
                'status'=> 200,
                'message'=> 'User created successfully',
                'data'=>$user
            ]);
        }
        catch(Exception $e){

        }
    }
    public function login(Request $request){
        $credentials = $request->only('userid', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_username_or_password'], 422);
           }
        } 
        catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    
}
