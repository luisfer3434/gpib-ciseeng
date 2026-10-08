@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<section class="section">

    <div class="container">

        <div class="section-heading">

            <p>
                INFORMASI
            </p>

            <h1>
                Berita & Informasi
            </h1>

        </div>

        <div class="news-grid">

            @forelse ($news as $item)

                <article class="news-card-public">

                    @if ($item->image)

                        <img
                            src="{{ asset(
                                'storage/' . $item->image
                            ) }}"
                            alt="{{ $item->title }}"
                        >

                    @endif

                    <div class="news-card-body">

                        <span class="date">

                            {{ $item->published_at
                                ->format('d M Y')
                            }}

                        </span>

                        <h2>
                            {{ $item->title }}
                        </h2>

                        <p>
                            {{ $item->excerpt }}
                        </p>

                        <a
                            href="{{ route(
                                'news.show',
                                $item
                            ) }}"
                        >
                            Baca selengkapnya →
                        </a>

                    </div>

                </article>

            @empty

                <p>
                    Belum ada berita yang
                    dipublikasikan.
                </p>

            @endforelse

        </div>

        <div class="pagination">

            {{ $news->links() }}

        </div>

    </div>

</section>

@endsection