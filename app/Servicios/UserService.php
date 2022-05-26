<?php

namespace App\Service;

use App\Model\User;

class UserService{
    protected $modelClass = User::class;

    public $model;

    public function store($attributes){
        $attributes['password'] = bcrypt($attributes['password']);

        $user = $this->model->newInstance($attributes);

        $user->save();
        return $user;
    }
}

