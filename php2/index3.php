<?php require './layout/head.php'; ?>

<link rel="stylesheet" href="style.css">

<h1>LOGIN</h1>
<form action="index.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="Username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="Password" required><br><br>
    <input type="submit" value="Login">

<?php require './layout/foot.php'; ?>

<!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->