<?php
session_start();
if(isset($_SESSION['isLoggedIn'])){
	if($_SESSION['isLoggedIn']==false){
		header("location:login.php");
	}
	}else{
		header("location:login.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><a href ="?p=condition">Condition</a></li>
		<li><a href ="?p=variabel">Variabel &amp;Operator</a></li>
		<li><a href ="?p=looping">Looping</a></li>
		<li><a href="?p=array">Array</a></li>
	</ul>
	<?php
		switch($_GET['p']){
			case 'array':
				echo "<h1>Array</h1>";
				include 'array.php';
			break;

			case 'condition':
				echo "<h1>Condition</h1>";
				include 'condition.php';
			break;

		
			case  'variabel':
			echo "<h1>Variabel</h1>";
			include 'variabel_operator.php';
			break;

		
			case 'looping':
			echo "<h1>Looping</h1>";
			include 'looping.php';
			break;

			default:
			echo "<h1>HAR HAR</h1>";
			break;
		}
?>
</body>
</html>