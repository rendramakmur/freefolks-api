<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_data', function (Blueprint $table) {
            $table->bigIncrements('gd_id');
            $table->string('gd_game_number', 150)->nullable();
            $table->string('gd_venue_name', 150)->nullable();
            $table->text('gd_venue_address')->nullable();
            $table->string('gd_map_url', 255)->nullable();
            $table->dateTime('gd_date')->nullable();
            $table->integer('gd_goalkeeper_quota')->nullable();
            $table->integer('gd_outfield_quota')->nullable();
            $table->decimal('gd_goalkeeper_price', 12, 2)->nullable();
            $table->decimal('gd_outfield_price', 12, 2)->nullable();
            $table->decimal('gd_total_cost', 12, 2)->nullable();
            $table->text('gd_notes')->nullable();
            $table->enum('gd_status', ['Finished', 'On Progress', 'Canceled'])->nullable();
            $table->integer('gd_created_by')->unsigned()->nullable();
            $table->timestamp('gd_created_at')->useCurrent()->nullable()->default(DB::raw('now()'));
            $table->integer('gd_updated_by')->unsigned()->nullable();
            $table->timestamp('gd_updated_at')->useCurrent()->nullable()->default(DB::raw('now()'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_data');
    }
};
