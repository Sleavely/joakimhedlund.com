@extends('app')

@section('stylesheets')
	@parent
	
	<link rel="stylesheet" href="//cdn.jsdelivr.net/editor/0.1.0/editor.css">
@endsection

@section('scripts')
	@parent

	<script src="//cdn.jsdelivr.net/editor/0.1.0/editor.js"></script>
	<script src="//cdn.jsdelivr.net/editor/0.1.0/marked.js"></script>
	<script>
	jQuery(document).ready(function(){
		window.editor = new Editor();
		editor.render();
		editor.codemirror.focus();
	});
	</script>
@endsection

@section('content')




<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="/admin/blog" class="list-group-item active">
					<i class="fa fa-file-text"></i> New post
				</a>
				<a href="#" class="list-group-item">How To Win At Android</a>
				<a href="#" class="list-group-item">Building A Blog With Laravel And Markdown</a>
				<a href="#" class="list-group-item">Porta ac consectetur ac</a>
				<a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
		</div>
		<div class="col-md-9">
			<form method="post" action="{{ action('AdminController@postBlog', [(isset($post) ? $post->id : 0)]) }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="panel panel-default">
					<div class="panel-body">
						<input class="form-control input-lg" type="text" name="title" placeholder="Title goes here" value="{{ $post->title or '' }}" />
						<textarea name="markdown" placeholder="Markdown goes here">{{ $post->markdown or '' }}</textarea>
						<div class="pull-right">
							<button type="submit" class="btn btn-primary">Save Post</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
