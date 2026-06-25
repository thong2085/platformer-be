<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    protected $fillable = ['name', 'base_hp', 'base_damage', 'reward_xp', 'reward_gold', 'sprite_key'];
}
