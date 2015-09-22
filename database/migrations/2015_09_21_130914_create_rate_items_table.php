<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('image_url');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('rate_categories');

            $table->string('name');
            $table->text('description');

            $table->string('intended_applicaion');
            $table->string('alt_products');

            $table->char('animal_tested', 4);
            $table->char('eco_friendly', 4);

            $table->string('price_range');
            $table->string('available_from');

            $table->tinyInteger('approved')->default(1);

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
        Schema::drop('rate_items');
    }
}
