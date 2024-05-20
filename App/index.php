 

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            background-color: rgb(226, 223, 223);
        }
        form {
            margin-top: 30px;
            background-color: #fff;
            padding: 40px 20px;  
            border-radius: 10px;
            max-width: 400px;  
            margin: 0 auto;  
        }
        form h1 {
            color: rgb(148, 144, 144);
            text-align: center;
            font-family: "Bree Serif", serif;
            color: #e59866;
            font-size: 40px;
        }
        form .social-media {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            color: #747cd7;
        }
        form p.username {
            text-align: center;
        }
        form .inputs {
            display: flex;
            flex-direction: column;
        }
        form .inputs input[type="text"],
        form .inputs input[type="password"] {
            padding: 15px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
            margin-bottom: 15px;
            outline: none;
            width: 100%;
        }
        form p.inscription {
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
        form p.inscription span {
            color: blue;
            cursor: pointer;
        }
        form button {
            padding: 15px 25px;
            border-radius: 5px;
            font-size: 15px;
            color: #fff;
            background-color: #e59866;
            outline: none;
            cursor: pointer;
            width: 100 ;
        }
        form button:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="logo.png" class="navbar-brand" alt="Logo de Mon Site" width="200" height="50" style="padding:1px  ; border-radius: 7px;" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="conference.php"><p class="liens"></p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php"><p class="liens">Accueil</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conference.php"><p class="liens"></p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stage.php"><p class="liens">Stages</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><p class="liens">Contact</p></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
         
            <li class="nav-item">
              <a class="nav-link" href="inscription.php" style="font-size: 18px; background-color: #e59866; color: white; padding: 7px  ; border-radius: 5px;"> Inscription </a>
            </li>
          </ul>
        </div>
    </nav>
	</br></br>

  

    <form method="POST" action="process_login.php"> 
        <h1>Ajouter des Utilisateurs</h1>
   
		<br>
        
        <div class="inputs">
			 
			<input type="text" name="username" id="username" placeholder="Nom d'utilisateur">

            <input type="password" name="password" id="password" placeholder="Password"> 
			
        </div>
        <div align="center"> 
            <button type="submit" name="envoi">Ajouter</button>
        </div>
    </form>
	</br></br>


<footer class="text-center bg-dark color" >
  <div class="container">
    <div class="row">
      <div class="col">
      </br>
        <p>Politique de sécurité</p>
        <p>Nos Contacter</p>
        <p>Nos Activités</p>
        <a href="#">Lien 1</a>
      </div>
      <div class="col">
      </br>
        <p>Politique de sécurité</p>
        <p>Nos Contacter</p>
        <p>Nos Activités</p>
        <a href="#">Lien 2</a>
        
      </div>
    </br>
      <div class="col">
      </br>
        <p>Politique de sécurité</p>
        <p>Nos Contacter</p>
        <p>Nos Activités</p>
        <a href="#">Lien 2</a>
      
      </div>
    
    </div>
  </div>
</br>
  <p class="paragraphe">© 2024 Archéo-iT. Tous droits réservés.</p>
 
</footer>
</body>
</html>


<?php
// Configuration de la base de données
$host = 'mysqlserver';
$db   = 'mydb';
$user = 'hackthus';
$pass = 'pass';
$charset = 'utf8';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options pour PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
 
// Création de l'instance PDO
$pdo = new PDO($dsn, $user, $pass, $options);

// Création de la table `users`
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$pdo->exec($sql);
echo "Table `users` created successfully!";
 
?>
