<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Livewire\Forms\UserForm;
use App\Models\User;

interface UserRepositoryInterface
{
    public function store(UserForm $userForm): User;

    public function show(): User;
}
