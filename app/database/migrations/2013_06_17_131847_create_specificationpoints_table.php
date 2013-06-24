<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecificationPointsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specificationPoints', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id');
			$table->string('description');
			$table->integer('parent_id');
			$table->integer('order');
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
        Schema::drop('specificationPoints');
    }

}
