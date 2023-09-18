<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Photo;

interface PhotoRepositoryInterface
{
    public function store(string $photoId);
}
