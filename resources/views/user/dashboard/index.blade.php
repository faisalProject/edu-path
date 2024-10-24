@extends('master')

@section('content')
<div class="jumbotron">
    <div class="container">
        <img src="../../images/person-1.png" alt="">
        <div class="desc">
            <h4>Kembangkan Kariermu Menjadi Developer yang Profesional</h4>
            <p>Mulai belajar terarah dengan Edu Path.</p>
            <a href="#courses" class="btn btn-primary scroll">Mulai Sekarang</a>
        </div>
        <img src="../../images/person-1.png" alt="">
    </div>
</div>

<div class="sponsor">
    <div class="container">
        <h5>Telah dipercaya oleh</h5>
        <marquee class="images" direction="right" scrollamount="10">
            <img src="../../images/microsoft.png" alt="">
            <img src="../../images/ericsson.png" alt="">
            <img src="../../images/samsung.png" alt="">
        </marquee>
    </div>
</div>

<div class="course-list" id="courses">
    <div class="container">
        <div class="buttons">
            <button class="btn-prev"><i class="bi bi-arrow-left"></i></button>
            <button class="btn-next"><i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="courses">
            <div class="course-card">
                <img src="../../images/android.jpg" alt="">
                <div class="desc-container">
                    <p class="title-1">Android Developer</p>
                    <p class="participant-1">270k siswa belajar di learning path ini</p>
                    <p class="desc-1">Kurikulum disusun oleh Dicoding bersama AWS beserta pelaku industri Back-End Development. Siswa dipersiapkan untuk menjadi Android Developer sesuai kebutuhan industri.</p>
                </div>
                <a href="#courses" class="scroll"></a>
            </div>
            <div class="course-card">
                <img src="../../images/back-end.jpg" alt="">
                <div class="desc-container">
                    <p class="title-1">Back-End Developer</p>
                    <p class="participant-1">300k siswa belajar di learning path ini</p>
                    <p class="desc-1">Kurikulum disusun oleh Dicoding bersama AWS beserta pelaku industri Back-End Development. Siswa dipersiapkan untuk menjadi Back-End Developer sesuai kebutuhan industri.</p>
                </div>
                <a href="#courses" class="scroll"></a>
            </div>
            <div class="course-card">
                <img src="../../images/front-end.jpg" alt="">
                <div class="desc-container">
                    <p class="title-1">Front-End Developer</p>
                    <p class="participant-1">275k siswa belajar di learning path ini</p>
                    <p class="desc-1">Kurikulum disusun oleh Dicoding bersama AWS beserta pelaku industri Back-End Development. Siswa dipersiapkan untuk menjadi Front-End Developer sesuai kebutuhan industri.</p>
                </div>
                <a href="#courses" class="scroll"></a>
            </div>
            <div class="course-card">
                <img src="../../images/machine-learning.jpg" alt="">
                <div class="desc-container">
                    <p class="title-1">Machine Learning</p>
                    <p class="participant-1">250k siswa belajar di learning path ini</p>
                    <p class="desc-1">Kurikulum disusun oleh Dicoding bersama AWS beserta pelaku industri Back-End Development. Siswa dipersiapkan untuk menjadi Machine Learning sesuai kebutuhan industri.</p>
                </div>
                <a href="#courses" class="scroll"></a>
            </div>
        </div>
    </div>
</div>

<div class="course-desc">
    <div class="container">
        <div class="desc">
            <h4 class="title-2"></h4>
            <div class="participant-container"><i class="bi bi-people-fill"></i><p class="participant-2"></p></div>
            <span></span>
            <p class="desc-2"></p>
            <button class="btn btn-more">Selengkapnya</button>
        </div>
        <img src="../../images/person-2.png" alt="">
    </div>
</div>

<div class="testimonial">
    <div class="container">
        <h4>Testimoni Siswa</h4>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    
                    <div class="carousel-caption d-none d-md-block">
                        <img src="../../images/person-3.jpg" alt="">
                        <div class="desc">
                            <p>“Disajikan dengan struktur pembelajaran yang rapi, ilmu-ilmu teknis seperti Kotlin di Dicoding sangat mudah saya pahami dan terapkan sampai sekarang. Dicoding memastikan semua lulusannya punya dasar yang kuat di bidang Android dan bidang lainnya.”</p>
                            <p>Karlina Surya Witanto</p>
                            <p>IT Security Specialist - Bank BCA</p>
                            <p>Lulusan Front-End Web & Back-End Path</p>
                            <span class="line"></span>
                            <div class="in-full">
                                <a href="#">Baca kisahnya</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                        <img src="../../images/person-3.jpg" alt="">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    
                    <div class="carousel-caption d-none d-md-block">
                        <img src="../../images/person-4.jpg" alt="">
                        <div class="desc">
                            <p>“Disajikan dengan struktur pembelajaran yang rapi, ilmu-ilmu teknis seperti Kotlin di Dicoding sangat mudah saya pahami dan terapkan sampai sekarang. Dicoding memastikan semua lulusannya punya dasar yang kuat di bidang Android dan bidang lainnya.”</p>
                            <p>Karlina Surya Witanto</p>
                            <p>IT Security Specialist - Bank BCA</p>
                            <p>Lulusan Front-End Web & Back-End Path</p>
                            <span class="line"></span>
                            <div class="in-full">
                                <a href="#">Baca kisahnya</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                        <img src="../../images/person-4.jpg" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <div class="carousel-caption d-none d-md-block">
                        <img src="../../images/person-5.jpg" alt="">
                        <div class="desc">
                            <p>“Disajikan dengan struktur pembelajaran yang rapi, ilmu-ilmu teknis seperti Kotlin di Dicoding sangat mudah saya pahami dan terapkan sampai sekarang. Dicoding memastikan semua lulusannya punya dasar yang kuat di bidang Android dan bidang lainnya.”</p>
                            <p>Karlina Surya Witanto</p>
                            <p>IT Security Specialist - Bank BCA</p>
                            <p>Lulusan Front-End Web & Back-End Path</p>
                            <span class="line"></span>
                            <div class="in-full">
                                <a href="#">Baca kisahnya</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                        <img src="../../images/person-5.jpg" alt="">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span style="width: 25px; height: 25px" class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span style="width: 25px; height: 25px" class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@endsection