<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->longText('header_image');
            $table->longText('video');
            $table->longText('title_1');

            $table->longText('image_1');
            $table->longText('image_2');
            $table->longText('image_3');
            $table->longText('image_4');
            $table->longText('image_5');
            $table->longText('image_6');
            $table->longText('image_7');
            $table->longText('image_8');
            $table->longText('image_9');
            $table->longText('image_10');
            $table->longText('image_11');
            $table->longText('image_12');
            $table->longText('image_13');
            $table->longText('image_14');
            $table->longText('image_15');
            $table->longText('image_16');
            $table->longText('image_17');
            $table->longText('image_18');
            $table->longText('image_19');

            $table->longText('d_1');
            $table->longText('d_2');
            $table->longText('d_3');
            $table->longText('d_4');
            $table->longText('d_5');
            $table->longText('d_6');
            $table->longText('d_7');
            $table->longText('d_8');
            $table->longText('d_9');
            $table->longText('d_10');
            $table->longText('d_11');
            $table->longText('d_12');
            $table->longText('d_13');
            $table->longText('d_14');
            $table->longText('d_15');

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
        Schema::dropIfExists('contents');
    }
}
