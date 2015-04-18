<?php
/**
 * Created by PhpStorm.
 * User: JMALIGE
 * Date: 17/04/2015
 * Time: 16:55
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WhiteBoard - H4E</title>
        <link href="/Content/css/bootstrap.css" rel="stylesheet" />
        <link href="/Content/css/Menu.css" rel="stylesheet" />
        <link href="/Content/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="/Script/js/bootstrap.js"></script>
        <script type="text/javascript" src="/Script/js/respond.js"></script>
        <script type="text/javascript" src="/Script/js/jquery.min.js"></script>
    </head>

    <body>
    <div id="menu2" class="left">
        <a href="#" id="showmenu2"><i id="icone" class="glyphicon glyphicon-chevron-right"></i></a>
    </div>

    <div class="page-container">
        <div class="content">
            <!-- ici le contenu de la page -->
        </div>
        <div class="sidebar-menu">
            <header class="logo">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#">
                    <span id="logo" class="fa fa-html5 fa-5x"></span>
                </a>
            </header>
            <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
            <div class="menu">
                <ul id="menu">
                    <li id="menu-home"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li id="menu-comunicacao">
                        <a href="#"><i class="fa fa-anchor"></i><span>Category</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
                        <ul id="menu-comunicacao-sub">
                            <li id="menu-mensagens" style="width: 120px">
                                <a href="#">Item 1<i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
                                <ul id="menu-mensagens-sub">
                                    <li id="menu-mensagens-enviadas"><a href="#">Item 1.1</a></li>
                                    <li id="menu-mensagens-recebidas"><a href="#">Item 1.2</a></li>
                                    <li id="menu-mensagens-nova"><a href="#">Item 1.3</a></li>
                                </ul>
                            </li>
                            <li id="menu-arquivos"><a href="#">Item 2</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico">
                        <a href="#"><i class="fa fa-envelope"></i><span>About</span><span class="fa fa-angle-right" style="float: right"></span></a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="#">Contact us</a></li>
                            <li id="menu-academico-boletim"><a href="#">About us</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-share-alt"></i><span>Share</span><span class="fa fa-angle-right" style="float: right"></span></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-history"></i><span>Blog</span></a></li>
                    <li><a href="#"><i class="fa fa-gears"></i><span>Settings</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        $("#showmenu2").click(function (e) {
            e.preventDefault();
            $("#menu2").toggleClass("show");
            var $icone = $("#icone");
            if ($icone.hasClass("glyphicon-chevron-right")) {
                $icone.removeClass("glyphicon-chevron-right");
                $icone.addClass("glyphicon-chevron-left");
            } else {
                $icone.removeClass("glyphicon-chevron-left");
                $icone.addClass("glyphicon-chevron-right");
            }
        });

        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu").find("span").css({ "position": "absolute" });
            }
            else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu").find("span").css({ "position": "relative" });
                }, 400);
            }

            toggle = !toggle;

        });


    </script>
    </body>
</html>

