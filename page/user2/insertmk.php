<?php
session_start();
require "../connect/func.php";
$db=new opreter();
$db->checkRole($_SESSION['email'],$_SESSION['pass'],3) ;

$trm=$db->getallsTeram();
$id_student=$_GET['id'];
$infotrn=$db->getInfo($id_student);
if ($infotrn->rowCount()==1) {
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
}

else{
  header("location:index.php?err=notfound");
}

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
			<div class="col-8 offset-2">
				<div id="accordion">
				<?php 
				foreach ($trm as $key ) {
          $trm=$db->checkSaveterm($id_student,$key['id_trm']);
          $trmg="";
          if($trm){
            $trmg="مكتمل ";
            echo '
          <div class="card">
    <div class="card-header" id="heading'.$key['id_trm'].'">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$key['id_trm'].'" aria-expanded="true" aria-controls="collapseOne">
          '.$key['name_ter'].'('.$trmg.')
        </button>
      </h5>
    </div>

    <div id="collapse'.$key['id_trm'].'" class="collapse " aria-labelledby="heading'.$key['id_trm'].'" data-parent="#accordion">
      <div class="card-body">

        <form method="POST">
        <div class="form-group">
        <div class="col-4">';
         // <input type="text" name="semday'.$key['id_trm'].'" class="form-control" >
        echo $db->getDateTerm($id_student,$key['id_trm']);
        echo '</div>
        </div>
        <div class="col-8">
          <table class="table">
          <thead>
            <th>الماده </th>
             <th> الدرجه </th>
              <th>الساعات </th>
            </thead>
          ';
          $subj=$db->getSubjectm($_SESSION["mjr"],$key['id_trm']);

           $cont=1;
          foreach ($subj as  $value) {
            # code...
           $sujs=$db->getMark ($value['id_sub'],$id_student);
            echo '

          
            

            <tr>
              <th>'.$value['sub_name'].'</th>

             <td> '.$sujs.'</td>
             <td>'.$value['hours'].'</td>

            </tr>

            

            ';
            $cont++;
          }

         echo ' </table>
        </div>

       
         
        </form>
      </div>
    </div>
  </div>


          ';
          }
          else{
            $trmg="غير مكتمل ";
            echo '
          <div class="card">
    <div class="card-header" id="heading'.$key['id_trm'].'">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$key['id_trm'].'" aria-expanded="true" aria-controls="collapseOne">
          '.$key['name_ter'].'('.$trmg.')
        </button>
      </h5>
    </div>

    <div id="collapse'.$key['id_trm'].'" class="collapse " aria-labelledby="heading'.$key['id_trm'].'" data-parent="#accordion">
      <div class="card-body">

        <form method="POST">
        <div class="form-group">
        <div class="col-4">
          <input type="text" name="semday'.$key['id_trm'].'" class="form-control" placeholder="الفصل الدراسي ">
        </div>
        </div>
        <div class="col-8">
          <table class="table">';
          $subj=$db->getSubjectm($_SESSION["mjr"],$key['id_trm']);
           $cont=1;
          foreach ($subj as  $value) {
            # code...
           
            echo '

            <table >

            <tr>
              <th>'.$value['sub_name'].'</th>

             <td> <input type="text" name="sum'.$key['id_trm'].''.$cont.'" class="form-control"></td >
             <td><input type="hidden" name="sub'.$key['id_trm'].''.$cont.'" value="'.$value['id_sub'].'"></td>

            </tr>

            </table>

            ';
            $cont++;
          }

         echo ' </table>
        </div>

       
          <input type="submit" class="btn btn-info" name="sub'.$key['id_trm'].'" value="حفظ">
        </form>
      </div>
    </div>
  </div>


          ';
          }
					
				}

				?>
				
 <!-- <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
            </div>-->
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