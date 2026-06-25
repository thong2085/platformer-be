<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $fillable = ['name', 'type', 'damage_bonus', 'sprite_key'];
}
