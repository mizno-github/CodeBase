<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id'); // コラムID
            $table->text('title'); //コラムのタイトル
            $table->string('lang'); // 関係する言語
            $table->text('problem'); // コラムの内容
            $table->text('assistance')->nullable(); // 検索補助。その他
            $table->timestamps(); // 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
