<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userdk_id');
            $table->text('namekh');
            $table->text('emailkh');
            $table->integer('phonekh');
            $table->integer('total');
            $table->string('city');
            $table->string('district');
            $table->longtext('address');
            $table->string('payment');
            $table->longtext('payment_info');
            $table->longtext('ghichu');
            $table->string('security');
            $table->integer('status');
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
        Schema::dropIfExists('transactions');
    }
}
