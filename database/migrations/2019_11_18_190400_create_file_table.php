<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc');
            $table->string('size');
            $table->string('ext');
            $table->string('tag')->nullable();
            $table->string('path');
            // $table->integer('fileable_id')->nullable();
            // $table->string('fileable_type')->nullable();
            $table->timestamps();
        });



        DB::table('file')->insert([
            [
                'name' => "Cleansing-Gel-10p.png",
                'desc' => '',
                'size' => 1,
                'ext' => 'png',
                'path' => "public/Cleansing-Gel-10p.png"
            ],
            [
                'name' => "Multicare-Essence-10p.jpg",
                'desc' => '',
                'size' => 1,
                'ext' => 'jpg',
                'path' => "public/Multicare-Essence-10p.jpg"
            ],
            [
                'name' => "Outclear-Mousse.png",
                'desc' => '',
                'size' => 1,
                'ext' => 'png',
                'path' => "public/Outclear-Mousse.png"
            ],

        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file');
    }
}
