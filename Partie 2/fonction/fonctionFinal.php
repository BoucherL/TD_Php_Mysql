<?php
        function sessionLog($arg_1,$arg_2){
            if (!isset($_SESSION["Logged"]) && !$_SESSION["Logged"]) {
                ?>
                    <form method="POST">
                    <label for="nom">Utilisateur :</label>
                        <input type="nom" name="nom" id="nom" value="" />    
                        <p>
                            <label for="password">Mot de passe:</label>
                            <input type="password" name="password" id="password" value=""/>
                            <input type="submit" name="submit" value="connection"/>
                        </p>
                </form>
                <?php
                    if(isset($_POST["submit"])) {
                        if($_POST['nom'] === "Louis" && $_POST['password'] === "4321") {
                               return "ok";
                            }else{
                                return "";
                            }
                        }
            }
        }
?>