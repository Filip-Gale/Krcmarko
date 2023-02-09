
<?php
    $name=$_POST['name'];
    echo $name;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Krčmarko</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="potvrda.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    
    
    <body>
        <nav>
            <ul>
                <a href="rezerviraj.html"><li>Rezerviraj</li></a>
                <a href="index.html"><li><div id="logo"></div></li></a>
                <a href="oNama.html"><li>O nama</li></a>
            </ul>
        </nav>
        <main>
            <section>
                <article>
                    <h2>Rezervacija poslana!</h2>
                        <p>
                            Ovom potvrdom dokazuješ da uspješno možeš poslati poruku. Čestitke!
                        </p>
                    <div id="imgContainer">
                        <img src="img/potpis.png" alt="potpis" id="potpis">
                        <img src="img/pecat.png" alt="pecat">
                    </div>
                </article>
            </section>
            <a href="index.html">
            <div class="gumb">
                Nazad na Glavnu
            </div>
            </a>
            <div id="pokusaj">
                
            </div>
        </main>
        <footer>
            <a href="https://www.instagram.com/krchmarko/">
                <div class="footItem">
                    
                    <img src="img/instagram.png" alt="insta">
                </div>
            </a>
        </footer>
    </body>
</html>