<div class="tl_info-box">
    <h1 class="info_keyword">
        {{ $pageData['vocabulary']['word'] or '' }}
    </h1>
    {{--<div class="info_speak-btn">--}}
    {{--<amp-img src="/images/horn.svg" alt="" width="20" height="20"></amp-img>--}}
    {{--</div>--}}
</div>
<div class="tl_info-article">
    <ul class="tl_tabnav">
        <li class="active">
            <h3 class="tl_font18">
                {{ trans('translate.tab.en') }}
            </h3>
        </li>
        {{--<li>--}}
        {{--<h3 class="tl_font18">日文</h3>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<h3 class="tl_font18">韓文</h3>--}}
        {{--</li>--}}
    </ul>
    <ul class="tl_base-list">
        <li class="tl_list-item">
            <p class="tl_item-text">
                @foreach($pageData['transVocabularies'] as $vocabulary)
                    <span>{{ $vocabulary['word'] }}</span>
                @endforeach
            </p>
        </li>
    </ul>
</div>