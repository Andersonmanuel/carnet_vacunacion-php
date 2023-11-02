<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificado</title>
  <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
  <link rel="stylesheet" href="certificado.css">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
  <?php
  include('encabezado.php');
  ?>


<div class="container-fluid text-center">
            <h2 class=" text-certificado">CERTIFICADO DE VACUNACIÓN / VACCINATION CERTIFICATE</h2>
        </div>
  <div class="row ">
    <div class="col-4">
      <img src="logo/QR.png" width="70%" height="70%" class="logo">


    </div>

    <div class="col-8">
      <center>
        <?php
        include("conexion.php");
        @$enlace = $_GET['usuario'];
        $sql = "SELECT * FROM `data_personales` where dni='$enlace'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <table class="tabla-certificado">

          <tr>
            <td>Nombres y apellidos</td>
          </tr>
          <tr>
            <td> <input class="text-center text-primary " value="<?php echo $row['nombres_apellidos']; ?>"> </td>

          </tr>

          <tr>
            <td>Documento de Identidad</td>
          </tr>

          <tr>
            <td><input class="text-center text-primary " value="<?php echo $row['dni']; ?>"> </td>
          </tr>

          <tr>
            <td>Fecha de nacimiento</td>
          </tr>

          <tr>
            <td><input class="text-center text-primary " value="<?php echo $row['fecha_nac']; ?>"> </td>
          </tr>

          <tr>
            <td> Sexo <b id="nacion"> Nacionalidad</b></td>
          </tr>

          <tr>
            <td><input class="text-center text-primary " id="sex" value="<?php echo $row['sexo']; ?>">
              <input class="text-center text-primary " id="nac" value="<?php echo $row['nacionalidad']; ?>">
            </td>

          </tr>

          <tr>
            <td>Vacuna </td>
          </tr>

          <tr>
            <td><input class="text-center text-primary " value="<?php echo $row['vacuna']; ?>"> </td>
          </tr>



        </table>



      </center>


    </div>
  </div>
  </div>

  </div>


  <div class="container-fluid">
    <div class="row ">
      <div class="col-12 text-center">

        <style>
          table {
            width: 80%;
            margin: 5em;

          }

          th {
            height: 50px;
          }
        </style>
        <h3>VACUNACION REGULAR NACIONAL</h3>
        <table>
          <tr class="bg-primary text-white">
            <th>Dosis</th>
            <th>Fecha de vacunacion</th>
            <th>Fabricante y lote de vacuna</th>
            <th>Lugar de vacunacion</th>
          </tr>


          <tr>
            <th><?php echo $row['dosis']; ?> </th>
            <th><?php echo $row['fecha_vacunacion']; ?> </th>
            <th><?php echo $row['fabricante']; ?> </th>
            <th><?php echo $row['lugar_vacunacion']; ?> </th>
          </tr>
          <tr>
            <th><?php echo $row['dosis2']; ?> </th>
            <th><?php echo $row['fecha_vacunacion2']; ?> </th>
            <th><?php echo $row['fabricante2']; ?> </th>
            <th><?php echo $row['lugar_vacunacion2']; ?> </th>
          </tr>
          <tr>
            <th><?php echo $row['dosis3']; ?> </th>
            <th><?php echo $row['fecha_vacunacion3']; ?> </th>
            <th><?php echo $row['fabricante3']; ?> </th>
            <th><?php echo $row['lugar_vacunacion']; ?> </th>
          </tr>

          <tr>
            <th><?php echo $row['dosis4']; ?> </th>
            <th><?php echo $row['fecha_vacunacion4']; ?> </th>
            <th><?php echo $row['fabricante4']; ?> </th>
            <th><?php echo $row['lugar_vacunacion4']; ?> </th>
          </tr>

        </table>
      </div>
    </div>
  </div>
  <style>
    .imprimir {
      background-color: blue;
      color: white;
      width: 10%;
      height: 40px;
    }

    .regresar {
      color: blue;
      width: 10%;
      height: 40px;
    }
  </style>
  <center>
    <div class="button">
      <a href="reporte.php?pdf=<?php echo $row ['dni']?>"><input class="imprimir" type="submit" value="Imprimir"></a>
    </div>
    <div class="button-2">
      <a href="index.php"><input class="regresar" type="submit" value="Regresar"></a>
    </div>
  </center>
  <?php
  include('footer.php');
  ?>
</body>

</html>