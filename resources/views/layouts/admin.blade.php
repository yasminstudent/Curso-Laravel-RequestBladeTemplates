<!DOCTYPE html>
    <html>
        <head>
            <title>@yield('title') - LARAVEL</title>
        </head>
        <body>
            <header>
                <h1>Header</h1>
            </header>
            <hr>

            <section>
                @yield('content')
            </section>

            <hr>
            <footer>
                <h1>Footer</h1>
            </footer>
        </body>
    </html>
