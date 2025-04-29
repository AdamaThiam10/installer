<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de Formulaire</title>
</head>

<body>


<?php
include("index.php");
?>
    <h3> Veuillez renseigner votre nom et votre adresse e-mail</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <input type="submit" value="Soumettre">
    </form>

    <?php
    // Partie concernant la connexion à la base de données
    $servername = "localhost"; // Adresse du serveur MySQL
    $username = "root"; // Nom d'utilisateur MySQL
    $password = ""; // Mot de passe (vide par défaut en local)
    $dbname = "formulaire_db"; // Nom de la base de données

    // Connexion à MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }



    // Partie concernant la validation des données du formulaire
    function validate_input($data)
    {
        $data = htmlspecialchars($data); // Protection contre les balises HTML
        $data = trim($data);            // Suppression des espaces inutiles
        $data = stripslashes($data);    // Suppression des antislashs
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if (!empty($_GET['nom']) && !empty($_GET['email'])) {
            $nom = validate_input($_GET['nom']);
            $email = validate_input($_GET['email']);

            // Préparation de la requête SQL pour éviter les injections
            $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $nom, $email);

            if ($stmt->execute()) {
                echo "<h3 style='color:green;'>Données enregistrées avec succès !</h3>";
            } else {
                echo "<p style='color:red;'>Erreur lors de l'enregistrement : " . $stmt->error . "</p>";
            }

            $stmt->close();
        } else {
            echo "<p style='color:red;'>Veuillez remplir tous les champs !</p>";
        }
    }

    // Fermer la connexion
    $conn->close();
    ?>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>


    
<?php
include("footer.php");
?>
</script>
</body>
</html>