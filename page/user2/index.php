<?php
session_start();
require "../connect/func.php";
$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'],3) ;


if (isset($_POST['sub'])) {
	$name=strip_tags($_POST['majer']);
	$idgov=strip_tags($_POST['idgov']);
	$mjr=$_POST['mjr'];
	$db->addStudentFromMajer($idgov,$name,$mjr);
}


$info=$db->getInfoEmployee($_SESSION['email']);
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
    <!-- <script type="text/javascript" src="js/login.js"></script>-->
     <script src="../../js/bootstrap.js"></script>
	<title></title>

</head>
<body>
<header>
	<div class="text-center">
		<?php 
		foreach ($info as $key ) {
			echo "<h4>".$key['name']."</h4>";
			echo "<h4>".$db->getIColloge($key['id_col'])."</h4>";
			$_SESSION['id_co']=$key['id_col'];
		}
		?>
	</div>
	
</header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if (isset($_GET['err'])) {
					# code...
					if($_GET['err']=="notfound")
					echo '<div class="alert alert-danger text-center">لا يوجة بيانات بالرقم الجلوس المدخل </div>';
				else
					echo '<div class="alert alert-danger text-center">لا يوجد بيانات تحمل الاسم  المدخل </div>';
				}

				?>
				<div class="col-6 offset-md-3" style="margin-bottom: 15px">
					<form method="POST" action="search.php">
						<div class="form-group">
							<input type="text" name="ser" class="form-control" placeholder="Search ">
						رقم الجلوس<input type="radio" name="id" value="id">
						الاسم <input type="radio" name="id" value="name"><br>
						</div>
						<input type="submit" name="sub" class="btn btn-info " value="بحث" >

					</form>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<a href="colloge.php">
						<div class="text-center">
							<i class="fas fa-university"></i>
						</div>
						<div class="text-center">
							الكليات
						</div>
						
					</a>
				</div>
			</div>

			


			<div class="col-4">
				<div class="card">
					<a href="#" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
						<div class="text-center">
							<i class="fas fa-user-plus"></i>
						</div>
						<div class="text-center">اضافة طالبة جديدة </div>
					</a>
				</div>
			</div>


			<div class="col-4">
				<div class="card">
					<a href="logout.php">
						<div class="text-center">
							<i class="fas fa-sign-out-alt"></i>
						</div>
						<div class="text-center">تسجيل خروج </div>
					</a>
				</div>
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
                  $sql=$db->getallMajerstu();
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