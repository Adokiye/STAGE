<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STAGE 1</title>
<style type="text/css">
.box {
	width: 980px;
    height: 400px;
	background-color: #7F52FC;
	left: 363px;
	top: 4px;
	text-align: center;
	color: #CFfFFF;
	font-size: 36px;
    margin: auto;
}
</style>
</head>

<body>
<div class="box">
  <p>STAGE 1 TASK</p>
  <p>HNG INTERNSHIP 4</p>
  <p>THE CURRENT TIME IS: <br>
      <?php
      date_default_timezone_set('Africa/Lagos');
      $currentTime = date('Y-M-D H:i:s');
      echo $currentTime;?>
  </p>
</div>
</body>
</html>