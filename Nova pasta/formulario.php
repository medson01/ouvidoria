<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário de Contato</title>
<style type="text/css">
#contato {
font-family: Arial, Helvetica, sans-serif;
}

#contato input, #contato textarea {
font-family: Arial, Helvetica, sans-serif;
padding: 5px;
width: 250px;
}
</style>
</head>

<body>
<form action="envia.php" method="post" id="contato">
<fieldset>
<legend>Formulário de Contato</legend>

<label>Seu nome:</label><br />
<input name="nome" type="text" /><br /><br />

<label>Seu email:</label><br />
<input name="email" type="text" /><br /><br />

<label>Assunto:</label><br />
<input name="assunto" type="text" /><br /><br />

<label>Mensagem:</label><br />
<textarea name="mensagem" rows="10"></textarea><br /><br />

<input name="submit" type="submit" value="Enviar" style="width: auto;" />
</fieldset>
</form>
</body>
</html>