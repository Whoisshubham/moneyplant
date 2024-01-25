<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.header_link')
    <title>Money Plant</title>
</head>

<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>

</html>
