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

            {{--<div class="tl_info-article">--}}
                {{--<ul class="tl_tabnav">--}}
                    {{--<li>--}}
                        {{--<h3 class="tl_font18">例句</h3>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="tl_section-list">--}}
                    {{--<li class="tl_list-item"><span class="number">1.</span>--}}
                        {{--<div class="tl_item-text">--}}
                            {{--<p>--}}
                                {{--The pie is not very hot. Can you <b>microwave </b>it a bit more?--}}
                            {{--</p>--}}
                            {{--<p class="chiness">這個餅不是很熱的，你再用微波爐加熱一會好嗎？</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="tl_list-item"><span class="number">2.</span>--}}
                        {{--<div class="tl_item-text">--}}
                            {{--<p>--}}
                                {{--A <b>microwave </b>tube in which electrons generated from a heated cathode are affected--}}
                                {{--by magnetic and electric fields in such a way as to produce microwave radiation used in--}}
                                {{--radar and in microwave ovens.</p>--}}
                            {{--<p class="chiness">磁控管一種微波管，它裡面的發熱陰極發出的電子受到磁場和電場的影響，從而產生能用於雷達和微波爐微波輻射。</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="tl_list-item"><span class="number">3.</span>--}}
                        {{--<div class="tl_item-text">--}}
                            {{--<p>--}}
                                {{--Steam or <b>microwave </b>the vegetables until tender. </p>--}}
                            {{--<p class="chiness">蒸或者用微波爐加熱蔬菜，直至蔬菜變軟。</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="tl_list-item"><span class="number">4.</span>--}}
                        {{--<div class="tl_item-text">--}}
                            {{--<p>--}}
                                {{--Vicky Brown arrived home to find the men disconnecting her <b>microwave</b>.</p>--}}
                            {{--<p class="chiness">維基·布朗到家時發現那些人正在斷開她微波爐的開關。</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="tl_list-item"><span class="number">5.</span>--}}
                        {{--<div class="tl_item-text">--}}
                            {{--<p><b>Microwaves </b>heat water uniformly.</p>--}}
                            {{--<p class="chiness">微波爐能把水均勻加熱。</p>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

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
        {{--</div>--}}

        {{--<div class="tl_sidebar">--}}
            {{--<div class="tl_ad-wrap"></div>--}}
            {{--<div class="tl_hot-words">--}}
                {{--<h3 class="tit18">--}}
                    {{--{{ trans('translate.hotSearch') }}--}}
                {{--</h3>--}}
                {{--<ul class="hot-words_wrap">--}}
                    {{--<li>--}}
                        {{--<div class="bumber">01</div>--}}
                        {{--<a href="#">海龜</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="bumber">02</div>--}}
                        {{--<a href="#">懶人經濟</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="bumber">03</div>--}}
                        {{--<a href="#">global services</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="bumber">04</div>--}}
                        {{--<a href="#">志願者</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="bumber">05</div>--}}
                        {{--<a href="#">空氣污染</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
@endsection