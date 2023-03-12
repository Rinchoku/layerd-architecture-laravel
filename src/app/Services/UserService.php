<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService {

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepository = $userRepositoryInterface;
    }

    /**
     * Userの一覧を取得します
     * @return Collection
     */
    public function getAllUsers(): array
    {
        return $this->userRepository->getAllUsers();
    }
}
