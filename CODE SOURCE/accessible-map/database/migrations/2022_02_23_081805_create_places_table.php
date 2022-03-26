<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->integer('type_id');
            $table->string('name');
            $table->mediumText('description');
            $table->bigInteger('phone');
            $table->string('location');
            $table->string('image'); 
            $table->string('social');
            $table->string('features_accessible');
            $table->string('features_and_facilities');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->integer('created_by');
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
        Schema::dropIfExists('places');
    }
};
