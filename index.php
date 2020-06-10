<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Tienda de Ropa</title>
    </head>
    <body>
        
        <!--Cabecera-->

        <header id="header">
        
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                <a href="index.php"> Tienda de Camisetas </a>
            </div>
        
        </header>
        
        <!--Menu-->
            
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoria1</a>
                    </li>
                    <li>
                        <a href="#">Categoria2</a>
                    </li>
                    <li>
                        <a href="#">Categoria3</a>
                    </li>
                    <li>
                        <a href="#">Categoria4</a>
                    </li>
                    <li>
                        <a href="#">Categoria5</a>
                    </li>
                    
                </ul>
            </nav>

        

        <div id="content">
            <!--Barra Lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="passwors">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="Ingresar">
                    </form>
                    <a href="#">Mis Pedidos</a>
                    <a href="#">Gestionar Pedidos</a>
                    <a href="#">Gesionar Categorias</a>
                </div>
            </aside>
        </div>

        <!--Contenido Central-->

        <div id="central">

            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul Hancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul Hancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul Hancha</h2>
                <p>30 euros</p>
                <a href="">Comprar</a>
            </div>
        </div>

        <!--Pie de Pagina-->
        <footer id="footer">
            <p>Desarrollado por Esteban Islas &copy; <?=date('Y');?></p>
        </footer>


    </body>
</html>