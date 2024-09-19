<style>

/* Estilo geral */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f5;
    color: #fff;
}

header {
    background-color: #800080;
    padding: 20px;
    text-align: center;
}

header h1 {
    color: #ffffff;
    font-size: 2.5em;
    text-shadow: 2px 2px #4d004d;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 10px 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 1.2em;
}

nav ul li a:hover {
    text-decoration: underline;
}

.intro {
    text-align: center;
    padding: 50px 20px;
    background-color: #b300b3;
}

.intro h2 {
    font-size: 2em;
    margin-bottom: 10px;
}

.intro p {
    font-size: 1.2em;
}

.cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 40px;
    background-color: #e6e6fa;
}

.card {
    background-color: #d9b3ff;
    border-radius: 15px;
    padding: 20px;
    width: 250px;
    text-align: center;
    margin: 20px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    width: 100%;
    border-radius: 10px;
}

.card h3 {
    margin: 15px 0 10px 0;
    color: #4d004d;
}

.card p {
    margin-bottom: 15px;
    color: #800080;
}

.card button {
    background-color: #800080;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.card button:hover {
    background-color: #4d004d;
}

footer {
    background-color: #800080;
    text-align: center;
    padding: 10px;
    margin-top: 20px;
}

footer p {
    color: #fff;
}

</style>

<section class="intro">
            <h2>Deliciosos Sorvetes Artesanais</h2>
            <p>Venha experimentar os sorvetes mais incríveis da cidade, com sabores que vão te surpreender!</p>
        </section>

        <section class="cards">
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Sorvete de Chocolate">
                <h3>Sorvete de Chocolate</h3>
                <p>Um clássico irresistível.</p>
                <button>Comprar</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Sorvete de Morango">
                <h3>Sorvete de Morango</h3>
                <p>Fresco e delicioso.</p>
                <button>Comprar</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Sorvete de Baunilha">
                <h3>Sorvete de Baunilha</h3>
                <p>Suave e cremoso.</p>
                <button>Comprar</button>
            </div>
        </section>
    </main>