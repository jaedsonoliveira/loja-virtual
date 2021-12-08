<html>
    <head>
        <meta charset="utf-8">
        <title>Loja</title>
	    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
        
    </head>
    <body>
        <header>
            <div class="header">
                <div class="logo">
                    JAEDSON STORE
                </div>
                <div class="search">
                    <form action="">
                        <input class="inp-pesquise" type="text" placeholder="Pesquise um Item">
                    </form>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">CADASTRAR</a></li>
                    </ul>
                </div>
                <div class="cart">
                    <img src="<?php echo BASE_URL; ?>assets/images/shopping.svg" alt="">
                </div>
            </div>
        </header>

        <section>
            <div class="select">
                <div class="category">
                    <label for="cate">Categorias:</label>
                    <select name="cate" id="">
                        <option value="TV">TV</option>
                        <option value="Celular">CELULAR</option>
                        <option value="TV">VIDEO-GAME</option>
                        <option value="TV">SOM</option>
                    </select>
                </div>
                <div class="filter">
                    <h3>Filtros:</h3>
                    <form>
                        <input type="checkbox" id="" name="1-100" value="1-100">
                        <label for="1-100"> R$ 1 - 100</label><br>
                        <input type="checkbox" id="101-200" name="101-200" value="101-200">
                        <label for="101-200"> R$ 101 - 200</label><br>
                        <input type="checkbox" id="" name="201 - 300" value="">
                        <label for="201-300"> R$ 201 - 300</label>
                      </form>
                </div>
            </div>
        </section>

        <section>
            <div class="products">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
        </section>

        <section>
            <div class="products-destaque">
                <h1>Produtos mais comprados</h1>
                ...
            </div>
        </section>

        <section>
            <div class="products-promocao">
                <h1>Produtos em Promocão</h1>
                ...
            </div>
        </section>

        <footer>
            <form action="">
                <input type="text" placeholder="Insira seu email e receba novidades">
                <button>Inscreva-se</button>
                <p>Jaedson Store - 2021</p>
            </form>
        </footer>
    </body>
</html>