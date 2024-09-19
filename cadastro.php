<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #211951;
    text-align: center;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #211951;
}

input[type="text"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="date"]:focus,
select:focus,
textarea:focus {
    border-color: #211951;
    outline: none;
    box-shadow: 0 0 5px rgba(33, 25, 81, 0.5);
}

button {
    background-color: #3d0066;
    color: #ffffff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
    width: 100%;
}

button:hover {
    background-color: #3c2a78; /* tom mais claro de #211951 */
}

@media (max-width: 500px) {
    form {
        padding: 15px;
        max-width: 90%;
    }
}


</style>

<body>
    <h1>Cadastro</h1>
    <form action="processar_cadastro.php" method="POST">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" placeholder="Seu Nome" required>
        
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" placeholder="seunome@mail.com" required>
        
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        
        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
        </select>
        
        <label for="biografia">Biografia:</label>
        <textarea id="biografia" name="biografia" placeholder="Aqui você pode colocar coisas como seu fursona e coisa e tal..." required></textarea>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>