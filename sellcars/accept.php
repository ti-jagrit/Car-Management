<?php
 include('../signup/db_config.php');
 $m_id = "";
 if (isset($_GET["id"])) {
     $m_id = $_GET["id"];
$sql = "UPDATE meet_req SET status=1 WHERE meet_id='$m_id'";
                       
        
                       if ($conn->query($sql)) {
                           echo 'meeting request accepted';
                           header('location:meetinginfo.php');
                       } else {
                           echo "Error";
                       }
                    }
                
            
                       ?>