<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadFileOneMoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_file_one_mores', function (Blueprint $table) {
            $table->id();
            $table->string('name_1');
            $table->string('link_1');
            $table->string('name_2');
            $table->string('link_2');
            $table->string('name_3');
            $table->string('link_3');
            $table->string('name_4');
            $table->string('link_4');
            $table->string('name_5');
            $table->string('link_5');
            $table->string('name_6');
            $table->string('link_6');
            $table->string('name_7');
            $table->string('link_7');
            $table->string('name_8');
            $table->string('link_8');
            $table->string('name_9');
            $table->string('link_9');
            $table->string('name_10');
            $table->string('link_10');
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
        Schema::dropIfExists('upload_file_one_mores');
    }
}
