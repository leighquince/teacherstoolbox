<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('question_no');
			$table->text('question');
			$table->string('keywords');
			$table->integer('marks');
			$table->integer('specification_point_id');
			$table->integer('paper_id');
			$table->integer('user_id');
			$table->string('status');
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
        Schema::drop('questions');
    }

}
