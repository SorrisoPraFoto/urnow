
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Urna eletrônica</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/urna.css">
  </head>


  <body>

    <div class="container">
        <div class="title-container">
            <h1 class="urna-title">VOTE AGORA!</h1>
        </div>
        <main>
            <div class="main-container">
                <div class="center">
                    <button type="button" id="btn-inicie-agora" class="btn btn-success" >Iniciar votação</button>
                    <div class="input-group input-group-lg" style="display: none">
                        <div class="input-group-prepend">
                            <span class="input-group-text " id="inputGroup-sizing-lg">Número do voto</span>
                        </div>
                        <input type="text" class="form-control input-voto" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        <button type="button" class="btn btn-success btn-votar">Votar</button>
                    </div>


                    
                </div>
                <div class="branco-container d-flex" style="display: none">
                        <button type="button" style="display: none" id="branco" class="btn btn-light">Branco</button>
                        <button type="button" style="display: none" id="nulo" class="btn btn-light">Nulo</button>
                    </div>
            </div>
        </main>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/urna.js"></script>

  </body>
</html>