<?php
    namespace App\Reponsitory\User\Impl;
    use App\Model\User;
    use App\Reponsitory\Reponsitory;
    use App\Reponsitory\User\IUserReponsitory;
    use Illuminate\Database\DatabaseManager;
    
    class UserReponsitory extends Reponsitory implements IUserReponsitory
    {
        protected $model;
        public function __construct(User $model)
        {
            parent::__construct($model);
        }
        public function get(){
            return getall();
        }
        // public function insertUser($modelrequest){
        //    //return $modelrequest;
           
        //    $x=array($modelrequest); 
        //     insert($x);
        // }
        //public function updateUser($model1){
           // return "co toi day";
            //return $model1;
          // return getall();
        //}
    }

?>