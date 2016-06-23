<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title></title>
        <style>
body.login {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 270px;
    height: 150px;
    background: url('Imagenes/todamoda2.png') no-repeat;
    background-size: 100%;
    margin: 10px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#correo {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#correo:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#clave {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#clave:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block #ingresar {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block #ingresar:hover {
    background: #ff7b81;
}
</style>
    </head>
    <!-- URL de prueba http://jsfiddle.net/33hmj/ -->
    
    <script src="js/md5/md5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body class="login">
        <div class="logo"></div>
        <div class="login-block">
            <h1>Login</h1>
                <form id="acceso" action="index.php" method="post">
                    Correo:<br>
                        <input type="text" name="correo" placeholder="Correo" id="correo"><br>
                    Clave:<br>
                        <input type="password" name="clave" placeholder="Clave" id="clave"><br>
                        
                        <div id="mensaje"></div>
                        <br>
                        <input type="button" name="ingresar" value ="ingresar" placeholder="Ingresar" 
                               id="ingresar" onclick="Validar()">
            
         
        </form>
        </div>
        
    </body>
    <script> 
        function Validar(){
        var clave;
        var dato=$("#clave").val();
        clave=CryptoJS.MD5(dato).toString();
        
        
          $.ajax({
                    url:'ValidaAcceso.php',
                    type:'POST',
                    data:"usuario="+$("#usuario").val()+"&clave="+clave,
                    success:function(datos){
                      if (datos=='true') 
                          $("#acceso").submit();
                      else
                           $("#mensaje").html("Usuario o clave erroneo");
                    }
                });
        
        }
    </script> 
</html>
