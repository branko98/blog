<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.header')
    </head>
    <body>
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title"><a href ="/posts">Laravel blog</a></h1>
            </div>
            
        </div>
        <div class="container">
                @if (!(Auth::check()))
                    <a href="/login" class="ml-auto">Login</a>
                    <a href="/register" class="ml-auto">Registrate</a>
                @endif
                
                @if (Auth::check())
                    <p>
                       Wellcome {{ Auth()->user()->name }}!
                    </p>
                    <a class='nav ml-auto' href="/logout">Log out</a>
                @endif
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                    @include('partials.sidebar')
                </div>
            </div>
        </div>
        @include('partials.footer')
    </body>
</html>