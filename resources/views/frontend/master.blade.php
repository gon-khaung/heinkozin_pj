<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- <nav class="header">
            <h2>&#9749; <a href="index.html">Cafe Shop</a></h2>
            <ul>
                <li><a href="home.html">&#127969; Home</a></li>
                <li>
                    <a href="">&#128220; Dropdown</a>
                    <ul class="dropdown-content">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                </li>
                <li><a href="cart.html">&#128722; Cart</a></li>
                <li><a href="form.html">Sign up/in</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
        </nav> -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-end" style="background-color: #371e1b">
        <a class="navbar-brand" href="{{ url('index') }}">Cafe Shop</a>

        <button class="navbar-toggler ml-auto mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mr-2">
                    <nav class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" id="dropdownButton">
                        Dropdown
                    </nav>
                    <ul class="dropdown-menu mt-2" aria-labelledby="#dropdownButton">
                        <li class="dropdown-item">One</li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('cart') }}" class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('form') }}" class="nav-link">Sign In/Up</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('feedback') }}" class="nav-link">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>



    @yield('content')



    <script type="text/javascript" src="{{asset('script.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>