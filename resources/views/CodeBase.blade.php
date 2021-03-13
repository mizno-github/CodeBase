@extends('layout.CodeBasetemp')
@section('CodeBase')
<h1 class="topTitle">CodeBase</h1>
{{ Form::open(['route' => 'errorCode.index', 'class' => 'mainSearch', 'method' => 'get']) }}
{{ Form::text('searchWord', null, ['class' => 'rounded-pill serchLayout', 'placeholder' => 'エラーコードを入れてください']) }}
{{ Form::submit('検索', ['class' => 'bg-primary rounded-pill text-light serchButton']) }}
{{ Form::close() }}
@endsection
