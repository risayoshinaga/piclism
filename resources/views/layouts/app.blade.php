<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PicMe</title>
        

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="infiniteslide.js"></script>
        <script type="text/javascript" src="jquery.pause.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Chonburi%7CHind+Madurai%7CCaveat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
        
        
        


   
    </head>
    <body>
         <div class="jumbotron">
        @include('commons.navbar')
        
        
        <div class="center jumbotron">
        <div class="container">
            @include('commons.error_message')

            @yield('content')
        </div>
        </div>
    </div>
    </body>
<footer>&copy;2018 Noisyy.</footer>
</html>
