<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Langit Nusantara</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { background: #2d2d2d; color: #fff; }
        .admin-sidebar {
            min-height: 100vh;
            background: #1a1a1a;
            padding: 20px 0;
            position: fixed;
            width: 250px;
            top: 0; left: 0;
            z-index: 100;
        }
        .admin-sidebar .brand {
            padding: 20px;
            border-bottom: 1px solid #333;
            margin-bottom: 20px;
        }
        .admin-sidebar .brand h4 {
            color: #e8604c;
            margin: 0;
            font-weight: 700;
        }
        .admin-sidebar .brand small {
            color: #999;
            font-size: 11px;
        }
        .admin-sidebar a {
            display: block;
            padding: 12px 20px;
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s;
        }
        .admin-sidebar a:hover,
        .admin-sidebar a.active {
            background: #e8604c;
            color: #fff;
        }
        .admin-sidebar a span {
            margin-right: 8px;
        }
        .admin-content {
            margin-left: 250px;
            padding: 30px;
            min-height: 100vh;
        }
        .admin-topbar {
            background: #1a1a1a;
            padding: 15px 30px;
            margin-left: 250px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
        }
        .admin-topbar h5 { margin: 0; color: #fff; }
        .admin-topbar a {
            color: #e8604c;
            text-decoration: none;
        }
        .card-admin {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
        }
        .table { color: #ccc; }
        .table thead th {
            border-bottom: 2px solid #e8604c;
            color: #e8604c;
        }
        .table td, .table th { border-color: #333; }
        .form-control {
            background: #2d2d2d;
            border: 1px solid #444;
            color: #fff;
        }
        .form-control:focus {
            background: #2d2d2d;
            border-color: #e8604c;
            color: #fff;
            box-shadow: none;
        }
        label { color: #ccc; }
        .btn-primary { background: #e8604c; border-color: #e8604c; }
        .btn-primary:hover { background: #d4503c; border-color: #d4503c; }
        .alert-success {
            background: #1a3a1a;
            border-color: #2d6a2d;
            color: #5cb85c;
        }
    </style>
</head>
<body>

{{-- Sidebar --}}
<div class="admin-sidebar">
    <div class="brand">
        <h4>Langit Nusantara</h4>
        <small>Admin Panel</small>
    </div>
    <a href="{{ route('admin.blogs.index') }}" 
       class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
        <span>&#9998;</span> Kelola Blog
    </a>
    <a href="{{ route('home') }}">
        <span>&#8962;</span> Lihat Website
    </a>
    <a href="{{ route('admin.logout') }}" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span>&#x2715;</span> Logout
    </a>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">
        @csrf
    </form>
</div>

{{-- Topbar --}}
<div class="admin-topbar">
    <h5>@yield('page-title', 'Dashboard')</h5>
    <span style="color:#999">Halo, Admin</span>
</div>

{{-- Content --}}
<div class="admin-content">
    @yield('content')
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>