<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine = 'MyIsAM';
            $table->increments('id');
            $table->string('title')->comment('文章标题');
            $table->string('cover')->default('')->comment('封面图片地址');
            $table->enum('status',['y','n'])->default('y')->comment('是否显示');
            $table->string('synopsis')->default('')->comment('简介');
            $table->integer('view')->defalut(0)->comment('阅读数');
            $table->integer('comment')->default(0)->comment('评论数');
            $table->integer('sort')->default(0)->comment('排序');
            $table->string('path')->comment('路径');
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
        Schema::dropIfExists('article');
    }
}
