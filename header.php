<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet " type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<div class="container">
<ul class="nav navbar-nav navbar-right ml-auto">
    <li class="nav-item">
        <a href="#" data-toggle="dropdown"  class="orange"> <i class="fa fa-user-o"></i>Sign up</a>
        <ul class="dropdown-menu form-wrapper">
            <li>
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="account" > <h4>Create an <strong>account</strong></h4></div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                    </div>
                    <input type="submit" class="btn  btn-block" value="Sign up">
                </form>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle orange" href="#">Sign in</a>
        <ul class="dropdown-menu form-wrapper">
            <li>
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="account" ><h4>Login to your <strong>account</strong></h4></div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <input type="submit" class="btn  btn-block" value="Sign in">
                    <div class="form-footer">
                        <a href="#">Forgot Your password?</a>
                    </div>
                </form>
            </li>
        </ul>
    </li>
</ul>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4 logo ">
            <img src="images/logo.png"
                 alt="Another alt text">
            <h1>Flat and treendy bootstrap template</h1>
        </div>


        <div class="col-sm-8">
            <nav class="navbar ">

                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="index.php" class="active">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">FEAUTERS
                               </a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TYPOGRAPHY</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TABLE</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COMPONENETS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">56 ANIMATIONS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ICON</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ICON VARIATIONC</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3 SLIDERS</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGES
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TYPOGRAPHY</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ABOUT US</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PRICING BOXES</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">TESTIMONIALS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">404</a></li>
                                <li role="presentation" class="divider"></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">PORTFOLIO
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PORTFOLIO 2 COLUNS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PORTFOLIO 3 COLUNS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PORTFOLIO 4 COLUNS</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PORTFOLIO 2 DETAIL</a></li>
                                <li role="presentation" class="divider"></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">BLOG
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BLOG LEFT SLIDEBAR</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BLOG RIGHT SLIDEBAR</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">POST LEFT SLIDEBAR</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">POST RIGHT SLIDEBAR</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
            </nav>
        </div>
    </div>
</div>
<div>

</div>
</div>

</body>
</html>