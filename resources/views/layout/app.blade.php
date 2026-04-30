<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DK Furniture</title>

    <!-- Bootstrap code -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 1st project CSS -->
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/partials_product.css') }}">
</head>

<body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

    @include('All file Merge.navbarhead')

    {{--carousel main content--}}
    <main>
        @yield('content')
    </main>

    {{-- @section('content')
        @include('All file Merge.Gallery_Cart')
        ---isss page ko load kerna ha toh tere ko pahele apne ek naya folder bana padega jise tera Gallery_cart folder view kerega---
        @endsection --}}
    
    {{-- FOOTER --}}
    @include('All file Merge.footer')

    <!-- Bootstrap JS -->
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DK Furniture</title>

    <!-- Bootstrap code -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 1st project CSS -->
    <link rel="stylesheet" href="{{ asset('css/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/partials_product.css') }}">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @include('All file Merge.navbarhead')

    {{--carousel main content--}}
    <main>
        @yield('content')
    </main>

    {{-- @section('content')
        @include('All file Merge.Gallery_Cart')
        ---isss page ko load kerna ha toh tere ko pahele apne ek naya folder bana padega jise tera Gallery_cart folder view kerega---
        @endsection --}}
    
    {{-- FOOTER --}}
    @include('All file Merge.footer')

    <!-- Bootstrap JS -->
</body>
>>>>>>> 945acca8eb7b255715e39fe5f8e6e3c2280ddfe3
</html>