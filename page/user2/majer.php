<?php
session_start();
require "../connect/func.php";
echo $_SESSION['id_co'];
$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'],3) ;

if (isset($_POST['sub'])) {
	$mname=strip_tags($_POST['majer']);
	$db->addMajer($_SESSION['id_co'],$mname);
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
			
			<a href="index.php" class="btn btn-info ">الصفحه الرئيسه </a>
		</div>
		<div class="col-4">
			
		</div>
	</div>
</header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<table class="table">
					<thead>
						<tr>
						<th>التخصص </th>
						<th>عدد الطالبات   </th>
					</tr>
					</thead>
					<tbody>
						<?php 
                          $sql=$db-> getMajerstu($_GET['id_col']);
                          $_SESSION['col']=$_GET['id_col'];
                          foreach ($sql as $key ) {
                          	echo'
                          	<tr>
                          	<td><a href=student.php?id_mjr='.$key['id_m'].'>'.$key['majer_name'].'</a></td>
                          	<td>'.$db->getcountstudent($key['id_m']).'</td>

                          	</tr>

                          	';
                          }
						?>
					</tbody>


					
				</table>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافه تخصص جديد </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">التخصص:</label>
            <input type="text" class="form-control" id="recipient-name" name="majer">
          </div>
          
        
      </div>
      <div class="modal-footer">
      	<input type="submit" name="sub" class="btn btn-info" value="حفظ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>