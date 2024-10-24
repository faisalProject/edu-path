@if(Auth::check())
    @if(Auth::user()->role === 'user')
        <nav class="landing-nav">
            <div class="container">
                <a href="/dashboard"><img src="../../../images/edu-path.jpg" alt=""></a>
                <div class="middle">
                    <a href="#">Kursus</a>
                    <a href="#">Tentang</a>
                </div>
                <div class="right">
                    <a href="#">Dashboard</a>
                    <div class="box">
                        <div class="top-dropdown-profile">
                            <img src="images/person-6.jpg" alt="">
                            <div class="chevron-container">
                                <i class="bi bi-chevron-up profile-chevron"></i>
                            </div>
                        </div>
                        <div class="bottom-dropdown-profile">
                            <a href="#" class="menu">
                                <i class="bi bi-person-fill"></i>
                                Profil saya
                            </a>
                            <a href="#" class="menu">
                                <i class="bi bi-bookmarks-fill"></i>
                                Kursus saya
                            </a>
                            <a href="#" class="menu">
                                <i class="bi bi-box-arrow-right"></i>
                                Keluar
                            </a>
                        </div>
                    </div>
                    <div class="hamburger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    @endif
@else
    <nav class="landing-nav">
        <div class="container">
            <a href="/"><img src="../../../images/edu-path.jpg" alt=""></a>
            <div class="right">
                <div class="buttons">
                    <a href="/login" class="btn btn-primary">Masuk</a>
                    <a href="/register" class="btn btn-primary">Daftar</a>
                </div>
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
@endif