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
        Schema::create('to_do_list_item', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('note');
            $table->tinyInteger('done');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->integer('priority');
            $table->bigInteger('to_do_list_id');
            $table->bigInteger('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_do_list_item');
    }
};
