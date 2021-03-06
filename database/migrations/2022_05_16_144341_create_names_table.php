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

        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name_cate');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->unsignedInteger("id_categories");
            $table->timestamps();
            $table->foreign('id_categories')
            ->references('id')
            ->on('categories');
        });
      
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('names');
    }
};
