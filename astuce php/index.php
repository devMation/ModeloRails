<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>

    <?php

    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    /**
     * empty ses pour voir si le champ est saisie
     */
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Le nom est obligatoire";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "les chiffre le son pas accepter";
            }
        };
        if (empty($_POST['email'])) {
            $emailErr = "email est obligatoire";
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = "error votre email n'est pas valide";
            }
        };

        if (empty($_POST['website'])) {
            $websiteErr = "";
        } else {
            $website = test_input($_POST['website']);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "lien est obsolete ou invalide";
            }
        };

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }



        // $name = test_input($_POST['name']);
        // $email = test_input($_POST['email']);
        // $website = test_input($_POST['website']);
        // $comment = test_input($_POST['comment']);
        // $gender = test_input($_POST['gender']);
    }
    // var_dump($gender);


    /**
     * Je cree une fonction qui me permet de supprimer les caractere 
     * inutile (tabulation, nouvelle ligne et espace supplementaire avec trim();
     * et supprimer les barre oblique   avec stripslashes();
     *   
     * @param [type] $data
     * @return void
     */


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * je crée une class error pour que si je mais rien sa maffiche "camps obligatoire
     */
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="email" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40" <?php echo $comment ?>></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
        <input type="radio" name="gender" value="male">Male
        <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
        <input type="radio" name="gender" value="other">Other
        <?php if (isset($gender) && $gender == "other") echo "checked"; ?>
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>

</body>

</html>