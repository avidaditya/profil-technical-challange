<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('occupation')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->boolean('guide')->default(false);
            $table->string('facebook_id')->nullable();
            $table->text('avatar')->nullable();
            $table->rememberToken();
            $table->boolean('marketing_consent')->default(false);
            $table->timestamp('consent_date')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->boolean('subscribed')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
