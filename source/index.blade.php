---
pagination:
    collection: posts
title: Jigsaw Basically Basic
subtitle: A Jigsaw implementation of the Basically Basic Jekyll theme by mmistakes
image: assets/images/home-bg.jpg
---

@extends('_layouts.master')

@section('body')
    {{--<!-- Page Header -->--}}
    @include('_partials.page-intro')

    <!-- Main Content -->
    <main id="main" class="page-content" aria-label="Content">
        <div class="index inner">
            <div></div>
            <div>
                <header class="section-title">
                    <h2>Posts</h2>
                </header>
                <div class="entries-list">
                @foreach ($pagination->items as $post)
                    <article class="entry">
                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="{{ $post->getPath() }}" rel="bookmark">{{ $post->title }}</a>
                            </h3>
                            {{--@if($post->image)--}}
                                {{--<img class="entry-image u-photo" src="{{ $post->image }}" alt="">--}}
                            {{--@endif--}}
                        </header>
                        <footer class="entry-meta">
                            <ul>
                                <li><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="379 72 16 16"><g><g><path fill="none" d="M380.8,86.7h12.3v-8.8h-12.3V86.7z M389.5,78.8h1.7v1.4h-1.7V78.8z M389.5,81.3h1.7v1.4h-1.7V81.3z M389.5,83.8h1.7v1.4h-1.7V83.8z M386.1,78.8h1.7v1.4h-1.7V78.8z M386.1,81.3h1.7v1.4h-1.7V81.3z M386.1,83.8h1.7v1.4h-1.7V83.8z M382.8,78.8h1.7v1.4h-1.7V78.8z M382.8,81.3h1.7v1.4h-1.7V81.3z M382.8,83.8h1.7v1.4h-1.7V83.8z"/><polygon fill="none" points="384.7 75.1 383.4 75.1 383.4 74.3 380.8 74.3 380.8 76.6 393.2 76.6 393.2 74.3 390.6 74.3 390.6 75.1 389.3 75.1 389.3 74.3 384.7 74.3"/><rect x="382.8" y="78.8" width="1.7" height="1.4"/><rect x="386.1" y="78.8" width="1.7" height="1.4"/><rect x="389.5" y="78.8" width="1.7" height="1.4"/><rect x="382.8" y="81.3" width="1.7" height="1.4"/><rect x="386.1" y="81.3" width="1.7" height="1.4"/><rect x="389.5" y="81.3" width="1.7" height="1.4"/><rect x="382.8" y="83.8" width="1.7" height="1.4"/><rect x="386.1" y="83.8" width="1.7" height="1.4"/><rect x="389.5" y="83.8" width="1.7" height="1.4"/><path d="M383.4,72v1.1h-3.8V88h14.9V73.1h-3.8V72h-1.3v1.1h-4.7V72H383.4z M393.2,86.7h-12.3v-8.8h12.3L393.2,86.7L393.2,86.7z M389.3,74.3v0.8h1.3v-0.8h2.5v2.3h-12.3v-2.3h2.5v0.8h1.3v-0.8H389.3z"/></g></g></svg></span><time class="entry-time" datetime="{{ date('F jS, Y', $post->date) }}">{{ date('F jS, Y', $post->date) }}</time></li>
                            </ul>
                        </footer>
                        <div class="entry-excerpt">
                            {{ $post->excerpt ? $post->excerpt : strip_tags(substr($post, 0, 125)) . '...' }}
                            <p><a href="{{ $post->getPath() }}" class="more-link">Read More <span class="icon icon--arrow-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="50.4 -114.8 16 16"><path d="M63.1-107.7l-6.7-6.7c-.2-.3-.6-.4-.9-.4-.4 0-.7.1-.9.4l-.8.8c-.3.3-.4.6-.4.9 0 .4.1.7.4.9l5 5-5 5c-.3.3-.4.6-.4.9 0 .4.1.7.4.9l.8.8c.3.3.6.4.9.4.4 0 .7-.1.9-.4l6.7-6.7c.3-.3.4-.6.4-.9 0-.4-.2-.7-.4-.9z"/></svg></span></a></p>
                        </div>
                    </article>
                    @endforeach

                    <!-- Pagination links -->
                    <nav class="pager">
                        <ul>
                        @if ($previous = $pagination->previous)
                            <li>
                                <a href="{{ $page->baseUrl }}{{ $previous }}" class="previous">
                                    <span class="icon icon--arrow-right">@include('_icons.icon-arrow-left')</span> Newer
                                </a>
                            </li>
                        @endif
                        @if ($next = $pagination->next)
                            <li>
                                <a href="{{ $page->baseUrl }}{{ $next }}" class="next">Older
                                    <span class="icon icon--arrow-right">@include('_icons.icon-arrow-right')</span>
                                </a>
                            </li>
                        @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection
