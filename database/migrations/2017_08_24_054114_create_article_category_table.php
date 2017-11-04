<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->engine = 'MyIsAM';
            $table->increments('id');
            $table->integer('pid')->default(0)->unsigned()->comment('父id');
            $table->char('name',50)->comment('分类名');
            $table->enum('statu',['y','n'])->default('y')->comment('是否显示');
            $table->index('pid');
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
        Schema::dropIfExists('article_category');
    }
}
