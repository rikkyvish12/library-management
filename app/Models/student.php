<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;


class student extends Model  //implements JWTSubject
{
    use HasFactory;
    protected $guarded = [];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

}
