<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title','Developers Best Friend')
    </title>
    <meta charset='utf-8'>
    <link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
</head>
<body>

    <header>
        <h1>Developer's Best Friend</h1>
    </header>

    <nav>
        <ul class="nav nav-pills">
            <li role="presentation"><a href="/">Home</a></li>
            <li role="presentation"><a href="/loremipsum">Lorem Ipsum Generator</a></li>
            <li role="presentation"><a href="/randomuser">Random User Generator</a></li>
        </ul>
    </nav>

    <section class="container">
        @yield('content')
    </section>

    <footer class="footer navbar-fixed-bottom">
        &copy; {{ date('Y') }} Matt Lee for CSCI E-15 Developing Web Applications
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
