@extends('app')

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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
