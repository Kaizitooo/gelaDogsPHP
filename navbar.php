<style>

/* Estiliza o elemento nav */
nav {
    position: fixed; /* Fixa a nav no topo da página */
    top: 0; /* Posiciona no topo */
    left: 0; /* Garante que esteja alinhada à esquerda */
    width: 100%; /* Faz a nav ocupar toda a largura da página */
    background-color: #211951;
    z-index: 1000; /* Garante que a nav fique sobre outros elementos */
    padding: 10px 0; /* Adiciona algum padding em cima e embaixo */
    display: flex; /* Usa Flexbox para o layout */
    justify-content: space-between; /* Alinha os itens ao longo da linha com espaço entre eles */
    align-items: center; /* Alinha os itens verticalmente no centro */
    color: white;
}

/* Estiliza a lista dentro da nav */
nav ul {
    list-style: none; /* Remove os marcadores da lista */
    margin: 0; /* Remove a margem */
    padding: 0; /* Remove o padding */
    display: flex; /* Exibe a lista em linha */
    align-items: center; /* Alinha os itens verticalmente */
    justify-content:center ;
}

nav li {
    margin: 0 15px; /* Adiciona espaço entre os itens da lista */
}

nav img {
    height: 50px; /* Define a altura da imagem */
    vertical-align: middle; /* Alinha a imagem com o texto ao seu lado */
    margin-left: 4% ;
    margin-right: 730px;
}

nav a {
    text-decoration: none; /* Remove o sublinhado dos links */
    color: white; /* Define a cor do texto dos links */
    font-size: 16px; /* Define o tamanho da fonte dos links */
    padding: 5px 10px; /* Adiciona algum padding aos links */
}

nav a:hover {
    text-decoration: underline; /* Adiciona sublinhado ao passar o mouse */
}

/* Estiliza o botão */
nav button {
    background-color: #836FFF; /* Define a cor de fundo do botão */
    border: none; /* Remove a borda padrão do botão */
    color: white; /* Define a cor do texto do botão */
    padding: 10px 20px; /* Adiciona padding ao botão */
    border-radius: 12px; /* Faz as bordas do botão serem arredondadas */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adiciona uma sombra ao botão */
    font-size: 16px; /* Define o tamanho da fonte do botão */
    cursor: pointer; /* Muda o cursor para uma mão ao passar sobre o botão */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Adiciona uma transição suave */
    margin-right: 4%;
}

nav button:hover {
    background-color: #5a5bff; /* Cor do botão ao passar o mouse */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Intensifica a sombra ao passar o mouse */
}


</style>

    <nav>
    
        <ul>
            <li><img src="media\DJ_SPALHAFATON_bark1.jpg" alt="DJ Spalhafaton"/></li>
            <li><a href="index.php?pagina=home">Home</a></li>
            <li><a href="index.php?"></a>Placeholder</li>
            <li><a href="index.php?"></a>Placeholder</li>
        </ul>
        <a href="cadastro.php">
            <button>Puts</button>
        </a>

    </nav>