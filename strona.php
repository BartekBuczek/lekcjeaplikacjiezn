<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/prog.js"></script>
</head>
<body>
    <div id="banner">
        <div class="kontener">
            <h1>Banner</h1>
        </div>
    </div>
    <div id="foot">
        <div class="kontener">
            <h1>Stopka</h1>
        </div>
    </div>
    <div id="content">
        <div id="left">
            <div class="kontener">
                <h1>Lewy</h1>
                <a onclick="pokaż('s1')" class="link">Sekcja pierwsa</a> |
                <a onclick="pokaż('s2')" class="link">Sekcja druga</a>
                <br>
                <?php 
                include "wstawka0.php"
                ?>
            </div>
        </div>
        <div id="mid">
            <div class="kontener">
                <h1>Centrum</h1>
                <section id="s1">Sekcja pierwsza
                    <?php include "wstawka1.php" ?>
                </section>
                <section id="s2" style="display:none">Sekcja druga
                    <?php include "wstawka2.php" ?>
                </section>
            </div>
        </div>
        <div id="right">
            <div class="kontener">
                <h1>Prawy</h1>
            </div>
        </div>
    </div>
</body>
</html>