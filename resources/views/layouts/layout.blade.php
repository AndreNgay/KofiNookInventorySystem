<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

        .navbar-icon {
            width: 50px;
            height: 50px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        body {
            font-family: 'Lora', serif !important;
            font-weight: 400;
            font-size: 20px;
        }

        .regular {
            font-weight: 400;
            font-size: 20px;
        }

        h1, .bold {
            font-weight: 700;
            font-size: 50px;
        }

        h2, .semi-bold {
            font-weight: 600;
            font-size: 40px;
        }

        h3, .medium {
            font-weight: 500;
            font-size: 30px;
        }

        .icon {
            object-fit: cover;
            border-radius: 50%;
            height: 200px;
            width: 200px;
            margin: 0 auto;
            display: block;
        }


        .sign-in-btn {
            background: #3498db;
            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
            background-image: -o-linear-gradient(top, #3498db, #2980b9);
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            -webkit-border-radius: 17;
            -moz-border-radius: 17;
            border-radius: 17px;
            font-family: Georgia;
            color: #000000;
            font-size: 20px;
            background: #e5c572;
            padding: 10px 40px 10px 40px;
            text-decoration: none;

        }



        .sign-in-btn:hover {
            background: #fff2d7;
            text-decoration: none;
        }

        .gradient-background {
            background: rgb(255, 245, 215);
            background: linear-gradient(54deg, rgba(255, 245, 215, 1) 0%, rgba(229, 197, 114, 1) 100%);

        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        @if (Auth::check())
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="navbar-icon"
                        src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/271940893_114450207785307_7250851304198467840_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a2f6c7&_nc_eui2=AeGp7qjvKQVWK1cy5VERvDrlSFnVme1skAJIWdWZ7WyQAoqqOgSo3GpQKcN1lAWCEncK596aR6ZXTA8L7nVjL2nv&_nc_ohc=l9qsD4gKFpMAX8x2oyf&_nc_ht=scontent.fmnl17-1.fna&oh=00_AfAbGEvhv3bzDy41dqWYxKWfwlWkg3pnhhSfaapAPlFi_Q&oe=65194F32"
                        alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Unit</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Accounts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Report</a>
                        </li>
                    </ul>
                </div>
                <div class="ms-auto">
                    <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png" alt="" width="30px">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @endif
        <!-- End of Navbar -->
        @yield('content')

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>