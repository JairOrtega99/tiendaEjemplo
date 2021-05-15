<?php
include 'global/config.php';
include 'global/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://file.myfontastic.com/Yc8AdpBFdZTkYPpcK2aTAA/icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d691af3bf5.js" crossorigin="anonymous"></script>

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

       <a class="navbar-brand fas fa-store-alt"></a>
       <i class="fas fa-store-alt"></i>

       <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div id="my-nav" class="collapse navbar-collapse">
           <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link " href="#">Carrito(0)</a>
               </li>
           </ul>
       </div>
   </nav>
<br/>
<br/>
<div class="container">
    <br>
   <div class="alert alert-success" >
       Mensaje
       <a href="#" class="badge badge-success">ver carrito</a>
   </div>

    <div class="row">

    <?php
    $sentencia = $pdo->prepare("SELECT * FROM tblproductos");
    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($listaProductos);
    ?>

    <?php foreach($listaProductos as $producto){ ?>
        <div class="col-3">
            <div class="card">
                <img title="<?php echo $producto['Descripcion'];?>" 
                alt="titulo"
                class="card-img-top"alt=""
                src="<?php echo $producto['Imagen']; ?>" 
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['Descripcion'];?>"
                >
                <div class="card-body">
                    <span> <?php echo $producto['Nombre']; ?></span>
                    <h5 class="card-title">$<?php echo $producto['Precio'];?> </h5>
                    
                    <form action="" method="post">

                        <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>" >
                        <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY);  ?>" >
                        <input type="text" name=" precio" id="precio" value="<?php echo  openssl_encrypt($producto['Precio'], COD, KEY);  ?>" >
                        <input type="text" name="cantidad" id="cantidad"  value="<?php echo openssl_encrypt(1, COD, KEY); ?> ">

                        <b-btn class="btn btn-primary fas fa-cart-plus" 
                        type="submit" 
                        name="btnAccion" 
                        value="Agregar">
                        Agregar al Carrito
                        </b-btn>

                    </form>

                   

                </div>
            </div>
        </div>
    <?php } ?>
      
    </div>

</div>
    <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
    </script>
</body>
</html>