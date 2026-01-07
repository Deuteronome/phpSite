<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <aside></aside>
    <div id="right">
        <header>
            <h1>Dragon ball ...</h1>
        </header>

        <main>

            <h2>Select a character</h2>

            <div class="character-list">

                <div class="character-card selected" id="goku" data-name="Goku">
                    <input type="radio" name="select"/>
                    <p class="character-name">Goku</p>
                </div>

                <div class="character-card" id="freezer" data-name="Freezer" >
                    <input type="radio" name="select"/>
                    <p class="character-name">Freezer</p>
                </div>

                <div class="character-card" id="cell" data-name="Cell">
                    <input type="radio" name="select"/>
                    <p class="character-name">Cell</p>
                </div>

                <div class="character-card" id="pikachu" data-name="Pikachu">
                    <input type="radio" name="select"/>
                    <p class="character-name">Pikachu</p>
                </div>

                <div class="character-card" id="mohamed" data-name="Mohamed">
                    <input type="radio" name="select"/>
                    <p class="character-name">Mohamed</p>
                </div>

            </div>

            <div class="choose-button">Choose "Selected Caracter"</div>

        </main>

        <footer>
                <p>J'aime pas dragon ball</p>
        </footer>
    </div>
</body>


</html>