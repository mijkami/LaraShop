<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    {{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}
    <main id="app">
        @include('includes.header')
        <section class="pb-5">
            @yield('content')
        </section>
    @include('includes.footer')
    </main>
    @include('includes.scripts')
</body>
</html>
