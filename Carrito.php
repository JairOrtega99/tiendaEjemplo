<?php
    $mensaje = "";
    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
            case 'Agregar':
                    if(is_numeric(  openssl_decrypt($_POST['id'], COD, KEY )  )){
                            $ID =  openssl_decrypt($_POST['id'], COD, KEY );
                            $mensaje = "El ID es correcto ".$ID;
                    }else{
                        $mensaje = "Ocurrio un Error :c ".$ID;
                    }
            break;
        }
    }
?>