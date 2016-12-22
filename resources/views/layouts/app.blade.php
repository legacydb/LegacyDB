<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Legacy</title>
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/global.css') }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>	
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Legacy</h2>
		</div>
		<div class="main-nav">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/guides">Guides</a></li>
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
					<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				@endif
			</ul>
		</div>
		<div class="main-content">
			@yield('content')
		</div>
	</div>
</body>
</html>