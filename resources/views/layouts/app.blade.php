<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}
    <div id="app">
        @include('includes.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
      <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
