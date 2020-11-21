     <div id="s1_bg" class="postion section">
        <div class="s1_section">
            <section id="contentfield" class="w600">
                <div class="s1">
                    <img src="img/index/img_ball.png" alt="" class="s1_ball">
                    <img src="img/index/bg_snow.png" alt="" class="s1_snow">
                    <img src="img/index/one_snow.png" alt="" class="s1_one_snow">
                    <img src="img/index/icon_leaf.svg" alt="" class="s1_leaf">
                    <img src="img/index/pc_logotype.png" alt="" class="s1_logotype">
                    <img src="img/index/snowman_hand.svg" class="s1_snowman_hand" alt="">
                    <img src="img/index/snowman_hand_2.svg" class="s1_snowman_hand_2" alt="">
                    <img src="img/index/snowman.svg" alt="" class="s1_snowman">
                    <img src="img/index/tree.svg" alt="" class="s1_tree">
                    <img src="img/index/logo.svg" alt="" class="s1_logo">
                    <img src="img/index/tree_deco_1.svg" alt="" class="s1_1_deco">
                    <img src="img/index/tree_deco_2.svg" alt="" class="s1_1_h_deco">
                    <img src="img/index/tree_deco_1.svg" alt="" class="s1_2_deco">
                    <img src="img/index/tree_deco_2.svg" alt="" class="s1_2_h_deco">
                    <img src="img/index/tree_deco_1.svg" alt="" class="s1_3_deco">
                    <img src="img/index/tree_deco_2.svg" alt="" class="s1_3_h_deco">
                    <img src="img/index/deco_heart.svg" alt="" class="s1_deco_heart">
                    <img src="img/index/icon_arrow.svg" alt="" class="s1_click">
                </div>
            </section>
            <img src="img/index/snow.png" alt="" class="s1_outer_snow">
            <img src="img/index/block.svg" alt="" class="s1_block">
        </div>
    </div>

<script src="./lib/scrollreveal.min.js"></script>
<script src="./lib/jquery.fancybox.min.js"></script>

<script>
    $(function () {
        ShowHeadAni();
    })
    function ShowHeadAni() {
        if ($(window).width() > 1023) {
            $('.s1_ball').addClass('active');
            $('.s1_leaf').addClass('active');
            $('.s1_logo').addClass('active');
            $('.s1_one_snow').addClass('active');
            $('.s1_logotype').addClass('active');
            $('.s1_snowman_hand').addClass('active'); 
            $('.s1_snowman_hand_2').addClass('active'); 
            $('.s1_1_deco').addClass('active');
            $('.s1_2_deco').addClass('active');
            $('.s1_3_deco').addClass('active');
            $('.s1_1_h_deco').addClass('active');
            $('.s1_2_h_deco').addClass('active');
            $('.s1_3_h_deco').addClass('active');
            $('.s1_click').addClass('active');
            $('.s1_outer_snow').addClass('active');

        } else {
            $('.s1_logo').addClass('active');
            $('.s1_one_snow').addClass('active');
            $('.s1_ball').addClass('active');
            $('.s1_leaf').addClass('active');
            $('.s1_logotype').addClass('active');
            $('.s1_snowman_hand').addClass('active');
            $('.s1_snowman_hand_2').addClass('active'); 
            $('.s1_1_deco').addClass('active');
            $('.s1_2_deco').addClass('active');
            $('.s1_3_deco').addClass('active');
            $('.s1_1_h_deco').addClass('active');
            $('.s1_2_h_deco').addClass('active');
            $('.s1_3_h_deco').addClass('active');
            $('.s1_click').addClass('active');
            $('.s1_outer_snow').addClass('active');
        }
    }
    //Anime
    $(window).scroll(function () {
        InitialAnime();
    });

    function OnScrollElement(_obj, ..._group) {
        var windowScrollTop = $(window).scrollTop();
        var windowheight = $(window).height();
        var IsActive = (windowScrollTop + windowheight / 1.5) - $(_obj).offset().top > 0;
        if (IsActive) {
            $(_obj).addClass('active');
            _group.forEach(element => {
                $(element).addClass('active');
            });
        }
    }
    function InitialAnime() {
        if ($(window).width() > 1023) {
            OnScrollElement($('.s1_ball'));
            OnScrollElement($('.s1_click'));
            OnScrollElement($('.s1_one_snow'));
            OnScrollElement($('.s1_leaf'));
            OnScrollElement($('.s1_logo'));
            OnScrollElement($('.s1_logotype'));
            OnScrollElement($('.s1_snowman_hand'));
            OnScrollElement($('.s1_snowman_hand_2'));
            OnScrollElement($('.s1_1_deco'));
            OnScrollElement($('.s1_2_deco'));
            OnScrollElement($('.s1_3_deco'));
            OnScrollElement($('.s1_1_h_deco'));
            OnScrollElement($('.s1_2_h_deco'));
            OnScrollElement($('.s1_outer_snow'));
        } else {
            OnScrollElement($('.s1_ball'));
            OnScrollElement($('.s1_click'));
            OnScrollElement($('.s1_one_snow'));
            OnScrollElement($('.s1_leaf'));
            OnScrollElement($('.s1_logotype'));
            OnScrollElement($('.s1_snowman_hand'));
            OnScrollElement($('.s1_snowman_hand_2'));
            OnScrollElement($('.s1_1_deco'));
            OnScrollElement($('.s1_2_deco'));
            OnScrollElement($('.s1_3_deco'));
            OnScrollElement($('.s1_1_h_deco'));
            OnScrollElement($('.s1_2_h_deco'));
            OnScrollElement($('.s1_3_h_deco'));
            OnScrollElement($('.s1_outer_snow'));
        }
    }
</script>

</html>