<?php
$name = $_GET['username'];
$address = $_GET['address'];
$email = $_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="form-container">
        <div class="cotainer">
            <form action="./recibe.php" method="GET">
                <div class="head-form">
                    <h1>Informacion metodo GET</h1>
                </div>
    
                <div class="user-data">
                    <div class="campo">
                        <label for="">Nombre del usuario</label>
                        <span class="material-symbols-sharp">person</span>
                        <input type="text" name="username" value="<?php echo $name?>">
                    </div>
                    
                    <div class="campo">
                        <label for="">Direccion del usuario</label>
                        <span class="material-symbols-sharp">location_on</span>
                        <input type="text" name="address"  value="<?php echo $address?>">
                    </div>
            
                    <div class="campo">
                        <label for="">Email del usuario</label>
                        <span class="material-symbols-sharp">mail</span>
                        <input type="email" name="email"  value="<?php echo $email?>" require>
                    </div>
                </div>

                <div class="preferencias">
                    <h2>Preferencias:</h2>
                    <div class="preferencias">
                        <?php
                            if (isset($_GET['result'])){
                                if(isset($_GET['factura'])){
                                    $factura = $_GET['factura'];
                                }else{
                                    $factura = "No se ha seleccionado la factura <br/>";
                                }

                                if(isset($_GET['genero'])){
                                    $genero = $_GET['genero'];
                                }else{
                                    $genero = "No se ha seleccionado el genero <br/>";
                                }

                                if(isset($_GET['envio'])){
                                    $option = $_GET['envio'];
                                }else{
                                    $option = "No se ha seleccionado el envio <br/>";
                                }
                            }
                        ?>
                        <h3>Sexo:</h3> <?php echo $genero?><br/>
                        <h3>Factura:</h3>  <?php echo $factura?><br/>
                        <h3>Metodo de envio:</h3>  <?php echo $option?><br/>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>