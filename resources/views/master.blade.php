<!DOCTYPE html>

<html ⚡ lang="zh-TW">

<head>
    <meta charset="utf-8">

    <script async="" src="https://cdn.ampproject.org/v0.js"></script>
    <title>transword</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="{{ URL::current() }}">

    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,viewport-fit=cover">

    @stack('head')

    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

    @include('css.boilerplate')
    @include('css.translate')
</head>

<body>

<div class="tl_topnav-outer">
    <div class="tl_topnav">
        <a class="logo" href="#">TransWord</a>
        <amp-accordion class="sample">
            <section>
                <h4 class="current-btn">
                    <span class="current">中文</span>
                </h4>
                <div class="dropdown-list">
                    <div class="dropdown-item">
                        <a class="item" href="#">
                            中文
                        </a>
                    </div>
                    <div class="dropdown-item"><a class="item" href="#">英文</a></div>
                </div>
            </section>
        </amp-accordion>
    </div>
</div>

<div class="tl_search-outer">
    <div class="tl_search">
        <div class="tl_search-box">
            <div class="search-icons">
                <amp-img src="/images/search.svg" alt="" width="20" height="20"></amp-img>
            </div>
            <div class="search-input">
                <input type="text" autocomplete="" placeholder="">
            </div>
            <div class="search-clear">
                <amp-img src="/images/clear.svg" alt="" width="15" height="15"></amp-img>
                <span>
                    {{ trans('translate.layout.clear') }}
                </span>
            </div>
        </div>
        <div class="tl_search-hot">
            <div class="search-hot_tit">
                {{ trans('translate.layout.search_bar_under_word') }}
            </div>
            <a href="#">空氣污染</a>
            <a href="#">電暖爐</a>
            <a href="#">空氣污染</a>
            <a href="#">電暖爐</a>
        </div>
    </div>
</div>

@yield('content')

</body>
</html>