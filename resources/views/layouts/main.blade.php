<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Style CSS --}}
    <link rel="stylesheet" href="css/style.css">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <title>Kemala Blog | {{ $title }}</title>
  </head>
  <body>
      @include('partials.navbar')

      <div class="container mt-2">
        @yield('container')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- FOOTER -->
        <div class="footer footer-expand-lg footer-light bg-warning" style="padding: 2px">
            <footer class="container">
                <p>&copy; 2020–2021 Kemala.Personal Web, Inc. &middot; <a href="/">Home</a> &middot; <a href="/contact">Contact</a></p>
            </footer>
        </div>

  </body>
</html>
