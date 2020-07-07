<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSeoDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::getTable(), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('seoable');
            $table->string('locale');

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();

            $table->string('open_graph_title');
            $table->string('open_graph_description')->nullable();
            $table->json('open_graph_images')->nullable();

            $table->string('twitter_title');
            $table->string('twitter_description')->nullable();
            $table->text('twitter_image')->nullable();
            $table->text('twitter_image_alt')->nullable();

            $table->timestamps();

            $table->unique(['seoable_type', 'seoable_id', 'locale']);
        });
    }

    public static function getTable()
    {
        return Config::get('seo.table');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::getTable());
    }
}
