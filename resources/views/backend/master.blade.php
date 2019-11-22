<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.partials.header')
        @yield('styles')
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('backend.partials.navbar')
                @include('backend.partials.sidebar')
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div style="padding-top: 10px;">
                        <div class="row">
                            <div class="col-lg-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @include('backend.partials.footer')
            @yield('javascripts')
    </body>
</html>





