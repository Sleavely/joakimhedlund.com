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
		var editor = new Editor();
		editor.render();
	});
	</script>
@endsection

@section('content')




<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="/admin" class="list-group-item active">
					Dashboard
				</a>
				<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
				<a href="#" class="list-group-item">Morbi leo risus</a>
				<a href="#" class="list-group-item">Porta ac consectetur ac</a>
				<a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<p>Content here! :D</p>
					<textarea placeholder="Markdown goes here"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
