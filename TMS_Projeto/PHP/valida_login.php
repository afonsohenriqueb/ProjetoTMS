<?php
// Verificar se os campos de usuário e senha foram enviados via POST
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar se o usuário e senha correspondem a um usuário válido no sistema
    if ($usuario === 'usuario_exemplo' && $senha === 'senha_exemplo') {
        // Salvando o usuário logado na sessão (exemplo simples, não recomendado para produção)
        session_start();
        $_SESSION['usuario'] = $usuario;

        // Redirecionar para a página do sistema após o login bem-sucedido
        header('Location: sistema.php');
        exit;
    } else {
        // Caso as credenciais sejam inválidas, redirecionar para a página de login com uma mensagem de erro
        header('Location: index.php?erro=1');
        exit;
    }
} else {
    // Caso os campos não tenham sido enviados, redirecionar para a página de login com uma mensagem de erro
    header('Location: index.php?erro=2');
    exit;
}
?>
