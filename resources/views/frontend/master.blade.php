
<!DOCTYPE html>
<html lang="en">

	<head>
    	@include('frontend.partials.header')
  	</head>
  	<body>

  		@include('frontend.partials.navbar')

	    @yield('content')

    	@include('frontend.partials.footer')
	</body>

</html>