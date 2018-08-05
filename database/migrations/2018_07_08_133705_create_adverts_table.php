<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->boolean('urgent')->default(true);
            $table->boolean('published')->default(true);
            $table->dateTime('published_on')->default(now());
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('advert_category', function (Blueprint $table) {
            $table->integer('advert_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['advert_id', 'category_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
