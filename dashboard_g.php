
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>诚信通互助金融</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/themes/default/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/icon.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/fonts/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/app.css" type="text/css" />
    <link rel="stylesheet" href="/themes/default/css/layerout.css" type="text/css" />



    <script src="/themes/default/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/themes/default/js/bootstrap.js"></script>
    <!-- App -->
    <script src="/themes/default/js/app.js"></script>
    <script src="/themes/default/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/themes/default/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="/themes/default/js/app.plugin.js"></script>

    <!--[if lt IE 9]>
    <script src="/themes/default/js/ie/html5shiv.js"></script>
    <script src="/themes/default/js/ie/respond.min.js"></script>
    <script src="/themes/default/js/ie/excanvas.js"></script>
    <![endif]-->


    <style type="text/css">
        .nav-primary ul.nav > li li a:hover{
            color:#177bbb;
            background-color:white;
        }
        .bg-primary .nav > li:hover > a, .bg-primary .nav > li:focus > a, .bg-primary .nav > li:active > a, .bg-primary .nav > li.active > a {
            color: #177bbb;
            background-color:#333;
        }
        .bg-primary .nav>li.active>a{
            background-color:#126da7;
            color: #FFF;
            padding:8px 15px;
        }

     </style>


</head>
<body class="">
<section class="vbox">
    <header class="bg-black header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="fa fa-bars"></i>
            </a>
            <a href="/index.php?con=ucenter&act=index" class="navbar-brand">
                <img src="/themes/default/images/logo.png" class="m-r-sm" alt="scale">
                <span class="hidden-nav-xs text-white">诚信通互助金融</span>
            </a>

        </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
            <li class="dropdown">
                <!--
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                -->
                <a href="/index.php?con=simple&act=logout" class="dropdown-toggle" onclick="return confirm('确定要执行此操作吗?')">
                <!--
                <span class="thumb-sm avatar pull-left">
                  <img src="/themes/default/images/a0.png" alt="...">
                </span>
                -->
                                  安全退出 <!-- <b class="caret"></b> -->
                </a>
                <!--
                <ul class="dropdown-menu animated fadeInRight">
                    <li>
                        <span class="arrow top"></span>
                        <a href="/index.php?con=ucenter&act=set_language&type=sc">简体中文</a>
                    </li>
                    <li>
                        <a href="/index.php?con=ucenter&act=set_language&type=fc">繁體中文</a>
                    </li>
                    <li>
                        <a href="/index.php?con=ucenter&act=set_language&type=en">English</a>
                    </li>
                </ul>
                -->
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-primary aside-md hidden-print hidden-xs" id="nav" style="width:260px;">
                <section class="vbox">
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                            <div class="clearfix wrapper dk nav-user hidden-xs">
                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                    <!--
                                      <span class="thumb avatar pull-left m-r">
                                        <img src="/themes/default/images/a0.png" class="dker" alt="...">
                                      </span>
                                      -->
                                      <span class="hidden-nav-xs clear">
                                        <span class="block m-t-xs" style="font-size:23px;">
                                        欢迎您&nbsp;&nbsp;
                                          <strong class="font-bold text-lt">gaozong</strong>
                                          <!--
                                          <b class="caret"></b>
                                          -->
                                        </span>
                                        <!--
                                        <span class="text-muted text-xs block">我的主页</span>
                                        -->
                                      </span>
                                    </a>
                                    <!--
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li>
                                            <span class="arrow top hidden-nav-xs"></span>
                                            <a href="/index.php?con=ucenter&act=index">
                                                    我的主页                                            </a>
                                        </li>
                                        <li>
                                            <a href="/index.php?con=ucenter&act=info">账号设置</a>
                                        </li>
                                        <li>
                                            <a href="/index.php?con=simple&act=logout">退出</a>
                                        </li>
                                    </ul>
                                    -->
                                </div>
                            </div>


                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">中心导航</div>

                                <ul class="nav nav-main" data-ride="collapse" style="font-size:21px;">








                                                                        <li class="active">
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-screen icon">
                                            </i>
                                            <span class="font-bold">互助管理</span>
                                        </a>
                                                                            <!-- 颜色修改 -->
                                        <!--
                                        <ul class="nav dk" style="background-color:#442b8a;">
                                        -->
                                        <ul class="nav dk">
                                                                                    <li class="active">

                                                <a href="/index.php?con=ucenter&act=index" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>排单列表</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=my_fc_list" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>付出明细</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=my_js_list" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>收获明细</span>
                                                </a>

                                            </li>

                                        </ul>
                                    </li>
                                                                        <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-users2 icon">
                                            </i>
                                            <span class="font-bold">会员管理</span>
                                        </a>
                                                                            <!-- 颜色修改 -->
                                        <!--
                                        <ul class="nav dk" style="background-color:#442b8a;">
                                        -->
                                        <ul class="nav dk">
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=my_user" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>我的推广</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=reg_user" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>会员注册</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=pt_user" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>激活会员</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=tjr_list" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>推荐图谱</span>
                                                </a>

                                            </li>

                                        </ul>
                                    </li>
                                                                        <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-usd">
                                            </i>
                                            <span class="font-bold">财务管理</span>
                                        </a>
                                                                            <!-- 颜色修改 -->
                                        <!--
                                        <ul class="nav dk" style="background-color:#442b8a;">
                                        -->
                                        <ul class="nav dk">
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=my_pin" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>我的排单币</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=my_vb" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>我的激活码</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=account" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>奖金明细</span>
                                                </a>

                                            </li>

                                        </ul>
                                    </li>
                                                                        <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-settings icon">
                                            </i>
                                            <span class="font-bold">账号设置</span>
                                        </a>
                                                                            <!-- 颜色修改 -->
                                        <!--
                                        <ul class="nav dk" style="background-color:#442b8a;">
                                        -->
                                        <ul class="nav dk">
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=info" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>个人资料</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=password_change" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>修改密码</span>
                                                </a>

                                            </li>

                                        </ul>
                                    </li>
                                                                        <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="fa fa-file-text-o icon">
                                            </i>
                                            <span class="font-bold">信息管理</span>
                                        </a>
                                                                            <!-- 颜色修改 -->
                                        <!--
                                        <ul class="nav dk" style="background-color:#442b8a;">
                                        -->
                                        <ul class="nav dk">
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=article" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>平台公告</span>
                                                </a>

                                            </li>
                                                                                    <li >

                                                <a href="/index.php?con=ucenter&act=consult" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>在线留言</span>
                                                </a>

                                            </li>

                                        </ul>
                                    </li>


                                    <!--
                                    <li>
                                        <a href="/index.php?con=ucenter&act=cj" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-user">
                                            </i>
                                            <span class="font-bold">幸运抽奖</span>
                                        </a>

                                    </li>
                                    -->

                                     <!--
                                    <li>
                                        <a href="/index.php?con=ucenter&act=bgt" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-camera">
                                            </i>
                                            <span class="font-bold">曝光台</span>
                                        </a>

                                    </li>


                                    <li>
                                        <a href="/index.php?con=ucenter&act=sys_sh" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-camera">
                                            </i>
                                            <span class="font-bold">资料完善</span>
                                        </a>

                                    </li>
                                     -->
                                    <li>
                                        <a href="/index.php?con=ucenter&act=tjr_href" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-qrcode">
                                            </i>
                                            <span class="font-bold">推广链接</span>
                                        </a>

                                    </li>



                                    <!--
                                    <li>
                                        <a href="/index.php?con=ucenter&act=on_line_buy" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-th">
                                            </i>
                                            <span class="font-bold">我要买码</span>
                                        </a>

                                    </li>


                                    <li>
                                        <a href="/index.php?con=ucenter&act=buy_pin_list" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-th-list">
                                            </i>
                                            <span class="font-bold">购码记录</span>
                                        </a>

                                    </li>
                                    -->


                                    <!--
                                    <li>
                                        <a href="/index.php?con=ucenter&act=cx_shop" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="glyphicon glyphicon-shopping-cart">
                                            </i>
                                            <span class="font-bold">兴中天商城</span>
                                        </a>
                                    </li>
                                    -->

                                    <!--
                                    <li class="active">
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-screen icon">
                                            </i>
                                            <span class="font-bold">互助管理</span>
                                        </a>
                                        <ul class="nav dk">
                                            <li class="active">
                                                <a href="/index.php?con=ucenter&act=index" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>進行的排單</span>
                                                </a>
                                                <a href="/index.php?con=ucenter&act=my_horg" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>我的交易</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-users2 icon">
                                            </i>
                                            <span class="font-bold">财务管理</span>
                                        </a>
                                        <ul class="nav dk">
                                            <li >
                                                <a href="/index.php?con=ucenter&act=my_pin" class="auto">
                                                    <i class="i i-dot"></i>

                                                    <span>我的PIN</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=account" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>獎金明細</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=point_zz" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>積分轉賬</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=zz_list" class="auto">
                                                    <i class="i i-dot"></i>

                                                    <span>轉賬記錄</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-users2 icon">
                                            </i>
                                            <span class="font-bold">會員管理</span>
                                        </a>
                                        <ul class="nav dk">
                                            <li >
                                                <a href="/index.php?con=ucenter&act=my_user" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>我的推廣</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=reg_user" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>註冊會員</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=tjr_list" class="auto">
                                                    <i class="i i-dot"></i>

                                                    <span>推薦圖譜</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=child_pd" class="auto">
                                                    <i class="i i-dot"></i>
                                                    <span>會員排單</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="i i-settings icon">
                                            </i>
                                            <span class="font-bold">賬號設置</span>
                                        </a>
                                        <ul class="nav dk">
                                            <li >
                                                <a href="/index.php?con=ucenter&act=info">
                                                    <i class="i i-dot"></i>
                                                    <span>個人資料</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=password_change">
                                                    <i class="i i-dot"></i>
                                                    <span>修改密碼</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href="javascript:;" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="i i-circle-sm-o text"></i>
                                              <i class="i i-circle-sm text-active"></i>
                                            </span>
                                            <i class="fa fa-file-text-o icon">
                                            </i>
                                            <span class="font-bold">信息管理</span>
                                        </a>
                                        <ul class="nav dk">
                                            <li >
                                                <a href="/index.php?con=ucenter&act=article">
                                                    <i class="i i-dot"></i>
                                                    <span>公司動態</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=consult">
                                                    <i class="i i-dot"></i>
                                                    <span>我的咨詢</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="/index.php?con=ucenter&act=bgt">
                                                    <i class="i i-dot"></i>
                                                    <span>曝光臺</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    -->
                                </ul>
                            </nav>

                        </div>
                    </section>
                    <footer class="footer hidden-xs no-padder text-center-nav-xs">
                        <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                            <i class="i i-circleleft text"></i>
                            <i class="i i-circleright text-active"></i>
                        </a>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <div class="modal fade" id="myModal_ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel_ad">公告</h4>
      </div>
      <div class="modal-body" id="myModalContent_ad">

        <ul class="list-group no-radius">


                    <a href="/index.php?con=ucenter&act=article"  class="list-group-item padder-v">
                            <span class="pull-right text-muted">2017-12-22 09:00:00</span>
                            <span class="fa fa-angle-double-right text-info m-r-xs"></span>
                              通告                    </a>

                </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>






<!--弹出层 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="myModalContent">

        <div class="form-horizontal" data-validate="parsley">

            <section class="panel panel-default">
                <div class="panel-body">
                    <div class="alert alert-danger">
                        <!--
                        申請完成後，請等待系統隨機分配受助對象
                        -->
                        申请完成后，请等待系统随机分配受助对象                     <br>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im">金额</label>
                        <div class="col-sm-3 m-t-im">
                            <select onchange="change_pin_nums(this)" name="fc_amount" id="fc_amount" class="form-control" style="width:250px">
                                                                <option value="1000">1000</option>
                                                                <option value="2000">2000</option>
                                                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im">排单币</label>
                        <div class="col-sm-6 m-t-im">
                            <span class="form-control no-border">
                                <!--
                                系統將隨機扣除您的<label style="color:red;" id="lbTxt">1</label>                                 -->
                                扣除 <label style="color:red;" id="lbTxt">1</label> 排单币                           </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im">二级密码</label>
                        <div class="col-sm-6 m-t-im">
                            <span class="form-control no-border">
                                <input type="password" class="form-control" id="pass2" name="pass2"/>
                            </span>

                        </div>
                    </div>
                    <!--
                    <div class="form-group text-danger m-b-xs">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-10 m-t-im">

                            提示：1、可向上級購買     2、每個價格爲50元  3、您已充分瞭解投資風險

                            提示: 排单币 50元/个                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-2 m-t-im">
                            <input type="hidden" name="kou_pin_nums" id="kou_pin_nums" value="1"/>
                            <input type="button" value="提交" id="btn_sub_fc" class="btn btn-info btn-s-xs" onclick="sub_fc()"/>
                        </div>
                    </div>
                </div>
            </section>

        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel2"></h4>
      </div>
      <div class="modal-body" id="myModalContent2">

        <div class="form-horizontal" data-validate="parsley">
            <section class="panel panel-default">
                <div class="panel-body">
                    <div class="alert alert-danger">
                        申请完成后，请等待匹配成功后付款通知<br>温馨提示：静态钱包每天只能接受一次，请认真核对金额后再进行操作！
            <!--
                        接受帮助静态钱包金额为￥500~8000 动态钱包￥500~1000
            -->
                    </div>
                    <div class="form-group m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">选择钱包</label>
                        <div class="col-sm-9 m-t-im">
                            <div class="radio pull-left m-r-lg">
                                <label>
                                    <input type="radio" name="lx" value="1" checked>
                                    静态钱包(<span class="text-danger">0.00</span>)
                                </label>
                            </div>
                            <div class="radio pull-left">
                                <label>
                                    <input type="radio" name="lx" value="2">
                                    动态钱包(<span class="text-danger">0.00</span>)
                                </label>
                            </div>
                            <!--
                            <div class="radio pull-right">
                                <label>
                                    <input type="radio" name="lx" value="3">
                                    经理钱包(<span class="text-danger">0.00</span>)
                                </label>
                            </div>
                            -->
                        </div>
                    </div>
                    <!----end form-group--->
                    <div class="form-group  m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">受助金额</label>
                        <div class="col-sm-6 m-t-im">
                            <input type="text" id="js_amount" name="js_amount" class="form-control parsley-validated" data-required="true" placeholder="金额需为100的倍数">
                        </div>
                    </div>
                    <div class="form-group  m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">二级密码</label>
                        <div class="col-sm-6 m-t-im">
                            <input type="password" name="password" id="password" class="form-control parsley-validated" data-required="true">
                        </div>
                    </div>
                    <!--
                    <div class="form-group text-danger m-b-xs">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-10 m-t-im">
                            提示：1、您已充分了解投资风险 &nbsp;&nbsp;2、推荐钱包每天只能进行1次接受帮助&nbsp;&nbsp; 3、二级密码默认和登录密码相同，您可以通过“账号设置”->“修改密码”，修改二级密码
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-2 m-t-im">
                            <input type="button" value="提交" id="btn_sub_js" class="btn btn-info btn-s-xs" onclick="sub_js()"/>
                        </div>
                    </div>
                </div>
            </section>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>




<!-- 快速通道 -->
<div class="modal fade" id="myModal_kstd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">财富快车</h4>
            </div>
            <div class="modal-body" id="myModalContent">
                <div class="form-horizontal" data-validate="parsley">
                    <section class="panel panel-default">

                        <div class="panel-body">

                            <div class="alert alert-danger">

                             申请完成后，请您耐心等待系统随机分配受助对象！
                            </div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label m-t-im">金额</label>
                                <div class="col-sm-3 m-t-im">

                                    <select name="fc_amount" onchange="change_kstd_pin_nums(this)" id="kstd_amount" class="form-control" style="width:250px">
                                                                                <option value="3000">3000</option>
                                                                            </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label m-t-im">&nbsp;&nbsp;</label>
                                <div class="col-sm-6 m-t-im">
                                    <span class="form-control no-border">
                                    扣除 <label style="color:red;" id="lbTxt_kstd">1</label> 排单币</span>
                                </div>
                            </div>

                            <!--
                            <div class="form-group text-danger m-b-xs">
                                <label class="col-sm-2 control-label m-t-im"></label>
                                <div class="col-sm-10 m-t-im">提示：您已充分了解投资风险</div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label m-t-im"></label>
                                <div class="col-sm-2 m-t-im">
                                    <input type="hidden" name="kou_kstd_pin_nums" id="kou_kstd_pin_nums" value="1"/>
                                    <input type="button" id="btn_submit_kstd" value="提交" class="btn btn-info btn-s-xs"
                                           onclick="sub_kstd()"/>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>







<!-- 自由市场 -->
<div class="modal fade" id="myModal_zysc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">自由市场</h4>
            </div>
            <div class="modal-body" id="myModalContent">
                <div class="form-horizontal" data-validate="parsley">
                    <section class="panel panel-default">

                        <div class="panel-body">

                            <div class="alert alert-danger">

                             申请完成后，请您耐心等待系统随机分配受助对象！
                            </div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label m-t-im">金额</label>
                                <div class="col-sm-3 m-t-im">

                                    <select name="zysc_amount" id="zysc_amount" id="zysc_amount" class="form-control" style="width:250px">
                                        <option value="10000">10000</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label m-t-im">&nbsp;&nbsp;</label>
                                <div class="col-sm-6 m-t-im">
                                    <span class="form-control no-border">
                                    扣除 <label style="color:red;" id="lbTxt_zysc">1</label> 排单币</span>
                                </div>
                            </div>

                            <!--
                            <div class="form-group text-danger m-b-xs">
                                <label class="col-sm-2 control-label m-t-im"></label>
                                <div class="col-sm-10 m-t-im">提示：您已充分了解投资风险</div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label m-t-im"></label>
                                <div class="col-sm-2 m-t-im">
                                    <input type="hidden" name="kou_zysc_pin_nums" id="kou_zysc_pin_nums" value="1"/>
                                    <input type="button" id="btn_submit_zysc" value="提交" class="btn btn-info btn-s-xs"
                                           onclick="sub_zysc()"/>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>










<!-- 打款支付详情 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel3"></h4>
      </div>
      <div class="modal-body" id="myModalContent3" style="font-size:23px;">
        <p>
            <!--
            您必须在<span id="close_time" style="color:red"></span>之前完成打款并上传支付凭证
            -->
            打款剩余时间：<span id="close_time" style="color:red"></span>
        </p>
        <p id="fc_je"></p>
        <p id="real_name"></p>
        <p id="pbank"></p>
        <p id="pbankkh"></p>
        <p id="pzhifubao"></p>
        <p id="pweixin"></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>




<!-- 上传支付凭证 -->
<div class="modal fade" id="uppz_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel4"></h4>
      </div>
      <div class="modal-body" id="myModalContent4">

        <form class="form-horizontal" method="post" action="/index.php?con=ucenter&act=upload_pz" enctype="multipart/form-data">
        <input type="hidden" name="pzid" id="pzid"/>
                    <div class="form-group m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">选择文件</label>
                        <div class="col-sm-8 m-t-im">
                            <input name="imgFile" id="upfile" type="file" class="filestyle" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">



                        </div>
                    </div>
                    <div class="form-group m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">支付方式</label>
                        <div class="col-sm-7 m-t-im">
                            <select name="zflx" class="form-control">
                                <option value="支付宝">支付宝</option>
                                <option value="微信">微信</option>
                                <option value="银行卡">银行卡</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-8 m-t-im">
                            <input type="submit" value="上传" class="btn btn-info btn-s-xs" onclick="return sub_pz()"/>
                        </div>
                    </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="myModal_zhifu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel30"></h4>
      </div>
      <div class="modal-body" id="myModalContent30">
      <p>
       <center>
          <img id="zhifu_img"/>
       </center>
       </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>




<!--
<div class="modal fade" id="myModal_article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel_article">公司动态</h4>
      </div>
      <div class="modal-body" id="myModalContent_article">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

      </div>
    </div>
  </div>
</div>
-->





<!-- 举报并上传举报图片 -->
<div class="modal fade" id="report_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel_report">举报</h4>
            </div>
            <div class="modal-body" id="myModalContent_report">
                <form class="form-horizontal" method="post" action="/index.php?con=ucenter&act=report_do" enctype="multipart/form-data">

                    <input type="hidden" name="pp_id" id="pp_id"/>
                    <input type="hidden" name="report_user_id" id="report_user_id" value="79"/>

                    <div class="form-group m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">选择图片</label>
                        <div class="col-sm-8 m-t-im">
                            <input name="report_img" id="report_img" type="file" class="filestyle"
                                   data-classButton="btn btn-default"
                                   data-classInput="form-control inline v-middle input-s">(默认为打款用户上传的图片)
                        </div>
                    </div>

                    <div class="form-group m-b-xs">
                        <label class="col-sm-2 control-label m-t-im">备注：</label>
                        <div class="col-sm-7 m-t-im">
                            <textarea class="form-control" name="desc" id="desc" style="resize:none;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label m-t-im"></label>
                        <div class="col-sm-8 m-t-im">
                            <input type="submit" value="提交" class="btn btn-info btn-s-xs" onclick="return sub_report()"/>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <!--
                <button type="button" class="btn btn-primary">Save changes</button>
                -->
            </div>
        </div>
    </div>
</div>


<!-- 获得利息标准 -->
<div class="modal fade" id="myModal_hxbz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title">获息标准</h4>
      </div>
      <div class="modal-body">
            <form id="form_hxbz" method="post" action="/index.php?con=ucenter&act=hxbz">
            <input type="radio" checked="checked" name="hxbz" value="1"/>
            A:72-96小时内匹配回款,比例:10%<br><br>
            <input type="radio" name="hxbz" value="2"/>
            B:96-120小时内匹配回款,比例:13%<br><br>
            <input type="radio" name="hxbz" value="3"/>
            C:120-144小时内匹配回款,比例:16%<br><br>
            <input type="radio" name="hxbz" value="4"/>
            D:144-148小时内匹配回款,比例:19%<br><br>
            <input type="radio" name="hxbz" value="5"/>
            E:148-172小时内匹配回款,比例:22%<br><br>
            <!--
            <select name="hxbz">
                <option value="1">A:72-96小时内匹配回款,比例:10%</option>
                <option value="2">B:96-120小时内匹配回款,比例:13%</option>
                <option value="3">C:120-144小时内匹配回款,比例:16%</option>
                <option value="4">D:144-148小时内匹配回款,比例:19%</option>
                <option value="5">E:148-172小时内匹配回款,比例:22%</option>
            </select>
            -->
            <input type="hidden" name="user_id" value="79"/>
            <input type="hidden" name="fc_id" id="fc_id"/>
            &nbsp;&nbsp;
            <input type="button" class="btn btn-info" value="提交" id="btn_hxbz"/>
            </form>
        </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="myModal_article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel_article"></h4>
      </div>
      <div class="modal-body" id="myModalContent_article">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <!--
        <button type="button" class="btn btn-primary">Save changes</button>
        -->
      </div>
    </div>
  </div>
</div>












      <div class="row" style="margin-top:20px;">
                <div class="col-xs-12 col-md-6">

                    <div class="panel panel-info" style="height:300px;margin-left:20px;">

                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="iconfont">&#xe602;</i> 我的账户<i class="iconfont pull-right">&#xe608;</i></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width:100%;height:230px">
                                    <tbody>
                                    <tr>
                                        <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">直推人数</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">3</td>
                                        <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">静态钱包</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">可用：<span class="text-danger text-bold">0.00</span><br/>冻结：<span class="text-danger text-bold">0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">可用排单币</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">0</td>
                                        <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">动态钱包</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">可用：<span class="text-danger text-bold">0.00</span><br/>冻结：<span class="text-danger text-bold">0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">可用激活码</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">
                                            0                                        </td>
                                       <!--  <td class="success text-center text-bold" style="text-align:center;vertical-align:middle;font-size:18px;">购物券钱包</td>
                                        <td class="warning" style="text-align:center;vertical-align:middle;">可用：<span class="text-danger text-bold">2050.00</span><br/>冻结：<span class="text-danger text-bold">0.00</span></td> -->
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-md-6">
                                            <div class="panel panel-info" style="height:300px;margin-right:20px;">
                                              <div class="panel-heading">
                             <h3 class="panel-title"><i class="iconfont">&#xe602;</i> 网站公告<i class="iconfont pull-right">&#xe608;</i></h3>
                         </div>
                      <div class="panel-body">
                         <div class="list-group">
                                                         <a href="javascript:;" onclick="return ss('通告',1)" data-container="body" data-toggle="modal" data-target="#myModal_article" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="list-group-item padder-v">
                             通告<span class="label label-danger"></span><span class="pull-right r-w-t">2017-12-22</span></a>
                                                     </div>
                      </div>
                 </div>
                </div>
            </div>









      <div class="row">

          <div class="col-lg-4">
                              <section class="panel panel-default" style="margin-left:20px;">

                  <footer class="panel-footer bg-danger text-center">
                      <div class="row pull-out">
                          <div class="col-xs-12">
                              <a class="padder-v block" data-toggle="modal" href="#offerModal">
                                  <span class="m-b-xs h3 block text-white" data-container="body" data-toggle="modal" data-target="#myModal" href="javascript:;" onclick="fc_help()">诚信付出</span>
                              </a>
                          </div>
                      </div>
                  </footer>
              </section>
          </div>

          <div class="col-lg-4">
                                          <section class="panel panel-default">

                  <footer class="panel-footer bg-success text-center">
                      <div class="row pull-out">
                          <div class="col-xs-12">
                              <a class="padder-v block" href="#acceptModal" data-toggle="modal">
                                  <span class="m-b-xs h3 block text-white" data-container="body" data-toggle="modal" data-target="#myModal2" href="javascript:;" onclick="js_help()">诚信收获</span>
                              </a>
                          </div>
                      </div>
                  </footer>
              </section>
         </div>
<!--
             <div class="col-lg-4">
                                      <section class="panel panel-default" style="margin-right:20px;">
                                       <footer class="panel-footer bg-success text-center">
                         <div class="row pull-out">
                             <div class="col-xs-12">
                                 <a class="padder-v block" data-container="body" data-toggle="modal" data-target="#myModal_kstd" href="javascript:;">
                                     <span class="m-b-xs h3 block text-white">财富快车</span>
                                 </a>
                             </div>
                         </div>
                     </footer>
                 </section>
             </div>-->
     </div>
























                <section class="hbox stretch">
                    <section>
                        <section class="vbox">

                            <section class="scrollable padder">


                                                                                                <section class="panel panel-default">
                                    <header class="panel-heading bg-light">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#help" data-toggle="tab" style="color:red;font-size:25px;">进行中的付出单                                            <label style="color:red;">&nbsp;1</label>                                            </a></li>
                                            <li class=""><a href="#shelp" data-toggle="tab" style="color:green;font-size:25px;" onclick="shelp_do()">进行中的收获单                                                                                            <label style="color:red;">&nbsp;1</label>
                                                                                        </a></li>
                                        </ul>
                                    </header>
                                    <div id="div_scroll" class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane animated fadeIn active" id="help">
                                                <div class="list-group no-radius row">

                                                                                                    <a class="list-group-item clearfix" href="javascript:;">
                                                        <span class="col-lg-3 block"><i class="fa fa-dot-circle-o m-r-sm text-primary"></i>单号：HE067607F09912FDDFA33207DC</span>
                                                        <span class="col-lg-2 block">金额：<span class="text-danger">￥2000.00</span></span>
                                                        <span class="col-lg-3 block">预期收益：2300.00</span>
                                                        <span class="col-lg-3 block">时间：2017-12-23 18:08:38</span>
                                                        <span class="col-lg-2 block">分配受单数：0</span>
                                                        <span class="col-lg-2 block">已打款单数：0</span>
                                                    </a>




                                                </div>
                                            </div>


                                            <div class="tab-pane animated fadeIn" id="shelp">
                                                <div class="list-group no-radius row">

                                                    <a class="list-group-item clearfix" href="javascript:;">
                                                        <span class="col-lg-3 block"><i class="fa fa-dot-circle-o m-r-sm text-primary"></i>单号：G85BFF43B3FABF6806E8625CA0</span>
                                                        <span class="col-lg-2 block">金额：<span class="text-danger">￥2300.00</span></span>
                                                        <span class="col-lg-3 block">时间：2017-12-26 16:49:42</span>
                                                        <span class="col-lg-3 block">状态：配对成功,打款中</span>
                                                    </a>
                                                                                                                                                                                                                                                                                <div class="list-group-item clearfix" href="javascript:;" style="background:rgb(227,185,222);">
                                                        <span class="col-lg-3 block">用户名：zz006</span>
                                                        <span class="col-lg-3 block">付出者：朱春伟</span>
                                                        <span class="col-lg-3 block">电话：18160880350</span></span>
                                                        <span class="col-lg-3 block">付出金额：2000.00</span>

                                                        <span class="col-lg-3 block">推荐人姓名：朱春伟</span>
                                                        <span class="col-lg-3 block">推荐人电话：15956171401</span>

                                                        <span class="col-lg-3 block">状态：<b style="color:red;"><span class=red>已付款,待确认</span></b></span>

                                                                                                                <!--
                                                        <form method="post" action="/index.php?con=ucenter&act=pl_save" class=''>
                                                        -->
                                                            <span class="col-lg-3 block">支付方式：银行卡</span>
                                                            <span class="col-lg-3 block">付款时间：2017-12-28 09:44:13</span>

                                                                                                                                                                                    <span class="col-lg-3 block">确认截止时间：2017-12-28 13:44:13</span>

                                                            <span class="col-lg-3 block">确认付款剩余时间：
                                                            <input type="hidden" name="hid_last_sure_time" value="2017-12-28 13:44:13"/>
                                                                <b style="color:red;">
                                                                    3小时58分8秒                                                                </b>
                                                            </span>

                                                            <span class="col-lg-3 block">
                                                                <input type="button" class="btn btn-info" value="查看支付凭证"  onclick="show_pz('data/uploads/pz/2017/12/28/b862f858262df873d7d27e704fcc5986.jpg')"/>

                                                            </span>
                                                           <span class="col-lg-3 block">
                                                                <input type="button" value="确认付款" fcuid="130" ddid="202" class="btn btn-info" style="padding:5px 6px" id="btn_sub_sure" onclick="sub_sure(this)"/>
                                                            </span>
                                                            <!--
                                                            <input type="hidden" name="fcuid" id="fcuid" value="130">
                                                            <input type="hidden" name="ddid" id="ddid" value="202">
                                                            -->
                                                        <!--
                                                        </form>
                                                        -->
                                                                                                                              <span class="col-lg-3 block">
                                                                      <a style="background:red;" class="btn btn-info" style="padding:5px 6px" data-container="body" data-toggle="modal" data-target="#report_modal" onclick="rec(202)"/>举报</a>
                                                                  </span>
                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="list-group-item clearfix" href="javascript:;" style="background:rgb(227,185,222);">
                                                        <span class="col-lg-3 block">用户名：July11</span>
                                                        <span class="col-lg-3 block">付出者：段渝佩</span>
                                                        <span class="col-lg-3 block">电话：15295031677</span></span>
                                                        <span class="col-lg-3 block">付出金额：300.00</span>

                                                        <span class="col-lg-3 block">推荐人姓名：尹露</span>
                                                        <span class="col-lg-3 block">推荐人电话：17390049405</span>

                                                        <span class="col-lg-3 block">状态：<b style="color:red;">配对成功,打款中</b></span>

                                                                                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>



                            </section>
                        </section>
                    </section>
                    <!-- side content -->
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>




<script type="text/javascript">





function show_fc_detail(fc_je,real_name,close_time,sy_time,zhifubao, weixin,bank, bankkh)
{
    $("#myModalLabel3").html("支付详情");

    //$("#close_time").html(sy_time);

    setInterval(function(){

        var EndTime= new Date(close_time); //截止时间 前端路上 http://www.51xuediannao.com/qd63/
           var NowTime = new Date();
           var t =EndTime.getTime() - NowTime.getTime();
           var d=Math.floor(t/1000/60/60/24);
           var h=Math.floor(t/1000/60/60%24);
           var m=Math.floor(t/1000/60%60);
           var s=Math.floor(t/1000%60);
           var str = '';
           str += d + " 天 ";
           str += h + " 时 ";
           str += m + " 分 ";
           str += s + " 秒 ";
          $("#close_time").html(str);
    },1000);


    $("#real_name").html("真实姓名："+real_name);
    $("#pbank").html("开户行："+bank);
    $("#pbankkh").html("银行卡号："+bankkh);
    $("#fc_je").html("打款金额：<b style='color:red;'>"+fc_je+"</b>");
    if(zhifubao != '')
    {
        $("#pzhifubao").html("支付宝："+zhifubao);
    }
    if(weixin != '')
    {
        $("#pweixin").html("微信："+weixin);
    }

    $("#myModal3").modal();

}


function show_pz( pic )
{
    $("#myModalLabel30").html("查看支付凭证");
    $("#zhifu_img").attr('src', pic);
    $("#myModal_zhifu").modal();

}


function sub_js()
{
    var js_amount = parseInt($("#js_amount").val());
    var lx = parseInt( $("input[name='lx']:checked").val() );

    var password = $("#password").val();




    if(lx == 1)
    {
        if(js_amount <100 || js_amount % 100 != 0 || isNaN(js_amount))
        {
            alert("金额最少为100且为100的倍数");
            return false;
        }
    }
    else if(lx == 2)
    {
        if(js_amount < 300 || js_amount % 100 != 0 || js_amount > 3000)
        {
            alert("金额须为300-3000且为100的倍数");
            return false;
        }

    }
    else if(lx == 3)
    {
        if(js_amount <5000 || js_amount % 5000 != 0)
        {
            alert("受助金额必须为5000的倍数");
            return false;
        }

        var group_id = 1;
        if( group_id == 2)
        {
            if(js_amount > 5000)
            {
                alert("当前受助金额最高为5000");
                return false;
            }
        }
        else if( group_id == 3 )
        {
            if(js_amount > 15000)
            {
                alert("当前受助金额最高为15000");
                return false;
            }
        }
        else if( group_id == 4 )
        {
            if(js_amount > 40000)
            {
                alert("当前受助金额最高为40000");
                return false;
            }
        }
    }

    if(password == '')
    {
        alert("二级密码不能为空");
        return false;
    }

    $("#btn_sub_js").prop("disabled", "disabled");

    $.post("/index.php?con=ucenter&act=js",{password:password,js_amount:js_amount,lx:lx},function(result){
        var result = eval("("+result+")");
        if(result['status'] == 'success')
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
        else
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
      });

}

//提交“提供帮助”
function sub_fc()
{
    var pass2 = $.trim($("#pass2").val());
    if(pass2 == '')
    {
        alert('二级密码不能为空');
        return;
    }
    //被扣的诚信金的数量
    var kou_pin_nums = $("#kou_pin_nums").val();

    //提供帮助的金额
    var fc_amount = $("#fc_amount").val();

    $("#btn_sub_fc").prop('disabled', 'disabled');

    $.post("/index.php?con=ucenter&act=fc",{pass2:pass2,kou_pin_nums:kou_pin_nums,fc_amount:fc_amount},function(result){
        var result = eval("("+result+")");
        if(result['status'] == 'success')
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
        else
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
      });
}



function sub_kstd()
{
    //提供帮助的金额
    var kstd_amount = $("#kstd_amount").val();
    var kou_kstd_pin_nums = $("#kou_kstd_pin_nums").val();

    $("#btn_submit_kstd").attr("disabled", "1");
    var kou_pin_nums = $("#kou_kstd_pin_nums").val();

    $.post("/index.php?con=ucenter&act=kstd", {kou_kstd_pin_nums: kou_kstd_pin_nums, kstd_amount: kstd_amount}, function (result) {

        var result = eval("(" + result + ")");

        if (result['status'] == 'success') {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
        else
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
    });
}



/**
 * 自由市场
 */
function sub_zysc()
{
    //提供帮助的金额
    var zysc_amount = $("#zysc_amount").val();
    var kou_zysc_pin_nums = $("#kou_zysc_pin_nums").val();

    $("#btn_submit_zysc").attr("disabled", "1");
    //var kou_pin_nums = $("#kou_zysc_pin_nums").val();

    $.post("/index.php?con=ucenter&act=zysc", {kou_zysc_pin_nums: kou_zysc_pin_nums, zysc_amount: zysc_amount}, function (result) {

        var result = eval("(" + result + ")");

        if (result['status'] == 'success') {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
        else
        {
            alert(result['msg']);
            document.location.href = document.location.href;
        }
    });
}



function fc_help()
{
    $("#myModalLabel").html("诚信付出");
}
function js_help()
{
    $("#myModalLabel2").html("诚信收获");
}
function show_upload_pz(pzid)
{
    $("#myModalLabel4").html("上传支付凭证");
    $("#pzid").val(pzid);
}
function sub_sure(obj)
{
    if(confirm("确定要执行此操作？"))
    {
        var fcuid = $(obj).attr("fcuid");
        var ddid  = $(obj).attr("ddid");
        //alert(fcuid+" "+ddid);return;
        $("#btn_sub_sure").attr("disabled", true);
        $.post("/index.php?con=ucenter&act=pl_save",{fcuid:fcuid,ddid:ddid},function(result){
            if(result['status']=='success')
            {
                alert('操作成功');
                document.location.href = document.location.href;
            }
            else
            {
                alert("操作失败");
                document.location.href = document.location.href;
            }
        },'json');


    }
    else
    {
        return false;
    }
}
function sub_pz()
{
    var imgFile = $("#upfile").val();
    if(imgFile == '')
    {
        alert("支付凭证不能为空");
        return false;
    }

}


function shelp_do()
{
            var h = parseInt($("#shelp").height())+parseInt($("#shelp").height())-50;
        $("#div_scroll").attr("style","height:"+h+"px");
    }

    function change_pin_nums(obj)
    {
        //var z = obj.value/1000;
        var v = parseInt(obj.value);
        if(v == 1000 || v == 2000)
        {
            $("#lbTxt").text( 1 );
            $("#kou_pin_nums").val( 1 );
        }
        if(v == 3000 || v == 4000)
        {
            $("#lbTxt").text( 2 );
            $("#kou_pin_nums").val( 2 );
        }
        if(v == 5000)
        {
            $("#lbTxt").text( 3 );
            $("#kou_pin_nums").val( 3 );
        }
    }

    $(function(){
                    var h = parseInt($("#help").height())+parseInt($("#help").height())-50;
            $("#div_scroll").attr("style","height:"+h+"px");



        $("[name='hid_last_sure_time']").each(function(){
            var last_sure_time = $(this).val();
            var obj = $(this);
            setInterval(function(){

                var EndTime= new Date(last_sure_time); //截止时间 前端路上 http://www.51xuediannao.com/qd63/
                   var NowTime = new Date();
                   var t =EndTime.getTime() - NowTime.getTime();
                   var d=Math.floor(t/1000/60/60/24);
                   var h=Math.floor(t/1000/60/60%24);
                   var m=Math.floor(t/1000/60%60);
                   var s=Math.floor(t/1000%60);
                   var str = '';
                   str += d + " 天 ";
                   str += h + " 时 ";
                   str += m + " 分 ";
                   str += s + " 秒 ";
                  //$("#close_time").html(str);
                  obj.next("b").text(str);
            },1000);
        });




        var kstd_amount = parseInt($("#kstd_amount option:first").val());

        var fc_amount = parseInt($("#fc_amount option:first").val());

        if(fc_amount == 3000 || fc_amount == 5000)
        {
            $("#lbTxt").text( 1 );
            $("#kou_pin_nums").val( 1 );
        }

        if(fc_amount == 10000 || fc_amount == 15000 || fc_amount == 20000)
        {
            $("#lbTxt").text( 2 );
            $("#kou_pin_nums").val( 2 );
        }

        if(kstd_amount == 5000)
        {
            $("#lbTxt_kstd").text( 3 );
            $("#kou_kstd_pin_nums").val( 3 );
        }
        else
        {
            $("#lbTxt_kstd").text( 2 );
            $("#kou_kstd_pin_nums").val( 2 );
        }
        /*
        if(kstd_amount == 10000 || kstd_amount == 15000 || kstd_amount == 20000)
        {
            $("#lbTxt_kstd").text( 2 );
            $("#kou_kstd_pin_nums").val( 2 );
        }
        */


        $("input[name='lx']").click(function(){
            var val = parseInt($(this).val());
            if(val == 1)
            {
                $("#js_amount").attr("placeholder","金额为100的倍数");
            }
            else if(val == 2)
            {
                $("#js_amount").attr("placeholder","金额最低为300,且为100的倍数");
            }
            else if(val == 3)
            {
                $("#js_amount").attr("placeholder","金额需为5000的倍数");
            }
        });

    });

    function change_kstd_pin_nums(obj)
    {
        var z = parseInt(obj.value);
        /*
        $("#lbTxt_kstd").text( z );
        $("#kou_kstd_pin_nums").val( z );
        */

        if(z == 5000)
        {
            $("#lbTxt_kstd").text( 3 );
            $("#kou_kstd_pin_nums").val( 3 );
        }
        else
        {
            $("#lbTxt_kstd").text( 2 );
            $("#kou_kstd_pin_nums").val( 2 );
        }
        /*
        if(z == 10000 || z == 15000 || z == 20000)
        {
            $("#lbTxt_kstd").text( 2 );
            $("#kou_kstd_pin_nums").val( 2 );
        }
        */

    }


    function show_article(arg,id)
    {
        $("#myModalLabel_article").html(arg);

        $.post("/index.php?con=ucenter&act=getArticleById",{id:id},function(result){
            $("#myModalContent_article").html(result);
          });
    }

    function qx_fc(id)
    {
        if(!confirm("确定要执行此操作？"))
        {
            return false;
        }
        $.post("/index.php?con=ucenter&act=qx_fc",{id:id},function(result){
            if(result == 'success')
            {
                alert("操作成功");
            }
            else
            {
                alert("操作失败");
            }
            document.location.href = document.location.href;

          },"text");
    }

    $(document).ready(function(){
        $("#liHelp").click(function(){

            $("#help").toggle();
            });

        $("#liShelp").click(function(){
            $("#shelp").toggle();
            });
        $("#btn_hxbz").click(function(){
            var confirm_str = "确定要执行此操作？";
            if(confirm(confirm_str))
            {
                var hxbz_type = $("input[name='hxbz']:checked").val();
                var fc_id = $("#fc_id").val();
                $(this).attr("disabled","0");
                $.post("/index.php?con=ucenter&act=check_hxbz",{fc_id:fc_id,hxbz_type:hxbz_type},function(result){
                    if(result == 'success')
                    {
                        $("#form_hxbz").submit();
                    }
                    else
                    {
                        $("#btn_hxbz").removeAttr("disabled");
                        //alert("操作失败");
                        alert(result);

                    }
                    //document.location.href = document.location.href;

                  },"text");
            }
            //$("#form_hxbz").submit();
        });

        //$("#myModal_cj").modal();

        });


    function rec( pp_id )
    {
        $("#pp_id").val( pp_id );
    }
    function show_hxbz(fc_id)
    {
        //$("#myModalLabel30").html("查看支付凭证");
        //$("#zhifu_img").attr('src', pic);
        $("#fc_id").val(fc_id);
        $("#myModal_hxbz").modal();

    }


    function ss(arg,id)
    {
        $("#myModalLabel_article").html(arg);

        $.post("/index.php?con=ucenter&act=getArticleById",{id:id},function(result){
            $("#myModalContent_article").html(result);
          });
    }

</script>
            </section>
        </section>
    </section>
</section>



<script type="text/javascript">
/*
window.onbeforeunload = function (e) {
    e = e || window.event;
    var y = e.clientY
    if (y <= 0
    || y >= Math.max(document.body.clientHeight, document.documentElement.clientHeight)
    )
        e.returnValue = "确认关闭浏览器窗口？！！";
    //清空cookie
    $.cookie("autologin",null,0);
    $.post("/index.php?con=simple&act=logout_again",function(){});

    var keys=document.cookie.match(/[^ =;]+(?=\=)/g);
    if (keys) {
        for (var i =  keys.length; i--;)
            document.cookie=keys[i]+'=0;expires=' + new Date( 0).toUTCString()
    }
}



$("ul[class='nav dk'] li").click(function(){

    //$(this).attr("class","active");
    $(this).parent().attr("disabled","block");
    $(this).parents("li").attr("class","active");

});
*/
</script>

</body>
</html>
<!--Powered by TinyRise-->