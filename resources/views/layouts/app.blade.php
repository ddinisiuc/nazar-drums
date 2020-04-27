<!DOCTYPE html>
<html lang="ru">
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Sphene</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" type="text/css"  href="{{ asset('/css/colors/blue.css') }}" id="colors">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
     <title>Nazar-Drums</title>
</head>
<body>
 <div id="loader-wrapper">
	<div id="loader"></div>
</div>
<div id="wrapper">

    @yield('content')

    @include('layouts.includes.footer')
    
    @yield('scripts')
</div>
</body>
</html>
