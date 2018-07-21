<!doctype html>
<html class="effect">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="keywords" content="常州市第一中学12届体育部">
    <meta name="description" content="常州市第一中学12届体育部">
    <meta name="author" content="UEMO">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/wap/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/wap/css/bxslider.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/wap/css/animate.min.css">
    <link type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/wap/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl?>/static/wap/css/4093m.css">
    <title>常州市第一中学12届体育部</title>
    <script>
    if (window.location.origin.indexOf('uemo.net') != -1) {
        document.domain = "uemo.net";
    }
    if (window.location.origin.indexOf('jsmo.xin') != -1) {
        document.domain = "jsmo.xin";
    }
    </script>
</head>

<body>
    <div id="sitecontent" class="transform">
        <div id="header">
            <div id="openlc" class="fl btn" onclick="">
                <!-- <div class="lcbody">
                    <div class="lcitem top">
                        <div class="rect top"></div>
                    </div>
                    <div class="lcitem bottom">
                        <div class="rect bottom"></div>
                    </div>
                </div> -->
            </div><a id="logo" style="width: 226px;"><h2>常州市第一中学12届体育部</h2></a></div>
        <div class="scrollView">
            <div id="indexPage">
                <div id="mproject" class="module">
                    <div class="content">
                        <div class="header">
                            <p class="title">聚会回顾</p>
                            <p class="subtitle">Party Review</p>
                        </div>
                        <div id="projectlist">
                            <!--yyLayout masonry-->
                            <div class="module-content" id="projectlist">
                                <div class="projectSubList" id="projectSubList_">
                                    <div class="projectSubHeader">
                                        <p class="title"></p>
                                        <p class="subtitle"></p>
                                    </div>
                                    <div class="wrapper">
                                        <ul class="content_list" data-options-sliders="8" data-options-margin="30" data-options-ease="1" data-options-speed="1">
                                        <?php if($news = ArticleExt::model()->sorted()->findAll('status=1')) foreach ($news as $key => $value) {?>
                                          <li id="projectitem_<?=$key?>" class="projectitem wow">
                                                <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" class="projectitem_content">
                                                    <div class="projectitem_wrapper">
                                                        <div class="project_img"><img src="<?=ImageTools::fixImage($value->image,650,385)?>" width="650" height="385" /></div>
                                                        <div class="project_info">
                                                            <div>
                                                                <p class="title">【<?=$value->pay_user->name?>】<?=Tools::u8_title_substr($value->title,20)?></p>
                                                                <p class="subtitle"><?=date('Y-m-d',$value->time).' '.$value->place?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                            
                                            <div class="clear"></div>
                                        </ul>
                                    </div>
                                    <!--wrapper-->
                                </div>
                                <!--projectSubList-->
                            </div>
                            <!--projectlist-->
                            <div class="clear"></div>
                        </div>
                        <!-- <a href="http://mo004_4093.mo4.line1.uemo.net/project/" id="projectmore">MORE</a></div> -->
                </div>
                
            </div>
            <div id="footer" style="position: fixed;bottom: 0">
                <p style="margin-top: 0" class="plr10"><span>(©) 2018 常州回音网络科技有限公司</span><a class="beian" href="http://www.miitbeian.gov.cn/" style="display:inline; width:auto; color:#8e8e8e" target="_blank"></a></p>
            </div>
            <div id="bgmask" class="iPage hide"></div>
        </div>
    </div>
    <!-- <div id="leftcontrol">
        <ul id="nav">
            <li>
                <div id="closelc" class="fr btn hide">
                    <div class="lcbody">
                        <div class="lcitem top">
                            <div class="rect top"></div>
                        </div>
                        <div class="lcitem bottom">
                            <div class="rect bottom"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navitem active"><a class="transform" href="http://mo004_4093.mo4.line1.uemo.net/"><span class="circle transform"></span>首页</a></li>
            <li class="navitem"><a class="transform" href="http://mo004_4093.mo4.line1.uemo.net/project/"><span class="circle transform"></span>案例展示</a></li>
            <li class="navitem"><a class="transform" href="http://mo004_4093.mo4.line1.uemo.net/news/"><span class="circle transform"></span>相关资讯</a></li>
            <li class="navitem"><a class="transform" href="http://mo004_4093.mo4.line1.uemo.net/team/"><span class="circle transform"></span>签约设计师</a></li>
            <li class="navitem"><a href="javascript:;" class="hassub"><span class="circle transform"></span>关于我们<span class="more"><span class="h"></span><span class="h v transform"></span></span></a>
                <ul class="subnav transform" data-height="250">
                    <li><a href="http://mo004_4093.mo4.line1.uemo.net/page/72547/"><i class="fa fa-angle-right"></i>关于我们</a></li>
                    <li><a href="http://mo004_4093.mo4.line1.uemo.net/service/"><i class="fa fa-angle-right"></i>服务范围</a></li>
                    <li><a href="http://mo004_4093.mo4.line1.uemo.net/page/72548/"><i class="fa fa-angle-right"></i>企业文化</a></li>
                    <li><a href="http://mo004_4093.mo4.line1.uemo.net/page/72549/"><i class="fa fa-angle-right"></i>发展历程</a></li>
                    <li><a href="http://mo004_4093.mo4.line1.uemo.net/page/72550/"><i class="fa fa-angle-right"></i>招聘专栏</a></li>
                </ul>
            </li>
            <li class="navitem"><a class="transform" href="http://mo004_4093.mo4.line1.uemo.net/page/72553/"><span class="circle transform"></span>联系我们</a></li>
        </ul>
    </div> -->
    <script type="text/javascript">
    var YYConfig = {};
    </script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/wap/js/zepto.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/wap/js/zepto.bxslider.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/wap/js/wow.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/wap/js/masonry_4.min.js"></script>
    <script type="text/javascript">
    $(function() { new WOW({ scrollContainer: ".scrollView" }).init(); })
    </script>
    <script type="text/javascript" src="<?=Yii::app()->theme->baseUrl?>/static/wap/js/org.min.js" data-main="IndexMain"></script>
<!--     <div class="hide">
        <script src="http://resources.jsmo.xin/templates/upload/4093/4093.js" type="text/javascript"></script>
    </div> -->
    <script>
    $("#contactform form").submit(function(event) {
        var $form = this;
        var postObj = { name: "", email: "", tel: "", content: "" };
        postObj.name = $.trim($("input[name='name']", $form).val());
        if (!postObj.name) {
            alert("姓名不能为空");
            return false;
        };
        postObj.email = $.trim($("input[name='email']", $form).val());
        if (!postObj.email) {
            alert("邮箱不能为空");
            return false;
        };
        if (!/^[\w\.\-\+]+@([\w\-]+\.)+[a-z]{2,4}$/i.test(postObj.email)) {
            alert('邮箱格式不正确');
            return false;
        };
        postObj.tel = $.trim($("input[name='tel']", $form).val());
        if (!postObj.tel) {
            alert("电话不能为空");
            return false;
        };
        postObj.content = $.trim($("textarea[name='content']", $form).val());
        if (!postObj.content) {
            alert("内容不能为空");
            return false;
        };
        $.post($($form).attr("action"), postObj, function(data, textStatus, xhr) {
            if (data == "0") {
                $(".inputtxt", $form).val('');

                setTimeout(function(argument) {
                    window.location.reload();

                }, 1000);
            } else {
                window.location.reload();
            }
        });
        $(".inputsub", $form).blur();
        return false;
    });
    </script>
</body>

</html>
<script type="text/javascript">
$(document).ready(function(e) {
    var img = $(".slider_img img")[0];

    function sliderChulaiba() {
        $('#t-slider').bxSlider({
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            auto: 0,
            infiniteLoop: true,
            hideControlOnEnd: true,
        });
    }
    if (img.complete) sliderChulaiba();
    else $(".slider_img img")[0].onload = function(e) {
        sliderChulaiba();
    };
});
</script>