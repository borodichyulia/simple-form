<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'date_of_birth',
        'email',
        'country_code',
        'phone',
        'marital_status',
        'about',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
