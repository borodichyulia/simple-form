<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Photo;
use App\Models\User;
use App\Repositories\Interfaces\PhotoRepositoryInterface;

class PhotoRepository implements PhotoRepositoryInterface
{
    public function store(string $photoId)
    {
        $userId = User::latest()->first()->id;
        if (Photo::where('user_id', $userId)->count() < 5) {
            $photo = new Photo([
                'photo_id' => $photoId,
                'user_id' => $userId,
            ]);
            $photo->save();
        }
    }
}
