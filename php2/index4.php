<?php require './layout/head.php'; ?>

<h1>FORGOT PASSWORD</h1>
<h2>Please enter your email address to reset your password.</h2>
<form id="fp">
    <label for="EMAIL">EMAIL:</label>
    <input type="text" id="EMAIL" name="EMAIL" required><br><br>
    <input type="submit" value="Reset Password">
</form>
<h3>After Submitting the form, you will receive an email with instructions to reset your password.</h3>



<a href="./index.php">Go to Main Page</a>

<?php require './layout/foot.php'; ?>

<!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->