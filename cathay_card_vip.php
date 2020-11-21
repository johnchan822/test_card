<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./lib/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/main.css?ver=<?= time() ?>">
    <script src="./lib/jquery-3.4.1.min.js"></script>
    <script src="./lib/fullpage.js"></script>
</head>

<body>
    <?php include __DIR__ . '/_s1.php'; ?>
    <div class="line">12312</div>
    <div id="s2_bg" class="postion  section">
        <div class="s2_section">
            <section id="contentfield_2" class="w600">
                <div class="s2">
                    <h5 class="custom_name"><span class="txt-bold h5" style="color:#EA0137;">Dear</span><span class="h4 txt-bold">王沈佳宜</span><span class="h5">小姐</span></h5>
                    <div class="title"><img src="img/VIP/icon_leaf_1.svg" alt=""><b class="h3" style="color:#EA0137;">聖誕節快樂</b><img src="img/VIP/icon_leaf_2.svg" alt=""></div>
                    <p class="sales_name">國泰人壽 <span class="txt-bold">王大明</span> 敬上</p>
                    <div class="box">
                        <img src="img/VIP/banner.svg" alt="" class="banner">
                        <div class="a_btn"> <a href="#" class="h5"><img src="img/VIP/icon_heart.svg" alt="">勇敢送愛</a></div>
                        <h5>暖心豐富好禮，送給您與家人!</h5>
                        <p style="color:#EA0137">※ 謹獻給國泰一家人</p>
                        <div class="a_btn"><a href="#" class="h5"><img src="img/VIP/icon_heart.svg" alt="">勇敢傳愛</a></div>
                        <div class="explain">
                            <h5>攜手VIP表揚公益抽好禮!</h5>
                            <h5>FB濾鏡傳愛無界限~</h5>
                        </div>
                    </div>
                    <a href="#" class="btn">
                        <h5>了解活動GO</h5>
                    </a>
                </div>
            </section>
        </div>
    </div>
</body>
<script>
    $("body").on("click", ".s1_click", function(e) {
        e.preventDefault();
        var target = $(".s2_section");
        var targetPos = $(target).offset().top;
        $('html, body').animate({
            scrollTop: targetPos + 0
        }, 800);
    });
    $(window).scroll(function() {
        // console.log("ok")
        var part1 = $("#s1_bg").offset().top;
        var part2 = $("#s2_bg").offset().top;
        var line = $(".line").offset().top;
        var windowscroll = $(window).scrollTop();

        console.log("windowscroll " + windowscroll)
        console.log("part1 " + part1)
        console.log("part2 " + part2)
        console.log("line " + line)
        // console.log("windowscroll" + windowscroll)

        if (windowscroll > line) {
            $('html,body').animate({
                scrollTop: part2
            }, 'slow');
        }
        else if (windowscroll < line) {
            $('html,body').animate({
                scrollTop: part1
            }, 'slow');
        }
    });
    // $(window).scroll(function() {
    //     // Returns height of browser viewport
    //     var window_height = $(window).height();

    //     var window_scrollTop = $(window).scrollTop();

    //     // Returns height of HTML document
    //     var document_height = $(document).height();

    //     console.log(window_height);
    //     console.log(window_scrollTop);
    //     console.log(document_height);

    //     if (window_height + window_scrollTop == document_height) {
    //         alert('到底部觸發ajax');
    //     }

    // });
</script>

</html>