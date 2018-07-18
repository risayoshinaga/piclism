<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Microposts</title>
        

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="infiniteslide.js"></script>
        <script type="text/javascript" src="jquery.pause.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <link href="https://fonts.googleapis.com/css?family=Chonburi|Hind+Madurai|Caveat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
        


   
    </head>
    <body>
        @include('commons.navbar')
    <div class="jumbotron">
        <div class="container">
            @include('commons.error_message')

            @yield('content')
        </div>
    </div>
    </body>
    <footer>(c)2018 Noissy.</footer>
</html>
