



<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>Compare it!</title>
    </head>


    <body>

        <?php include  ("header.php"); ?>

        <!-- BODY ARTICLES -->

        <div class="signup-body wrapper">

                <h2>Sign Up!<br/>
                It's easy and fast!</h2>

                <form action="signup-post.php" method="post" class="form-signup">

                    <div class="signup-form">



                        <input type="text" placeholder="Username" name="username" class="span3" id="username" required>
                        <br />


                        <input type="email" placeholder="E-mail" name="email" class="span3" id="email" required>
                        <br />


                        <input type="password" placeholder="Password" name="password" class="span3" id="password" required>
                        <br />


                        <input type="password" placeholder="Confirm Password" name="confirm_password" class="confirm_password" required>
                        <br />


                    </div>

                    <div class="container termsaccept">
                        <label class="terms-condition-signup"><input type="checkbox" name="terms" required> I agree with the <a href="terms.php">Terms and Conditions</a>.</label>
                    </div>



                    <div class="container submit">
                        <input type="submit" name="Submit" value="Sign up" class="btn btn-primary signup-button">
                    </div>
                    <div class="clearfix"></div>

                </form>


        </div>




        <?php include  ("footer.php"); ?>



    </body>


</html>