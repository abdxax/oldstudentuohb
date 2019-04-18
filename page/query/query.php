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
$id_majer=0;
foreach ($infotrn as $key ) {
  # code...
  $name=$key['name'];
  $id_gv=$key['id_gov'];
  $colle=$key['name_col'];
  $majr=$key['majer_name'];
  $id_majer=$key['id_maj'];
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
  <style type="text/css">
    
  </style>
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
<!-- information data for student -->
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
   
    </div>
  </div>
</section>
<!-- for course data and grade -->
<section>
  <div class="row">
    <div class="col-10">
      <div class="text-center">
        <h1>الفرقة الاولى  </h1>
      </div>
    </div>
    <div class="col-5">
     <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,1);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,1);
                    foreach ($subj as $key) {
                         $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>

    <div class="col-5">
      <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,2);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,2);
                    foreach ($subj as $key) {
                       $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>

    <div class="col-10">
      <div class="text-center">
        <h1>الفرقة الثانية </h1>
      </div>
    </div>
    <div class="col-5">
     <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,3);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,3);
                    foreach ($subj as $key) {
                      $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>

    <div class="col-5">
      <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,4);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,4);
                    foreach ($subj as $key) {
                       $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>


<div class="col-10">
      <div class="text-center">
        <h1>الفرقة الثالثة </h1>
      </div>
    </div>
    <div class="col-5">
     <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,5);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,5);
                    foreach ($subj as $key) {
                      $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>

    <div class="col-5">
      <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,6);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,6);
                    foreach ($subj as $key) {
                      $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>


<div class="col-10">
      <div class="text-center">
        <h1>الفرقة الرابعة </h1>
      </div>
    </div>
    <div class="col-5">
     <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,7);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,7);
                    foreach ($subj as $key) {
                       $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>";
                      echo "<td>".$mark."</td>";
                      echo "</tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>

    <div class="col-5">
      <table class="table">
       <thead>
        <tr>
          <th>
            <?php
       echo  $db->getDateTerm($id_student,8);
            ?>
          </th>
        </tr>
         <tr>
           <th>المادة </th>
                <th>الدرجة </th>
         </tr>
       </thead>
       <tbody>
              <?php
                    $subj=$db->getSubjectm($id_majer,8);
                    foreach ($subj as $key) {
                       $mark= $db->getMark ($key['id_sub'],$id_student);
                      # code...
                      echo "<tr>
                        <td>".$key['sub_name']."</td>
                          <td>".$mark."</td>
                      </tr>";
                    }
              ?>
            </tbody>
     </table>
    </div>


  </div>
</section>
<!--Print Button -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        echo '<a href="test.php?id='.$id_student.'">Print</a>';
        ?>
      </div>
    </div>
  </div>
</section>
</body>
</html>