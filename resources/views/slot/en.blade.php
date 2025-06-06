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
                {{ trans('translate.tab.zh') }}
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
        @foreach($pageData['transVocabularies'] as $partOfSpeech => $vocabularies)
            <li class="tl_list-item">
                <span class="prop">
                    {{ $partOfSpeech }}
                </span>
                <p class="tl_item-text">
                    @foreach($vocabularies as $vocabulary)
                        <span>{{ $vocabulary['word'] }}</span>
                    @endforeach
                </p>
            </li>
        @endforeach
    </ul>
    @foreach($pageData['partOfSpeechChange'] as $partOfSpeechChange)
        <ul @if($loop->first)class="tl_base-bt-bar"@endif>
            @foreach($partOfSpeechChange as $change)
                <li class="bar-text">
                    {{ $change['type'] }}：
                    <span class="shape">
                        {{ $change['change'] }}
                    </span>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>