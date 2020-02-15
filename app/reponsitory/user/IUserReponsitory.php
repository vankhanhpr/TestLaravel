<?php
    namespace App\Reponsitory\User;
    use App\Model\User;
    use App\Reponsitory\IReponsitory;
    use Throwable;
    interface IUserReponsitory extends IReponsitory
    {
        public function get();
        //public function insertUser($modelrequest);
       // public function updateUser($model1);
    }
?>