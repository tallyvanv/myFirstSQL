<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL & ~E_NOTICE);

require "connection.php";
require "index.php";
//including the database connection file

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $linkedIn = $_POST['linkedIn'];
    $github = $_POST['email'];
    $email = $_POST['github'];
    $prefLanguage = $_POST['prefLanguage'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quoteAuthor = $_POST['quoteAuthor'];

    // checking empty fields
    if(empty($firstName) || empty($lastName) || empty($email)) {

        if(empty($firstName)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($lastName)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)

        //insert data to database
        $sql = "INSERT INTO table_student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES(:firstname, :lastname, :username, :linkedin, :github, :email, :preflanguage, :avatar, :video, :quote, :quoteauthor)";
        $query = $pdo->prepare($sql);

        $query->bindparam(':firstname', $firstName);
        $query->bindparam(':lastname', $lastName);
        $query->bindparam(':username', $userName);
        $query->bindparam(':linkedin', $linkedIn);
        $query->bindparam(':github', $github);
        $query->bindparam(':email', $email);
        $query->bindparam(':preflanguage', $prefLanguage);
        $query->bindparam(':avatar', $avatar);
        $query->bindparam(':video', $video);
        $query->bindparam(':quote', $quote);
        $query->bindparam(':quoteauthor', $quoteAuthor);

        $query->execute();

        // Alternative to above bindparam and execute
        // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
