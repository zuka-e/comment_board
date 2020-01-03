<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<div id="app">
		@include('layouts.header')
		<main class="container py-4">
			@if (session('msg'))
				<div class="alert alert-{{ session('msg_type') }}">
						{{ session('msg') }}
				</div>
			@endif
			@yield('content')
		</main>
		@include('layouts.footer')
	</div>
</body>
</html>

