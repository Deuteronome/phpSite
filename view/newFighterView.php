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
            <label for="name">Nom du combattant : </label><input type="text" id="name" name="name">
        </div>

        <div id="form-line">
            <label for="description">Description : </label><textarea id="description" name="description"></textarea>
        </div>

        <div id="form-line">
            <label for="title">Titre du combattant : </label><input type="text" id="title" name="title">
        </div>
        
        <div id="form-line">
            <label for="power">Power : </label><input type="number" id="power" name="power" max="10" min="1">
        </div>

        <div id="form-line">
            <label for="resistance">Resistance : </label><input type="number" id="resistance" name="resistance" max="10" min="1">
        </div>

        <div id="form-line">
            <label for="hp">HP : </label><input type="number" id="hp" name="hp" max="30" min="1">
        </div>

        <div id="form-line">
            <label for="chaos">Chaos : </label><input type="number" id="chaos" name="chaos" max="10" min="1">
        </div>

            <input type="submit" value="Créer combattant"> 
    </form>
</body>
</html>