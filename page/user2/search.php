<?php
session_start();
require "../connect/func.php";
$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'],3) ;
?>
<!DOCTYPE html >
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
    <!-- <script type="text/javascript" src="js/login.js"></script>-->
	<title></title>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-9 offset-md-1">
			<?php
              if (isset($_POST['sub'])) {
              	$inp=$_POST['ser'];
              	$choname=$_POST['id'];
              	if ($choname=="name") {
              		$res=$db->searchByName($inp);
              		
              		if($res->rowCount()>0){
              			echo '
              			<div >
              			<table class="table">
              			<tr>
              			<th>الاسم</th>
              			<th>رقم الجلوس</th>
              			<th>الكليه</th>
              			<th>التخصص</th>
              			<th></th>

              			</tr>';
              			foreach ($res as $key ) {
              				# code...
              				echo '
              				<tr>
              				<td><a href=insertmk.php?id='.$key['id_gov'].'>'.$key['name'].'</a></td>
              				<td>'.$key['id_gov'].'</td>
              				<td>'.$key['name_col'].'</td>
              				<td>'.$key['majer_name'].'</td>
              				<td></td>



              				</tr>

              				';
              			}

              			echo '</table>
              			</div>

              			';
              		}
              		else{
              			  header("location:index.php?err=notfound2");

              		}
              	}
              

              else if ($choname=="id") {
               
                  $res=$db->searchByID($inp);
                  
                  if($res->rowCount()>0){
                    echo '
                    <div >
                    <table class="table">
                    <tr>
                    <th>الاسم</th>
                    <th>رقم الجلوس</th>
                    <th>الكليه</th>
                    <th>التخصص</th>
                    <th></th>

                    </tr>';
                    foreach ($res as $key ) {
                      # code...
                      echo '
                      <tr>
                      <td><a href=insertmk.php?id='.$key['id_gov'].'>'.$key['name'].'</a></td>
                      <td>'.$key['id_gov'].'</td>
                      <td>'.$key['name_col'].'</td>
                      <td>'.$key['majer_name'].'</td>
                      <td></td>



                      </tr>

                      ';
                    }

                    echo '</table>
                    </div>

                    ';
                  }
                  else{
                      header("location:index.php?err=notfound2");

                  }
                
              	
              }
            }

			?>
		</div>
	</div>
</div>
</body>
</html>