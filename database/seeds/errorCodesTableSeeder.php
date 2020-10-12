<?php

use Illuminate\Database\Seeder;

class errorCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('errorCodes')->insert([
            [
                'id' => '1',
                'errorCode' => 'notdifind',
                'lang' => 'php,laravel',
                'solution' => 'タイポを消して解決',
                'detailed' => '●●が存在しません',
                'assistance' => '打ち間違いエラー',
             ],
            [
                'id' => '2',
                'errorCode' => 'notdifind',
                'lang' => 'html,php',
                'solution' => 'タイポを消して解決',
                'detailed' => '●●が存在しません',
                'assistance' => '打ち間違いエラー',
            ],
            [
                'id' => '3',
                'errorCode' => 'notdifind',
                'lang' => 'laravel,mysql',
                'solution' => 'タイポを消して解決',
                'detailed' => '●●が存在しません',
                'assistance' => '打ち間違いエラー',
            ],
        ]);
    }
}