<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Serena Login</title>

</head>
<body>
    <header class="header">
        <img src="./assets/img/logoSerena.svg" alt="Logo Serena" class="logoSerena">
        <nav>
            <ul class="menu">
                <li><a href="inicio.php">Inicio</a></li>
                <li class="menuRotina"><a href="minharotina.php">Minha Rotina</a>
                    <ul class="submenu">
                        <li><a href="minharotina.php#calendario">Calendário</a></li>
                        <li><a href="minharotina.php#tarefas">Tarefas</a></li>
                        <li><a href="minharotina.php#habitos">Hábitos</a></li>
                        <li><a href="minharotina.php#anotacoes">Anotações</a></li>
                    </ul>
                </li>
                <li><a href="progresso.php">Progresso</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>                    
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="formularioLogin">
            <div class="campoLogin">
                <h1>Bem-vindo de volta</h1>
                
                <input type="email" id="email" name="email" 
                placeholder="E-mail" required>

                <input type="password" id="senha" name="senha" 
                placeholder="Senha" required>

                <button class="botaoLoginLogin"> 
                    <a href="minharotina.php" type="submit"> Login </a>
                </button>

                <p>
                    Não tem uma conta <span class="interrogacao">?</span>
                    <a href="cadastro.php">Cadastre-se</a>
                </p>
            </div>

            <div class="postit">
                <img src="./assets/img/postit.svg" alt="Post-it Login">
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footerColuna1">
            <h2 class="nomeSerenaFooter">Serena</h2>
            <p>O site que acompanha seu ritmo</p>
        </div>

        <div class="navegacaoFooter">
            <h2>Navegação</h2>
            <div>
                <a href="inicio.php">Inicio</a>
                <a href="minharotina.php">Minha Rotina</a>
                <a href="progresso.php">Progresso</a>
            </div>
            <div>
                <a href="contato.php">Contato</a>
                <a href="cadastro.php">Cadastro</a>
                <a href="login.php">Login</a>
            </div>
        </div>

        <div class="contatoFooter">
            <h2>Nosso contato</h2>
            <p>serena<span class="arroba">@</span>gmail.com</p>
            <p><span class="numeros">(81) 9</span>.xxxx-xxxx</p>
        </div>

        <p class="direitosAutorais">
            <span class="numeros">2026</span> Serena <span class="arroba">@</span> Todos os direitos reservados.
        </p>
    </footer>

</body>
</html>