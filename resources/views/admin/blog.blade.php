@extends('app')

@section('stylesheets')
	@parent

	<link rel="stylesheet" href="//cdn.jsdelivr.net/editor/0.1.0/editor.css">
@endsection

@section('scripts')
	@parent

	<script src="//cdn.jsdelivr.net/editor/0.1.0/editor.js"></script>
	<script src="//cdn.jsdelivr.net/editor/0.1.0/marked.js"></script>
	<script src="//widget.cloudinary.com/global/all.js"></script>
	<script>
	jQuery(document).ready(function(){
		window.editor = new Editor();

		// Insert Cloudinary before rendering
		cloudinary.setCloudName('sleavely');
		editor.options.toolbar.splice(8, 0, {
			action: function(){
				cloudinary.openUploadWidget(
					{
						default_source: 'url',
						folder: 'blog',
						multiple: false,
						theme: 'minimal',
						upload_preset: 'qfrv8x7t'
					},
					function(error, result) {
						if(!error)
						{
							editor.codemirror.doc.replaceSelection('![](' + result[0].secure_url + ')');
						}
						console.log(error, result)
					}
				);
			},
			name: 'cloudinary'
		});

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
				<a href="/admin/blog" class="list-group-item{{ (action('AdminController@getBlog') == Request::url() ? ' active' : '') }}">
					<i class="fa fa-file-text"></i> New post
				</a>
				@foreach($entries as $entry)
					<a href="{{ action('AdminController@getBlog', [$entry->id ]) }}" class="list-group-item{{ (action('AdminController@getBlog', [$entry->id ]) == Request::url() ? ' active' : '') }}">
						{{ $entry->title }}<br />
						<small><i class="fa {{ ($entry->published_at ? 'fa-check-square-o' : 'fa-square-o') }}"></i> {{ $entry->created_at->diffForHumans() }}</small>
					</a>
				@endforeach
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
						<div class="form-group">
							<div class="col-md-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="published" value="1" {{ (isset($post) && $post->published_at ? 'checked="checked"' : '') }} /> {{ (isset($post) && $post->published_at ? 'Published '.$post->published_at->diffForHumans() : 'Publish?') }}
									</label>
									@if(isset($post) && $post->published_at)
										<div>
											<a href="/blog/{{{ $post->slug }}}" target="_blank">/blog/{{{ $post->slug }}}</a>
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
