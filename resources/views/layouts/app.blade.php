{{-- filepath: resources/views/blog.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<x-header />

<body class="bg-gray-100 font-sans">
    <!-- Navbar --><!-- Header -->
    <x-navbar />

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">

        @yield('content')

    </main>
    <!-- Footer -->
    <x-footer />

</body>
</html>
