@include('../partials.head')
<body>
   <div class="wrapper">
    @include('../partials.sidebar')
    @yield('conten')

     {{-- @include('../partials.main') --}}
   </div>


@include('../partials.footer')
</body>
</html>
