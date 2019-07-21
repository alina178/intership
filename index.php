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
    <?php
        require_once "header.php";
    ?>
</head>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="position: relative">
        <div class="item active">
            <img src="images/bg-1.jpg" alt="">
        </div>

        <div class="item">
            <img src="images/bg-2.jpg" alt="">
<!--            <div  class="box" style="position: absolute" >-->
<!--                <h2>Very <b>costomazable</b></h2>-->
<!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--                    Lorem Ipsum has been the industry's standard dummy text ever since the-->
<!--                    1500s, when an unknown printer took a galley of type and scrambled it to-->
<!--                    make a type specimen book.</p>-->
            <button style="background-color: orangered">READ MORE</button>
<!--            </div>-->
        </div>

        <div class="item">
            <img src="images/bg-3.jpg" alt="">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container" >
    <div class="row" style="background-color: #f9f9f9" height="150px">
        <div class="col-sm-8">
            <h2> We've created more than 5000 websites this year</h2>
        </div>
        <div class="col-sm-4">
            <button style="background-color: orangered" height="50px">REQUEST A QOUTE</button>
        </div>
    </div>
</div>

<div class="container" >
    <div class="row">
        <div class="col-sm-3">
            <h2>Corporate business</h2>
            <br>
            <p>It is a long established fact that a reader will  be distracted by the readable content of a page</p>
            <a href="#">Learn more </a>
        </div>

        <div class="col-sm-3">
            <h2>Responsive theme</h2>
            <br>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
            <a href="#">Learn more</a>
        </div>

        <div class="col-sm-3">
            <h2>Coded carefully</h2>
            <br>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
            <a href="#">Learn more</a>
        </div>

        <div class="col-sm-3">
            <h2>Sit and enjoy</h2>
            <br>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
            <a href="#">Learn more</a>
        </div>
    </div>
</div><br><br>
    <div class="container" >
       <hr>
    </div>

        <div class="container">
            <div class="content">
                <h2>Some of recent <b>works</b></h2>
            </div>
            <div class="row first" >
                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-01-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-01-full.jpg"
                             alt="Another alt text">
                    </a>

            </div>

                <div class="col-lg-3 second">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-02-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-02-full.jpg"
                             alt="Another alt text">
                    </a>

                </div>

                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-03-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-03-full.jpg"
                             alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" dat
                       data-image="images/image-04-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-04-full.jpg"
                             alt="Another alt text" >
                        <p></p>
                    </a>
                </div>
            </div>
        </div>

<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-05-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-05-full.jpg"
                             alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="First image"
                       data-image="images/image-06-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-06-full.jpg"
                             alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-07-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-07-full.jpg"
                             alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="images/image-08-full.jpg"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="images/image-08-full.jpg"
                             alt="Another alt text">
                    </a>
                </div>

                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                </button>

                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div><br><br><br><br>
<div class="container" >
    <hr>
</div>

<div class="container">
    <div class="client">
        <h2>Very satisfied <b>clients</b></h2>
    </div>
</div>

<?php
require_once "footer.php";
?>
<script>

</script>

</body>
</html>