<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Include Bootstrap CSS or any other CSS framework -->
</head>
<body>
    <nav>
        <ul>
        <li><a href="{{ route('logout') }}">Se déconnecter</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>