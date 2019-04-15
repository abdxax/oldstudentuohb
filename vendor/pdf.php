<?php
require_once __DIR__ . '\autoload.php';
$info="<table>
<tr>
<th>Name</th>
<td>Name</td>
<th>college</th>
<td>Compouter</td>
<th>Major</th>
<td>Software </td>

</tr>
</table>";
$table="<table>
<tr>
<th>Name</th>
<td>Name</td>
<th>college</th>
<td>Compouter</td>
<th>Major</th>
<td>Software </td>

</tr>
</table>";
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($info);
$mpdf->WriteHTML($table);
$mpdf->Output();