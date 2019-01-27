@extends('master')
@push('head')
    <title>transword</title>

    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>

    @include('css.index')
    @include('css.boilerplate')
@endpush

@section('content')
    <div class="main-outer">
        <div class="main_container">
            <h1 class="con_tit">{{ trans('index.title') }}</h1>
            <div class="con_text">{{ trans('index.description') }}</div>
            <div class="tl_search-box">
                <div class="search-icons">
                    <amp-img src="/images/search.svg" alt="" width="20" height="20"></amp-img>
                </div>
                <div class="search-input">
                    <form id="searchForm" action="/" method="get">
                        {{--@csrf--}}
                        <input type="text" placeholder="{{ trans('translate.search_placeholder') }}" name="search">
                    </form>
                </div>
                <div class="search-clear">
                    <amp-img src="/images/clear.svg" alt="" width="15" height="15"></amp-img>
                    <span>清除</span>
                </div>
            </div>
            <div class="tl_search-hot">
                <div class="search-hot_tit">
                    {{ trans('index.search_bar_under_word') }}
                </div>
                <a href="#">test</a><a href="#">空氣污染</a><a href="#">電暖爐</a><a href="#">test</a><a href="#">空氣污染</a><a
                        href="#">電暖爐</a>
            </div>
        </div>
        <div class="main_shadow"></div>
        <div class="main_image"></div>
    </div>
    <div class="footer-outer">
        <div class="footer_con">
            <div class="footer-con_upon">
                <a class="footer_logo" href="{{ route('index') }}">
                    Transword
                </a>
                <div class="footer_menu">
                    <div class="tit">{{ trans('index.navigation')  }}</div>
                    <a class="item" href="{{ route('index') }}">{{ trans('index.index')  }}</a>
                    <a class="item" href="#">{{ trans('index.contact_us') }}</a>
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
@endsection