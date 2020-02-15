<?php

namespace app\model;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class user extends Model  implements AuthenticatableContract 
{
    use Authenticatable;
    // public function __construct()
    // {
    // }
    // public function toArray($request){
    //     return [
    //         'userid'=> $this.userid,
    //         'username'=>this.username
    //     ];
    // }
        protected $table ='users';
        protected $fillable =[
            'userid',
            'username',
            'password'
        ];
        public $timestamps = false;
        protected $primaryKey = 'userid';
}
