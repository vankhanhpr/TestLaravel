<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Reponsitory\User\IUserReponsitory;

class PhotoController extends Controller
{
    private $userRepository;
    public function __construct(IUserReponsitory $userReponsitory)
    {
        $this->userReponsitory = $userReponsitory;
    }
    public function index()
    {
        $data= user::all();
        return $data;
    }
    public function getById(){
        $data= $this->userReponsitory->findById(123,"userid");
        return $data;
    }
    public function create()
    {
            // $data= $this->userReponsitory->findById(123,"userid");
            // return $data;
        $data=  $this->userReponsitory->getall();
        return  $data;
       
    }
    public function getallUser(){
        $data=  $this->userReponsitory->getall();
        return  $data;
    }
    // public function store(Request $request)
    // {
    //     return  $this->userReponsitory->all();
    // }
    public function store(){
        $data1=  $this->userReponsitory->getall();
        return  $data1;
    }
    // public function getall(){
    //     $data1=  $this->userReponsitory->getall();
    //     return  $data1;
    // }
    public function show(User $photo)
    {
        //
    }
    public function edit(User $user)
    {
        return userReponsitory.insertUser($user);
    }
    public function update(Request $request, User $photo)
    {
        //
    }
    public function destroy(User $photo)
    {
        //
    }
}
