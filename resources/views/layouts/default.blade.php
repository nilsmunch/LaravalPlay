<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div id="wrapper">
    <header>
            @include('includes.header')
    </nav>
            @yield('header')
    </header>

<div class="container body">
    <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
        </div>
    </div>


    <footer>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @include('includes.footer')
        </div>
    </div>
</div>
</footer>
</div>
    <script>
        var resizefunc = [];
    </script>
    <script src="/assets/libs/less-js/less-1.7.5.min.js"></script>
    <script src="/assets/libs/pace/pace.min.js"></script>
    <script src="/assets/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/libs/jquery-browser/jquery.browser.min.js"></script>
    <script src="/assets/libs/fastclick/fastclick.js"></script>
    <script src="/assets/libs/stellarjs/jquery.stellar.min.js"></script>
    <script src="/assets/libs/jquery-appear/jquery.appear.js"></script>
    <script src="/assets/js/init.js"></script>
</body>
</html>