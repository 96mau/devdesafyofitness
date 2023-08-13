
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Correo llamativo</title>
  <style>
    body {
      background-color: #000000;
      color: #ffffff;
      font-family: Arial, sans-serif;
    }

    label
    {
        color: orange;
    }
    input
    {
        border-radius: 10px;
        width: 95%;
    }
    h1 {
      color: #ff0000;
      text-align: center;
    }

    h2 {
      color: #ffffff;
      text-align: center;
    }

    .form-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background: rgba(rgb(97, 0, 0.6));
      border-radius: 70px;
    }

    .form-container input,
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #333333;
      border: none;
      color: #ffffff;
    }

    .form-container input[type="submit"] {
      background-color: #ff0000;
      color: #ffffff;
      cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
      background-color: #990000;
    }
  </style>
</head>
<body>

  <div class="form-container" style="background-color:#4b0101;">
    <div style="width: 98%; align-items: center; align-content: center; align-items: center;">
<img src="https://desafyofitness.com/xde/LogoBlancoRojo.png" alt="DESAFYO FITNESS" width="200px" style="align-items: center; align-content: center; align-items: center;" >
    </div>

    <h1>Solicitud Contacto WEBSITE</h1>
    <h2>Peticion de información WEB Desafyo Fitness</h2>
    <form action="#" method="post">
      <label for="asunto" >Asunto:</label>
      <input type="text" id="asunto" name="asunto" value="{{ $Nombre }}" disabled>

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" value="{{ $Correo }}" disabled>

      <label for="telefono">Teléfono:</label>
      <input type="text" id="telefono" name="telefono" value="{{ $Telefono }}" disabled>

      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" value="{{ $Asunto }}" disabled>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" rows="4" disabled style="width: 100%;">{{ $TextMen }}</textarea>

    </form>
  </div>
</body>
</html>
