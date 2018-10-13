@extends('_layouts.master')

@section('body')
    @include('_partials.page-intro')

    <main id="main" class="page-content" aria-label="Content">
        <div class="inner">
            <article class="entry-wrap">
                <div class="entry-content">
                    @yield('content')
                </div>
            </article>
        </div>
    </main>
@endsection



