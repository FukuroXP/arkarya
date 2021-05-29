@extends('layouts.landing')

@section('content')
    <div id="wavescroll">

        <!--    section_one    -->
        <div class="section wave_two_section_one">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/tr_one.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.30" src="{{ asset('wavee/img/home_three/tr_three.png') }}" alt=""></div>
            <div class="t_three p_absoulte"><img class="layer layer2" data-depth="0.30" src="{{ asset('wavee/img/home_three/tr_two.png') }}" alt=""></div>
            <div class="intro">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="w_content">
                                <img class="circle_line" src="{{ asset('wavee/img/home_one/circle_line.png') }}" alt="">
                                <h2 class="wow">Arkarya Studio</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w_img_table text-center">
                                <img class="first p_absoulte" src="{{ asset('wavee/img/home_three/banner/Asset1.png') }}" alt="">
                                <img class="two p_absoulte" src="{{ asset('wavee/img/home_three/banner/Asset2.png') }}" alt="">
                                <img class="flower p_absoulte" src="{{ asset('wavee/img/home_three/banner/Asset3.png') }}" alt="">
                                <a href="/login">
                                    <img class="laptop p_absoulte is-animated" src="{{ asset('wavee/img/home_three/banner/Asset4.png') }}" alt="">
                                </a>
                                <img class="table_img wow fadeInLeft" src="{{ asset('wavee/img/home_three/banner/Asset5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_one    -->

        <!--    section_two    -->
        <div class="section wave_two_section_two">
            <div id="particles-js" class="p_absoulte"></div>
            <img class="t_two p_absoulte" src="{{ asset('wavee/img/home_one/triangle_shap_two.png') }}" alt="">
            <img class="t_shap p_absoulte" src="{{ asset('wavee/img/home_three/shap.png') }}" alt="">
            <img class="b_shap p_absoulte" src="{{ asset('wavee/img/home_three/shap_two.png') }}" alt="">
            <img class="dot_one p_absoulte" src="{{ asset('wavee/img/home_three/dot.png') }}" alt="">
            <img class="dot_two p_absoulte" src="{{ asset('wavee/img/home_three/dot-1.png') }}" alt="">
            <div class="text">Us!</div>
            <div class="s_round r_one p_absoulte"></div>
            <div class="s_round r_two p_absoulte"></div>
            <div class="s_round r_three p_absoulte"></div>
            <div class="s_round r_four p_absoulte"></div>
            <div class="s_round r_five p_absoulte"></div>
            <div class="s_round r_six p_absoulte"></div>
            <div class="s_round r_seven p_absoulte"></div>
            <div class="s_round r_eight p_absoulte"></div>
            <div class="s_round r_nine p_absoulte"></div>
            <div class="s_round r_ten p_absoulte"></div>
            <div class="s_round r_eleven p_absoulte"></div>
            <div class="intro">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="w_portfolio_img">
                                <div class="round p_absoulte"></div>
                                <img src="{{ asset('wavee/img/home_three/profile_arkarya.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w_content_two">
                                <h2>Problem Solving with Digital Solution</h2>
                                <p>Kami membantu anda dengan konsultasi dan solusi digital. kami telah membantu berbagai macam permasalahan dengan solusi digital baik berupa Website, Game, Desain Grafis dan Media Pembelajaran</p>
                                <a href="#" class="p_btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_two    -->

        <!--    section_three    -->
        <div class="section wave_two_section_three third">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/pijom.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.50" src="{{ asset('wavee/img/home_three/plan.png') }}" alt=""></div>
            <div class="t_four p_absoulte"><img class="layer layer2" data-depth="0.30" src="{{ asset('wavee/img/home_three/triangle.png') }}" alt=""></div>
            <div class="t_five p_absoulte"><img class="layer layer2" data-depth="0.10" src="{{ asset('wavee/img/home_three/square.png') }}" alt=""></div>
            <div class="intro">
                <div class="container custom_container">
                    <h2 class="s_section_title">Layanan Kami</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="scroll_service_item">
                                <div class="number">1.</div>
                                <img class="icon p_absoulte" src="{{ asset('wavee/img/home_three/s_icon.png') }}" alt="">
                                <a href="#">
                                    <h3>Web Development</h3>
                                </a>
                                <p>Kami menyediakan layanan pembuatan Website dengan berbagai fitur yang menyesuaikan keinginan klien.</p>
                                <a href="#" class="p_btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="scroll_service_item">
                                <div class="number">2.</div>
                                <img class="icon p_absoulte" src="{{ asset('wavee/img/home_three/s_icon_2.png') }}" alt="">
                                <a href="#">
                                    <h3>Design Graphic</h3>
                                </a>
                                <p>Kami menyediakan layanan pembuatan Desain dan layout serta asset yang menyesuaikan keinginan klien.</p>
                                <a href="#" class="p_btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="scroll_service_item">
                                <div class="number">3.</div>
                                <img class="icon p_absoulte" src="{{ asset('wavee/img/home_three/s_icon_2.png') }}" alt="">
                                <a href="#">
                                    <h3>Game Development</h3>
                                </a>
                                <p>Kami menyediakan layanan pembuatan Game maupun Media Pembelajaran dengan berbagai fitur yang menyesuaikan keinginan klien.</p>
                                <a href="#" class="p_btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_three    -->

        <!--    section_four    -->
        <div class="section wave_one_section_four wave_two_section_four">
            <div class="bg-title">
                <div class="layer layer2" data-depth="-0.20">Project Kami</div>
            </div>
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/h_pijom1.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.50" src="{{ asset('wavee/img/home_three/plan.png') }}" alt=""></div>
            <div class="t_four p_absoulte"><img class="layer layer2" data-depth="0.30" src="{{ asset('wavee/img/home_three/h_pijom2.png') }}" alt=""></div>
            <div class="t_five p_absoulte"><img class="layer layer2" data-depth="0.10" src="{{ asset('wavee/img/home_one/triangle_shap_five.png') }}" alt=""></div>
            <div class="intro">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="w_content_two">
                                <h2>Project Kami</h2>
                                <p>Project yang kami kerjakan melalui riset operasional yang optimal sehingga memberikan kenyamanan dan keamanan bagi klien. </p>
                                <a href="/portfolio" class="p_btn">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w_mockup_img">
                                <div class="img_screen one"><img src="{{ asset('wavee/img/home_one/screen_three.jpg') }}" alt=""></div>
                                <div class="img_screen two"><img src="{{ asset('wavee/img/home_one/screen_two.jpg') }}" alt=""></div>
                                <div class="img_screen three"><img src="{{ asset('wavee/img/home_one/screen_one.jpg') }}" alt=""></div>
                                <img class="img_four" src="{{ asset('wavee/img/home_one/code.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_four    -->

        <!--    section_five    -->
        <!-- <div class="section wave_two_section_five">
            <div class="bg-title">
                <div class="layer layer2" data-depth="-0.20">This Is Us!</div>
            </div>
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="img/home_three/wave.png" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.20" src="img/home_three/blue_plan.png" alt=""></div>
            <div class="intro">
                <div class="container custom_container">
                    <h2 class="s_section_title text-center">This Is Us!</h2>
                    <div class="sc_video_inner">
                        <img class="p_absoulte video_bg" src="img/home_three/video_bg.png" alt="">
                        <div class="dot_l p_absoulte"><img class="layer layer2" data-depth="0.20" src="img/home_three/v_dot.png" alt=""></div>
                        <img class="dot_r p_absoulte" src="img/home_three/v_dot.png" alt="">
                        <a href="https://www.youtube.com/watch?v=sU3FkzUKHXU" class="v_icon popup_youtube">
                            <span class="dot_animation"></span>
                            <img src="img/home_three/video_icon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
           section_five    -->

        <!--    section_six    -->
        <div class="section wave_two_section_six">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/clients_plan_bottom.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.20" src="{{ asset('wavee/img/home_three/clients_plan.png') }}" alt=""></div>
            <div class="intro">
                <div class="container custom_container">
                    <h2 class="s_section_title">Klien Kami</h2>
                    <div class="sc_clients_logo_info">
                        @foreach($clients as $client)
                        <a href="#" class="c_logo_item"><img src="{{ asset('client_logo/'. $client->logo) }}" alt=""></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--    section_six    -->

        <!--    section_seven    -->
        <div class="section wave_two_section_seven">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/round.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.20" src="{{ asset('wavee/img/home_three/clients_plan.png') }}" alt=""></div>
            <div class="t_three p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/blue_plan.png') }}" alt=""></div>
            <img class="dot_one p_absoulte" src="{{ asset('wavee/img/home_three/dot.png') }}" alt="">
            <img class="dot_two p_absoulte" src="{{ asset('wavee/img/home_three/dot-1.png') }}" alt="">
            <div class="intro">
                <div class="container custom_container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="w_content_two w_contact_text">
                                <h2>Let's talk?</h2>
                                <p>Kami sangat tertarik dengan hal-hal baru. Beri tahu kami tentang masalahmu dan kami selesaikan masalahmu.</p>
                                <ul class="list-unstyled w_contact_info">
                                    <li><i class="icon_phone"></i><a href="#">+62 858 1534 1139 (Khuluq)</a> </li>
                                    <li><i class="icon_pin_alt"></i><a href="#">Surabaya, Jawa Timur <br>Indonesia</a></li>
                                    <li><i class="icon_mail_alt"></i><a href="#">Arkaryastudi@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <form action="#" class="contact_form_box" method="post" id="contactForm">
                                <div class="form-group text_box">
                                    <input type="text" name="name" placeholder="Nama">
                                </div>
                                <div class="form-group text_box">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group text_box">
                                    <textarea name="message" cols="30" rows="10" placeholder="Ketik Pesan..."></textarea>
                                </div>
                                <button type="submit" class="p_btn">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_seven    -->

        <!--    section_eight    -->
        <div class="section wave_two_section_eight">
            <div class="t_first p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/pijom_2.png') }}" alt=""></div>
            <div class="t_two p_absoulte"><img class="layer layer2" data-depth="0.20" src="{{ asset('wavee/img/home_three/clients_plan.png') }}" alt=""></div>
            <div class="t_three p_absoulte"><img class="layer layer2" data-depth="-0.20" src="{{ asset('wavee/img/home_three/blue_plan.png') }}" alt=""></div>
            <img class="dot_one p_absoulte" src="{{ asset('wavee/img/home_three/dot.png') }}" alt="">
            <img class="dot_two p_absoulte" src="{{ asset('wavee/img/home_three/dot_eight.png') }}" alt="">
            <div class="intro">
                <div class="container custom_container">
                    <div class="footer_text">
                        <h3>Newsletter</h3>
                        <form action="#" class="subscribe_info">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Your email">
                            <button class="btn" type="submit"><i class="arrow_right"></i></button>
                        </form>
                        <p>Copyright © 2020 <a href="#">Arkarya Studio</a> | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!--    section_eight    -->
    </div>
@endsection
