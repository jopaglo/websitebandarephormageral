
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Envio de Informações</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<?php

$corpo = "

Mensagem enviada através do site Banda Rephorma Geral.

Nome: ".$_POST["nome"]."
Email: ".$_POST["email"]."
Telefone: ".$_POST['telefone']."
Mensagem: ".$_POST['mensagem']."

";

mail('contato@bandarephormageral.com.br', 'Mensagem para Banda Rephorma Geral', $corpo , 'From: contato@bandarephormageral.com.br');
mail('joao.paulo@mariantoconsultoria.com.br', 'Mensagem para Banda Rephorma Geral', $corpo , 'From: contato@bandarephormageral.com.br');

echo "Mensagem enviada com sucesso!";

?>

<p> <a href="http://bandarephormageral.com.br/index.html" >Voltar para a página inicial</a></p>

</body>
</html>





