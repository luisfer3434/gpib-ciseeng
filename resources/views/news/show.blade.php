@extends('layouts.app')

@section('title', $news->title)

@section('content')

<section class="section">

    <div class="container">

        <article class="news-detail">

            <div class="news-detail-header">

                <p class="section-label">
                    BERITA JEMAAT
                </p>

                <h1>
                    {{ $news->title }}
                </h1>

                <p class="news-detail-date">

                    {{ $news->published_at
                        ->format('d F Y')
                    }}

                </p>

            </div>

            @if ($news->image)

                <div class="news-detail-image">

                    <img
                        src="{{ asset(
                            'storage/' . $news->image
                        ) }}"
                        alt="{{ $news->title }}"
                    >

                </div>

            @endif

            <div class="news-detail-content">

                {!! nl2br(
                    e($news->content)
                ) !!}

            </div>

            <div class="news-detail-back">

                <a href="{{ route('news.index') }}">
                    ← Kembali ke Berita
                </a>

            </div>

        </article>

    </div>

</section>

@endsection