<ul class="contact-list">
    @if( $page->email )
        <li>
            <a href="mailto:{{ $page->email }}">
                <span class="icon icon--email"><i class="far fa-envelope-open"></i></span>
                <span class="label">Email</span>
            </a>
        </li>
    @endif

    @foreach($page->socials as $key => $values)
        <li>
            <a href="{{ $values->link }}" target="{{ $values->target ? $values->target : '_blank' }}">
                <span class="icon icon--{{ $key }}"><i class="{{ $values->icon }}"></i></span>
                <span class="label">{{ $values->label }}</span>
            </a>
        </li>
    @endforeach

    {{-- Once we have rss feed --}}
    {{--<li>--}}
        {{--<a href="{{ site.feed.path | default: 'feed.xml' | relative_url }}" title="Atom Feed">--}}
            {{--<span class="icon icon--rss">{% include icon-rss.svg %}</span>--}}
            {{--<span class="label">{{ site.data.theme.t.subscribe | default: 'Subscribe' }}</span>--}}
        {{--</a>--}}
    {{--</li>--}}
</ul>
