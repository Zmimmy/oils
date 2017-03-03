<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oils', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	        $table->string('name', 100);
	        $table->text('description');
	        $table->text('cautions');
	        $table->text('use_diffusion');
	        $table->text('use_topical');
	        $table->text('use_internal');
	        $table->string('aromatic_description', 100);
	        $table->string('collection_method', 100);
	        $table->string('plant_part', 100);
	        $table->string('constituents', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oils');
    }
}
