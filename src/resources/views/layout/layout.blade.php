<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Snagged</title>
        <link rel="stylesheet" href="/css/app.min.css">
        <link rel="stylesheet" href="/css/vendor.min.css">
    </head>
    <body>
        <div class="navbar-container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Snagged</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home<i class="fa fa-home"></i></a></li>
                            <li><a href="#projects">Projects<i class="fa fa-file"></i></a></li>
                            <li><a href="#settings">Settings<i class="fa fa-cogs"></i></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
