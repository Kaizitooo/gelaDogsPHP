<?php
// Conexão com o banco de dados
$servername = "localhost"; // ou seu servidor
$username = "root"; // seu usuário do banco de dados
$password = "password"; // sua senha do banco de dados
$dbname = "gelaDogsDB"; // seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Captura os dados do formulário
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$biografia = trim($_POST['biografia']);

// Validações
$erros = [];

if (empty($nome) || str_word_count($nome) < 2) {
    $erros[] = "O nome completo deve conter pelo menos dois nomes.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Por favor, insira um e-mail válido.";
}

if (empty($data_nascimento)) {
    $erros[] = "A data de nascimento é obrigatória.";
}

if (empty($genero)) {
    $erros[] = "Por favor, selecione o gênero.";
}

if (empty($biografia)) {
    $erros[] = "A biografia é obrigatória.";
}

// Exibe alertas
if (!empty($erros)) {
    foreach ($erros as $erro) {
        echo "<script>alert('$erro');</script>";
    }
} else {
    // Prepara e executa a inserção no banco de dados
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, data_nascimento, genero, biografia) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $email, $data_nascimento, $genero, $biografia);

    if ($stmt->execute()) {
        echo "<script>
                alert('Cadastro concluído com sucesso!');
                window.location.href = 'App.php'; // redireciona para a home
              </script>";
    } else {
        echo "<script>alert('Erro ao cadastrar: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
