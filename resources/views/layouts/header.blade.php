
    <header class="header_area p_absoulte m_p">
        <nav class="navbar navbar-expand-lg" id="header">
            <div class="container-fluid">
                <div class="logo_info">
                    <a class="navbar-brand logo_two" href="#"><img src="{{ asset('wavee/img/logo_arkarya.png') }}" srcset="{{ asset('wavee/img/wlogo@2x.png') }} 2x" alt=""><img src="{{ asset('wavee/img/arkarya_logo_dark.png') }}" srcset="{{ asset('wavee/img/dark_logo2x.png') }} 2x" alt=""></a>
                    <div class="h_contact_info">
                        <a href="https://wa.me/6285815341139">+62 858 1534 1139</a>
                        <a href="mailto:arkaryastudio@gmail.com">Arkaryastudio@gmail.com</a>
                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link" href="/" aria-haspopup="true" aria-expanded="false">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('portfolio.*')) ? 'active' : '' }}">
                            <a class="nav-link" href="/portfolio" aria-haspopup="true" aria-expanded="false">
                                Portofolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" aria-haspopup="true" aria-expanded="false">
                                Tentang
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" aria-haspopup="true" aria-expanded="false">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
