<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Page Design</title>

    <!-- Link to Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="resources/css/style.css">

    <style>
        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            background-color: #282828;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 15px 20px;
            font-size: 18px;
            border-bottom: 1px solid #444;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .sidebar .active {
            background-color: #4CAF50;
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle {
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 22px;
            padding: 10px 20px;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001;
        }

        /* Main Content Area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .header {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 2rem;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #333;
        }

        .navbar a {
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar a:hover {
            background-color: #444;
        }

        /* Content Section */
        .content {
            padding: 20px;
        }

        .content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>


<!-- Main Content -->
<div class="main-content">
       <!-- Navbar -->
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">News</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
    </div>
    <div>
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Link with href
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');
        const sidebarToggle = document.querySelector('.sidebar-toggle');

        if (sidebar.style.width === '0px' || sidebar.style.width === '') {
            sidebar.style.width = '250px';
            mainContent.style.marginLeft = '250px';
        } else {
            sidebar.style.width = '0';
            mainContent.style.marginLeft = '0';
        }
    }
</script>

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
