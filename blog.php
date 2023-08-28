<?php 

$con = mysqli_connect ("localhost","root","","blog_caleg");

$result = mysqli_query($con,"SELECT * FROM blog_berita");

// while($blog = mysqli_fetch_assoc($result)){
// // var_dump($blog);
// }




?>