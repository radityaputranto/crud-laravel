<!DOCTYPE html>
<html>
<head>
	<title>@yield('tittle')</title>
</head>
<body>
	<header style="background-color: #e3e3e3">
		<nav>
			<a href="/">Home</a>
			<a href="/blog">Blog</a>
		</nav>		
	</header>


	@yield('content')


	<footer style="background-color: #e6e6e6">
		<center><H4>&copy; laravel Raditya 2017</H4></center>
	</footer>
</body>
</html>