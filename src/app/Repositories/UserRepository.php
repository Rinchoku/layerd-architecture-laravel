<?php

namespace App\Repositories;

use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface {

    /**
     * Userの一覧を取得します
     * @return array
     */
    public function getAllUsers(): array
    {
        return User::get()->toArray();
    }
}
