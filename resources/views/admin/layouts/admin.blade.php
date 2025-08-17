<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        .sidebar {
            width: 200px;
            background-color: #343a40;
            color: white;
            position: fixed;
            top: 60px;
            bottom: 0;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            margin-top: 60px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>

    <div class="sidebar">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="#">Manage Users</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
        <form method="POST" action="{{ route('admin.logout') }}" style="margin-top:20px; padding:0 20px;">
            @csrf
            <button type="submit" style="width:100%; padding:10px; background:#dc3545; color:white; border:none; border-radius:4px; cursor:pointer;">Logout</button>
        </form>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
