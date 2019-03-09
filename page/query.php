<?php
session_start();
require "../connect/func.php";
$db=new opreter();
$trm=$db->getallsTeram();
$id_student=$_GET['id'];

if (isset($_POST['sub'])) {
	$mname=strip_tags($_POST['majer']);
	$db->addMajer($_SESSION['id_co'],$mname);
}
if(isset($_POST['sub1'])){
  $date=$_POST['semday1'];
 $count=$db->addnewStudentTerm('1',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'1');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum1'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub1'.$subc],$_POST['sum1'.$subc]);
   
    $subc++;
 }

 //print_r($arrmak);
 echo "1";
  print_r($arrmak);

}
if(isset($_POST['sub2'])){
  echo "2";
   $date=$_POST['semday2'];
 $count=$db->addnewStudentTerm('2',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'2');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum2'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub2'.$subc],$_POST['sum2'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub3'])){
   $date=$_POST['semday3'];
 $count=$db->addnewStudentTerm('3',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'3');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum3'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub3'.$subc],$_POST['sum3'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub4'])){
   $date=$_POST['semday4'];
 $count=$db->addnewStudentTerm('4',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'4');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum4'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub4'.$subc],$_POST['sum4'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub5'])){
   $date=$_POST['semday5'];
 $count=$db->addnewStudentTerm('5',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'5');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum5'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub5'.$subc],$_POST['sum5'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub6'])){
   $date=$_POST['semday6'];
 $count=$db->addnewStudentTerm('6',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'6');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum6'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub6'.$subc],$_POST['sum6'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub7'])){
   $date=$_POST['semday7'];
 $count=$db->addnewStudentTerm('7',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'7');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum7'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub7'.$subc],$_POST['sum7'.$subc]);
   
    $subc++;
 }

}
if(isset($_POST['sub8'])){
   $date=$_POST['semday8'];
 $count=$db->addnewStudentTerm('8',$id_student,$date);
 $subj=$db->getSubjectm($_SESSION["mjr"],'8');
 $countSubj=$subj->rowCount();
 echo $countSubj;
 $subc=1;
 $arrmak=array();
 $arrid=array();
 for ($i=0; $i <$countSubj ; $i++) { 
    $arrmak[$i]=$_POST['sum8'.$subc];
    $db->addMarkes($count,$id_student,$_POST['sub8'.$subc],$_POST['sum8'.$subc]);
   
    $subc++;
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
			<a href="#" class="btn btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">اضافه تخصص </a>
			<a href="index.php" class="btn btn-info ">الصفحه الرئيسه </a>
		</div>
		<div class="col-4">
			
		</div>
	</div>
</header>
<section>
  <div class="container">
    <div class="col-12">
      <table class="table">
        <tr>
          <th>الاسم </th>
          <td></td>
        </tr>

         <tr>
          <th>السجل المدني  </th>
          <td></td>
        </tr>

         <tr>
          <th>الكليه  </th>
          <td></td>
        </tr>

         <tr>
          <th>التخصص </th>
          <td></td>
        </tr>


      </table>
    </div>
  </div>
</section>
</body>
</html>