<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaidAdvertisingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paid_advertisings', function (Blueprint $table) {
            $table->increments('id');
            $table->text("details")->nullable();
            $table->string('audience')->nullable();
            $table->text("purpose")->nullable();
            $table->text("use")->nullable();
            $table->string('advertising')->nullable();
            $table->text("other")->nullable();
            $table->integer('budget')->nullable();
            $table->string('status')->default("Received");
            $table->unsignedInteger('service_requests_id');
            $table->timestamps();
        });

        Schema::table('paid_advertisings', function(Blueprint $table){
            $table->foreign('service_requests_id')
                ->references('id')->on('service_requests')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paid_advertisings');
    }
}
