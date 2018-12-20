<!doctype html>
<html lang="en">
<head>
    <title>HTTP login form with 307 redirect</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <meta charset="UTF-8">
</head>
<body>

<?php
$error = array();
$form = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $errors['username'] = "Username is required";
    } else {
        $form['username'] = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $errors['password'] = "Password is required";
    } else {
        $form['password'] = test_input($_POST["password"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<form action="redirect.php" method="POST">

    <div id="username-group" class="form-group<?php echo $errors['username'] ? ' has-error' : '' ?>">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo $form['username']; ?>">
        <?php if ($errors['username']) { ?>
            <div class="help-block"><?php echo $errors['username']; ?></div>
        <?php } ?>
    </div>

    <div id="password-group" class="form-group<?php echo $errors['password'] ? ' has-error' : '' ?>">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password"
               value="<?php echo $form['username']; ?>">
        <?php if ($errors['password']) { ?>
            <div class="help-block"><?php echo $errors['password']; ?></div>
        <?php } ?>
    </div>

    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>

<?php
if (empty($errors) && !empty($form)) {
    ?>
    <div class="alert alert-success top">
        <?php
        echo "<h2>Input</h2>";
        echo "<p>";
        echo "Username: " . $form['username'];
        echo "<br>";
        echo "Password: " . $form['password'];
        echo "</p>";
        ?>
    </div>
<?php } ?>

</body>
</html>
