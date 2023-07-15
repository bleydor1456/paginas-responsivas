<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Especial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #f8f9fa;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .jumbotron {
            background-image: url("chim.png");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px;
            text-align: center;
        }

        .card {
            margin-bottom: 20px;
        }

        @media (max-width: 767px) {
            .jumbotron {
                padding: 50px;
            }
        }

        @media (max-width: 575px) {
            body {
                padding-top: 110px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Evento de cheems</a>
        </nav>
    </header>

    <div class="container">
        <div class="jumbotron">
            <h1>Evento Especial de Cheems el perro</h1>
            <p>¡No te pierdas este evento único y emocionante!</p>
            <a href="#registro" class="btn btn-primary btn-lg">Regístrate ahora</a>
        </div>

        <section id="informacion">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Sobre el evento</h2>
                    <p>Cheem el perro estara el Chiapas, va a hacer saltos y luego se va a dormir</p>
                </div>
                <div class="col-lg-6">
                    <h2>Horarios</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Lunes: 9:00 AM - 5:00 PM</li>
                        <li class="list-group-item">Miercoles: 9:00 AM - 5:00 PM</li>
                        <li class="list-group-item">Viernes: 9:00 AM - 3:00 PM</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="oradores">
            <h2>Oradores destacados</h2>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top"
                        src="data:image/jpeg;base64,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"
                        alt="Orador 1">
                    <div class="card-body">
                        <h5 class="card-title">el Hot Spanish</h5>
                        <p class="card-text">Youtuber Mexicano</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top"
                        src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/newscms/2016_19/1534611/160512-kim-jong-un-mn-1120.JPG"
                        alt="Orador 2">
                    <div class="card-body">
                        <h5 class="card-title">김정은</h5>
                        <p class="card-text">북한의 최고지도자</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="precios">
            <h2>Precios de entradas</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Entrada General</h5>
                            <h6 class="card-subtitle mb-2 text-muted">$99</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Acceso a todas las sesiones</li>
                                <li class="list-group-item">Material del evento</li>
                                <li class="list-group-item">Coffe breaks</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Entrada VIP</h5>
                            <h6 class="card-subtitle mb-2 text-muted">$199</h6>
                            <ul class="list-group">
                                <li class="list-group-item">Acceso a todas las sesiones</li>
                                <li class="list-group-item">Material del evento</li>
                                <li class="list-group-item">Asientos reservados en primera fila</li>
                                <li class="list-group-item">Coffe breaks y almuerzo VIP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="registro">
            <h2>Registro</h2>
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
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
                </div>
                <button type="submit" class="btn btn-primary">Enviar registro</button>
            </form>
        </section>

        <footer class="mt-5">
            <p class="text-center">&copy; 2023 Evento Especial. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>

</html>