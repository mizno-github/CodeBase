@extends('layout.CodeBasetemp')
@section('CodeBase')
<div class="col-10 mx-auto">
<h1>新規作成</h1>
{{ Form::open(['route' => 'errorCode.store']) }}
    <h4 class="mt-4">title</h4>
    {{ Form::text('title', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <h4 class="mt-4">エラーコード</h4>
    {{ Form::text('errorCode', null, ['class' => 'w-100', 'placeholder' => '日本' ]) }}
    <div class="d-flex w-100 justify-content-around">
        <div class="">
            <h4 class="mt-4">詳しい状況</h4>
            {{ Form::textarea('detailed', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
        </div>
        <div class="pl-2">
            <h4 class="mt-4">解決策</h4>
            {{ Form::textarea('solution', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
        </div>
    </div>
    <h4 class="mt-4">検索ワード</h4>
    {{ Form::text('assistance', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <br>
    <h4 class="mt-4">言語</h4>
    {{ Form::text('lang', null, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
    <br>
    {{ Form::submit('作成',['class' => 'btn bg-primary text-white mr-0 mt-4', 'placeholder' => '入力してください'])}}
{{ Form::close() }}
</div>
	</html>
@endsection
