<?php
require "View/homepage.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php
    $userSelect = 'SELECT first_name,last_name,email,preferred_language  FROM table_student';
    foreach ($pdo->query($userSelect) as $user): ?>
        <tr>
            <td>
                <?php echo $user['first_name'] ?>
            </td>


            <td>
                <?php echo $user['last_name'] ?>
            </td>


            <td>
                <?php echo $user['email'] ?>
            </td>

            <td>
                <img src="<?php echo 'images/' . $user['preferred_language'] . '.png'; ?>" alt="flag">

            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

