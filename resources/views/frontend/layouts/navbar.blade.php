<?php
/**
 * Created by PhpStorm.
 * User: Birdwin
 * Date: 2018/11/27
 * Time: 下午 09:11
 */
?>
<!-- .navbar-expand-{sm|md|lg|xl}決定在哪個斷點以上就出現漢堡式選單 -->
<!-- navbar-dark 文字顏色 .bg-dark 背景顏色 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

    <!-- .navbar-toggler 漢堡式選單按鈕 -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- .navbar-toggler-icon 漢堡式選單Icon -->
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- .navbar-brand 左上LOGO位置 -->
    <a class="navbar-brand" href="/">
        <img src="{{ URL::asset('img/shopping-cart.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="h3 mx-1">Self-Service Store IS</span>
    </a>

    <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
    <!-- 選單項目&漢堡式折疊選單 -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- active表示當前頁面 -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">首頁<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('登入')}}">登入</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('註冊')}}">註冊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">特價資訊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="3">商品資訊</a>
            </li>
            <!-- .dropdown Navbar選項使用下拉式選單 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">作品集</a>
                <!-- .dropdown-menu 下拉選單內容 -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">網頁設計</a>
                    <a class="dropdown-item" href="#">平面設計</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search
            </button>
        </form>
    </div>

</nav>
