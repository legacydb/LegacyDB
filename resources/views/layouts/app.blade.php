<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Legacy</title>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/global.css') }}" />
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
				</ul>
			</div>
			<div class="main-content">
				@yield('content')
			</div>
        </div>
    </body>
</html>