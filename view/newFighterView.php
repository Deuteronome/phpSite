<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer combattant</title>
</head>
<body>
    <form action="../controller/addFighterController.php" method="post">
        
        <div id="form-line">
        <label for="name">Nom du combattant</label><textarea id="text" name="name"></textarea>
        </div>

         <div id="form-line">
        <label for="description">description</label><textarea id="description" name="description"></textarea>
        </div>

        <div id="form-line">
        <label for="title">Titre de la Page</label><input type="text" id="title" name="title">
        </div>

        <div id="form-line">
        <label for="power">puissance</label><input type="number" id="power" name="power" max="20" min="1">
        </div>


        <div id="form-line">
        <label for="resistance">resistance</label><input type="number" id="resistance" name="resistance" max="20" min="1">
        </div>


        <div id="form-line">
        <label for="hitpoints">Point de Vie</label><input type="number" id="hp" name="hitpoints" max="30" min="1">
        </div>


        <div id="form-line">
        <label for="Chaos">Chaos</label><input type="number" id="chaos" name="chaos" max="10" min="1">
        </div>

        <input type="submit" value="Créer le combattant">

    </form>
</body>
</html>