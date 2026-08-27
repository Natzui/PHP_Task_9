<?php require './layout/head.php'; ?>

<h1>PHP Output No. 2 (Page 2)</h1>
<p>Registration</p>
<link rel="stylesheet" href="style.css">

   <fieldset>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" placeholder="Enter Username" required />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" placeholder="Enter Password" required />
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" name="FN" placeholder="Enter Full Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="Age" placeholder="Enter Age" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="Gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

<a href="./index.php">Go to Main Page</a>

<?php require './layout/foot.php'; ?>

<!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->