<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>


    <?php
    include('encabezado.php');
    ?>


    <div class="row">

        <div class="col-6" style="background-color: #F2F0F0;">
            <style>
                .tabla-left {
                    width: 55%;
                    margin: 4em auto;
                    border-radius: 3px;
                    box-shadow: 15px 15px 30px #ffffff,
                        -15px -15px 30px #ffffff;
                }
            </style>
            <table class="tabla-left" align="center">
                <tr>
                    <td>
                        <img src="logo/carnet.png">
                        <p class="text-white">.</p>

                        <h2> Te damos la bienvenida a</h2>
                        <h2>Carnet de Vacunación</h2>

                        <p class="text-white">.</p>
                        <p>En esta plataforma podrás:</p>
                        <p class="p-2"></p>

                        <ul>
                            <li> Ver y descargar tu Carnet de Vacunación.</li>
                            <li> Verificar la validez de un código QR. </li>
                            <li> Ver el detalle de tu esquema de vacunación.</li>
                            <li> Descargar tu certificado de vacunación.</li>
                            <li> Solicitar el registro de tu vacunación Covid-19.</li>

                        </ul>
                    </td>
                </tr>
            </table>

        </div>

        <div class="col-6">
            <style>
                .tabla-regis {
                    margin: 4em auto;
                    box-shadow: 15px 15px 25px #ffffff,
                        -15px -15px 30px #ffffff;
                }

                .casilla {
                    width: 430px;
                    height: 50px;
                    border-color: gray;
                }


                td {
                    font-weight: bolder;
                    /*Hará que la letra sea más gruesa que la del elemento padre.*/

                }

                td :hover {
                    border-color: blue;
                }

                .robot {
                    width: 400px;
                    height: 80px;
                    background-color: #F0EFEF;

                }

                .btchex {
                    width: 60px;
                    height: 20px;

                }

                input {
                    border-color: cyan;
                }

                li {
                    font-size: 18px;
                }

                .tabla-robot {
                    width: 58%;
                    box-shadow: 15px 15px 25px #ffffff,
                        -15px -15px 30px #ffffff;
                }
            </style>


            <form action="inicio.php" method="POST">
             


                <table class="tabla-regis" align="center">
                    <tr>
                        <td>
                            <h3><b> Identificate para ingresar</b></h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Seleccione tu tipo de Documento
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="casilla">
                                <option>
                                    DNI - Documento Nacional de Identidad
                                </option>

                                <option>
                                    CE - Carnet de Extranjería
                                </option>

                                <option>
                                    Pasaporte
                                </option>

                                <option>
                                    Documento de Identidad Extranjero
                                </option>

                                <option>
                                    Código Temporal de Acceso
                                </option>

                                <option>
                                    Permiso Temporal de Permanencia
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1 text-white">.</td>
                    </tr>
                    <tr>
                        <td>Numero de tu documento</td>
                    </tr>
                        <tr>
                        <td> <input class="casilla" type="text" name="dni" id="" placeholder="Ingrese tu numero de documento"></td>
                    </tr>
                    <tr>
                        <td class="p-1 text-white">.</td>
                    </tr>


                    <tr>
                        <td>Fecha de nacimiento</td>
                    </tr>
                    <tr>
                        <td><input class="casilla" type="text" name="fecha_nac" id="" placeholder="dd/mm/aaaa"></td>
                    </tr>

                    <tr>
                        <td class="p-1 text-white">.</td>
                        <!--para hacer un espacio entre las filas-->
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="btchex">mantener iniciada mi secion <a href="#"> por 7 dias</a></td>
                    </tr>
                </table>

                <table class="tabla-robot" align="center" style="background-color: gray;">
                    <tr>
                        <td class="robot">
                            <input type="checkbox" class="btchex" id="">No soy un robot
                            <img src="logo/captcha.png" width="20%">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 bg-white"></td>
                    </tr>
                    <tr>
                        <td class="bg-white">Revisa los <a href="#"> Política de Privacidad y Términos y Condiciones </a>de la plataforma.</td>
                    </tr>
                    <tr>
                        <td class="p-1 text-white bg-white">.</td>
                    </tr>
                    <tr>
                        <td class="bg-white">
                        <button type="submit" class="btn btn-primary w-100 my-2 p-3">
                                    <h5> Continuar</h5>
                                </button>

                        </td>
                    </tr>
                </table>
                
            </form>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>

</body>
</html>