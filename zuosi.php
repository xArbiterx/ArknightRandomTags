<?php
    $db = new mysqli('localhost','root','','mrfz');
    if(mysqli_connect_errno())
    {
        echo '<p>db connect failed</p></br>';
    }
    $yashi=json_decode($_POST['yashi']);

    if(empty($yashi[0]))
    {
        
        $__id = rand(1,63);
            $query="select name from ganyuan where id = ?";
        $stmt=$db->prepare($query);
        $stmt->bind_param('i', $__id);
        $stmt->bind_result($name);
        $stmt->execute();
        $stmt->fetch();
        echo $name;
    }
    else
    {
        
    }
?>
