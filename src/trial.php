<?php
public function getdata(){
$query="SELECT * FROM certificate";
$sql=mysqli_query($con,$query);
if(mysqli_num_rows($sql)){
return mysqli_fetch_assoc($sql)

}else{
    echo"No data".mysqli_connect_error();
}
}
if(isset($_SESSION['certificate'])){
    $sql=mysqli_query($con,$query);
    while (mysqli_fetch_assoc($sql)) {
        print"$sql";
    }
}else {
    print'ERROR',mysqli_connect_error();
}