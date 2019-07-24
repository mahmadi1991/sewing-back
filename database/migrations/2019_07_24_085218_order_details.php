<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function(Blueprint $table)
        {
            $table->bigIncrements('id')->nullable();
            $table->string('hash', 10)->unique()->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('cityId')->nullable();
            $table->unsignedBigInteger('fabricId')->nullable();
            $table->unsignedBigInteger('addressId')->nullable();
            $table->unsignedBigInteger('sizeId')->nullable();
            $table->unsignedBigInteger('dashdashaModelId')->nullable();
            $table->string('length', 10)->unique()->nullable();
            $table->enum('fabric', ['Y', 'N'])->nullable()->default('N');
            $table->enum('dashdasha', ['Y', 'N'])->nullable()->default('N');
            $table->enum('receive', ['INPERSON', 'TRANSMISSION'])->nullable()->default('INPERSON');
            $table->unsignedBigInteger('creatorId')->nullable();
            $table->unsignedBigInteger('updaterId')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
