<header class="intro">
    @if( $page->image )
        <div class="intro-image">
            <img src="{{ $page->image }}" alt="{{ $page->title }}">
        </div>
    @endif

    <div class="inner">
        <div class="intro-text">
            <h1 id="page-title" class="intro-title">{{ $page->title }}</h1>
            @if( $page->subtitle )
                <p class="intro-subtitle">{{ $page->subtitle }}</p>
            @endif

            {{--@if( $page->date )--}}
            {{--{% include author %}--}}
            {{--<p class="entry-meta">--}}
            {{--{% if author_name %}<span class="byline-item">{{ author_name | prepend: 'by ' }}</span>{% endif %}<span class="byline-item"><span class="icon">{% include icon-calendar.svg %}</span><time datetime="{{ page.date | date_to_xmlschema }}">{{ page.date | date: "%B %-d, %Y" }}</time></span>{% if page.read_time %} <span class="byline-item"><span class="icon">{% include icon-stopwatch.svg %}</span>{% capture read_time %}{% include read-time.html %}{% endcapture %}{{ read_time | strip }}</span>{% endif %}--}}
            {{--</p>--}}
            {{--{% endif %}--}}

            @if( $page->introduction )
                <div class="intro-more">
                    {{ $page->introduction }}
                </div>
            @endif
        </div>
    </div>
</header>
