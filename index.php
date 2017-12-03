<?php
include("menusuperior.html");
?>
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="foto">
	<center><a href="http://www.nach.es"><img src="img/nach01.png" height="250" width="575" class="foto-width"></center>
    </div>
    <div id="divisor">
	<center>
	<nav>
		<ul class="menu">
		<li>
		<a href="index.php" class="activado">HOME</a>
	    <a href="discografia.php">DISCOGRAFIA</a>
		<a href="biografia.php">BIOGRAFIA</a>
        <a href="videos.php">VIDEOS</a>
        <a href="fotos.php">FOTOS</a>
        </li>
	</ul>
    </nav>
</center>
    <span class="separador01"></span>
    <div class="divisor02">
    <table>
    	<tr>
    		<td><label class="">Ultimo videoclip lanzado:</label><label class="oro align">NACH - RAP ESPAÑOL</label></td>
    	</tr>
    	<tr>
    		<td><iframe class="mover video-size" width="560" height="270" src="https://www.youtube.com/embed/LsWAVTQCaDs" frameborder="0" allowfullscreen></iframe></td>
    	</tr>
    	<tr>
    		<td><label class="">Album reciente:</label><label class="oro align">A TRAVES DE MÍ</label></td>
    	</tr>
    	    	<tr>
    		<td><img src="img/cazadores_de_instantes.png" height="135" width="560" class="mover-img img-size"></td>
    	</tr>
    </table>
    </div>
    <br>
<?php
include("menuinferior.html");
?>