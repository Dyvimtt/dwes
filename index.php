<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tarea 9 DWES</title>
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <img src="titulo.png" alt="Titulo pokemon Poke Api ejercicio DAW">
        <link rel="stylesheet" href="style.css" type="text/css">
    </header>
    <script>
        function randomNumber() {
            var numAleatorio = Math.floor(Math.random() * 1000 + 1);
            console.log(numAleatorio);

            var respuesta = new XMLHttpRequest();
            respuesta.onreadystatechange = function () {
                if (respuesta.readyState == 4 && respuesta.status == 200) {
                    console.log(respuesta.responseText);
                    // Actualizar la interfaz con la respuesta recibida
                    document.getElementById("pokemon").innerHTML = respuesta.responseText;
                }
            };

            respuesta.open("POST", "api.php", true);
            respuesta.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            respuesta.send("numAleatorio=" + encodeURIComponent(numAleatorio));
        }

        window.onload = function() {
            randomNumber();
        };
    </script>

    <div id="boton">
        <p>Pulsa para generar un pokemon aleatorio!</p>
        <input type="button" onclick="randomNumber()" value="Aleatorio">
    </div>
    <div id="pokemon"></div>
</body>
</html>