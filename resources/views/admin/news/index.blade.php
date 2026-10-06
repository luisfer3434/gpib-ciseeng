@extends('layouts.app')

@section('title', 'Berita')

@section('content')

<section class="section">

    <div class="container">

        <div class="admin-header">

            <div>
                <p class="section-label">
                    ADMINISTRATOR
                </p>

                <h1>
                    Kelola Berita
                </h1>
            </div>

            <a
                href="{{ route('admin.news.create') }}"
                class="btn"
            >
                + Tambah Berita
            </a>

        </div>

        @if (session('success'))

            <div class="alert-success">
                {{ session('success') }}
            </div>

        @endif

        <div class="news-admin-list">

            @forelse ($news as $item)

                <article class="news-admin-item">

                    @if ($item->image)

                        <img
                            src="{{ asset(
                                'storage/' . $item->image
                            ) }}"
                            alt="{{ $item->title }}"
                        >

                    @endif

                    <div class="news-admin-content">

                        <h3>
                            {{ $item->title }}
                        </h3>

                        <p>
                            {{ $item->excerpt }}
                        </p>

                        <small>

                            @if ($item->is_published)
                                Published
                            @else
                                Draft
                            @endif

                            •
                            {{ $item->created_at->format(
                                'd M Y'
                            ) }}

                        </small>

                    </div>

                    <div class="news-admin-actions">

                        <a
                            href="{{ route(
                                'admin.news.edit',
                                $item
                            ) }}"
                        >
                            Edit
                        </a>

                        <form
                            action="{{ route(
                                'admin.news.destroy',
                                $item
                            ) }}"
                            method="POST"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="
                                    return confirm(
                                        'Hapus berita ini?'
                                    )
                                "
                            >
                                Hapus
                            </button>

                        </form>

                    </div>

                </article>

            @empty

                <p>
                    Belum ada berita.
                </p>

            @endforelse

        </div>

    </div>

</section>

@endsection