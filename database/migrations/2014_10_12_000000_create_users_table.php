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
        Schema::create('bmrs_accounts', function (Blueprint $table) {
            $table->id('acc_id');
            $table->string('acc_username');
            $table->string('acc_lname');
            $table->string('acc_fname');
            $table->string('acc_position');
            $table->string('acc_password');
            $table->string('acc_email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('acc_tel');
            $table->string('acc_status');
            $table->string('acc_pic_path')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bmrs_accounts');
    }
};
