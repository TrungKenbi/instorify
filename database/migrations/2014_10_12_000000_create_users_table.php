<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 20)->unique();
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('first_name', 100);
            $table->string('last_name', 100);

            $table->date('dob')->useCurrent(); // Day of birth
            $table->enum('gender', ['male', 'female', 'unisex'])
                ->default('unisex');

            $table->string('avatar')->nullable();
            $table->string('cover')->nullable();

            $table->text('home_town')->nullable();
            $table->enum('relationship_status', ['single', 'in_relationship', 'married'])
                ->default('single');
            $table->text('bio')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
