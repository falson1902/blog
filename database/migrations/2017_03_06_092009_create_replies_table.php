<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    //{
        //Schema::create('replies', function (Blueprint $table) {
            //$table->increments('id');
            //$table->text('content');
           // $table->integer('comment_id')->unsigned();
           // $table->foreign('comment_id')-> refrences('id')->on('comments');
            //$table->timestamps();
       // });
   // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replies');
    }
}
