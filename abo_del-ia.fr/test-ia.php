<!doctype html>

<html>

    <head>
        <title>Testez DELIA, l'IA de demain</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="media/logos/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/test-ia.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    
    
    <body id="test-ia">

        <main class="first">
            <div id="pres">
                <img src="media/logos/logo.png" class="fade">
                <h1 class="fade">TESTEZ DELIA</h1>
                <p class="fade">Un aperçu des fonctionnalités</p><br>
                <a class="cta intro fade" id="test-begin"><span>Commencer</span></a>
            </div>
        </main>
    
        <section id="quests" class="center hello">
            <div class="content">
                <div id="quest1" class="quest">
                    <label>Que recherchez-vous ?</label>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                    </select>
                    <input type='button' name="valid-rech" id="but-rech" value="OK">
                </div>
                <div id="quest2" class="quest hello">
                    <label>Où ?</label>
                    <input type="text" name="lieu" id="text-lieu" placeholder="Ex : Sur Internet / A Paris / "/>
                    <input type='button' name="valid-lieu" id="but-lieu" value="OK">
                </div>
                <div id="quest3" class="quest hello">
                    <label>Pour quand ?</label>
                    <input type="text" name="heure" id="text-time" placeholder="Ex : Demain / A 18h / Tout de suite"/>
                    <input type='button' name="valid-time" id="but-time" value="OK">
                </div>
            </div>
            <span id="loader" ></span>
        </section>

    </body>


</html>