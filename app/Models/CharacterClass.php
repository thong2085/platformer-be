<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    protected $fillable = ['name', 'base_hp', 'base_speed', 'base_damage', 'sprite_key'];
}
