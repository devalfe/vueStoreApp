<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ env('APP_NAME') }}</title>
	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
	<!-- Styles -->
</head>

<body>
	<div id="app">
		<example-component :listado='personas'></example-component>
		<pre>@{{ $data }}</pre>
	</div>
</body>
<script type="text/javascript" src="{{mix('js/app.js')}}"></script>

</html>