<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi proyecto larabel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
<div class="container-fluid p-5 bg-danger text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    @component('_components.card')
      @slot('imagen', asset('assets/img/EVND.jpg'))
      @slot('titulo', 'EVND')
      @slot('contenido', 'Entornos Virtuales y Negocios Digitales')
    @endcomponent

    @component('_components.card')
      @slot('imagen', asset('assets/img/OLCE.jpg'))
      @slot('titulo', 'OLCE')
      @slot('contenido', 'Operaciones Logisticas y Comercio Exterior')
    @endcomponent

    @component('_components.card')
      @slot('imagen', asset('assets/img/ASP.jpg'))
      @slot('titulo', 'ASP')
      @slot('contenido', 'Agricultura Sustentable y Protegida')
    @endcomponent

    @component('_components.card')
      @slot('imagen', asset('assets/img/MKT.jpg'))
      @slot('titulo', 'MKT')
      @slot('contenido', 'Mercadotecnia')
    @endcomponent
  </div>
</div>

</body>
</html>