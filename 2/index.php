<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>godfather</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">godfather</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </header>

  <div class="container">
    <div class="jumbotron">
      <h1>Bienvenido a nuestra tienda de moda</h1>
      <p>Descubre las últimas tendencias en moda para hombres y mujeres.</p>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h2>Productos destacados</h2>
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="https://imagena1.lacoste.com/dw/image/v2/AAUP_PRD/on/demandware.static/-/Sites-master/default/dw64347aa3/CH5619_166_20.jpg?imwidth=915&impolicy=product" alt="Producto 1">
            <div class="card-body">
              <h5 class="card-title">Camisa de hombre Lacoste Golf de manga corta con estampado</h5>
              <p class="card-text">Esta moderna camisa de alto rendimiento hará que no pases desapercibido, de la cancha a la casa club.</p>
              <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6a583fbfdd8f4a2781fe80216cdc23c9_9366/Tenis_Adizero_Boston_12_Negro_HQ2171_01_standard.jpg" alt="Producto 2">
            <div class="card-body">
              <h5 class="card-title">TENIS ADIZERO BOSTON 12</h5>
              <p class="card-text">La Maratón de Boston® es una carrera. Pero también es un objetivo, un plan de entrenamiento y está en tu mente todos los días antes del gran reto. Los tenis Adizero Boston 12 están diseñados para correr distancias medias y largas. Inyectan una sensación de propulsión a cada entrenamiento con la tecnología ENERGYRODS 2.0. con fibra de vidrio, que reduce la pérdida de energía bajo el pie. Son rápidos, pero esto no se consigue a expensas de la durabilidad. La mediasuela combina la amortiguación Lightstrike Pro ultraliviana con la nueva versión de la tecnología LIGHTSTRIKE 2.0 EVA resistente.</p>
              <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h2>Categorías de productos</h2>
        <ul class="list-group">
          <li class="list-group-item"><a href="">Caballero</a></li>
          <li class="list-group-item"><a href="">Dama</a></li>
          <li class="list-group-item"><a href="">Niños</a></li>
        </ul>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-lg-8">
        <h2>Información sobre godfather</h2>
        <p>GodFather tiene como compromiso ofrecer de los mejores atuendos a nuestros clientes. Brindando las mejores marcas, modelos y el mayor lujo para nuestros clientes.</p>
      </div>
      <div class="col-lg-4">
        <h2>Contáctanos</h2>
        <form>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar mensaje</button>
        </form>
      </div>
    </div>

    <footer class="mt-5">
      <p class="text-center">&copy; 2023 Godfather. Todos los derechos reservados.</p>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>
</html>