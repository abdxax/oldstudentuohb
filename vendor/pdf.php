<?php
require_once __DIR__ . '\autoload.php';
require "../page/connect/func.php";
$db=new opreter();
$trm=$db->getallsTeram();
//$id_student=$_GET['id'];
$id_student="20001424";
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
$page='
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <table class="table">
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
          <td>'.  $colle.'</td>
        </tr>

         <tr>
          <th>التخصص </th>
          <td>'.  $majr.'</td>
        </tr>


      </table>
    </div>
   
    </div>
  </div>
</section>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->charset_in='utf-8';
//$PDFContent = mb_convert_encoding($page, 'UTF-8');

$mpdf->WriteHTML($page);

$mpdf->Output();