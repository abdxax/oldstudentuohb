<?php
session_start();
require "../connect/func.php";
echo $_SESSION['id_co'];
$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'], 2) ;

if (isset($_POST['sub'])) {
	$name=strip_tags($_POST['majer']);
	$idgov=strip_tags($_POST['idgov']);
	$mjr=$_POST['mjr'];
	$db->addStudent($idgov,$name,$mjr,$_SESSION['id_co']);
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
			<a href="#" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">اضافه طالبه </a>
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
						<th>الاسم </th>
						<th>السجل المدني</th>
            <th>التخصص</th>
					</tr>
					</thead>
					<tbody>
						<?php 
                          $sql=$db->getallstudentsame($_SESSION['id_co']);
                          foreach ($sql as $key ) {
                          	echo'
                          	<tr>
                          	<td>'.$key['name'].'</td>
                            <td>'.$key['id_gov'].'</td>
                             <td>'.$key['majer_name'].'</td>

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
        <h5 class="modal-title" id="exampleModalLabel">اضافه طالب </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">الاسم:</label>
            <input type="text" class="form-control" id="recipient-name" name="majer">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">السجل المةني </label>
            <input type="number" class="form-control" id="recipient-name" name="idgov">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">التخصص </label>
            <select name="mjr">
            	<?php
                  $sql=$db->getMajerstu($_SESSION['id_co']);
                  foreach ($sql as $key ) {
                  	echo "
                   <option value=".$key['id_m'].">".$key['majer_name']."</option>
                  ";
                  }
                 
            	?>
            </select>
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