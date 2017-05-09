<div id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-6">
            <span class="hidden-sm hidden-xs">
                <a href="//publishers.playpylon.com" class="signup-button">Switch to Publishers</a>
            </div>
            <div class="col-sm-6 col-xs-6 text-right">
            @include('includes.usermenu')
            </div>
        </div>
        <div class="top-divider"></div>
    </div>
</div>

<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="icon-navicon"></span>
                </button>
                <a class="navbar-brand bold" href="/" style="">
                    <img src="/assets/img/logo_white.png" data-dark-src="/assets/img/logo_blue.png" style="display:inline" alt="PlayPylon" class="logo">
                    <span>{{ config('app.name') }}<span style="color:#237fef;">:Publisher</span></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about">ABOUT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
    </nav>