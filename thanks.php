<!DOCTYPE html>
<html>
    <head>
        <title>
            Form Submitted
        </title>
        <style>
        body {
            background-color: teal;
            font-family: calibri;
        }
        </style>
    </head>
    <body>
        <p>
            Welcome, <?php echo $_POST["first_name"]; ?> <?php echo $_POST["last_name"]; ?> <br />
            Please write down your password: <?php echo $_POST["password"]; ?> 
            Thank you for signing up! You will recieve a notification to <?php echo $_POST["email"]; ?>  shortly if you are approved! <br />
            Did you opt in to recieve our newsletter?: <?php echo $_POST["yes_no"]; ?> <br />
            Your theme is based on the color(s): <?php echo $_POST["green"]; ?> <?php echo $_POST["blue"]; ?> <?php echo $_POST["red"]; ?> <?php echo $_POST["purple"]; ?> <?php echo $_POST["yellow"]; ?> <?php echo $_POST["pink"]; ?> <br />
            The age you indicated was <?php echo $_POST["drop-down"]; ?> <br />
            Signup introduction: <?php echo $_POST["para"]; ?>
        </p>
    </body>
</html>