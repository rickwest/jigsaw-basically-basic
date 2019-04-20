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

    <li>
        <a href="/feed.xml" title="RSS Feed">
            <span class="icon icon--rss"><i class="fa fa-rss"></i></span>
            <span class="label">RSS Feed</span>
        </a>
    </li>
</ul>
