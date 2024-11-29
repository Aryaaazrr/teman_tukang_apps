<?php

namespace App\Models;

use Database\Factories\UserDetailFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'users_detail';

    protected $fillable = [
        'user_id',
        'wa_number',
        'image',
        'gender',
        'passport_number',
        'passport_holder_name',
      ];

      protected static function newFactory(): Factory
      {
        return UserDetailFactory::new();
      }
}