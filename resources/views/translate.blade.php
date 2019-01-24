@extends('master')

@section('content')
<div class="tl_container-outer">
    <div class="tl_container">
        <div class="tl_main-content">

            @switch($lang)
                @case('en')
                    @include('slot.en')
                @break
                @case('zh')
                    @include('slot.zh')
                @break
            @endswitch

            @isset($pageData['sampleSentences'])
                <div class="tl_info-article">
                    <ul class="tl_tabnav">
                        <li>
                            <h3 class="tl_font18">例句</h3>
                        </li>
                    </ul>
                    <ul class="tl_section-list">
                            @foreach($pageData['sampleSentences'] as $sentence)
                                <li class="tl_list-item">
                                    <span class="number">
                                        {{ $loop->index + 1 }}.
                                    </span>
                                    <div class="tl_item-text">
                                        <p>
                                            {{ $sentence['en'] }}
                                        </p>
                                        <p class="chiness">
                                            {{ $sentence['zh'] }}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                    </ul>
                </div>
            @endisset


                {{--<div class="tl_info-article">--}}
                {{--<ul class="tl_tabnav">--}}
                    {{--<li>--}}
                        {{--<h3 class="tl_font18">同義詞 </h3>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="tl_synonym-list">--}}
                    {{--<li class="tl_list-item">--}}
                        {{--<div class="item-tit">名詞</div>--}}
                        {{--<ul class="item-wrap">--}}
                            {{--<li>microwave oven</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="tl_list-item">--}}
                        {{--<div class="item-tit">動詞</div>--}}
                        {{--<ul class="item-wrap">--}}
                            {{--<li>nuke</li>--}}
                            {{--<li>zap</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        </div>

        <div class="tl_sidebar">
            <div class="tl_ad-wrap"></div>
            <div class="tl_hot-words">
                <h3 class="tit18">
                    {{ trans('translate.layout.hotSearch') }}
                </h3>
                <ul class="hot-words_wrap">
                    <li>
                        <div class="bumber">01</div>
                        <a href="#">海龜</a>
                    </li>
                    <li>
                        <div class="bumber">02</div>
                        <a href="#">懶人經濟</a>
                    </li>
                    <li>
                        <div class="bumber">03</div>
                        <a href="#">global services</a>
                    </li>
                    <li>
                        <div class="bumber">04</div>
                        <a href="#">志願者</a>
                    </li>
                    <li>
                        <div class="bumber">05</div>
                        <a href="#">空氣污染</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection