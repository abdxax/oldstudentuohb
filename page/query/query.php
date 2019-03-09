<?php
session_start();
require "../connect/func.php";
$db=new opreter();
$trm=$db->getallsTeram();
$id_student=$_GET['id'];
$infotrn=$db->getInfo($id_student);
$name='';
$id_gv='';
$colle='';
$majr='';
foreach ($infotrn as $key ) {
  # code...
  $name=$key['name'];
  $id_gv=$key['id_gov'];
  $colle=$key['name_col'];
  $majr=$key['majer_name'];
}

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Amiri|Cairo|Changa|Markazi+Text|Noto+Sans|Open+Sans|PT+Sans|Roboto|Scheherazade|Source+Serif+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" id="style" href="../../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="../../js/bootstrap.js"></script>
    <!-- <script type="text/javascript" src="js/login.js"></script>-->
	<title></title>
</head>
<body>
<header>
	<div class="col-8 offset-2">
		<div class="col-4">
			<a href="#" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">اضافه تخصص </a>
			<a href="index.php" class="btn btn-info ">الصفحه الرئيسه </a>
		</div>
		<div class="col-4">
			
		</div>
	</div>
</header>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <table class="table">
        <tr>
          <th>الاسم </th>
          <td><?php echo $name;?></td>
        </tr>

         <tr>
          <th>السجل المدني  </th>
          <td><?php echo $id_gv;?></td>
        </tr>

         <tr>
          <th>الكليه  </th>
          <td><?php echo $colle;?></td>
        </tr>

         <tr>
          <th>التخصص </th>
          <td><?php echo $majr;?></td>
        </tr>


      </table>
    </div>
    <?php

    foreach($trm as $val){
      $sql=$db->getTranscript($id_student,$val['id_trm']);
     foreach ($sql as $key ) {

       # code...
       echo '
      <div class="col-6">
      <table class="table">
        <tr>
        <th>'.$key['sub_name'].'</th>
        <td>'.$key['mak'].'</td>
        <td>'.$key['hours'].'</td>

        </tr>
      </table>
      </div>

      ';
     }
    }

    ?>
    </div>
  </div>
</section>
</body>
</html>