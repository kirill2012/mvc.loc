<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">

</head>

<body>

<div align="right">
    <span style="color: white; font-size: large" id="username">
        <?php echo $_SESSION['username'] ? :''; ?>
    </span>
    <a href="
                <?php echo URL . '/'; echo empty($_SESSION['username']) ? 'login' : 'logout'; ?>
            ">
    <button class="btn" id="log">
        <?php echo empty($_SESSION['username']) ? 'Login' : 'Logout'; ?>
    </button>
    </a>
    <?php if ($_SESSION['username']){
    }else{?>
    <a href="<?php echo URL . '/register' ?>">
        <button class="btn" id="reg">Register</button>
    </a>
    <?php } ?>
</div>

<div id="content">
    <?=$content;?>
</div>

<script src="/public/js/jquery-3.1.0.min.js"></script>
<script src="/public/js/jquery.cookie.js"></script>

</body>
</html>