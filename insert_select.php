<?php
//Create variables
$name = $_POST['name'];
$rate  = $_POST['rate'];
$massage = $_POST['massage'];
$query = mysqli_query($con,"SELECT * FROM review WHERE name='$name'  OR rate ='$rate 'OR massage='$massage'");
$sql = "INSERT INTO review (name, rate , massage) VALUES ('$name', '$rate ', '$massage')";


if(!mysqli_query($con, $sql)) {
    echo 'Could not insert';
}
else {
    echo "Thank you, " . $_POST['name'] . ". Your information has been inserted.";
}

$result = mysqli_query($con,"SELECT * FROM review");

echo '<div   class="container">';

while($row = mysqli_fetch_array($result)) {
    $star = "<div  class='star_stiling' ><li><a href='#'><i class='fa fa-star' aria-hidden='true'></i></a></li></div>";
    $total_stars = $row['rate'] / 2;
    echo '<div class="col-sm-6 back_color" style="border: 1px solid">';
    echo "<p style='color: black'>" . '<strong>' . 'Name: <strong/>' . $row['name'] . "</p>";
    echo "<div class='bottom'>";
    echo "<div><p style='color: black'>" . '<strong>' . 'Rate: <strong/></div>' ;
    for($i=1; $i<=5; $i++) {
        if($row['rate'] >= $i) {
            if($total_stars) {
                echo "<div>" .$star."</div>";
            }
        }
    }
    echo "</div>";
    echo "<div class='top'><p  style='color: black' >" . '<strong>' . 'Review: <strong/>' . $row['massage'] . "</p></div>";
    echo '</div>';
}
echo '</div>';


//Close connection
mysqli_close($con);

?>