@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<x-hero />


<section id="ibadah" class="section">

    <div class="container">

        <x-section-heading 
            label="PERIBADAHAN"
            title="Jadwal Ibadah"
        />

        <div class="cards">

            @foreach ($worshipSchedules as $schedule )

                <x-worship-card
                    :title="$schedule->title"
                    :day="$schedule->day"
                    :time="$schedule->time">
                </x-worship-card>
            
            @endforeach

        </div>

    </div>

</section>


<section id="tentang" class="section section-light">

    <div class="container about">

        <div>

            <p class="section-label">
                TENTANG KAMI
            </p>

            <h2>
                Menjadi Gereja yang Melayani
            </h2>

        </div>

        <div>

            <p>
                GPIB Jemaat hadir sebagai komunitas
                persekutuan umat yang bertumbuh
                dalam iman dan pelayanan.
            </p>

            <p>
                Melalui berbagai kegiatan
                peribadahan dan pelayanan,
                jemaat dipanggil untuk menjadi
                berkat bagi masyarakat.
            </p>

        </div>

    </div>

</section>


<section id="berita" class="section">

    <div class="container">

        <x-section-heading 
            label="WARTA"
            title="Berita & Informasi"
        />

        <div class="cards">

            @forelse ($news as $item)

                <article class="card news-card">

                    @if ($item->image)

                        <img
                            src="{{ asset(
                                'storage/' . $item->image
                            )}}"
                            alt="{{ $item->title }}"
                            class="news-image"
                        >

                    @endif

                    <span class="date">

                        {{ $item->published_at
                            ? $item->published_at
                                ->format('d M Y')
                            : ''
                        }}
                
                    </span>

                    <h3>
                        {{ $item->title }}
                    </h3>

                    <p>
                        {{ $item->excerpt }}
                    </p>

                    <a href="#">
                        Baca selengkapnya ->
                    </a>

                </article>

            @empty

                <p>
                    Belum ada berita yang dipublikasikan.
                </p>

            @endforelse

        </div>

    </div>

</section>


<section id="kontak" class="contact">

    <div class="container">

        <h2>
            Hubungi Kami
        </h2>

        <p>
            Informasi mengenai pelayanan dan
            kegiatan jemaat dapat diperoleh
            melalui kontak gereja.
        </p>

        <a href="#" class="btn btn-light">
            Hubungi Kami
        </a>

    </div>

</section>

@endsection