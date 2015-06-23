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
						folder: 'portfolio',
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
				<a href="/admin/portfolio" class="list-group-item{{ (action('AdminController@getPortfolio') == Request::url() ? ' active' : '') }}">
					<i class="fa fa-file-text"></i> New portfolio entry
				</a>
				@foreach($entries as $entry)
					<a href="{{ action('AdminController@getPortfolio', [$entry->id ]) }}" class="list-group-item{{ (action('AdminController@getPortfolio', [$entry->id ]) == Request::url() ? ' active' : '') }}">
						{{ $entry->title }}<br />
						<small>{{ $entry->created_at->diffForHumans() }}</small>
					</a>
				@endforeach
			</div>
		</div>
		<div class="col-md-9">
			<form method="post" action="{{ action('AdminController@postPortfolio', [(isset($work) ? $work->id : 0)]) }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="panel panel-default">
					<div class="panel-body">
						<input class="form-control input-lg" type="text" name="title" placeholder="Title goes here" value="{{ $work->title or '' }}" />
						<textarea name="markdown" placeholder="Markdown goes here">{{ $work->markdown or '' }}</textarea>
						<div class="form-group panel-body">
							<div class="col-md-6">
								<input class="form-control" type="text" name="coverphoto_url" placeholder="Cover photo URL" value="{{ $work->coverphoto_url or '' }}" />
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="demo_url" placeholder="Demo URL" value="{{ $work->demo_url or '' }}" />
							</div>
						</div>
						<div class="form-group panel-body">
							<div class="pull-right">
								<button type="submit" class="btn btn-primary">Save Work</button>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="published" value="1" {{ (isset($work) && $work->published_at ? 'checked="checked"' : '') }} /> {{ (isset($work) && $work->published_at ? 'Published '.$work->published_at->diffForHumans() : 'Publish?') }}
										</label>
										@if(isset($work) && $work->published_at)
											<div>
												<a href="/portfolio/{{{ $work->slug }}}" target="_blank">/portfolio/{{{ $work->slug }}}</a>
											</div>
										@endif
									</div>
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
