<!DOCTYPE html>
<html lang="en">
<head>
  <title>JSON to Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/desainjson.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="back3.jpeg">
<?php 
	$url_json = file_get_contents("http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30");
	$json_object = json_decode($url_json);

    ?>
<br>
<div class="container">
<div class="kotak">
<h3>Data Absensi Mobile</h3>
<br>          
  <table class="table table-condensed">
     <thead>
         <th >id</th>
         <th >nip</th>
         <th >latitude</th>
         <th >longitude</th>
         <th rowspan="2">Presensi ke</th>
         <th >Photo</th>
         <th >Macaddress</th>
         <th rowspan="2">Created at</th>

     </thead>
     <tbody>
     <?php for ($i=0; $i<2 ; $i++) {  ?>
         <tr>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->id?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->nip?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->latitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->longitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->presensi_ke?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->photo?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->macaddress?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[$i]->created_at?></td>
            </tr>
          <?php }  ?>
     </tbody>
   
 </table>
  </div>
  </div>
  <br>
<div class="container">
<div class="kotak">
  <h3> Data Absensi Finger  </h3>
  <br>
<table class="table table-condensed">
<center>
     <thead>
         <th>Finger id</th>
         <th>Nip</th>
         <th>Tag Date</th>
         <th>Finger Ip</th>

     </thead>
     <tbody>
       <?php for ($i=0; $i<1 ; $i++) {  ?>
         <tr>
            <td><?php echo $json_object->presensi->data_absensi_finger[$i]->finger_id?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[$i]->nip?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[$i]->tag_date?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[$i]->finger_ip?></td>
            </tr>
             <?php }  ?>
     </tbody>
     </center>
 </table>
  </div>
  </div>
</body>
</html>