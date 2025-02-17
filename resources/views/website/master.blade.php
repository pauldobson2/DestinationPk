<!DOCTYPE html>
<html lang="en">
    @include('website.header')
    <body>
        <div class="page-wrapper">
    @include('website.navigationbar')          
    <main>
        @yield('content')
</main>
@include('website.valuable')
@include('website.testimonials')
@include('website.footer')


</body>
</html>
