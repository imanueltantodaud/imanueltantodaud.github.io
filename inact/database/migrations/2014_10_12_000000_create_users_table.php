<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
            $table->id();
            $table->string('user_id')->unique();
            $table->integer('country_id');
            $table->integer('roll_type')->nullable();
            $table->string('timezone_id')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('dob')->nullable();
            $table->string('language')->nullable();
            $table->text('platform_token')->nullable();
            $table->enum('signup_type', ['email', 'facebook', 'google']);
            $table->integer('phone_verification_token')->nullable();
            $table->string('email_verification_token')->nullable();
            $table->string('reset_password_token')->nullable();
            $table->text('device_token')->nullable();
            $table->string('inviter')->nullable();
            $table->bigInteger('flags')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });

        $admin = new User;
		$admin->user_id = (String) Str::uuid();
		$admin->country_id = '63';
		$admin->first_name = 'Admin';
		$admin->phone = '+31212313123';
		$admin->email = 'administrator@inact.com';
		$admin->password = Hash::make('123123');
		$admin->signup_type = 'email';
		$admin->roll_type = '1';
		$admin->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('users', function (Blueprint $table) {
			$user = User::where('email', 'adminstrator@inact.com')->first();
			DB::statement("DELETE FROM users where email='adminstrator@inact.com'");
		});
        Schema::dropIfExists('users');
    }
}
