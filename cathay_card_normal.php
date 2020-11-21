<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./lib/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/main.css?ver=<?=time()?>">
    <script src="./lib/jquery-3.4.1.min.js"></script>
</head>
<body>

<?php include __DIR__ . '/_s1.php'; ?>

<div id="s3_bg" class="postion">
    <div class="s3_section">
        <section id="contentfield_2" class="w600">
            <div class="s3">
                <div class="box">
                    <div class="custom_name">
                    <h5 style="color:#EA0137;"class="txt-bold dear">Dear</h5><h4 class="txt-bold">王沈佳宜</h4><span class="h5">小姐</span>
                    </div>
                    <img src="./img/normal/img_gift.png" alt="" class="s3_gift">
                    <div class="content">
                        <h5>感謝您過去一年對我們的支持</h5> 
                        <h5>祝福您與家人</h5>
                    <div class="title"><img src="img/VIP/icon_leaf_1.svg" alt=""><b class="h3" style="color:#EA0137;">聖誕節快樂</b><img src="img/VIP/icon_leaf_2.svg" alt=""></div>
                    <img src="./img/normal/banner.svg" alt="" class="s3_banner">
                </div>
                        <div class="bottom">
                            <img src="./img/normal/gift_2.png" alt="" class="s3_gift_2">
                            <img src="./img/normal/icon_heart.svg"  class="s3_hearts"alt="">
                            <p class="sales_name">國泰人壽 <span>王大明</span> 敬上</p>
                        </div>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
<script>
    $("body").on("click",".s1_click",function (e) { 
    e.preventDefault();
    console.log("sdfsd")
    var target = $(".s3_section");
    var targetPos = $(target).offset().top;
    $('html, body').animate({ scrollTop: targetPos + 0 }, 1000);
});
</script>

</html>