<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60)->unique();
            $table->string('alias');
            $table->text('intro');
            $table->longText('content');
            $table->string('image');
            $table->string('description');
            $table->integer('published');
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
        Schema::dropIfExists('tintucs');
    }
}
