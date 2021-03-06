<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hash')->nullable();
            $table->string('payby')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->decimal('total', 8, 2);
            // $table->string('ip')->nullable();
            // $table->text('bowser')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
