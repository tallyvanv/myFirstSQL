<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Profile page</title>
</head>
<body>
<body>
<div class="container">
    <section class="row">
        <article class="col">
            <!-- Avatar and language -->
            <img src="<?php echo $user['avatar']?>" alt="<?php echo $user['avatar']?>">
            <img src="<?php echo 'images/' . $user['preferred_language'] . '.png'?>" alt="<?php echo $user['avatar']?>">
        </article>
        <article class="col">
            <!-- User, First and Last name -->
            <p><?php echo $user['first_name']?> <?php echo $user['last_name']?></p>
        </article>
    </section>
    <section class="row">
        <article class="col">
            <!-- Video and quote -->
            <a target="_blank" href="<?php echo $user['video']?>">My video here</a>
            <q><?php echo $user['quote']?></q>
            <small class="author"><?php echo $user['quote_author']?><small>
        </article>
        <article class="col">
            <!-- Links and email -->
            <ul>
                <li><a href="<?php echo $user['linkedin']?>">LinkedIn</a></li>
                <li><a href="<?php echo $user['github']?>">Github</a></li>
                <a href = "mailto: <?php echo $user['email']?>">Send Email</a>
            </ul>
        </article>
        <article class="col">
            <img src="<?php echo 'https://belikebill.ga/billgen-API.php?default=1&name=' . $user['first_name'] . '&sex=m'?>" />
        </article>
    </section>
</div>
</body>
</body>
</html>
