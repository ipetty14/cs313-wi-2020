<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/project1.css') }}">

        <!-- Custom CSS -->
        @stack('css')

    </head>
    <body>
        <main class="content">
            <section class="header">
                <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
                    <a class="navbar-brand" href="#">League Builder</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-project-1" aria-controls="navbar-project-1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-project-1">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/project-1/teams">Teams <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/project-1/players">Players</a>
                        </li>
                      </ul>
                      @yield('search-form')
                    </div>
                  </nav>
            </section>
            @show

            <section class="content-title-section">
                @yield('content-title-section')
            </section>

            <section class="content-table">
                @yield('content-table')
            </section>
        </main>

        @stack('scripts')
    </body>
</html>


