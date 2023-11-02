<?php ob_start();
$mysqli = new Mysqli("localhost", "root", "", "carnet_vacunacion");
include("conexion.php");
        @$enlace = $_GET['pdf'];
        $sql = "SELECT * FROM `data_personales` where dni='$enlace'";
        $result = $mysqli->query($sql);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="certificado.css">

</head>

<body>

<table border="3" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<tr>
  <th style="background-color: #FAEDA5;" colspan="6" class="text-center"><h1>datos personales</h1></th>

</tr>
<tr style="background-color: #E8D8F2;" class="bg-primary text-white">
    <th><b>Nombres</b></th>
    <th><b>Dni</b></th>
    <th><b>fecha_nac</b></th> 
       <th><b>Sexo</b></th>
    <th><b>nacionalidad</b></th>
    <th><b>vacuna</b></th>

  </tr>


  <?php 
 while ($row=$result->fetch_assoc()){?>
 <tr style="background-color: #B3FAEB;">
 <td><?php echo $row ['nombres_apellidos']; ?> </td>
 <td><?php echo $row ['dni']; ?> </td>
 <td><?php echo $row ['fecha_nac']; ?> </td>
 <td><?php echo $row ['sexo']; ?> </td>
 <td><?php echo $row ['nacionalidad']; ?> </td>
 <td><?php echo $row ['vacuna']; ?> </td>

 </tr> 
<?php }?>
</table>

<div class="w-100">.</div>

<table border="1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<tr style="background-color:#FAEDA5;">
  <th colspan="4" class="text-center"><h1>dosis</h1></th>

</tr>
<tr style="background-color: #E8D8F2;" class="bg-primary text-white">
            <th>Dosis</th>
            <th>Fecha de vacunacion</th>
            <th>Fabricante y lote de vacuna</th>
            <th>Lugar de vacunacion</th>

  </tr>


  <?php 
  include("conexion.php");
  @$enlace = $_GET['pdf'];
  $sql = "SELECT * FROM `data_personales` where dni='$enlace'";
  $result = $mysqli->query($sql);
 while ($row=$result->fetch_assoc()){?>
 
 <tr style="background-color: #59F0EF;">
            <th><?php echo $row['dosis']; ?> </th>
            <th><?php echo $row['fecha_vacunacion']; ?> </th>
            <th><?php echo $row['fabricante']; ?> </th>
            <th><?php echo $row['lugar_vacunacion']; ?> </th>
          </tr>
          <tr style="background-color: #59F0EF;">
            <th><?php echo $row['dosis2']; ?> </th>
            <th><?php echo $row['fecha_vacunacion2']; ?> </th>
            <th><?php echo $row['fabricante2']; ?> </th>
            <th><?php echo $row['lugar_vacunacion2']; ?> </th>
          </tr>
          <tr style="background-color: #59F0EF;">
            <th><?php echo $row['dosis3']; ?> </th>
            <th><?php echo $row['fecha_vacunacion3']; ?> </th>
            <th><?php echo $row['fabricante3']; ?> </th>
            <th><?php echo $row['lugar_vacunacion']; ?> </th>
          </tr>

          <tr style="background-color: #59F0EF;">
            <th><?php echo $row['dosis4']; ?> </th>
            <th><?php echo $row['fecha_vacunacion4']; ?> </th>
            <th><?php echo $row['fabricante4']; ?> </th>
            <th><?php echo $row['lugar_vacunacion4']; ?> </th>
          </tr>

 </tr> 
<?php }?>
</table>



        
</body>

</html>
<?php

require_once('Dompdf/autoload.inc.php');

use Dompdf\Dompdf;

$Dompdf = new Dompdf();
$options = $Dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$Dompdf->setOptions($options);
$Dompdf->loadHtml(ob_get_clean());
$Dompdf->setPaper('letter');
//$Dompdf->setPaper('A4','portrait');
$Dompdf->render();
$Dompdf->stream("imprimir.pdf", array("Attachment" => false));
?>