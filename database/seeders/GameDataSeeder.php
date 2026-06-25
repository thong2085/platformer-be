<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CharacterClass;
use App\Models\Weapon;
use App\Models\Enemy;

class GameDataSeeder extends Seeder
{
    public function run(): void
    {
        $classes = [
            ['name' => 'Knight Male', 'base_hp' => 100, 'base_speed' => 160, 'base_damage' => 10, 'sprite_key' => 'knight_m'],
            ['name' => 'Knight Female', 'base_hp' => 95, 'base_speed' => 165, 'base_damage' => 10, 'sprite_key' => 'knight_f'],
            ['name' => 'Elf Male', 'base_hp' => 80, 'base_speed' => 190, 'base_damage' => 12, 'sprite_key' => 'elf_m'],
            ['name' => 'Elf Female', 'base_hp' => 75, 'base_speed' => 195, 'base_damage' => 12, 'sprite_key' => 'elf_f'],
            ['name' => 'Wizard Male', 'base_hp' => 70, 'base_speed' => 150, 'base_damage' => 15, 'sprite_key' => 'wizzard_m'],
            ['name' => 'Wizard Female', 'base_hp' => 65, 'base_speed' => 155, 'base_damage' => 15, 'sprite_key' => 'wizzard_f'],
            ['name' => 'Lizard Male', 'base_hp' => 120, 'base_speed' => 140, 'base_damage' => 8, 'sprite_key' => 'lizard_m'],
            ['name' => 'Lizard Female', 'base_hp' => 115, 'base_speed' => 145, 'base_damage' => 8, 'sprite_key' => 'lizard_f'],
            ['name' => 'Dwarf Male', 'base_hp' => 150, 'base_speed' => 130, 'base_damage' => 14, 'sprite_key' => 'dwarf_m'],
            ['name' => 'Dwarf Female', 'base_hp' => 140, 'base_speed' => 135, 'base_damage' => 13, 'sprite_key' => 'dwarf_f'],
            ['name' => 'Plague Doctor', 'base_hp' => 90, 'base_speed' => 160, 'base_damage' => 11, 'sprite_key' => 'doc'],
            ['name' => 'Angel', 'base_hp' => 110, 'base_speed' => 180, 'base_damage' => 12, 'sprite_key' => 'angel'],
        ];
        foreach ($classes as $c) CharacterClass::updateOrCreate(['name' => $c['name']], $c);

        $weapons = [
            // Level 1
            ['name' => 'Rusty Sword', 'type' => 'melee', 'damage_bonus' => 2, 'sprite_key' => 'weapon_rusty_sword'],
            ['name' => 'Knife', 'type' => 'melee', 'damage_bonus' => 3, 'sprite_key' => 'weapon_knife'],
            ['name' => 'Regular Sword', 'type' => 'melee', 'damage_bonus' => 4, 'sprite_key' => 'weapon_regular_sword'],
            ['name' => 'Machete', 'type' => 'melee', 'damage_bonus' => 5, 'sprite_key' => 'weapon_machete'],
            ['name' => 'Cleaver', 'type' => 'melee', 'damage_bonus' => 5, 'sprite_key' => 'weapon_cleaver'],
            ['name' => 'Hammer', 'type' => 'melee', 'damage_bonus' => 6, 'sprite_key' => 'weapon_hammer'],
            ['name' => 'Axe', 'type' => 'melee', 'damage_bonus' => 6, 'sprite_key' => 'weapon_axe'],
            
            // Level 2
            ['name' => 'Knight Sword', 'type' => 'melee', 'damage_bonus' => 8, 'sprite_key' => 'weapon_knight_sword'],
            ['name' => 'Mace', 'type' => 'melee', 'damage_bonus' => 9, 'sprite_key' => 'weapon_mace'],
            ['name' => 'Spear', 'type' => 'melee', 'damage_bonus' => 10, 'sprite_key' => 'weapon_spear'],
            ['name' => 'Katana', 'type' => 'melee', 'damage_bonus' => 11, 'sprite_key' => 'weapon_katana'],
            ['name' => 'Duel Sword', 'type' => 'melee', 'damage_bonus' => 12, 'sprite_key' => 'weapon_duel_sword'],
            ['name' => 'Throwing Axe', 'type' => 'melee', 'damage_bonus' => 12, 'sprite_key' => 'weapon_throwing_axe'],
            ['name' => 'Waraxe', 'type' => 'melee', 'damage_bonus' => 14, 'sprite_key' => 'weapon_waraxe'],
            ['name' => 'Spiked Baton', 'type' => 'melee', 'damage_bonus' => 13, 'sprite_key' => 'weapon_baton_with_spikes'],
            
            // Level 3
            ['name' => 'Golden Sword', 'type' => 'melee', 'damage_bonus' => 18, 'sprite_key' => 'weapon_golden_sword'],
            ['name' => 'Red Gem Sword', 'type' => 'melee', 'damage_bonus' => 20, 'sprite_key' => 'weapon_red_gem_sword'],
            ['name' => 'Anime Sword', 'type' => 'melee', 'damage_bonus' => 22, 'sprite_key' => 'weapon_anime_sword'],
            ['name' => 'Saw Sword', 'type' => 'melee', 'damage_bonus' => 21, 'sprite_key' => 'weapon_saw_sword'],
            ['name' => 'Lavish Sword', 'type' => 'melee', 'damage_bonus' => 25, 'sprite_key' => 'weapon_lavish_sword'],
            ['name' => 'Big Hammer', 'type' => 'melee', 'damage_bonus' => 28, 'sprite_key' => 'weapon_big_hammer'],
            ['name' => 'Double Axe', 'type' => 'melee', 'damage_bonus' => 26, 'sprite_key' => 'weapon_double_axe'],
            
            // Ranged
            ['name' => 'Bow', 'type' => 'ranged', 'damage_bonus' => 8, 'sprite_key' => 'weapon_bow'],
            ['name' => 'Long Bow', 'type' => 'ranged', 'damage_bonus' => 15, 'sprite_key' => 'weapon_bow_2'],
            ['name' => 'Red Magic Staff', 'type' => 'ranged', 'damage_bonus' => 18, 'sprite_key' => 'weapon_red_magic_staff'],
            ['name' => 'Green Magic Staff', 'type' => 'ranged', 'damage_bonus' => 16, 'sprite_key' => 'weapon_green_magic_staff'],
        ];
        foreach ($weapons as $w) Weapon::updateOrCreate(['name' => $w['name']], $w);

        $enemies = [
            // Tier 1
            ['name' => 'Tiny Slug', 'base_hp' => 20, 'base_damage' => 3, 'reward_xp' => 5, 'reward_gold' => 1, 'sprite_key' => 'tiny_slug'],
            ['name' => 'Slug', 'base_hp' => 30, 'base_damage' => 4, 'reward_xp' => 8, 'reward_gold' => 1, 'sprite_key' => 'slug'],
            ['name' => 'Tiny Zombie', 'base_hp' => 30, 'base_damage' => 5, 'reward_xp' => 8, 'reward_gold' => 2, 'sprite_key' => 'tiny_zombie'],
            ['name' => 'Muddy', 'base_hp' => 40, 'base_damage' => 6, 'reward_xp' => 10, 'reward_gold' => 2, 'sprite_key' => 'muddy'],
            ['name' => 'Goblin', 'base_hp' => 45, 'base_damage' => 7, 'reward_xp' => 12, 'reward_gold' => 2, 'sprite_key' => 'goblin'],
            
            // Tier 2
            ['name' => 'Imp', 'base_hp' => 50, 'base_damage' => 10, 'reward_xp' => 15, 'reward_gold' => 3, 'sprite_key' => 'imp'],
            ['name' => 'Skeleton', 'base_hp' => 55, 'base_damage' => 12, 'reward_xp' => 16, 'reward_gold' => 3, 'sprite_key' => 'skelet'],
            ['name' => 'Zombie', 'base_hp' => 60, 'base_damage' => 10, 'reward_xp' => 18, 'reward_gold' => 3, 'sprite_key' => 'zombie'],
            ['name' => 'Ice Zombie', 'base_hp' => 65, 'base_damage' => 11, 'reward_xp' => 20, 'reward_gold' => 4, 'sprite_key' => 'ice_zombie'],
            ['name' => 'Swampy', 'base_hp' => 70, 'base_damage' => 9, 'reward_xp' => 22, 'reward_gold' => 4, 'sprite_key' => 'swampy'],
            ['name' => 'Pumpkin Dude', 'base_hp' => 75, 'base_damage' => 14, 'reward_xp' => 25, 'reward_gold' => 5, 'sprite_key' => 'pumpkin_dude'],
            ['name' => 'Wogol', 'base_hp' => 80, 'base_damage' => 12, 'reward_xp' => 28, 'reward_gold' => 5, 'sprite_key' => 'wogol'],
            ['name' => 'Chort', 'base_hp' => 85, 'base_damage' => 15, 'reward_xp' => 30, 'reward_gold' => 6, 'sprite_key' => 'chort'],
            
            // Tier 3
            ['name' => 'Orc Warrior', 'base_hp' => 120, 'base_damage' => 18, 'reward_xp' => 50, 'reward_gold' => 10, 'sprite_key' => 'orc_warrior'],
            ['name' => 'Masked Orc', 'base_hp' => 130, 'base_damage' => 20, 'reward_xp' => 55, 'reward_gold' => 12, 'sprite_key' => 'masked_orc'],
            ['name' => 'Orc Shaman', 'base_hp' => 100, 'base_damage' => 25, 'reward_xp' => 60, 'reward_gold' => 15, 'sprite_key' => 'orc_shaman'],
            ['name' => 'Necromancer', 'base_hp' => 110, 'base_damage' => 28, 'reward_xp' => 70, 'reward_gold' => 18, 'sprite_key' => 'necromancer'],
            
            // Tier 4 Bosses
            ['name' => 'Big Zombie', 'base_hp' => 350, 'base_damage' => 30, 'reward_xp' => 150, 'reward_gold' => 50, 'sprite_key' => 'big_zombie'],
            ['name' => 'Big Demon', 'base_hp' => 400, 'base_damage' => 35, 'reward_xp' => 200, 'reward_gold' => 80, 'sprite_key' => 'big_demon'],
            ['name' => 'Ogre', 'base_hp' => 500, 'base_damage' => 45, 'reward_xp' => 300, 'reward_gold' => 100, 'sprite_key' => 'ogre'],
        ];
        foreach ($enemies as $e) Enemy::updateOrCreate(['name' => $e['name']], $e);
    }
}
