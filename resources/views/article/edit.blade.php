@extends('layout.CodeBasetemp')
@section('CodeBase')
<div class="col-10 mx-auto">
  <h1>コラム編集</h1>
  {{ Form::open(['route' => ['article.update', $articles->id], 'method'=> 'PUT']) }}
  <h4 class="mt-4">title</h4>
  {{ Form::text('title', $articles->title, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
  <h4 class="mt-4">コラム内容</h4>
  {{ Form::textarea('problem', $articles->problem, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
  <h4 class="mt-4">検索ワード</h4>
  {{ Form::text('assistance', $articles->assistance, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
  <br>
  <h4 class="mt-4">言語</h4>
  {{ Form::text('lang', $articles->lang, ['class' => 'w-100', 'placeholder' => '入力してください']) }}
  <br>
  {{ Form::submit('編集確定',['class' => 'btn bg-primary text-white mr-0 mt-4', 'placeholder' => '入力してください'])}}
  {{ Form::close() }}
</div>
@endsectio
