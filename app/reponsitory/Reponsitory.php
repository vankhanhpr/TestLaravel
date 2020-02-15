<?php

    namespace App\Reponsitory;
    use Illuminate\Database\Eloquent\Model;
    class Reponsitory implements IReponsitory
    {
        protected $model;
        public function __construct(Model $model)
        {
            $this->model = $model;
        }
        public function findById(int $id)
        {
            return $this->model->find($id);
        }
        public function getall(){
            return $this->model->all();
        }
        public function insert(array $model){
            $this->model->create($model);
        }
        public function update1(array $attributes,$id){
            $model = $this->model->findOrFail($id);
            $model->fill($attributes);
            $model->save();
        }
        public function delete($model){
           $this->model->find($model)->delete();
        }
    }
?>