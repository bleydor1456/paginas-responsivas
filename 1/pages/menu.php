<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
        }

        section {
            margin-top: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .menu-item {
            grid-template-columns: 1fr;
            grid-gap: 10px;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .menu-item img {
            width: 50%;
            border-radius: 5px;
        }

        .menu-item h3,
        .menu-item p {
            color: #333;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <section>
            <h2>Nuestro Menu</h2>
            <div class="menu-item">
                <img src="photos/sandwichqueso.jpg" alt="Plato 1">
                <h3>Sandwich</h3>
                <p>Bellaco Sandwich insano de queso.</p>
            </div>
            <div class="menu-item">
                <img src="photos/quesadillas.jpeg" alt="Plato 2">
                <h3>Quesadilla</h3>
                <p>Sin queso para los chilangos.</p>
            </div>
            <div class="menu-item">
                <img src="photos/sopadomacacokkk.png" alt="Plato 3">
                <h3>Sopa</h3>
                <p>sopa feita de macaco kkk é do brasil.</p>
            </div>
        </section>
    
    </div>
</body>

</html>