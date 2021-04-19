<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errorCodes', function (Blueprint $table) {
            $table->bigIncrements('id'); // エラーレコードID
            $table->text('title'); //エラーコードのタイトル
            $table->text('errorCode'); // エラーコードをそのまま保存
            $table->string('lang'); // 発生した言語
            $table->text('solution'); // 解決した方法
            $table->text('detailed'); // エラー詳細
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
        Schema::dropIfExists('errorCodes');
    }
}

// mysql,php.laravel,
// テーブル作成のカラム
// エラーレコードID
// エラーコード全行
// 発生した言語１
// ２
// ３
// 解決した方法
// エラー詳細
// 検索補助・その他