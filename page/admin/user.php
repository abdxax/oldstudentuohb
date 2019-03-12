<?php
session_start();
require "../connect/func.php";

$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'],1) ;
if (isset($_POST['sub'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $pass2=$_POST['password2'];
  $role=$_POST['role'];
	if ($pass==$pass) {
    if (strlen($pass)>=6&&strlen($pass)<=10) {
      # code...
      $pass=md5("uhb".$pass2);
       $db->addUser($name,$email,$pass,$role,"5");
    }
    else{
      header("location:user.php?msg=errpass");
    }
   
  }
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
			<a href="#" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">اضافه مستخدم</a>
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
        <?php
        if (isset($_GET['msg'])) {
          # code...
          if ($_GET['msg']=='errpass') {
            # code...
            echo'<div class="laert alert-danger text-center">كلمه المرور تجب تكون بين 6 الى 10 خانات </div>';

          }
        }

        ?>
      </div>
			<div class="col-8 offset-2">
				<table class="table">
					<thead>
						<tr>
						<th>الاسم </th>
						<th>البريد الالكتروني </th>
            
					</tr>
					</thead>
					<tbody>
						<?php 
                          $sql=$db->getUsers();
                          foreach ($sql as $key ) {
                          	echo'
                          	<tr>
                          	<td>'.$key['name'].'</td>
                            <td>'.$key['email'].'</td>
                             

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
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">البريد الالكتروني  </label>
            <input type="email" class="form-control" id="recipient-name" name="email">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> كلمه المرور </label>
            <input type="password" class="form-control" id="recipient-name" name="password">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">تاكيد كلمه المرور </label>
            <input type="password" class="form-control" id="recipient-name" name="password2">
          </div>

          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">الصلاحيه </label>
            <select name="role">
            	<option value="3">راصد</option>
              <option value="">مراجع </option>
              <option value="4">مستعلم</option>
             
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