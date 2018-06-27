<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="css/bootstrap-reboot.min.css" type="text/javascript">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>   
    <style>
      li:hover{
        text-shadow: 0px 0px 25px whitesmoke;       
        transition-duration: 0.5s; 
      }
      li:not(:hover){        
        text-shadow: 0px 0px 0px white;       
        transition-duration: 0.5s;
      }
     
    </style>
</head>
<body class="bg-light">        
    <header class="fixed-top">
      <div class="shadow-lg bg-white rounded">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src= "images/stethoscope-icon.png" width="50" ></a>        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Principal<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/simulacao">Faça uma simulação</a>
                </li>                      
              </ul>
              <form class="form-inline my-2 my-lg-0" action="/users" method="POST">
                {{ csrf_field() }}
                <input type="text" name="usuario" id="usuario" placeholder="usuário..."class="form-control pr-3 mr-3 mb-2">
                <input type="password" name="senha" id="senha" placeholder="senha..." class="form-control pr-3 mr-3 mb-2">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
              </form>
            </div>
        </nav>
    </div>
  </header>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>