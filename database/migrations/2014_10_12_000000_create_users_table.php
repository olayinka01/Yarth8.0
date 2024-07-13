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
        /*Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		*/
		
		Schema::create('users', function(Blueprint $table) {
			$table->increments('uid');
			$table->string('firstname');
			$table->string('othername');
			$table->string('lastname');
			$table->string('customer_name');
			$table->string('artist_name');
			$table->string('vend_name');
			$table->string('admin_username');
			$table->string('email');
			$table->string('password');
			$table->string('phone');
			$table->string('photo_description');
			$table->string('alt_phone');
		    $table->string('country');
			$table->string('state');
			$table->string('city');
			$table->string('address');
			$table->string('gender');
			$table->string('additional_info');
			$table->string('account_type');
			$table->string('active');
			$table->rememberToken();
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
