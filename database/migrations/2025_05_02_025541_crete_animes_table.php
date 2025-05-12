<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('animes',function(Blueprint $table){
            $table->bigIncrements('id')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('genre')->nullable(false);
            $table->integer('episodes')->nullable(false);
            $table->date('aired_from');
            $table->date('aired_to');
            $table->decimal('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
