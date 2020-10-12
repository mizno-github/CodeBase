@extends('layout.CodeBasetemp')
@section('CodeBase')
<div class="col-10 mx-auto">
<h1>コラム作成</h1>
{{ Form::open(['route' => 'article.store']) }}
    <h4 class="mt-4">title</h4>
    {{ Form::text('title', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <h4 class="mt-4">コラム内容</h4>
    {{ Form::textarea('problem', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <h4 class="mt-4">検索ワード</h4>
    {{ Form::text('assistance', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <br>
    <h4 class="mt-4">言語</h4>
    {{ Form::text('lang', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <br>
    {{ Form::submit('作成',['class' => 'btn bg-primary text-white mr-0 mt-4', 'placeholder' => '入力してください'])}}
    
{{ Form::close() }}
</div>

				<!-- まだtitleカラム作成していない -->
				<!-- <p>title</p>
				<p>id</p>
				<p>エラーコード</p>
				<p>言語</p>
				<p>解決策</p>
				<p>詳しい状況</p>
				<p>検索ワード</p> -->
	</html>
@endsection