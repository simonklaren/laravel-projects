<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BucketlistItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucketlist_items', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 250);
            $table->string('prioriteit', 100);
            $table->string('done', 250);
            $table->foreignid('bucketlist_id')->nullable();
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
        Schema::dropIfExists('bucketlist_items');
    }
}
