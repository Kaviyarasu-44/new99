<center><?php
include("connection.php");
if(isset($_POST['btn']));{
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $un=$_POST['un'];
    $ci=$_POST['ci'];
    $ag=$_POST['ag'];
    $zi=$_POST['zi'];
   
    
    $result=mysqli_query($con,"insert into giftsorder values('$fn','$ln','$un','$ci','$ag','$zi')");
    if($result)
    {
        
        echo "<br><br><h2><b> Your Response has been Submitted</b></h2>";
    }
    else{
        echo"Invalid";
    }
   


}
?></center>
<html>
  <head>
   <center><body>
    
    <h3 style="color: tomato"><b>Thank you for filling out the form. We will reach you zoon..</b> </h3>
    <br><br>
    <a href="contactus.html"><button id="bu" type="button" class="btn btn-danger" style=" border-width: 10px;">Go Back</button></a>

    
   </body></center>
</html>