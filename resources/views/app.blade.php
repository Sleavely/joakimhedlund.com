<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Joakim Hedlund, web enthusiast</title>

	@section('stylesheets')
		<link href="{{{ asset('css/bootstrap.css') }}}" rel="stylesheet" type="text/css" />
		<link href="{{{ asset('css/font-awesome.min.css') }}}" rel="stylesheet" type="text/css" />
		<link href="{{{ asset('css/drunken-parrot.css') }}}" rel="stylesheet" type="text/css" />
		<style>
		html,
		body
		{
			background-color: #f5f5f5;
		}
		/* Override and imitate Drunken Parrot to avoid redundant elements/scripts */
		.checkbox,
		.radio
		{
			padding-left: 0px;
		}
		.checkbox label,
		.radio label
		{
			padding-left: 32px;
		}
		.checkbox input[type="checkbox"],
		.radio input[type="radio"]
		{
			display: inline-block;
			height: 0px;
			margin-left: 0px;
			width: 0px;
		}
		.checkbox input:before
		{
			background: white;
			border: 1px solid #d6e1e5;
			border-radius: 4px;
			color: #02baf2;
			content: "";
			display: inline-block;
			font-family: FontAwesome;
			font-size: 16px;
			height: 20px;
			text-align: center;
			width: 20px;
		}
		.checkbox input:checked:before
		{
			content: "\f00c";
		}

		</style>
	@show


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">JoakimHedlund.com</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/admin">Dashboard</a></li>
					<li><a href="/admin/blog">Blog</a></li>
					<li><a href="/admin/portfolio">Portfolio</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	@section('scripts')
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@show
</body>
</html>
