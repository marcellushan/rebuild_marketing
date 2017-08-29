<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details')->nullable();
            $table->string('location')->nullable();
            $table->text('use')->nullable();
            $table->string('date_needed')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('status')->default("Received");
//            $table->integer('clients_id');
            $table->unsignedInteger('service_requests_id');
            $table->timestamps();

        });

        Schema::table('photos', function(Blueprint $table){
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
        Schema::dropIfExists('photos');
    }
}
