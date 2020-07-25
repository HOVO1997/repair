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
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable(true);
            $table->bigInteger('notification_type_id')->nullable(true);
            $table->enum('notification_time', ['current', 'every_login'])->nullable(true);
            $table->bigInteger('plan_id')->nullable(true);
            $table->timestamp('expire_date')->nullable(true);
            $table->bigInteger('country_id')->nullable(true);
            $table->bigInteger('state_id')->nullable(true);
            $table->bigInteger('city_id')->nullable(true);
            $table->integer('zip_code')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->bigInteger('field_id')->nullable();
            $table->bigInteger('user_type_id')->nullable(true);
            $table->integer('number_of_employees')->nullable();
            $table->bigInteger('currency_id')->nullable(true);
            $table->string('plan_modify')->default(0);
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
