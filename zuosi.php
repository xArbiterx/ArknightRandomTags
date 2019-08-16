<?php
    $db = new mysqli('localhost','root','','mrfz');
    if(mysqli_connect_errno())
    {
        echo '<p>db connect failed</p></br>';
    }
    $yashi=json_decode($_POST['yashi']);
    $stars = [];
    $tagSize = count($yashi[0]);

    //星级判断
    if(($yashi[1][0] > 7 && $yashi[1][1] > [40]) || $yashi[1][0] > 8)
    {
        $stars[0] = 3;
        $stars[1] = 5;
    }
    else if($yashi[1][0] > 4)
    {
        $stars[0] = 2;
        $stars[1] = 5;
    }
    else
    {
        $stars[0] = 1;
        $stars[1] = 4;
    }

    //tag判断
    switch($tagSize)
    {
    case 1:
        $query="select name, star from ganyuan where star >= ? && star <= ? && tag = ?";
        $stmt=$db->prepare($query);
        $stmt->bind_param('iis', $stars[0], $stars[1], $yashi[0][0]);
        break;
    case 2:
        $query="select name, star from ganyuan where star >= ? && star <= ? && tag = ? && tag = ?";
        $stmt=$db->prepare($query);
        $stmt->bind_param('iiss', $stars[0], $stars[1], $yashi[0][0], $yashi[0][1]);
        break;
    case 3:
        $query="select name, star from ganyuan where star >= ? && star <= ? && tag = ? && tag = ? && tag = ?";
        $stmt=$db->prepare($query);
        $stmt->bind_param('iisss', $stars[0], $stars[1], $yashi[0][0], $yashi[0][1], $yashi[0][2]);
        break;
    default:
        $query="select name, star from ganyuan where star >= ? && star <= ?";
        $stmt=$db->prepare($query);
        $stmt->bind_param('ii', $stars[0], $stars[1]);
    }
    $stmt->bind_result($name, $qStar);
    $stmt->execute();
    
    echo gyQuery($stmt, $name, $qStar);
    


    function gyQuery(&$stmt ,&$name, &$qStar)
    {
        $names[0] = [];
        $names[1] = [];
        $gyStar = [];
        $gyList = [];
        while($stmt->fetch())
        {
            array_push($names[0], $name);
            array_push($names[1], $qStar);
            if($qStar == 1);
        }
        if(count($names[0]) == 1)//锁一个
            return $names[0][0];

        if($names[1][0] == 6) //锁6星
        {
            $asd =  count($names[0])- 1;
            $id = rand(0,$asd);
            return $names[0][$id];
        }
        
        if($names[1][0] == 2)//锁新手
        {
            $asd =  count($names[0])- 1;
            $id = rand(0,$asd);
            return $names[0][$id];
        }

        $rr = rand(1,1000);
        if($rr > 998)
        {
A:
            for($i = 0; $i < count($names[1]); $i++)
            {
                if($names[1][$i] == 5)
                    array_push($gyList, $names[0][$i]);
            }
            if(count($gyList) == 0)
                return 'err';
        }
        else if($rr > 900)
        {
B:
            for($i = 0; $i < count($names[1]); $i++)
            {
                if($names[1][$i] == 4)
                    array_push($gyList, $names[0][$i]);
            }
            if(count($gyList) == 0)
                goto A;
        }
        else if($rr > 400)
        {
C:
            for($i = 0; $i < count($names[1]); $i++)
            {
                if($names[1][$i] == 3)
                    array_push($gyList, $names[0][$i]);
            }
            if(count($gyList) == 0)
                goto B;
        }
        else if($rr > 100)
        {
D:
            for($i = 0; $i < count($names[1]); $i++)
            {
                if($names[1][$i] == 2)
                    array_push($gyList, $names[0][$i]);
            }
            if(count($gyList) == 0)
                goto C;
        }
        else
        {
            for($i = 0; $i < count($names[1]); $i++)
            {
                if($names[1][$i] == 1)
                    array_push($gyList, $names[0][$i]);
            }
            if(count($gyList) == 0)
                goto D;
        }
        $asd =  count($gyList)- 1;
        $id = rand(0,$asd);
        return $gyList[$id];
    }

?>
