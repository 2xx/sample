<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','练习页')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
  	@include('layouts._header')
  	<div class="container">
      @include('shared._messages')
  		@yield('content')
      @include('layouts._footer')
  	</div>
  </body>
</html>