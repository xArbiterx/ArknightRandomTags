<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/asd.js" type="text/javascript"></script>
    
    
    <title>利用发电设备</title>
</head>
<body>
    <?php

    date_default_timezone_set("PRC");

    $mytime= date("Y-m-d H:i:s");  
    echo '<p>'.$mytime.'</p>';
    ?>

    <div class="row mt-3">
        <div class="col-12 col-lg-4 px-2">
            <table class="table">       
                <tr>
                    <td><button type="button" class="btn btn-warning disabled">资质类</button></td>
                    <td>
                        <button id="gaozi" type="button" class="btn btn-default">高级资深干员</button>
                        <button id="zishen" type="button" class="btn btn-default">资深干员</button>
                        <button id="noob" type="button" class="btn btn-default">新手</button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-warning" disabled>位置类</button></td>
                    <td>
                        <button type="button" class="btn btn-default">近战位</button>
                        <button type="button" class="btn btn-default">远程位</button>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-warning" disabled>性别类</button></td>
                    <td>
                        <button type="button" class="btn btn-default">男性干员</button>
                        <button type="button" class="btn btn-default">女性干员</button>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-warning" disabled>干员类</td>
                    <td>
                        <button type="button" class="btn btn-default">先锋干员</button>
                        <button type="button" class="btn btn-default">近卫干员</button>
                        <button type="button" class="btn btn-default">重装干员</button>
                        <button type="button" class="btn btn-default">辅助干员</button>
                        <button type="button" class="btn btn-default">术士干员</button>
                        <button type="button" class="btn btn-default">医疗干员</button>
                        <button type="button" class="btn btn-default">狙击干员</button>
                        <button type="button" class="btn btn-default">特种干员</button>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-warning" disabled>词缀类</button></td>
                    <td>
                        <button type="button" class="btn btn-default">治疗</button>
                        <button type="button" class="btn btn-default">输出</button>
                        <button type="button" class="btn btn-default">支援</button>
                        <button type="button" class="btn btn-default">减速</button>
                        <button type="button" class="btn btn-default">防护</button>
                        <button type="button" class="btn btn-default">生存</button>
                        <button type="button" class="btn btn-default">控场</button>
                        <button type="button" class="btn btn-default">削弱</button>
                        <button type="button" class="btn btn-default">位移</button>
                        <button type="button" class="btn btn-default">爆发</button>
                        <button type="button" class="btn btn-default">召唤</button>
                        <button type="button" class="btn btn-default">快速复活</button>
                        <button type="button" class="btn btn-default">费用回复</button>
                </tr>
            </table>
            </div>
            <div class="col-12 col-lg-8 px-0">
            </div>
        </div>
    </div>        
    <hr/>
    <div class="col-12">
    
        <script>loadSy();</script>
        <div class="col-2">
            <table class="table">
                <tr>
                    <td><button id="hup">↑</button></td>
                    <td><button id="mup">↑</button></td>
                </tr>
                <tr>
                    <input type="text">
                    <input type="text">
                </tr>
                <tr>
                    <td><button id="hdown">↓</button></td>
                    <td><button id="mdown">↓</button></td>
                </tr>
                <tr>
            </div>
                <div class="btn-group" data-toggle="buttons gck">
                        <label id="bt1" class="btn btn-default gck">
                            <input type="checkbox" autocomplete="off">
                        </label>
                        <label id="bt2" class="btn btn-default gck">
                            <input type="checkbox" autocomplete="off">
                        </label>
                        <label id="bt3" class="btn btn-default gck">
                            <input type="checkbox" autocomplete="off">
                        </label>
                        <label id="bt4" class="btn btn-default gck">
                            <input type="checkbox" autocomplete="off">
                        </label>
                        <label id="bt5" class="btn btn-default gck">
                            <input type="checkbox" autocomplete="off">
                        </label>
                    <button type="button" class="btn btn-info" onclick="loadSy()">刷新</button>
                    <button type="button" class="btn btn-danger" onclick="goSy()">GO</button>
                </div>
            </tr>
        </table>
    </div>

</body>
</html>
