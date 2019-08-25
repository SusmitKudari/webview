<?php
       $db=mysqli_connect("localhost","root","","susmit");

    //check connection 

    if($db->connect_error){
        die("connection failed:".$db);
    }
    
     else{
      echo "connection ok";
     }          


    if(isset($_POST['submit']))

    {


    	$username =$_POST['usrnm'];
      $email =$_POST['email'];
      $password =$_POST['psw'];
      
    
      
    	
      $query ="INSERT INTO webview_reg (username,email,password) VALUES('$username','$email','$password')";

        mysqli_query($db,$query);
  
        header('Location:index.php');//rediect to index page after insertion



    }

    
     

?>