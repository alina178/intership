<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet " type="text/css" href="style.css">
    <script src="script.js"></script>
</head>

<?php
require_once "header.php";
?>
<div class="container-fluid reviews">
    <div class="container">
        <h2 class="re_header" >Reviews</h2>
    </div>
</div><br><br>
<?php
//Connection to MySQL
require_once "config.php";
//insert and select data
require_once "insert_select.php";
?>

<div class="container">
    <h1>How was your experiance in our website</h1>
</div>
<div class="container">
<!--    <p id="msg"></p>-->
    <form id="my-form" method="post" action="">
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Your name" name="name" required="required">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder=" rate" name="rate" required="required">
            </div>
            <div class="col-sm-4 " >
                    <span class="glyphicon glyphicon-star star glp " aria-hidden="true" ></span>
                    <span class="glyphicon glyphicon-star star glp " aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star star glp" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star star glp" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star star glp" aria-hidden="true"></span>
            </div>
        </div><br>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="massage" placeholder="Massage" required="required"></textarea><br>
                <input  id="formSubmit" name="submit" type="submit" value="Submit review" class=" re_style">

        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $("#my-form").submit(function(e) {
            e.preventDefault();
            $.ajax( {
                url: "",
                method: "post",
                data: $("form").serialize(),
                dataType: "text",
                success: function(strMessage) {
                    // $("#msg").text(strMessage);
                    $("#my-form")[0].reset();
                }
            });
        });
    });

    //

</script>

<?php
    require_once "footer.php";
?>
</body>
</html>