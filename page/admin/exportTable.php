<?php
session_start();
require "../connect/func.php";
$db=new opreter();
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Amiri|Cairo|Changa|Markazi+Text|Noto+Sans|Open+Sans|PT+Sans|Roboto|Scheherazade|Source+Serif+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" id="style" href="../../css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <script type="text/javascript" src="js/login.js"></script>-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12">
			<table class="table">
				<thead>
					<tr>
						<th>الكليه</th>
						<th>عدد التخصصات </th>
						<th>عدد الطلاب </th>
						<th>عدد الفصول </th>
						<th> تصدير اكسل </th>
					</tr>
				</thead>
				<tbody>
					<?php
					

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>