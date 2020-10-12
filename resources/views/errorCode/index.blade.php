@extends('layout.CodeBasetemp')
@section('CodeBase')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div class="modal fade" id="modal1" tabindex="-1"
      role="dialog" aria-labelledby="label1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="label1">こちらのエラーリストを削除します</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Modal body
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
		{{ Form::open(['method' => 'DELETE', 'class' => 'deleteUrl']) }}
			{{Form::submit('削除', ['class'=>'btn btn-primary deleteModal text-light'])}}
		{{ Form::close() }}
      </div>
    </div>
  </div>
</div>

<p>検索ワード：{{ $searchWord }}</p>
<h1 class="ml-5">エラーコード</h1>
	<ul>
		@foreach($errors as $errors)
		<li class="mt-3 list-unstyled">
			<div class="bg-white rounded p-4">
				<div class="d-flex">
					<div class="flex-grow-1">
						<p class="text-secondary text-left h6 mb-3 pt-2">lang :</p>
						<p class="h5 d-block searchMark p-2 border-bottom">{{ $errors->lang }}</p>
					</div>
					<div><p class="deleteId btn"data-toggle="modal" data-target="#modal1" data-delete="{{ route('errorCode.destroy', $errors->id) }}" data-title="{{ $errors->title }}"><i class="fas fa-trash fa-2x"></i></p></div>
					<div><p class="btn"><a href="{{ route('errorCode.edit', $errors->id) }}"><i class="fas fa-edit fa-2x"></i></a></p></div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">title :</p>
						<pre class="h5 d-block searchMark p-2 border-bottom">{{ $errors->title }}</pre>
					</div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">errorCode :</p>
						<pre class="h5 d-block searchMark p-2 border-bottom">{{ $errors->errorCode }}</pre>
					</div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">詳細 :</p>
						<pre class="h5 d-block searchMark p-2 border">{{ $errors->detailed }}</pre>
					</div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">解決策 :</p>
						<pre class="h5 d-block searchMark p-2 border">{{ $errors->solution }}</pre>
					</div>
				</div>
			</div>
		</li>
		@endforeach
	</ul>

	<h1 class="ml-5">コラム</h1>
	<ul class="" >
		@foreach($article as $article)

		<li class="mt-3 list-unstyled">
			<div class="bg-white rounded p-4">
				<div class="d-flex">
					<div class="flex-grow-1">
						<p class="text-secondary text-left h6 mb-3 pt-2">lang :</p>
						<p class="h5 d-block searchMark p-2 border-bottom">{{ $article->lang }}</p>
					</div>
					<div><p class="btn"><a href="{{ route('article.edit', $article->id) }}"><i class="fas fa-edit fa-2x"></i></a></p></div>
					<div><p class="deleteId btn"data-toggle="modal" data-target="#modal1" data-delete="{{ route('article.destroy', $article->id) }}" data-title="{{ $article->title}}"><i class="fas fa-trash fa-2x"></i></p></div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">title :</p>
						<pre class="h5 d-block searchMark p-2 border-bottom">{{ $article->title }}</pre>
					</div>
				</div>
				<div>
					<div>
						<p class="text-secondary text-left h6 mb-3 pt-2">コラム内容 :</p>
						<pre class="h5 d-block searchMark p-2 border">{{ $article->problem }}</pre>
					</div>
				</div>
			</div>
		</li>
		@endforeach
	</ul>
	<table>
<script>
	$('.deleteId').on('click', function(){
		var url = $(this).data('delete');
		var title = $(this).data('title');
		console.log(url);

		$('.deleteUrl').attr('action', url);
		$('.modal-body').html('<p>' + title + '</p>');
		console.log(url);
	});
</script>
<script>
	$(function() {
		function e(str) {
			str = str.replace(/&/g, '&amp;');
			str = str.replace(/</g, '&lt;');
			str = str.replace(/>/g, '&gt;');
			str = str.replace(/"/g, '&quot;');
			str = str.replace(/'/g, '&#39;');
			return str;
		}
		$('.searchMark').each(function(){
			var txt = e($(this).text());
			$(this).html(txt.replace(/{{ $searchWord }}/g, '<span class="bg-warning">{{ $searchWord }}</span>'));
		});
	});
</script>
@endsection
