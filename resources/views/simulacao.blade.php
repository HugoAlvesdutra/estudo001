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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
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
  
  <!--**********************************************************************************-->   
  <!--******************************CABEÇALHO DA PÁGINA*********************************--> 
  <!--**********************************************************************************--> 

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
 
  <br><br>

    <!--**********************************************************************************--> 
    <!--******************************FORMULÁRIO DE CADASTRO******************************--> 
    <!--**********************************************************************************--> 

  <div class="card mx-auto mt-5" style="width: 30rem;">          
      <div class="card-header text-center bg-dark">
          <a class="text-light"></a>
          <img class="card-img-top img-fluid" src="images/familia.jpg" alt="Card image cap">
      </div>
      <div class="card-body">        
          <div class="form-group" id="form-group" name="form-group">
              <form id="form_simulacao" name="form_simulacao" action="/enviardados" method="POST">
                {{ csrf_field() }}
                <h5 class="card-title">Informe os dados para sua simulação</h5>  
                <div class="row">
                  <div class="col-12">
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" maxlength="100">                  
                  </div>                                
                </div>
                <div class="row mt-2">                
                    <div class="col-12">
                      <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" maxlength="200">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-5">
                      <input class="form-control" type="number" name="idade" id="idade" placeholder="Idade" maxlength="2">                  
                    </div>                
                    <div class="col-7">
                      <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Telefone" maxlength="20">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-5">
                      <input class="form-control" type="number" name="dependentes" id="dependentes" placeholder="Dependentes">                  
                    </div>                                  
                </div>
                <div id="div_dependentes" class="form-control mb-2 center-block">
                </div>                            
                <div class="row ml-0">                  
                  <button class="btn btn-primary btn-block ">Enviar dados</button>
                </div>
              </form>
          </div>        
      </div>
  </div>

  <script>
    $(function(){
      $('.card .card-body #form-group').append('<div class="row mt-2 mb-2">')
      $('#dependentes').on('keydown',function(){
          var dependentes = $('#dependentes').val();          
          for(i = 0; i< dependentes; i++)
          {
            $('.dimanico').remove();
          }
          for(i = 0; i< dependentes; i++)
          {
            $('#form-group #div_dependentes').append('<div class="col-12 mt-2 dimanico"><input class="form-control dimanico" type="number" name="dependente_'+i+'" id="dependente_'+i+'" placeholder="idade '+i+'"></div>');          
          }
      })
      $('#form-group').append('</div')

      $('form input').on('keypress', function(e) {
        return e.which !== 13;
      });
    })                  
  </script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>