<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyphraseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dailyphrase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('subtitle');
            $table->string('written');
            $table->string('spoken');
            $table->string('formal');
            $table->string('informal');
            $table->string('metadata');
            $table->string('first_example');
             $table->string('second_example');
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
        Schema::drop('dailyphrase');
    }
}
