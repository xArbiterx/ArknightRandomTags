<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>利用发电设备</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost','root','','mrfz');
        if(mysqli_connect_errno())
        {
            echo '<p>db connect failed</p></br>';
        }
        else echo 'connected </br>';
        $tags = array();
        $zhiye = array("先锋干员","近卫干员","重装干员","辅助干员","术士干员","医疗干员","狙击干员","特种干员");
        $xingbie = array("男性干员","女性干员");
        $cizhuin = array("治疗","输出","减速","防护","生存","费用回复");
        $cizhuir = array("支援","削弱","位移","快速复活");
        $cizhuisr = array("爆发","召唤","控场");
        $zizhi = array("高级资深干员","资深干员","新手");

        for($i = 0; $i<5; $i++)
        {
            $rr=rand(1,99);
            if($rr < 45)
            {
                $tmp = array_rand($zhiye,1);
                if($tmp == 7)
                {
                    $rr = rand(1,99);
                    if ($rr < 90)
                    {
                        $i--;
                        continue;
                    }
                }
                array_push($tags,$zhiye[$tmp]);
            }
            else if($rr >= 45 && $rr < 70)
            {
                $rr = rand(1,9999);
                if($rr < 9950)
                    array_push($tags,$zizhi[2]);
                else if($rr < 9998)
                    array_push($tags,$zizhi[1]);
                else array_push($tags,$zizhi[0]);
            }
            else if($rr >= 70 && $rr < 90)
            {
                $rr = rand(1,9999);
                if($rr < 9900)
                {
                    $tmp = array_rand($cizhuin,1);
                    array_push($tags,$cizhuin[$tmp]);
                }
                else if($rr > 9900 && $rr < 9990)
                {
                    $tmp = array_rand($cizhuir,1);
                    array_push($tags,$cizhuir[$tmp]);
                }
                else
                {
                    $tmp = array_rand($cizhuisr,1);
                    array_push($tags,$cizhuisr[$tmp]);
                }
            }
            else
            {
                $rr = rand(1,99);
                if($rr < 75)
                    array_push($tags,"女性干员");
                else array_push($tags,"男性干员");
            }
            $tags = array_unique($tags);
            $i = count($tags) - 1;
        }

        foreach($tags as $value)
        {
            echo "$value </br>";
        }
    ?>
</body>
</html>
