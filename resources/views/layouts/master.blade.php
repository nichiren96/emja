<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @yield('customMetaTag')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @yield('customCss')
</head>

<body>

    <header>
        <nav id="navbar" class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <div class="navbar-brand">Milakandra</div>
                <div class="navbar-nav">
                    <a class="nav-item nav-link active">Home</a>
                    <a class="nav-item nav-link">Jobs</a>
                    <a class="nav-item nav-link">Employees</a>
                    <a class="nav-item nav-link">Contact</a>
                </div>

                @if (Auth::check())
                    <span class="navbar-text">
                        <span>{{ Auth::user()->firstname }}</span>
                        <a href="{{ route('logout') }}">Logout</a>
                    </span>
                @else
                    <span class="navbar-text">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    </span>
                @endif
            </div>
        </nav>

        @yield('intro')

    </header>


    @yield('content')


    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        /** style="background-color: rgba(14, 155, 68, 0.667)" **/
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.background = "rgb(62, 97, 153)";
            } else {
                document.getElementById("navbar").style.background = "rgb(62, 97, 153)";
            }
        }
    </script>

    @yield('customScript')

</body>

</html>