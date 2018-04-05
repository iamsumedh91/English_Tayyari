<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_url');
            $table->string('client_image');
            $table->string('client_message');
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
         Schema::drop('testimonials');
    }
}
