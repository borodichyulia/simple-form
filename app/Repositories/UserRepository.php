<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function store(UserForm $userForm): User
    {
        $userFormArray = get_object_vars($userForm);
        $trimmedArray = array_slice($userFormArray, 0, -1);

        return User::create($trimmedArray);
    }

    public function show(): User
    {
        return User::latest()->first();
    }
}
