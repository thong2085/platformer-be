<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CharacterClass;
use App\Models\Weapon;
use App\Models\Enemy;

class GameDataController extends Controller
{
    public function index()
    {
        return response()->json([
            'classes' => CharacterClass::all(),
            'weapons' => Weapon::all(),
            'enemies' => Enemy::all(),
        ]);
    }
}
