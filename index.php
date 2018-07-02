<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Visualizador-UFU</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/personalizado.css" rel="stylesheet">
    </head>
    <body>
		<!-- Inicio Menu -->
        <nav class="navbar navbar-inverse navbar-fixed-top header-menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><h1>Visualizador de Imagens</h1></a>
                </div>
            </div>
        </nav>
        <!-- Fim Menu -->
		<br><br>
		<h1>Inscrição/Disciplina</h1>

		<div class="espaco-topo">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php

						$controle_num_slide = 1;
						$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
						$resultado_carousel = mysqli_query($conn, $result_carousel);

						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
								{ ?>
								<li data-target="#" data-slide-to="0" class="active"></li>
								<li data-target="#" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
								$controle_num_slide++;
							}
						}
					?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php
						//$controle_ativo = 2;
						$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
						$resultado_carousel = mysqli_query($conn, $result_carousel);
						while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
							 ?>
								<div class="item active">
									<img src="imagens/carousel/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>">
								</div>
						<?php
						}
						?>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#previous" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#next" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
