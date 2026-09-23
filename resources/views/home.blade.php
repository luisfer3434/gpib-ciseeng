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

            <x-worship-card
                title="Ibadah Hari Minggu"
                day="Minggu"
                time="09:00 WIB"
            />
            <x-worship-card
                title="Ibadah Hari Minggu Pelayanan Anak"
                day="Minggu"
                time="09:00 WIB"
            />
            <x-worship-card
                title="Ibadah Hari Minggu Pelayanan Teruna"
                day="Minggu"
                time="07:00 WIB"
            />

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

            <x-news-card 
                date="21 September 2026"
                title="Warta Jemaat"
                description="Informasi Warta Jemaat Tanggal 21 September 2026"
                link="#"
            />

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