<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="inicio.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>

    <?php


    include('encabezado.php');
    ?>


    <div class="row">

        <div class="col-6" style="background-color: #F2F0F0;">

           


            <?php
            include("conexion.php");
            @$consultar=$_POST['dni'];
            $conex = "SELECT * FROM `data_personales` WHERE dni='$consultar' ";
            $result = $mysqli->query($conex);


            ?>
            
                            <table class="tabla-inicio">
                                
                    <tr>
                        <td class="text-center">
                            <img src="logo/carnet.png" width="48%">
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center"><img src="logo/QR.png" width="68%"></td>
                    </tr>
                    <?php
                    while ($row = $result->fetch_assoc()){?>
                    
                        <tr>
                            <td>
                                <h2 class="text-center"><?php echo $row['nombres_apellidos']; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"> Dni: <b> <?php echo $row['dni']; ?></b></td>
                        </tr>
                        <tr>
                            <td class="text-center">edad: <b><?php echo $row['edad']; ?></b></td>

                        </tr>
                        <tr>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-primary text-center"> VACUNACION COVID-19</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="dosis text-center"><?php echo $row['vacuna']; ?></h1>
                            </td>

                        </tr>

                        <tr>
                                     
                                     <td class="text-center"><b><?php echo $row['check1']; ?></b>
                                    <b> <?php echo $row['check2']; ?></b>
                                     <b><?php echo $row['check3']; ?></b>
                                     <b><?php echo $row['check4']; ?></b></td>
                                             </tr>

                        </tr>
                </table>
                           
                            
            </form>
        </div>

        <div class="col-6">
            <style>
                .tabla-right {
                    width: 55%;
                    margin: 4em auto;
                    border-radius: 3px;
                    box-shadow: 15px 15px 30px #bebebe,
                        -15px -15px 30px #ffffff;
                }
                .certific{
                    padding-left: 20px ;
                }
            </style>

<form action="certificado.php" method="post">
            <table class="tabla-right">
                <tr>
                    <td class="certific">
                        <h2 class="text-center">Tu Vacunación COVID-19</h2>
                    </td>
                </tr>

                <tr>
                    <td class="p-2 text-white">.</td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text-center">Certificado COVID-19</h4>
                    </td>
                </tr>

                <tr>
                    <td class="p-1 text-white">.</td>
                </tr>
                <tr>
                    <td>
                        <h5 class="text-center">Visualiza y descarga tu Certificado de Vacunación COVID-19.</h5>
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-white">.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="certificado.php?usuario=<?php echo $row['dni'] ; ?>" class="text-white bg-primary p-2">Ver certificado de vacunacion</a></td>
                </tr>
                <tr>
                    <td class="p-2 text-white">.</td>
                </tr>

                <tr>
                    <td>
                        <h3 class="text-center">Esquema de vacunación COVID-19</h3>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h5 class="text-center">Revisa los detalles de tu vacunación COVID-19.</h5>
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-white">.</td>
                </tr>
                <tr>
                    <td class="text-center"><a href="" class="text-white bg-primary p-2">Ver Esquema de vacunacion</a></td>
                </tr>

                <tr>
                    <td class="p-2 text-white">.</td>
                </tr>
            </table>
            </form>
        </div>

    <?php    }
    ?>


    <?php
    include('footer.php');
    ?>
</body>

</html>