<?php
// Define a página padrão
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

// Verifica se a página existe e inclui o arquivo apropriado
$pagina_path = $pagina . '.php';
if (file_exists($pagina_path)) {
    include 'App.php';
} else {
    echo "Página não encontrada!";
}
?>
