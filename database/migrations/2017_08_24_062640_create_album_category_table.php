<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_category', function (Blueprint $table) {
            $table->engine = 'MyIsAM';
            $table->increments('id');
            $table->char('name',50)->comment('分类名');
            $table->string('cover')->default('')->comment('封面地址');
            $table->date('start_date')->comment('开始时间');
            $table->date('end_date')->comment('结束时间');
            $table->string('synopsis')->default('')->comment('介绍');
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
        Schema::dropIfExists('album_category');
    }
}
