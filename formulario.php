<!DOCTYPE html>
<html>
<head>
	<title> upload de arquivos </title>
</head>
<body>
   <form action="upload.php" enctype="multipart/form-data" method="post">
   	<p> Seu nome: <input type="text" name="nome"></p>

    <p> <input type="file" name="meuArquivo"> </p>
    
    <p>
    	<button type="submit"> Enviar arquivo! </button>
    </p>

   </form>
</body>
</html>