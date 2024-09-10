<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Role Management</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .search-container {
            background-color: #f4f4f4;
        }

        .card {
            margin: 10px 0;
            padding: 15px;
        }

        .user-info {
            font-weight: bold;
        }

        .container {
            background-color: #f4f4f4;
            margin-top: 30px;
            padding: 35px;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

</html>