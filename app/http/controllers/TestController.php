<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Reponsitory\User\IUserReponsitory;
use App\model\User;
 class TestController extends Controller{
    private $userRepository;
    public function __construct(IUserReponsitory $userReponsitory)
    {
        $this->userReponsitory = $userReponsitory;
    }
    public function create(){
        $data= $this->userReponsitory->findById(123,"userid");
        return $data;
    }
     public function get(){
        $data= user::all();
        return $data;
    }
 }
?>