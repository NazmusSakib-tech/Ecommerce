<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Ecommerce Project</title>
        
        @include('partials.styles')
        
    </head>

    <body>
        <div class="wrapper">
            <!-- Navigation Bar -->
                @include('partials.nav')
            <!-- End Navbar Bar -->

                @yield('content')

            <!-- Site footer -->

            @include('partials.footer')

            <!-- End Footer -->


        </div>



      @include('partials.scripts')
        
    </body>

    </html>