<header class="intro">
    @if( $page->image )
        <div class="intro-image">
            <img src="{{ $page->baseUrl }}{{ $page->image }}" alt="{{ $page->title }}">
        </div>
    @endif

    <div class="inner">
        <div class="intro-text">
            <h1 id="page-title" class="intro-title">{{ $page->title }}</h1>
            @if( $page->subtitle )
                <p class="intro-subtitle">{{ $page->subtitle }}</p>
            @endif

            @if( $page->date)
                <p class="entry-meta">
                    @if($page->author->name)
                        <span class="byline-item">by {{ $page->author->name }}</span>
                    @endif
                    <span class="byline-item"><span class="icon"><i class="far fa-calendar-alt"></i></span></span><time datetime="{{ date('F jS, Y', $page->date) }}">{{ date('F jS, Y', $post->date) }}</time></span>
                    <span class="byline-item"><span class="icon"><i class="fas fa-stopwatch"></i></span>~{{ round(str_word_count($post) / 200) }} min read</span>
                </p>
            @endif

            @if( $page->introduction )
                <div class="intro-more">
                    {{ $page->introduction }}
                </div>
            @endif
        </div>
    </div>
</header>
