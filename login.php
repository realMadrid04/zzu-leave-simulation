<!DOCTYPE html>
<!-- saved from url=(0160)https://d/qj_jtInfo?ptopid=sD4B3E28BD5CC43B89CD97F2E3E2E5518&ruid=281843384537237&ck=02981B02CB1E4CCBBC174518D6C92E47&lsNo=10101099&t=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>11</title>

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">




    <link href="./11_files/ax.css" rel="stylesheet">
    <script src="./11_files/jquery-3.0.0.min.js.下载"></script>
    <script src="./11_files/ax.min.js.下载"></script>

    <link href="./11_files/layui.style.css" rel="stylesheet">

    <link href="./11_files/layui.css" rel="stylesheet">


    <script src="./11_files/commonJS.js.下载"></script>
    <script src="./11_files/respond.min.js.下载"></script>
    <script src="./11_files/framework-ui.js.下载"></script>

    <link href="./11_files/pintuer.css" rel="stylesheet">
    <meta name="referrer" content="strict-origin">


</head>
<body ontouchstart="" onmouseover="">
    <div class="layui-header header header-index">
        <div class="layui-container">
            <a class="layui-logo" href="https://jksb.v.zzu.edu.cn/">
                <img src="./11_files/logo.png">
            </a>
        </div>
    </div>

    <div class="layui-layout-body">
        <div class="layui-container">



<div class="layui-form">
        <div class="padding-top-5">
            <blockquote class="layui-elem-quote" style="font-size:18px; font-weight:900"> 郑州大学学生请假条</blockquote>


            <p style="margin:0 auto ;text-align:center;font-size:18px;font-weight:800;">

                起止日期：<label style="color:red"><?php  echo "".date("Y/m/d s",strtotime("-1 day")); ?>至<?php  echo "".date("m/d",strtotime("+1 day")); ?></label>
            </p>
            <p style="margin:0 auto ;text-align:center;" class="padding-top-10">
               <img src="./11_files/02981B02CB1E4CCBBC174518D6C92E47.jpg" width="150">
            </p>
        </div>
        <table class="layui-table">
            <tbody><tr class="layui-form-item">

                <td class="bg-gray">
                    账号
                </td>
                <td>

                    <?php echo $_POST["num"]; ?>

                </td>

                <td class="bg-gray">
                    姓名
                </td>
                <td>
                     <?php echo $_POST["fname"]; ?>

                </td>

            </tr>
            <tr class="layui-form-item">

                <td class="bg-gray">
                    学院
                </td>
                <td>

                    软件学院

                </td>

                <td class="bg-gray">
                    身份
                </td>
                <td>
                    研究生

                </td>
            </tr>
            <tr class="layui-form-item">
                <td class="bg-gray">
                    请假类型
                </td>
                <td>

                    事假

                </td>
                <td class="bg-gray">
                    请假时长
                </td>
                <td>

                    1 天


                </td>

            </tr>
            <tr class="layui-form-item">
                <td class="bg-gray">
                    请假事由
                </td>
                <td colspan="3" style="height:100px;text-align:left">
                    <?php echo $_POST["reason"]; ?>
                </td>
            </tr>
            <tr class="layui-form-item">
                <td class="bg-gray">
                    审核人
                </td>
                <td>
                    <?php echo $_POST["teacher"]; ?> 等

                </td>
                <td class="bg-gray">
                    审核状态
                </td>
                <td>
                    已批准
                </td>

            </tr>
            <tr class="layui-form-item">
                <td class="bg-gray">
                    审核时间
                </td>
                <td colspan="3">
                   <?php  echo "".date("Y/m/d G:H:s",strtotime("-1 day 4 hours 2 seconds")); ?>

                </td>
            </tr>
        </tbody></table>
</div>









        </div>
    </div>





<audio controls="controls" style="display: none;"></audio></body><style type="text/css">#yddContainer{display:block;font-family:Microsoft YaHei;position:relative;width:100%;height:100%;top:-4px;left:-4px;font-size:12px;border:1px solid}#yddTop{display:block;height:22px}#yddTopBorderlr{display:block;position:static;height:17px;padding:2px 28px;line-height:17px;font-size:12px;color:#5079bb;font-weight:bold;border-style:none solid;border-width:1px}#yddTopBorderlr .ydd-sp{position:absolute;top:2px;height:0;overflow:hidden}.ydd-icon{left:5px;width:17px;padding:0px 0px 0px 0px;padding-top:17px;background-position:-16px -44px}.ydd-close{right:5px;width:16px;padding-top:16px;background-position:left -44px}#yddKeyTitle{float:left;text-decoration:none}#yddMiddle{display:block;margin-bottom:10px}.ydd-tabs{display:block;margin:5px 0;padding:0 5px;height:18px;border-bottom:1px solid}.ydd-tab{display:block;float:left;height:18px;margin:0 5px -1px 0;padding:0 4px;line-height:18px;border:1px solid;border-bottom:none}.ydd-trans-container{display:block;line-height:160%}.ydd-trans-container a{text-decoration:none;}#yddBottom{position:absolute;bottom:0;left:0;width:100%;height:22px;line-height:22px;overflow:hidden;background-position:left -22px}.ydd-padding010{padding:0 10px}#yddWrapper{color:#252525;z-index:10001;background:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ab20.png);}#yddContainer{background:#fff;border-color:#4b7598}#yddTopBorderlr{border-color:#f0f8fc}#yddWrapper .ydd-sp{background-image:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ydd-sprite.png)}#yddWrapper a,#yddWrapper a:hover,#yddWrapper a:visited{color:#50799b}#yddWrapper .ydd-tabs{color:#959595}.ydd-tabs,.ydd-tab{background:#fff;border-color:#d5e7f3}#yddBottom{color:#363636}#yddWrapper{min-width:250px;max-width:400px;}</style></html>