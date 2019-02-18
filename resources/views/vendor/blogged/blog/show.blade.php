@extends('blogged::layout')

@section('title')
    {{ $article->title }}
@endsection

@section('head')
    @include('blogged::partials.seo', [
        'title'       => $article->title,
        'description' => $article->excerpt,
        'url'         => $article->path(),
        'image'       => $article->image,
    ])
@endsection

@section('content')
    <div class="main-content">
        <!-- Navbar -->
        @include('blogged::partials.navbar')

        <!-- Header -->
        <div class="header bg-primary py-8"></div>

        <!-- Page content -->
        <section class="section">
            <div class="container" style="margin-top: -100px; margin-bottom: 100px">
                <div class="card shadow no-border pb-2">

                    <div class="bg-secondary px-5 py-2">
                        <a href="{{ $article->category->path() }}" class="btn btn-link btn-sm" style="margin-right: 0px">{{ $article->category->title }}</a>/ <span class="description">{{ $article->publish_date->toDateString() }}</span> (<span class="readingTime"></span>)
                    </div>

                    <div class="card-body px-5">

                        <div style="padding-bottom: 12px;">
                            <img class="card-img-top" style="width:auto;max-width:100%;" src="{{ $article->image }}" alt="Card image cap">
                        </div>
                        <h2 class="">@if($article->featured) <span style="display: inline">&#9733;</span>@endif {{ $article->title }}</h2>

                        <article class="pt-2 is-{{ config('blogged.ui.code') }}">
                            {!! $article->parsedBody !!}
                        </article>
                    </div>

                    <div class="card-footer px-5">
                            @include('blogged::partials.author', [
                                'avatar' => 'https://tangzhengyuan.oss-cn-shanghai.aliyuncs.com/public/blogged/images/max-baskakov-1318019-unsplash.jpg',
                                'name'   => $article->author->name
                            ])
                    </div>
                </div>
            </div>
        </section>

        @include('blogged::partials.share', [
            'title'       => $article->title, 
            'url'         => $article->path(), 
            'description' => $article->excerpt 
        ])
        @include('blogged::plugins.forum', ['url' => $article->path(), 'slug' => $article->slug])
    </div>

    @include('blogged::partials.footer')
@endsection