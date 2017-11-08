<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "smaugsoft";
$conn = new mysqli($host, $user, $password, $database);

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$sql = "insert into contato(nome,email,assunto,mensagem) values('$nome', '$email', '$assunto','$mensagem')";
$conn->query($sql);
$conn->close();
?>

<script type="text/javascript">
    alert("Dados enviados com sucesso!");
    location.href = "index.php";
</script>

<?php 