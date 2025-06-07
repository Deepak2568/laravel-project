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
        Schema::create('matrimonies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->date('dob');
            $table->unsignedSmallInteger('height')->comment('Height in cm');
            $table->unsignedSmallInteger('weight')->nullable()->comment('Weight in kg');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('caste');
            $table->string('mother_tongue');
            $table->string('nationality');
            $table->string('qualification', 100);
            $table->string('occupation', 100)->nullable();
            $table->string('income', 50)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('diet')->nullable();
            $table->string('smoking')->nullable();
            $table->string('drinking')->nullable();
            $table->text('hobbies')->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('father_occupation', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('mother_occupation', 100)->nullable();
            $table->unsignedTinyInteger('brothers')->default(0);
            $table->enum('brothers_married', ['yes', 'no'])->default('no');
            $table->unsignedTinyInteger('sisters')->default(0);
            $table->enum('sisters_married', ['yes', 'no'])->default('no');
            $table->string('phone', 15);
            $table->string('alt_phone', 15)->nullable();

            $table->string('email', 100)->unique();
            $table->string('password');

            $table->string('photo')->nullable();

            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrimonies');
    }
};
