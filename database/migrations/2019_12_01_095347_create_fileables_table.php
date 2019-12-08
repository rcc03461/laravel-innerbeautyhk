<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fileable_id')->comment('数据id');
            $table->string('fileable_type', 40)->comment('关联模型');
            $table->unsignedInteger('file_id')->comment('标签id');
        });


        DB::table('fileables')->insert([
            [
                'fileable_id' => 1,
                'fileable_type' => 'App\Product',
                'file_id' => 1
            ],
            [
                'fileable_id' => 2,
                'fileable_type' => 'App\Product',
                'file_id' => 2
            ],
            [
                'fileable_id' => 3,
                'fileable_type' => 'App\Product',
                'file_id' => 3
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
        Schema::dropIfExists('fileables');
    }
}
