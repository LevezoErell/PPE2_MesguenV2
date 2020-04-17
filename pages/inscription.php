<?php
   session_start();
   @$login=$_POST["login"];
   @$password=$_POST["password"];
   @$repass=$_POST["repass"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($login)) $erreur="Login laissé vide!";
      elseif(empty($password)) $erreur="Mot de passe laissé vide!";
      elseif($password!=$repass) $erreur="Mots de passe non identiques!";
      else{
         include("/lib/classes/connectAD.php");
         $sel=$pdo->prepare("select id from user where login=? ");
         $sel->execute(array($login));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="Login existe déjà!";
         else{
            $ins=$pdo->prepare("insert into user(login,password) values(?,?)");
            if($ins->execute(array($login,md5($pass))))
               header("location:login.php");
         }   
      }
   }
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h1>Inscription</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" value="<?php echo $login?>" /><br />
         <input type="password" name="password" placeholder="Mot de passe" /><br />
         <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
</html> 