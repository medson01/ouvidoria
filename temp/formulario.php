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

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 	<!-- Optional JavaScript -->
 	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 


</head>

<body>
<form action="envia.php" method="post" id="contato" class="form-horizontal form-label-left">
<fieldset>
<legend>Formulário de Contato</legend>

<label>Seu nome:</label><br />
<input name="nome" type="text"  class="form-control form-control-sm" /><br /><br />

<label>Seu email:</label><br />
<input name="email" type="text"  class="form-control form-control-sm" /><br /><br />

<label>Assunto:</label><br />
<input name="assunto" type="text"  class="form-control form-control-sm" /><br /><br />

<label>Mensagem:</label><br />
<textarea name="mensagem" rows="10"  class="form-control form-control-sm" ></textarea><br /><br />

<input name="submit" type="submit" value="Enviar" style="width: auto;" />
</fieldset>
</form>
</body>
</html>