<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style1.css">
</head>


<?php 
include "inc/pdo.php";
include "inc/functions.php";
include "session.php";
Verifier_session();
$categories = getAllCategories();
include 'inc/header.php'; ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
    
  <?php
  //   test
  

  /* récupération des données du formulaire */
  $id=$_SESSION['id'];
  
  try{
      $req="SELECT * FROM visiteur where id='$id'";
      $res=$pdo->query($req);
      $data=$res->fetchAll(PDO::FETCH_ASSOC);
      if (count($data)===1){
          $fname=$data[0]["nom"];
          $lname=$data[0]["prénom"];
          $num=$data[0]["telephone"];
          $email=$data[0]["email"];
          $addresse=$data[0]["Adresse"];
      }
  } catch(PDOException $e){
      echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
  }

    
      ?>

</div>
<!-- image -->
        </div>
      <form  class="col-md-5 border-right" action="modifier-profil.php", method='post'>
        <div >
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Information Personnel</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input name="nom" value=<?php echo "$fname" ?> type="text" class="form-control" placeholder="first name" ></div>
                    <div class="col-md-6"><label class="labels">Prénom</label><input name="prenom" value=<?php echo "$lname" ?> type="text" class="form-control" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Numéro de téléphone</label><input name="num" value=<?php echo "$num" ?> type="text" class="form-control" placeholder="enter phone number"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input name="email" value=<?php echo "$email" ?> type="text" class="form-control" placeholder="enter address line 1"></div>
                    <div class="col-md-12"><label class="labels">Addresse </label><input name="adresse" value=<?php echo "$addresse" ?> type="text" class="form-control" placeholder="enter address line 2" ></div>
                </div>
        
                <div class="mt-5 text-center"><input type="submit" value="Enregistrer"></div>

            </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>