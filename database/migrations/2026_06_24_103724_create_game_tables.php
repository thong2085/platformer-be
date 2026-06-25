<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add game-specific columns to users
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('character_class_id')->nullable();
            $table->integer('level')->default(1);
            $table->integer('xp')->default(0);
            $table->integer('gold')->default(0);
            $table->foreignId('current_stage_id')->nullable();
        });

        Schema::create('character_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('base_hp')->default(100);
            $table->float('base_speed')->default(160);
            $table->integer('base_damage')->default(10);
            $table->string('sprite_key');
            $table->timestamps();
        });

        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // melee, ranged
            $table->integer('damage_bonus')->default(0);
            $table->string('sprite_key');
            $table->timestamps();
        });

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // consumable
            $table->integer('effect_value')->default(0);
            $table->string('sprite_key');
            $table->timestamps();
        });

        Schema::create('user_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('item_type'); // weapon or item
            $table->unsignedBigInteger('item_id');
            $table->integer('quantity')->default(1);
            $table->boolean('is_equipped')->default(false);
            $table->timestamps();
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('zone');
            $table->integer('required_level')->default(1);
            $table->unsignedBigInteger('boss_id')->nullable();
            $table->timestamps();
        });

        Schema::create('enemies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('base_hp');
            $table->integer('base_damage');
            $table->integer('reward_xp');
            $table->integer('reward_gold');
            $table->string('sprite_key');
            $table->timestamps();
        });

        Schema::create('quests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('goal_type'); // kill_monster, collect_item, complete_stage
            $table->unsignedBigInteger('goal_target_id');
            $table->integer('goal_amount');
            $table->integer('reward_xp');
            $table->integer('reward_gold');
            $table->unsignedBigInteger('reward_item_id')->nullable();
            $table->timestamps();
        });

        Schema::create('user_quests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('quest_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('active'); // active, completed
            $table->integer('current_progress')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quests');
        Schema::dropIfExists('quests');
        Schema::dropIfExists('enemies');
        Schema::dropIfExists('stages');
        Schema::dropIfExists('user_inventories');
        Schema::dropIfExists('items');
        Schema::dropIfExists('weapons');
        Schema::dropIfExists('character_classes');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['character_class_id', 'level', 'xp', 'gold', 'current_stage_id']);
        });
    }
};
