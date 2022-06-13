<?php include_once("./includes/header.inc.php"); ?> 
<body>
    <fieldset>
            <legend>Connexion</legend>
            <form action="user.php" method="post">
                <label for="mail">E-Mail</label>
                <input type="email" id="mail" name="mail" placeholder="E-Mail" aria-required="true" required>

                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" aria-required="true" required>

                <input type="submit" name="valider" value="Envoyer">
            </form>
         <?php
            include_once 'includes/db_connect.inc.php';
            try { 
                if(isset($_POST['valider']) && isset($_POST["nom"]) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['pays']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['phone']))
                {
                    $_email = $_POST["mail"];
                    $_password = $_POST["password"];

                    print $_email;
                    print $_password;

                    $_req = "SELECT * FROM user WHERE email = '$_email' AND password = '$_password'";
                    $_req -> execute(array(
                        'email' => $_email,
                        'password' => $_password,
                    ));
   
                }
                else{
                    echo "<p class=\"warning\"> Veuillez remplir tous les champs.</p>"; 
                }
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }    
        ?>
    </fieldset>

<?php
//formulaire connexion
include_once("./includes/db_connect.inc.php");
if(isset($_POST['mail']) && isset($_POST['password'])){
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
    $query = $_bdd->query($sql);
    $result = $query->fetch();
    if($result){
        $_SESSION['email'] = $result['email'];
        $_SESSION['password'] = $result['password'];
    }
    header('');
}
else{
    echo "<p class=\"warning\"> Veuillez remplir tous les champs.</p>"; 
}
?>
</body>