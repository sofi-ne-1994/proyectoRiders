<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Electrónica - Consulta y Suscripción</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#tours">Tours</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main con Carrouseeeel -->
    <main>
        <section class="carrusel">
            <div class="slide"><img src="https://img.freepik.com/foto-gratis/cicatrizarse-ciclista-mujer-outdors_23-2149647428.jpg?t=st=1733439354~exp=1733442954~hmac=b7d63b9aa1825fe9874a53addf63d57596ca69a32dc2d7a5d45b0b79d37350e6&w=740" alt="Imagen 1"></div>
            <div class="slide"><img src="https://img.freepik.com/foto-gratis/cicatrizarse-ciclista-mujer-outdors_23-2149647428.jpg?t=st=1733439354~exp=1733442954~hmac=b7d63b9aa1825fe9874a53addf63d57596ca69a32dc2d7a5d45b0b79d37350e6&w=740" alt="Imagen 2"></div>
            <div class="slide"><img src="https://img.freepik.com/foto-gratis/cicatrizarse-ciclista-mujer-outdors_23-2149647428.jpg?t=st=1733439354~exp=1733442954~hmac=b7d63b9aa1825fe9874a53addf63d57596ca69a32dc2d7a5d45b0b79d37350e6&w=740" alt="Imagen 3"></div>
        </section>
    </main>
    <section>
        <!-- Servicios Section -->
         <section class="servicios">
            <div class="servicio servicio-1">
                <img src="./imag/obelisco.jpg" alt="Servicio 1">
                <h2>Servicio 1</h2>
                <p>Descripción del servicio 1</p>
                <button>
                    <a href="https://mpago.la/14wtN8y">comprar</a>
                </button>
            </div>
            <div class="servicio servicio-2">
                <img src="./imag/puerto-madero.jpg" alt="Servicio 2">
                <h2>Servicio 2</h2>
                <p>Descripción del servicio 2</p>
                <button>
                    <a href="https://mpago.la/2dfxBW3">comprar</a>
                </button>
            </div>
            <div class="servicio servicio-3">
                <img src="./imag/sanisidro.jpg" alt="Servicio 3">
                <h2>Servicio 3</h2>
                <p>Descripción del servicio 3</p>
                <button>
                    <a href="https://mpago.la/1MkyPm7">comprar</a>
                </button>
            </div>
        </section> 
        </section>

    <!-- Formulario de Consulta y Reserva -->
    <div class="container">
        <h1>Formulario de Consulta y Reserva</h1>
        <form method="post" action="/" enctype="form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="fecha_reserva">Fecha de Reserva:</label>
            <input type="date" id="fecha_reserva" name="fecha_reserva" required>

            <label for="consulta">Consulta o Comentarios:</label>
            <textarea id="consulta" name="consulta" rows="4" required></textarea>

            <label for="tipo_reserva">Tipo de Reserva:</label>
            <select id="tipo_reserva" name="tipo_reserva" required>
                <option value="reserva_individual">Reserva Individual</option>
                <option value="reserva_grupal">Reserva Grupal</option>
            </select>

            <input type="submit" name="enviar_reserva" value="Enviar Consulta/Reserva">
        </form>

        <?php
        if (isset($_POST['enviar_reserva'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $fecha_reserva = $_POST['fecha_reserva'];
            $consulta = $_POST['consulta'];
            $tipo_reserva = $_POST['tipo_reserva'];

            echo "<h2>Resumen de tu Consulta/Reserva:</h2>";
            echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
            echo "<p>Correo Electrónico: " . htmlspecialchars($email) . "</p>";
            echo "<p>Fecha de Reserva: " . htmlspecialchars($fecha_reserva) . "</p>";
            echo "<p>Consulta o Comentarios: " . htmlspecialchars($consulta) . "</p>";
            echo "<p>Tipo de Reserva: " . htmlspecialchars($tipo_reserva) . "</p>";
        }
        ?>
    </div>

    <!-- Formulario de Suscripción -->
    <div class="container" style="margin-top: 30px;">
        <h1>Formulario de Suscripción</h1>
        <form method="post" action="">
            <label for="nombre_suscripcion">Nombre:</label>
            <input type="text" id="nombre_suscripcion" name="nombre_suscripcion" required>

            <label for="email_suscripcion">Correo Electrónico:</label>
            <input type="email" id="email_suscripcion" name="email_suscripcion" required>

            <input type="submit" name="enviar_suscripcion" value="Suscribirse">
        </form>

        <?php
        if (isset($_POST['enviar_suscripcion'])) {
            $nombre_suscripcion = $_POST['nombre_suscripcion'];
            $email_suscripcion = $_POST['email_suscripcion'];

            echo "<h2>Gracias por suscribirte, " . htmlspecialchars($nombre_suscripcion) . "!</h2>";
            echo "<p>Hemos enviado un correo a: " . htmlspecialchars($email_suscripcion) . ".</p>";
        }
        ?>
    </div>

    <!-- Footer -->
    <footer>
        <div class="social-media">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>
        <p>&copy; 2024 - Todos los derechos reservados.</p>
    </footer>

    <script src="./public/js/app.js"></script>
</body>

</html>