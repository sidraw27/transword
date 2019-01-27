<!DOCTYPE html>

<html ⚡ lang="zh-TW">

<head>
    <meta charset="utf-8">
    <script async="" src="https://cdn.ampproject.org/v0.js"></script>
    <title>transword</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="">

    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,viewport-fit=cover">

    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>

    @include('css.index')
    @include('css.boilerplate')
</head>

<body>

<div class="vh100-layout">
    <div class="tl_topnav-outer">
        <div class="tl_topnav"><a class="logo" href="#">TransWord</a>
            <amp-accordion class="sample">
                <section>
                    <h4 class="current-btn"><span class="current"> 中文</span></h4>
                    <div class="dropdown-list">
                        <div class="dropdown-item"><a class="item" href="#">中文</a></div>
                        <div class="dropdown-item"><a class="item" href="#">英文</a></div>
                    </div>
                </section>
            </amp-accordion>
        </div>
    </div>
    <div class="main-outer">
        <div class="main_container">
            <h1 class="con_tit">免費辭典翻譯</h1>
            <div class="con_text">擁有30多萬個單詞、釋義和短句</div>
            <div class="tl_search-box">
                <div class="search-icons">
                    <amp-img src="/images/search.svg" alt="" width="20" height="20"></amp-img>
                </div>
                <div class="search-input">
                    <input type="text" autocomplete="" placeholder="">
                </div>
                <div class="search-clear">
                    <amp-img src="/images/clear.svg" alt="" width="15" height="15"></amp-img>
                    <span>清除</span>
                </div>
            </div>
            <div class="tl_search-hot">
                <div class="search-hot_tit">今日熱搜</div>
                <a href="#">test</a><a href="#">空氣污染</a><a href="#">電暖爐</a><a href="#">test</a><a href="#">空氣污染</a><a
                        href="#">電暖爐</a>
            </div>
        </div>
        <div class="main_shadow"></div>
        <div class="main_image"></div>
    </div>
    <div class="footer-outer">
        <div class="footer_con">
            <div class="footer-con_upon"><a class="footer_logo" href="#">Transword</a>
                <div class="footer_menu">
                    <div class="tit">Navigation</div>
                    <a class="item" href="#">首頁</a><a class="item" href="#">聯絡我們</a>
                </div>
                <div class="footer_menu">
                    <div class="tit">語系切換</div>
                    <a class="item" href="#">繁體中文</a><a class="item" href="#">English</a>
                </div>
            </div>
            <div class="footer-con_bototm">
                <div class="footer-copyright">Copyright © {{ date('Y') }} transword.c</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>