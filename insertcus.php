<?php
   
   echo 'firstname <input type="text" name="fnamerec" value=""> </br>';
   echo 'lastname <input type="text" name="lnamerec" value=""> </br>';
   echo 'city <input type="text" name="cityrec" value=""> </br>';
   echo 'phone number <input type="text" name="pnrec" value=""> </br>';
   #echo 'agent id <input type="text" name="agentidrec" value=""> </br>';

   $query = "SELECT * FROM agent ";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Which agent are you looking for? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="agentidrec" value="';
        echo $row["agentid"];
        echo '">'.$row["firstname"]. "<br>";
   }

   
?>
