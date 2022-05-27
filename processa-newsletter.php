
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

O e-mail abaixo foi enviado para inclusão no mailing de novidades da Banda Rephorma Geral.

Email: ".$_POST["email"]."

";

mail('contato@bandarephormageral.com.br', 'Mensagem para Banda Rephorma Geral', $corpo , 'From: contato@bandarephormageral.com.br');
mail('joao.paulo@mariantoconsultoria.com.br', 'Mensagem para Banda Rephorma Geral', $corpo , 'From: contato@bandarephormageral.com.br');

echo "E-mail enviado com sucesso!";

?>

<p> <a href="http://bandarephormageral.com.br/index.html" >Voltar para a página inicial</a></p>

</body>
</html>





