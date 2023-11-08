<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <style>
        .btn1{
            font-size : 1em;
            color :#ffff;
            background : #dc3545;
            padding : 10px 20px ;
            display: inline-block;
            margin-top: 20px;
            text-transform : uppercase;
            text-decoration:none;
            letter-spacing:2px;
            transition: 0.5em;
            margin-left: 10px;
        }
        .btn2{
            font-size : 1em;
            color :#dc3545;
            background : #ffff;
            padding : 10px 20px ;
            display: inline-block;
            margin-top: 20px;
            text-transform : uppercase;
            text-decoration:none;
            letter-spacing:2px;
            transition: 0.5em;
            margin-left: 10px;
        }
        .btn1: hover{
            background-color:#2a4963;
        }
        .btn2: hover{
            background-color:#fb911f;
        }
        .body{
            background-image:url(assets/images/tabletop.jpg);
            background-size:cover;
            position: relative;
            width:100%;
            min-height:100vh;
            display : flex ;
            justify-content: center;
            align-items:center;
        }
    </style>
    <section class="body" id ="body">
        <a class="btn2" href="{{ route('login') }}">CONNEXION</a></li> 
        <a class="btn1" href="{{ route('register') }}" >INSCRIPTION</a></li>
    </section> 
</body>
</html>
@section('content')