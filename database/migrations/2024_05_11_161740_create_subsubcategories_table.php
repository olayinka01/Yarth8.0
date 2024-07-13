<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	/*
        Schema::create('subsubcategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
	*/
		
		Schema::create('subsubsubcategories', function(Blueprint $table)
		{
			$table->increments('ssscid');
			$table->string('subsubsubcat_name');
			$table->integer('subsubcat_id')->unsigned();
			$table->foreign('subsubcat_id')->references('sscid')->on('subsubcategories');
			$table->integer('subcat_id')->unsigned();
			$table->foreign('subcat_id')->references('scid')->on('subcategories');
			$table->integer('cat_id')->unsigned();
			$table->foreign('cat_id')->references('cid')->on('categories');
			$table->integer('cattype_id')->unsigned();
			$table->foreign('cattype_id')->references('ctid')->on('categorytype');
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
        Schema::dropIfExists('subsubcategories');
    }
}
