
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>formateaya</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; margin: 0; background-color: #f2f4f8; color: #333; }
    header { background-color: #004aad; color: white; padding: 50px 20px; text-align: center; }
    header img { width: 120px; margin-bottom: 15px; }
    nav { background-color: #003d91; display: flex; justify-content: center; padding: 15px 0; }
    nav a { color: white; margin: 0 20px; text-decoration: none; font-weight: 600; }
    nav a:hover { text-decoration: underline; }
    section { max-width: 1000px; margin: auto; padding: 40px 20px; }
    h2 { color: #004aad; margin-bottom: 20px; }
    .servicios { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
    .card { background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: transform 0.2s ease; }
    .card:hover { transform: translateY(-5px); }
    .card li { margin-bottom: 10px; }
    .whatsapp-button { display: inline-block; background-color: #25d366; color: white; font-weight: 600; padding: 15px 30px; border-radius: 8px; text-decoration: none; text-align: center; margin-top: 30px; transition: background-color 0.3s ease; }
    .whatsapp-button:hover { background-color: #1ebe5b; }
    footer { background-color: #004aad; color: white; text-align: center; padding: 20px; margin-top: 40px; }
    @media (max-width: 600px) {
      header h1 { font-size: 1.8em; }
      nav { flex-direction: column; align-items: center; }
      nav a { margin: 10px 0; }
    }
  </style>
</head>
<body>

<header>
  <img src="logoempresa.jpeg" alt="Logo formateaya">
  <h1>formateaya</h1>
  <p>Soluciones rápidas para tu computador</p>
</header>

<nav>
  <a href="#servicios">Servicios</a>
  <a href="#nosotros">Nosotros</a>
  <a href="#contacto">Contacto</a>
</nav>

<section id="servicios">
  <h2>Servicios</h2>
  <div class="servicios">
    <div class="card">
      <ul>
        <li>✔ Formateo completo (Windows/Linux)</li>
        <li>✔ Respaldo de archivos</li>
        <li>✔ Reinstalación del sistema</li>
      </ul>
    </div>
    <div class="card">
      <ul>
        <li>✔ Instalación de Office</li>
        <li>✔ Programas básicos (PDF, navegadores)</li>
        <li>✔ Antivirus gratuitos</li>
      </ul>
    </div>
    <div class="card">
      <ul>
        <li>✔ Diagnóstico de disco duro</li>
        <li>✔ Reemplazo por SSD o HDD</li>
        <li>✔ Clonado o reinstalación limpia</li>
      </ul>
    </div>
  </div>
</section>

<section id="nosotros">
  <h2>Sobre Nosotros</h2>
  <p>Somos <strong>formateaya</strong>, técnicos apasionados por ayudar a personas y empresas a recuperar el rendimiento de sus computadores. Te damos soluciones confiables, rápidas y a buen precio.</p>
</section>

<section id="contacto">
  <h2>Contacto</h2>
  <p>📞 Teléfono: +56 9 52 33 6330</p>
  <p>📧 Email: cristopher.cornejo.valdivia@gmail.com</p>
  <p>📍 Región Metropolitana, Chile</p>
  <a class="whatsapp-button" href="https://wa.me/56952336330?text=Hola!%20Estoy%20interesado%20en%20los%20servicios%20de%20formateaya.%20¿Podrías%20darme%20más%20información%20y%20precios?" target="_blank">💬 Consultar por WhatsApp</a>
</section>

<section id="comentarios">
  <h2>Deja tu comentario</h2>
  <form action="guardar_comentario.php" method="POST" style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); max-width: 600px; margin: auto;">
    <input type="text" name="nombre" placeholder="Tu nombre" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
    <textarea name="comentario" rows="4" placeholder="Tu comentario" required style="width: 100%; padding: 10px;"></textarea><br>
    <button type="submit" style="margin-top: 10px; padding: 10px 20px; background-color: #004aad; color: white; border: none; border-radius: 6px;">Enviar</button>
  </form>
</section>

<section id="resenas">
  <h2>Reseñas de Clientes</h2>
  <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); max-width: 700px; margin: auto;">
    <?php
      if (file_exists("comentarios.txt")) {
          echo file_get_contents("comentarios.txt");
      } else {
          echo "<p>Aún no hay comentarios.</p>";
      }
    ?>
  </div>
</section>

<footer>
  <p>&copy; 2025 formateaya. Todos los derechos reservados.</p>
</footer>

</body>
</html>
