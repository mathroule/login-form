<!doctype html>
<html lang="en">
<head>
    <title>HTTP form submitted by jQuery</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="form.js"></script>
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

<div class="col-sm-6 col-sm-offset-3">

    <nav aria-label="breadcrumb" class="top">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../..">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">HTTP login form submitted by jQuery</li>
        </ol>
    </nav>

    <h1>HTTP login form submitted by jQuery</h1>
    <h2>Will call index.php</h2>

    <form action="index.php" method="POST" id="login-form">

        <div id="username-group" class="form-group<?php echo $errors['username'] ? ' has-error' : '' ?>">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $form['username']; ?>">
            <?php if ($errors['username']) { ?>
                <div class="help-block"><?php echo $errors['username']; ?></div>
            <?php } ?>
        </div>

        <div id="password-group" class="form-group<?php echo $errors['password'] ? ' has-error' : '' ?>">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $form['username']; ?>">
            <?php if ($errors['password']) { ?>
                <div class="help-block"><?php echo $errors['password']; ?></div>
            <?php } ?>
        </div>

        <button id="submit" class="btn btn-success">Submit</button>
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

</div>
</body>
</html>
