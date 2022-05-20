<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cust_id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',50);
            $table->string('password',50);
            $table->bigInteger('mobile_no');
            $table->string('gender');
            $table->integer('age');
            $table->string('city');
            $table->integer('pincode');
            $table->string('hobby');
            $table->string('image',100);
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
        Schema::dropIfExists('customers');
    }
}
