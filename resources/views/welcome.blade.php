@extends('layouts.app')

@section('content')
<section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                            BELAJAR DARI AHLINYA
                            </p>
                            <h1 class="header">
                            Mulailah <span class="text-purple">Perjalanan <br> Developermu</span> Disini
                            </h1>
                            <p class="support">
                            Bootcamp kami membantu pengembang junior yang <br>
benar-benar bersemangat dalam pemrograman.
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                Ayo Mulai !
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                    MANFAAT SPESIAL DARI KAMI
                    </p>
                    <h2 class="primary-header">
                    Belajar Lebih Cepat & Lebih Baik
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                        <h3 class="title">
                        Perbedaan
                        </h3>
                        <p class="support">
                        Belajar dari berbagai sumber <br> di dunia dan dapatkan <br> ketrampilan baru
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                        <h3 class="title">
                        Pedoman Dasar
                        </h3>
                        <p class="support">
                        Cody akan membantu kamu untuk <br> memilih apa yang cocok dengan <br> diri kamu saat ini
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                        <h3 class="title">
                        Konsultasi Setiap Saat
                        </h3>
                        <p class="support">
                        Kami akan memastikan anda <br> akan mendapatkan apa yang <br> seharusnya anda dapatkan
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                        <h3 class="title">
                        Pekerjaan Impian
                        </h3>
                        <p class="support">
                        Dapatkan pekerjaan impian anda <br> di perusahaan impian anda <br> secara nyata bersama kami
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step1.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                    KARIR YANG LEBIH BAIK
                    </p>
                    <h2 class="primary-header">
                    Persiapkan Project Anda
                    </h2>
                    <p class="support">
                    Kami benar-benar peduli dengan karir masa depan siswa kami <br>
jadi akan lebih baik jika Anda mengambil wawancara singkat
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                        Pelajari Lebih Lanjut
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                    BELAJAR LEBIH GIAT LAGI
                    </p>
                    <h2 class="primary-header">
                    Selesaikan Project Akhir
                    </h2>
                    <p class="support">
                    Anda masing-masing akan bergabung dengan grup <br> pribadi dan juga
bekerja sama dengan anggota <br> tim dalam proyek
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                        Presentasikan Project
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step2.png')}}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step3.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                    PUNCAK PROJECT
                    </p>
                    <h2 class="primary-header">
                        Meeting Akhir
                    </h2>
                    <p class="support">
                    Pelajari cara berbicara di depan umum untuk mendemonstrasikan <br>
project akhir dan menerima umpan balik penting
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                        Lihat Disini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                    INVESTASI YANG BAIK
                    </p>
                    <h2 class="primary-header text-white">
                    Mulai Perjalanan Anda
                    </h2>
                    <p class="support">
                    Kami memiliki beberapa rencana yang mungkin <br> 
cocok untuk Anda.
Silakan unduh silabus lengkap <br>
kami di bawah ini.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                        Lihat Silabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    GILA BELAJAR
                                </p>
                                <h1 class="price text-center">
                                    Rp. 280.000,-
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Pro Techstack Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        iMac Pro 2021 & Display
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Premium Design Kit
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Website Builder
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'gila-belajar')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Beli
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    Rp. 140.000,-
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Final Project Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Future Job Opportinity
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'baru-mulai')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                    Mulai Sekarang !
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                    ALUMNI CODYCAMP
                    </p>
                    <h2 class="primary-header">
                    Kami Sangat Mencintai Codycamp
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                Mereka mengajari saya caranya
melatih logika saya maka saya
jatuh cinta dengan kode
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Yessi
                                        </h4>
                                        <p class="role">
                                            Developer at Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                Kode sangat penting jika
kamu ingin membangun perusahaan
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Dimas
                                        </h4>
                                        <p class="role">
                                            CEO at Cody Corp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                Latar belakang saya adalah desain dan
seni tapi saya sangat suka untuk membuat desain dengan kode
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Mareta
                                        </h4>
                                        <p class="role">
                                            QA at Facebook
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                            All Rights Reserved. Copyright codycamp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection