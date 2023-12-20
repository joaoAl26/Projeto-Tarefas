<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="api.css">
    <script src="api.js"></script>
  
  <style>
      
      body{ font: 20px sans-serif;
      background-color:rgb(39, 39, 39) ; }
      .wrapper{ width: 360px; padding: 20px; }
  </style>

</head>
<body>
    <br>
    <br>
    <br>
<div class="container-fluid p-0 container-sm d-flex justify-content-center">

<div class="card text-center shadow-lg" style="width: 26rem;">

  <div class="card-header bg-white text-dark font-weight-bold">
    Tempo e Temperatura
  </div>
  <div class="card-body">
    <div class="city">Cidade, Brasil</div>
    <div class="date">Quinta, 12 Novembro 2023</div>
    <div class="container-img">
    </div>
    <div class="container-temp mx-4 my-3">
    </div>
    <div class="weather py-2">Chuva</div>
    <div class="low-high">22°c/23°c</div>
  </div>
  <div class="card-footer bg-white">
    <div class="input-group ">
      <input type="text" class="form-control bg-light" placeholder="Digite o nome da cidade" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-warning text-dark" type="button" placeholder="Procurar" id="button-addon2">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </div>

</div>
</div>
</body>
</html>