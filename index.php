<html>
    <head>
        <title>MineStat</title>
    </head>
    <body>
        <center>
            <br>
            <br>
            <br>
            <br>
            <form action="minestat.php" method="post">
                URL SERVEUR : <input type="text" name="url" /><br />
                <input type="submit" name="submit" value="Chercher" />
            </form>
            <br>
            <h1>Nombre de Player : <?php $query = MojangAPI::query($_POST['url'], 25565);
if ($query) {
    echo 'Il y a ' . $query['players'] . ' players en jeux sur ' . $query['maxplayers'];
} else {
    echo 'Server is offline.';
} ?></h1>