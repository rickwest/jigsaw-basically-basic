@extends('_layouts.master')

@section('body')
    <div class="initial-content">
        <header class="intro">
            <div class="inner">
                <div class="intro-text">
                    <h1 id="page-title" class="intro-title">About
                    </h1>
                </div>
            </div>
        </header>
        <main id="main" class="page-content" aria-label="Content">
            <div class="inner">
                <div class="entry-wrap">
                    <div class="entry-content">
                        <p>Basically Basic is a <a href="https://jekyllrb.com/docs/themes/">Jekyll theme</a> meant as a substitute for the default — <a href="https://github.com/jekyll/minima">Minima</a>. Conventions and features found there are fully supported by <strong>Basically Basic</strong>, with a few enhancements thrown in for good measure:</p>

                        <ul>
                            <li>Clean responsive design with <a href="#skin">six customizable skins</a></li>
                            <li>Curriculum Vitæ/Resume layout powered by <a href="http://registry.jsonresume.org/">JSON data</a></li>
                            <li>About page layout</li>
                            <li>Disqus Comments and Google Analytics support</li>
                            <li>SEO best practices via <a href="https://github.com/jekyll/jekyll-seo-tag/">Jekyll SEO Tag</a></li>
                        </ul>

                        <p>You can find the source code for this theme at: <a href="https://github.com/mmistakes">
                                <span class="icon icon--github"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C3.58 0 0 3.582 0 8c0 3.535 2.292 6.533 5.47 7.59.4.075.547-.172.547-.385 0-.19-.007-.693-.01-1.36-2.226.483-2.695-1.073-2.695-1.073-.364-.924-.89-1.17-.89-1.17-.725-.496.056-.486.056-.486.803.056 1.225.824 1.225.824.714 1.223 1.873.87 2.33.665.072-.517.278-.87.507-1.07-1.777-.2-3.644-.888-3.644-3.953 0-.873.31-1.587.823-2.147-.09-.202-.36-1.015.07-2.117 0 0 .67-.215 2.2.82.64-.178 1.32-.266 2-.27.68.004 1.36.092 2 .27 1.52-1.035 2.19-.82 2.19-.82.43 1.102.16 1.915.08 2.117.51.56.82 1.274.82 2.147 0 3.073-1.87 3.75-3.65 3.947.28.24.54.73.54 1.48 0 1.07-.01 1.93-.01 2.19 0 .21.14.46.55.38C13.71 14.53 16 11.53 16 8c0-4.418-3.582-8-8-8"></path></svg></span>
                                <span class="label">mmistakes</span>
                            </a>
                            /<a href="https://github.com/mmistakes/jekyll-theme-basically-basic">jekyll-theme-basically-basic</a></p>

                    </div>
                    <aside class="entry-sidebar">
                        <img class="author-picture" src="https://api.adorable.io/avatars/285/johndoe.png" alt="Dugan Nash">
                    </aside>
                </div>
            </div>
        </main>

    </div>
@endsection
