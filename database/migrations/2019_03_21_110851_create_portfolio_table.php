<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort');
            $table->string('alias')->default('');
            $table->string('title');
            $table->string('src')->nullable();
            $table->string('href');
            $table->text('description');
            $table->string('clock')->nullable();
            $table->string('calendar')->nullable();
            $table->string('briefcase')->nullable();
            $table->string('color_1')->default('#00b5e4');
            $table->string('color_2')->default('#f66191');
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
        Schema::dropIfExists('portfolio');
    }
}
