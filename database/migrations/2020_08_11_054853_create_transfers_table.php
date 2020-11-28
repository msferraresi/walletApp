<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->float('amount');
            $table->unsignedBigInteger('wallet_id');
            $table->foreign('wallet_id')->references('id')->on('wallet');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_transfers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
