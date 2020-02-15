<?php
    namespace App\Reponsitory;
    use Exception;
    use Illuminate\Database\Eloquent\Model;
    interface IReponsitory
    {
        public function findById(int $id);
        public function getall();
        public function insert(array $model);
        public function update1(array $attributes,$id);
        public function delete($model);
    }
?>