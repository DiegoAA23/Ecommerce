<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Permission extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable, SoftDeletes;

     /**
      *
      *
      * @var list<string>
      */
     protected $fillable = [
         'name',
     ];

     public function roles(){
        $this->hasMany(Role::class);
     }
}
