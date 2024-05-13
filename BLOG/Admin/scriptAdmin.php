 <?php

   require '../connect_database/connect.php';






   $req = "SELECT email, password From admin";
   $exe = $conn->query($req);
   $data = $exe->fetchAll();
   var_dump($data);

  
      
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
         $email = $_POST['email'];
         $password = htmlspecialchars($_POST['password']);
   
   
         if ($email || $password != $data) {
            echo "error";
         } else {
            echo "ok";
         }
   }
    





   // header('location: ../Admin/compteAdmin.php');

   ?>;