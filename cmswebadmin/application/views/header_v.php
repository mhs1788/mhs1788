<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>CodeIgniter</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link type="text/css" rel='stylesheet' href="/bbs/include/css/bootstrap.css" />
    </head>
    <body>
        <div id="main">
            <header id="header" data-role="header" data-position="fixed">
                <blockquote>
                    <p>
                        만들면서 배우는 CodeIgniter
                    </p>
                    <small>실행 예제</small>
                    <p>
<?php
    if ( @$this -> session -> userdata('logged_in') == TRUE) {
?>
<?php echo $this -> session -> userdata('username');?> 님 환영합니다. <a href="/bbs/auth/logout" class="btn">로그아웃</a>
<?php
    } else {
?>
<a href="/bbs/auth/login" class="btn btn-primary"> 로그인 </a>
<?php
    }
?>
                    </p>
                </blockquote>
            </header>
            <nav id="gnb">
                <ul>
                    <li>
                        <a rel="external" href="/bbs/<?php echo $this -> uri -> segment(1); ?>/lists/<?php echo $this -> uri -> segment(3); ?>"> 게시판 프로젝트 </a>
                    </li>
                </ul>
            </nav>
