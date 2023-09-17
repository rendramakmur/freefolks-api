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
        Schema::create('user_information', function (Blueprint $table) {
            $table->bigIncrements('ui_id');
            $table->integer('ui_user_type')->unsigned()->nullable()->comment('reference to global_param - mr_user_type');
            $table->string('ui_user_number', 255)->nullable();
            $table->string('ui_first_name', 100)->nullable();
            $table->string('ui_last_name', 100)->nullable();
            $table->string('ui_email', 100)->nullable();
            $table->string('ui_password', 100)->nullable();
            $table->string('ui_mobile_number', 100)->nullable();
            $table->integer('ui_occupation')->nullable()->comment('reference to global_param - mr_occupation');
            $table->date('ui_date_of_birth')->nullable();
            $table->enum('ui_gender', ['M', 'F'])->nullable();
            $table->string('ui_photo_profile', 255)->nullable();
            $table->text('ui_address')->nullable();
            $table->integer('ui_city')->nullable()->comment('reference to city_list');
            $table->string('ui_postal_code', 50)->nullable();
            $table->enum('ui_body_size', ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'])->nullable();
            $table->string('ui_activation_code')->nullable();
            $table->boolean('ui_email_status')->nullable()->default(false);
            $table->dateTime('ui_verified_at')->nullable();
            $table->integer('ui_created_by')->unsigned()->nullable();
            $table->timestamp('ui_created_at')->useCurrent()->nullable()->default(DB::raw('now()'));
            $table->integer('ui_updated_by')->unsigned()->nullable();
            $table->timestamp('ui_updated_at')->useCurrent()->nullable()->default(DB::raw('now()'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
