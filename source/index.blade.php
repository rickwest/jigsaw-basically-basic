---
pagination:
    collection: posts
title: Jigsaw Basically Basic
subtitle: A Jigsaw implementation of the Basically Basic Jekyll theme by mmistakes
image: /assets/images/home-bg.jpg
---

@extends('_layouts.master')

@section('body')
    <!-- Page Header -->
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
                        </header>
                        <footer class="entry-meta">
                            <ul>
                                <li><span class="icon"><i class="far fa-calendar-alt"></i></span><time class="entry-time" datetime="{{ date('F jS, Y', $post->date) }}">{{ date('F jS, Y', $post->date) }}</time></li>
                                <li><span class="icon"><i class="fas fa-stopwatch"></i></span>~ {{ $post->readingTime($post) }}</li>
                            </ul>
                        </footer>
                        <div class="entry-excerpt">
                            {{ $post->excerpt ? $post->excerpt : strip_tags(substr($post, 0, 125)) . '...' }}
                            <p><a href="{{ $post->getPath() }}" class="more-link">Read More <span class="icon icon--arrow-right fa-2x"><i class="fas fa-angle-right"></i></span></a></p>
                        </div>
                    </article>
                @endforeach

                    <!-- Pagination links -->
                    <nav class="pager">
                        <ul>
                        @if ($previous = $pagination->previous)
                            <li>
                                <a href="{{ $page->baseUrl }}{{ $previous }}" class="previous">
                                    <span class="icon icon--arrow-right fa-2x"><i class="fas fa-angle-left"></i></span> Newer
                                </a>
                            </li>
                        @endif
                        @if ($next = $pagination->next)
                            <li>
                                <a href="{{ $page->baseUrl }}{{ $next }}" class="next">Older
                                    <span class="icon icon--arrow-right fa-2x"><i class="fas fa-angle-right"></i></span>
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
