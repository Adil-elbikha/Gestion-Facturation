
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gestion-Facture</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
    <style>
    
    body {
        background: url(images/evolution-of-invoices.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    //////////////
    html, body {
  height: 100%;
}

body {
  display: flex;
  background-color: #f5f5f5;
  font-family: "Montserrat", sans-serif;
}

.insta-default {
  margin: auto;
}
.insta-default a {
  padding: 15px 30px;
  display: block;
  background-color: #E33E5C;
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.1);
  color: #FFF;
  border-radius: 4px;
  text-transform: uppercase;
  font-weight: bold;
  text-decoration: none;
  transition: all 0.3s;
}
.insta-default a:hover {
  box-shadow: 0 0 4px 3px rgba(0, 0, 0, 0.15);
  transition: all 0.3s;
}
.insta-default a i {
  color: #FFF;
  font-size: 18px;
}
</style>

</head>


<body class="text-center">

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"><br><br><br><br><br><br><br><br><br><br><br><br>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" >Dashboard</a>
            @else
            <div class="insta-default">
            <a href="{{ route('login') }}" class="insta-default">Login <i class="fa fa-instagram"></i></a>
            </div><br>
            
               <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" >Login</a>-->

                @if (Route::has('register'))
                <div class="insta-default">
            <a href="{{ route('register') }}" class="insta-default">Register <i class="fa fa-instagram"></i></a>
            </div>
                    <!--<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>-->
                @endif
            @endauth
        </div>
        @endif
        </header>




        <footer class="mastfoot mt-auto">
            <div class="inner">
            </div>
        </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/examples/cover/assets/js/vendor/jquery-slim.min.jss"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>


<script>

</script>

</body>
</html>
