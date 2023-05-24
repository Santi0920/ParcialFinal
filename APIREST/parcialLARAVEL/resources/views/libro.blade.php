<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Free Port
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090122

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PARCIAL TELEMATICOS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://kit.fontawesome.com/5b973e91e5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="wrapper">

<div id="header-wrapper">
	<div id="logo">
		<h1><a href="#" style="color: white; text-shadow: 2px 2px black;">PARCIAL API</a></h1>
        <h3 style="color: black; font-size: 20px">Santiago Castaño - JJ Sandoval</h3>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
                <li class="current_page_item"><a href="../public/">Inicio</a></li>
				<li><a href="../public/listar">Listar</a></li>
				<li><a href="../public/agregar">Agregar</a></li>
			</ul>
		</div>
		
	</div>
	<!-- end #header -->
</div>
<!-- end #header-wrapper -->

<div id="page">
	<div id="content">
		<div class="post">

		
			
		</div>
        
        @foreach($data as $book)
        <h1 style="color: Gray; text-shadow: 2px 2px black;"><strong>Articulo #{{$book['id']}}</strong></h1>
        <br>
        <h1 style="color: black"><strong>ID:</strong> {{$book['id']}}</h1>
        <h1 style="color: black"><strong>AUTOR:</strong> {{$book['author']}}</h1>
        <h1 style="color: black"><strong>DESCRIPCIÓN:</strong> {{$book['description']}}</h1>
        <h1 style="color: black"><strong>TÍTULO:</strong> {{$book['title']}}</h1>
        @endforeach
        <br>
        <br>
        <br>
	<!-- end #content -->
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- end #page -->
<footer style="text-align: center; font-size: 15px">
Desarrollado y Diseñado por <strong>LOS GORILOS</strong>
</footer>
<br>
<!-- end #footer -->
</div>
</div>
<script>
         function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar este registro?")
            return respuesta
          }
</script>
</body>
</html>
