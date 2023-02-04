
    <!DOCTYPE html>
    <html>
        <head>
            <title>Krčmarko</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="main.css">
            <link rel="stylesheet" href="rezerviraj.css">
            <link rel="icon" type="image/x-icon" href="img/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <script>
                const mailgun = require("8e2137e8feb0c3fd13d297c09131903c-75cd784d-5ae95335");
                const DOMAIN = 'YOUR_DOMAIN_NAME';
                const mg = mailgun({apiKey: api_key, domain: DOMAIN});
                const data = {
                    from: 'Excited User <me@samples.mailgun.org>',
                    to: 'filipgale6@gmail.com',
                    subject: 'Hello',
                    text: 'Testing some Mailgun awesomness!'
                };
                mg.messages().send(data, function (error, body) {
                    console.log(body);
                });
            </script>
        </head>
            
        
        
        <body>
            <nav>
                <ul>
                    <a href="rezerviraj.php"><li>Rezerviraj</li></a>
                    <a href="index.html"><li><div id="logo"></div></li></a>
                    <a href="oNama.html"><li>O nama</li></a>
                </ul>
            </nav>
            <main>
                <img src="img/paralax.png" alt="para" id="paralax">
                <img src="img/rezervacijaVjeverica.png" alt="vjeverica" id="vje" class="paraKapa">
                <img src="img/rezervacijaJelen.png" alt="jelen" id="jel" class="paraKapa">

                <section>
                    <article id="forma">
                        <h2>Rezervacija</h2>
                        <form action="mailto:filipgale6@gmail.com" >
                            <input name="ime" type="text" placeholder=" Ime i prezime">
                            <input name="mail" type="mail" placeholder=" Mail">
                            <textarea name="poruka" id="" cols="0" rows="0" placeholder=" Poruka..."></textarea>
                            <input type="submit" value ="Pošalji" id="button" onclick="sendEmail()">
                        </form>

                    </article>
                </section>
            </main>
            <footer>
                <a href="https://www.instagram.com/krchmarko/">
                    <div class="footItem">
                        
                        <img src="Img/instagram.png" alt="insta">
                        <p>Instagram</p>
                    </div>
                </a>
            </footer>
            
            <script type="text/javascript">
                window.addEventListener("scroll", function() {
                    const distance = window.scrollY;
                    document.querySelector("#jel").style.transform = `translateY(${distance * 0.1}px)`;
                    document.querySelector("#vje").style.transform = `translateY(${distance * 0.1}px)`;
                    document.querySelector("#forma").style.transform = `translateY(${distance * 0.7}px)`;
                    document.querySelector("#paralax").style.transform = `translateY(${distance * 0.9}px)`;
                });
            </script>
    
        </body>
    </html>

