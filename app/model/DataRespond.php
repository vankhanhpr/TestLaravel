<?php
    namespace app\model;
    use Illuminate\Database\Eloquent\Model;
    class datarespond extends Model{
        private $success;
        private $data;
        private $message;
        private $error;
    }
?>