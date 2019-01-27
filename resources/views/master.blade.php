<!DOCTYPE html>

<html ⚡ lang="{{ $htmlLang or 'en' }}">

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
                            <span class="current">
                                {{ trans('layout.language_family') }}
                            </span>
                        </h4>
                        <div class="dropdown-list">
                            <div class="dropdown-item">
                                <a class="item" href="https://tw.transword.cc">
                                    繁體版
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a class="item" href="https://en.transword.cc">
                                    English
                                </a>
                            </div>
                        </div>
                    </section>
                </amp-accordion>
            </div>
        </div>


        @yield('content')

        <div class="footer-outer">
            <div class="footer_con">
                <div class="footer-con_upon">
                    <a class="footer_logo" href="{{ route('index') }}">
                        Transword
                    </a>
                    <div class="footer_menu">
                        <div class="tit">{{ trans('index.navigation')  }}</div>
                        <a class="item" href="{{ route('index') }}">{{ trans('index.index')  }}</a>
                        <a class="item" href="https://m.me/241948746733131">
                            {{ trans('index.contact_us') }}
                        </a>
                    </div>
                    <div class="footer_menu">
                        <div class="tit">{{ trans('index.lang_switch') }}</div>
                        <a class="item" href="https://tw.transword.cc">繁體中文</a>
                        <a class="item" href="https://en.transword.cc">English</a>
                    </div>
                </div>
                <div class="footer-con_bototm">
                    <div class="footer-copyright">Copyright © {{ date('Y') }} transword.cc</div>
                </div>
            </div>
        </div>
    </body>
</html>