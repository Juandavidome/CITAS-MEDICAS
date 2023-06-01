<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">
</head>

<style>

@import url(https://fonts.googleapis.com/css?family=Poppins:300);

  body{
      height: 100vh;
      overflow: hidden;
      font-family: "Poppins";
    background: #ffff;
  }
  .login-page {
    width: 400px;
    padding: 8% 0 0;
    margin: auto;
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 400px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
    font-family: "Poppins", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    border-radius: 7px;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    
  }
  .form button {
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #234666;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    border-radius: 7px;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #0e2941;
  }
  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }
  .form .message a {
    color: #234666;
    text-decoration: none;
  }
  .form .register-form {
    display: none;
  }

  
</style>

<script>

function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }

</script>


<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="login-form" action="<?= base_url('factualizar'); ?>"  method="POST">
        <h2><i class="fas fa-lock"></i> Actualizar Datos</h2>
        <input type="number" hidden name="id" value="<?= $cliente['id'] ?>">
        <input type="text" id="nombre" name="nombre" value="<?= $cliente['nombre'] ?>"  placeholder="Nombre *" required/>
        <input type="text" id="usuario" name="usuario" value="<?= $cliente['usuario'] ?>" placeholder="Usuario *" required/>
        <input type="email" id="correo" name="correo" value="<?= $cliente['correo'] ?>" placeholder="Correo *" required/>
        <input type="password" id="password" name="contraseña" value="<?= $cliente['contraseña'] ?>"placeholder="Contraseña *" required/>
            
        <div class="button1" > 
                <input type="button" value="MostrarContraseña" onclick="mostrarContrasena()" class="btn btn-outline-dark">
        </div>
<br>
        
        <button type="submit">Actualizar</button>
        <p class="message"> <a href="http://localhost/citas/public">Volver</a></p>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>













