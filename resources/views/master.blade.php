<!DOCTYPE html>

<html ⚡ lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,viewport-fit=cover">

    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="{{ URL::current() }}">

    @stack('head')
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


@yield('content')

</body>
</html>