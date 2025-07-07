<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Posts Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #f8f9fa;
        }
        body {
            background-color: var(--secondary-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            min-height: calc(100vh - 156px);
            padding: 2rem 0;
        }
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('posts.index') }}">
                <i class="fas fa-blog me-2"></i>Posts Manager
            </a>
            <div class="navbar-nav">
                <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}"
                   href="{{ route('posts.index') }}">
                   <i class="fas fa-list me-1"></i>All Posts
                </a>
                <a class="nav-link {{ request()->routeIs('posts.create') ? 'active' : '' }}"
                   href="{{ route('posts.create') }}">
                   <i class="fas fa-plus me-1"></i>New Post
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto">
        <div class="container">
            <span class="text-white">&copy; {{ date('Y') }} Posts Manager. All rights reserved.</span>
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
