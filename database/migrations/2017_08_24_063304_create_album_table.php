<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->engine = 'MyIsAM';
            $table->increments('id');
            $table->char('name',50)->comment('相册名');
            $table->char('addr',30)->comment('相册地点');
            $table->date('shot_time')->comment('拍摄时间');
            $table->integer('like_num')->default(0)->comment('点赞数');
            $table->string('cover')->default('')->comment('封面');
            $table->integer('category_id')->comment('分类id');
            $table->index('category_id');
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
        Schema::dropIfExists('album');
    }
}
