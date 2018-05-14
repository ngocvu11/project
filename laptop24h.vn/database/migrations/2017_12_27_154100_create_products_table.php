<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60)->unique();
            $table->string('alias');
            $table->string('masp');
            $table->integer('price');
            $table->integer('price_new');
            $table->string('color');
            $table->string('kichthuoc');
            $table->string('trongluong');
            $table->string('manhinh');
            $table->string('dophangiai');
            $table->string('pin');
            $table->string('ram');
            $table->string('cpu');
            $table->string('ocung');
            $table->string('cacdohoa');
            $table->string('diaquang');
            $table->string('conggiaotiep');
            $table->string('webcam');
            $table->string('hedieuhanh');
            $table->string('baohanh');
            $table->string('tinhtrang');
            $table->text('intro');
            $table->longText('content');
            $table->string('image');
            $table->string('keywords');
            $table->longText('description');
            $table->integer('published');
            $table->integer('stt');
           /* $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');*/
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('cates')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
