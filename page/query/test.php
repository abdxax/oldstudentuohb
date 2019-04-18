<?php

require "TCPDF/Tcpdf.php";
require "../connect/func.php";
$db=new opreter();
$id_student=$_GET['id'];
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

$sems=$db->getTermStuent($id_student);
$tcp = new TCPDF();
$tcp->setPrintHeader(false);
$lg = Array();
$lg['a_meta_charset'] = "UTF-8";
$lg['a_meta_dir'] = "rtl";
$lg['a_meta_language'] = "ar";
$lg['w_page'] = "page";

//set some language-dependent strings
$tcp->setLanguageArray($lg); 
$tcp->AddPage();
$tcp->SetFont("freeserif",'',20);
$cont='<!DOCTYPE html>
<html>
<head>

	
	<style>
.title-txt{
 text-align: center;
 margin-top: 25px;
}
	</style>
}
</head>
<body>
<div class="title-txt">
<h3>السجل الاكاديمي </h3>
</div>
<div class="info-table">
<table>
 <thead>
<tr>
          <th>الاسم </th>
          <td>'. $name.'</td>
        </tr>

         <tr>
          <th>السجل المدني  </th>
          <td>'. $id_gv.'</td>
        </tr>

         <tr>
          <th>الكليه  </th>
          <td>'. $colle.'</td>
        </tr>

         <tr>
          <th>التخصص </th>
          <td>'. $majr.'</td>
        </tr>
 </thead>
</table>
</div>
</body>
</html>';
$cont_cour="<table>
<thead>
<tr>
<th>المادة </th>
 <th>الدرجة </th>
</tr>
</thead>
<tbody>

";
$tcp->writeHTML($cont);
for($i=1;$i<=$sems;$i++){
	  $subj=$db->getSubjectm($id_majer,$i);
	  foreach ($subj as $key) {
	  	# code...
	  	 $mark= $db->getMark ($key['id_sub'],$id_student);
	  //	$cont_cour.="<h3>".$key['sub_name']."</h3>";
	  	//$cont_cour.="<h3>".$mark."</h3>";
	  	 $cont_cour.="<tr>
           <td>".$key['sub_name']."</td>
           <td>".$mark."</td>
	  	 </tr>";
	  }
}
$cont_cour.="
</tbody>
</table>";
$tcp->writeHTML($cont_cour);
$tcp->Output();