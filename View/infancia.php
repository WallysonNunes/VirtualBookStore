<?php

echo '

<!DOCTYPE html>
<html>

<head>
	<title>Bem Vindo a Livraria São Paulo</title>
	<link rel="stylesheet" type="text/css" href="css/pagina.css"></link>
	<link rel="stylesheet" type="text/css" href="css/main_container.css"></link>
	<link rel="stylesheet" type="text/css" href="css/header.css"></link>
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link rel="stylesheet" type="text/css" href="css/section.css"></link>
	<link rel="stylesheet" type="text/css" href="css/footer.css"></link>
	<link rel="stylesheet" type="text/css" href="css/1984.css"></link>
</head>
<body>
<div id="main_container">
';

require_once("header.php");

echo '
	 <nav>
        	<ul>
        		<li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="livros.php">Comprar Livros</a></li>
				<li><a href="cadastrar.html">Cadastrar Usu&aacute;rio</a></li>
                <li><a href="contato.html">Contato</a></li>
				<li><a href="alterar_sessao.html">&Aacute;rea Restrita</a></li>
        	</ul>
    </nav>

    <section>
    	<div class="title_welcome"><span class="red">Compre</span> os Livros da Livraria São Paulo !</div>

    	<div class="center_left">        
			<img src="images/infancia.png" alt="O Fim da Infância" title="" />
		</div>

		<div class="center_right">
					<table class="informacoes">
						<tr>
							<th>Nome: </th>
							<td>O Fim da Infância</td>
						</tr>

						<tr>
							<th>Autor: </th>
							<td>Arthur C. Clark</td>
						</tr>

						<tr>
							<th>Preço: </th>
							<td>R$ 49,99</td>
						</tr>

						<tr>
							<th>Sinopse: </th>
							<td>
								<p>
									Em plena Guerra Fria, enquanto russos e americanos se preparam para a corrida espacial, imensas naves surgem sobre as principais capitais do mundo, revelando um dos grandes mistérios da humanidade: O homem não está sozinho no universo.
									Seus ocupantes, chamados de Senhores Supremos, dominam a Terra de forma pacífica e melhoram substancialmente as condições de vida. A ignorância, a guerra e a pobreza deixam de existir, dando início a uma era de ouro.
								</p>
							</td>
						</tr>

						<tr>
							<th>Assunto: </th>
							<td>Ficção Científica</td>
						</tr>

						<tr>
							<th>Ano: </th>
							<td>2010</td>
						</tr>

						<tr>
							<th>Número de Páginas: </th>
							<td>320</td>
						</tr>
					</table>
			</div>

			<div class="embaixo">
				<a href="infancia.php" class="read_more">Comprar</a>
			</div>
    </section>
';

require_once("footer.php");

echo '
</body>
</html>
';