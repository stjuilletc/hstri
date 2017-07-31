<!doctype html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" style="text/css" href="dragcss.css" />
</head>
<body>
<h1>Aventure</h1>
<div class="dropper">
    
    <div class="draggable"></div>
</div>
<h1>Jouable</h1>
<div class="dropper">
    
    <div class="draggable"></div>
</div>

<div class="dropper">
	<?php 
	
	if(isset($_GET['num'])){
		
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=hs','root','');
		$ex = $bdd->query('SELECT  * FROM card WHERE num="'.$_GET['num'].'"');
		$num=$_GET['num']+1;
		while($donnees = $ex->fetch())
            {
			print(' <div class="draggable"><img src="'.$donnees["img"].'"></div>');
			}
		
	}else{
		$num=0;
	}
	//echo $num;
	
	
	?>
	</div>

	<form name="formulaire" method="GET" action="select.php">
		<?php echo '<input type="submit" name="num" value= "'.$num.'"/>';   ?>
		
	</form>
	<script type="text/javascript" src="jsdrag.js"></script>
	

</body>