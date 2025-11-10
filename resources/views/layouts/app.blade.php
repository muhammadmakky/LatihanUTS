<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun - @yield('title', 'Pusat Ilmu IT Gratis')</title>
    
    <link href="{{ asset('bootstrap5.2/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }
        
        main {
            flex-grow: 1; 
            flex-shrink: 0;
        }
        
        :root {
            --primary-color: #007bff;
            --dark-blue: #1a237e; 
            --accent-green: #4caf50; 
            --text-dark: #212529;
        }
        
        .footer { 
            background-color: var(--dark-blue); 
            color: white;
            flex-shrink: 0; 
            margin-top: auto; 
        }

        body { background-color: #f4f7f9; }
        .navbar { background-color: white !important; }

        .hero-image { 
            height: 350px; 
            background: linear-gradient(90deg, var(--dark-blue), var(--primary-color));
            margin-bottom: 3rem; 
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        .article-box {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,.08);
            transition: transform 0.3s;
        }
        .article-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,.15);
        }
        .article-thumb {
            width: 250px; 
            height: 150px;
            margin-right: 30px;
            border-radius: 8px;
            overflow: hidden;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-green));
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 1rem;
            font-weight: 500;
            padding: 10px;
        }
        .read-more-btn {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }
        .read-more-btn:hover { background-color: var(--primary-color); }
        .writer-circle { 
        width: 150px; 
        height: 150px; 
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid var(--accent-green);
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold text-dark" href="{{ route('home') }}">EduFun</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('home') }}">Home</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('category.show', 'interactive-multimedia') }}">Interactive Multimedia</a></li>
                                <li><a class="dropdown-item" href="{{ route('category.show', 'software-engineering') }}">Software Engineering</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('writers') }}">Writers</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{ route('popular') }}">Popular</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="footer text-center py-3">
        <p class="m-0">EduFun 2025 | Web Programming | Muhammad | 2702285454</p>
    </footer>

    <script src="{{ asset('bootstrap5.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>