<?php 
    require 'inputuser.php';
    require 'blog.php';
?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CALEG - H. CAESAR RISMANTO </title>
        <meta name="description" content="Responsive Tailwind CSS Template">
        <meta name="keywords" content="caleggrindra, grindra, calegpanongan, , citraraya">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <!-- favicon -->
        <link href="assets/images/faviconhcr.ico" rel="shortcut icon">

        <!-- Css -->
        <!-- Main Css -->
        <link href="ass ets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
<!--
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
        
        --><link rel="stylesheet" href="assets/css/hcr.css">
<style>

</style>
    </head>
    
    <body class="font-poppins text-base text-black dark:text-white dark:bg-slate-900">

        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="assets/images/logo-icon-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Dennis</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Navbar Start -->
        <nav class="navbar" id="navbar">
            <div class="container flex flex-wrap items-center justify-between">
                <a class="navbar-brand md:me-8" href="index.html">
                    <img src="assets/images/hcr+burung.png" class="inline-block dark:hidden" alt="" width="250" height="200">
                    <img src="assets/images/h-black.png" class="hidden dark:inline-block" alt="" width="250" height="200">
                </a>

                <div class="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
                    <!-- Navbar Button -->
                    <ul class="list-none menu-social mb-0">
                        <li class="inline">
                            <!--<a href="#">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-dribbble align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-dribbble align-middle"></i></span></span>
                            </a>
                            <a href="#">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-behance align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-behance align-middle"></i></span></span>
                            </a>-->
                            <a href="https://www.instagram.com/sahabat_h_caesar/">
                                <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-instagram align-middle"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-instagram align-middle"></i></span></span>
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar Collapse Manu Button -->
                    <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                        <span class="sr-only">Navigation Menu</span>
                        <i class="mdi mdi-menu text-[24px]"></i>
                    </button>
                </div>

                <!-- Navbar Manu -->
                <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse">
                    <ul class="navbar-nav" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#proker">Program Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Pengalaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Galeri Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Dukung Saya</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="relative pt-28 personal-wrapper overflow-hidden bg-amber-500/5" id="home">
            <div class="absolute inset-0" id="overlay"></div>
            <div class="container">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div>
                        <h4 class="font-bold lg:text-[30px] text-3xl lg:leading-normal leading-normal mb-4">ASSALAMUALAIKUM WR.WB <br><span class="typewrite text-amber-500" data-period="2000" data-type='[ "H. CAESAR RISMANTO", "CALON LEGISLATIF 2024" ]'> <span class="wrap"></span> </span></h4>
                        <p class="text-slate-400 max-w-xl">CERDAS | SOLUTIF | MERAKYAT</p>
                    
                        <div class="mt-6">
                            <a href="#dukung" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white rounded-md">Berikan Dukungan</a>
                            <!-- <a href="#" class="btn bg-amber-500/10 hover:bg-amber-500 border-amber-500/10 hover:border-amber-500 text-amber-500 hover:text-white rounded-md ms-1">Download CV</a> -->
                        </div>
                    </div>

                    <div class="relative">
                        <img src="assets/images/hero/3.png" alt="">

                        <div class="absolute lg:bottom-20 md:bottom-10 bottom-2 ltr:md:-left-5 ltr:left-2 rtl:md:-right-5 rtl:right-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3 w-44 text-center">
                         <!--   <span class="text-3xl font-medium mb-0"><span class="counter-value font-bold" data-target="">1</span></span> -->
                            <h6 class="font-semibold">Dapil V Panongan</h6>
                        </div>

                        <div class="absolute lg:top-80 md:top-56 top-48 ltr:md:-right-0 ltr:right-2 rtl:md:-left-0 rtl:left-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3 w-44 text-center">
                            <h6 class="font-semibold">Wakil Anda Di DPRD </h6>
                            <h6 class="text-sm text-slate-400 mt-1">Kab.Tangerang</h6>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="absolute block w-full h-auto bottom-[25px] z-1 left-0">
                <a href="#about"><i class="mdi mdi-arrow-down absolute top-0 left-0 right-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 h-12 w-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="about">
            <div class="container">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-5 lg:px-8">
                        <div class="relative">
                            <div class="absolute inset-0 border dark:border-gray-800 rounded-full -mt-[10px] -ms-3 h-[100%] w-[100%] -z-1"></div>
                            <img src="assets/images/kuat4.png" class="rounded-full shadow-md shadow-gray-200 dark:shadow-gray-800" alt="">

                            <div class="absolute lg:bottom-20 md:bottom-10 bottom-6 ltr:lg:-right-16 rtl:lg:-left-16 ltr:md:-right-8 rtl:md:-left-8 ltr:right-0 rtl:left-0 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3 w-44 text-center">
                                <h6 class="font-semibold">Caleg DPRD Kab.Tangerang</h6>
                              <!--  <span class="text-2xl font-medium text-amber-500 mb-0"><span class="counter-value font-bold" data-target="">1</span>+</span>
                                <span class="text-sm text-slate-400">Years <br> Experience</span> -->
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-7">
                        <div class="lg:ms-5">
                            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020 ">PROFIL H.CAESAR RISMANTO</h3>

                            <p class="font-semibold">H. Caesar Rismanto calon anggota legislatif yang memiliki komitmen kuat untuk memajukan daerah dan masyarakatnya melalui kepemimpinan yang visioner, berintegritas, dan berdasarkan prinsip-prinsip demokrasi. Dengan latar belakang pendidikan dan pengalaman yang luas, Caesar Rismanto siap menjadikan aspirasi rakyat sebagai panduan dalam upayanya membangun masa depan yang lebih baik.</p>
                            <p class="font-semibold"> mengedepankan prinsip-prinsip kepemimpinan yang inklusif, mendengarkan, dan berempati.</p>
                        
                          <!--  <div class="mt-6">
                                <a href="#project" class="btn bg-amber-500/10 hover:bg-amber-500 border-amber-500/10 hover:border-amber-500 text-amber-500 hover:text-white rounded-md me-2 mt-2">See Work</a>
                            </div> -->
                        </div>
                    </div><!--end grid-->
                </div><!--end grid-->
            </div><!--end container-->

            <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="service">
                <div class="container">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">VISI & MISI</h3>

                <p><strong>VISI</strong> membangun masyarakat yang adil, sejahtera, dan bermartabat. Dengan komitmen ini, dia memiliki <strong>MISI</strong> untuk:</p>

                <p><strong>Mendorong Pembangunan Ekonomi:</strong> Mengupayakan kebijakan ekonomi yang mendukung pertumbuhan usaha lokal, menciptakan lapangan kerja, dan mengurangi kesenjangan ekonomi.<br />
                <strong>Peningkatan Kualitas Pendidikan:</strong> Memperjuangkan pendidikan berkualitas yang merata di seluruh wilayah, dengan fokus pada peningkatan infrastruktur sekolah dan pelatihan bagi guru.<br />
                <strong>Peningkatan Akses Kesehatan: </strong>Memastikan akses yang lebih baik terhadap layanan kesehatan berkualitas, terutama bagi masyarakat kurang mampu.<br />
                <strong>Pemberdayaan Perempuan dan Pemuda:</strong> Mendorong program-program yang memberikan kesempatan yang setara bagi perempuan dan pemuda untuk berkontribusi dalam pembangunan.<br />
                <strong>Transparansi dan Akuntabilitas:</strong> Memastikan pemerintahan yang transparan, akuntabel, dan responsif terhadap aspirasi rakyat.<br />
                <strong>Komunitas dan Keterlibatan Sosial: </strong>aktif terlibat dalam berbagai komunitas sosial dan organisasi kemasyarakatan. Dia sering menginisiasi diskusi publik, lokakarya, dan kegiatan sosial yang bertujuan untuk mengatasi masalah-masalah masyarakat dan mencari&nbsp;solusi&nbsp;bersama.</p>
</section><!--end section-->

<!--
                    <div class="flex group shadow shadow-gray-200 dark:shadow-gray-800 dark:hover:shadow-gray-700 items-center p-3 rounded-lg bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-amber-500/10 group-hover:bg-amber-500 text-amber-500 group-hover:text-white text-center rounded-xl me-5 transition-all duration-500">
                            <i data-feather="target" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-[17px] font-medium">Sports</h4>
                        </div>
                    </div>

                    <div class="flex group shadow shadow-gray-200 dark:shadow-gray-800 dark:hover:shadow-gray-700 items-center p-3 rounded-lg bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-amber-500/10 group-hover:bg-amber-500 text-amber-500 group-hover:text-white text-center rounded-xl me-5 transition-all duration-500">
                            <i data-feather="pen-tool" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-[17px] font-medium">Painting</h4>
                        </div>
                    </div>

                    <div class="flex group shadow shadow-gray-200 dark:shadow-gray-800 dark:hover:shadow-gray-700 items-center p-3 rounded-lg bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-amber-500/10 group-hover:bg-amber-500 text-amber-500 group-hover:text-white text-center rounded-xl me-5 transition-all duration-500">
                            <i data-feather="book" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-[17px] font-medium">Reading</h4>
                        </div>
                    </div>

                    <div class="flex group shadow shadow-gray-200 dark:shadow-gray-800 dark:hover:shadow-gray-700 items-center p-3 rounded-lg bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-amber-500/10 group-hover:bg-amber-500 text-amber-500 group-hover:text-white text-center rounded-xl me-5 transition-all duration-500">
                            <i data-feather="smartphone" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-[17px] font-medium">Android</h4>
                        </div>
                    </div>

                    <div class="flex group shadow shadow-gray-200 dark:shadow-gray-800 dark:hover:shadow-gray-700 items-center p-3 rounded-lg bg-white dark:bg-slate-900">
                        <div class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-amber-500/10 group-hover:bg-amber-500 text-amber-500 group-hover:text-white text-center rounded-xl me-5 transition-all duration-500">
                            <i data-feather="activity" class="h-5 w-5 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-[17px] font-medium">Other Activity</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="proker">
            <div class="container">
                <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">PROGRAM KERJA</h3>
                <br>
                <h3><strong>Program Beasiswa Pendidikan:</strong> Mendirikan program beasiswa untuk siswa berprestasi namun kurang mampu, guna memastikan akses pendidikan berkualitas tanpa hambatan ekonomi</h3>
                <h3><strong>Klinik Kesehatan Gratis:</strong> Mengadakan klinik kesehatan gratis secara berkala bagi masyarakat kurang mampu, dengan kolaborasi bersama tenaga medis dan rumah sakit setempat.</h3>
                <h3><strong>Diskusi Publik tentang Kebijakan Publik:</strong> Mengadakan diskusi terbuka dengan masyarakat untuk membahas rencana legislasi dan mendengar masukan masyarakat sebelum mengambil keputusan.</h3>
                <h3><strong>Bengkel Keterampilan untuk Pemberdayaan Masyarakat:</strong> Mengorganisir bengkel keterampilan seperti menjahit, memasak, atau keterampilan digital bagi pengangguran dan ibu rumah tangga untuk meningkatkan potensi ekonomi.</h3>
                <h3><strong>Rapat Rutin dengan Tokoh Masyarakat:</strong> Menyelenggarakan pertemuan rutin dengan tokoh masyarakat, tokoh agama, dan pemangku kepentingan lainnya untuk terus mendengar berbagai masukan dan kebutuhan masyarakat.</h3>
                <h3><strong>Pembersihan Lingkungan:</strong> Menginisiasi kegiatan pembersihan lingkungan dan kampanye kesadaran lingkungan untuk menciptakan lingkungan yang bersih dan sehat.</h3>
                <h3><strong>Pendidikan Politik untuk Remaja:</strong> Mengadakan seminar pendidikan politik di sekolah-sekolah untuk membantu generasi muda memahami pentingnya partisipasi politik yang beretika.</h3>
            </div>
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-20 w-full table relative bg-[url('../../assets/images/bg/bg2.html')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl text-xl text-white font-semibold" style ="color :  #E8B020">SUARAKAN ASPIRASI RAKYAT</h3>

                    <p class="text-white/80 max-w-xl mx-auto text-[15px]">mari kita wujudkan masa depan yang lebih baik dan lebih cerah bersama H.Caesar Rismanto</p>
                
                    <div class="relative mt-8">
                        <a href="#dukung" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white rounded-md">Berikan Dukungan</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="experience">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">PENGALAMAN BEKERJA</h3>

                  <!--  <p class="text-slate-400 max-w-xl mx-auto text-[15px]">H. Caesar Rismanto</p>-->
                </div><!--end grid-->

                <ol>
                    <li>
                    <p><strong>Bisnis dan Pengusaha:</strong> H.Caesar Rismanto memiliki latar belakang bisnis sebagai pengusaha. Dia memiliki usaha di berbagai bidang, termasuk mebel dan perusahaan ritel. Pengalaman ini membantunya memahami sektor ekonomi dan bisnis, serta tantangan yang dihadapi oleh pengusaha.</p>
                    </li>
                    <li>
                    <li>
                    <p><strong>Infrastruktur dan Pembangunan:</strong> Salah satu fokus utama H.Caesar Rismanto dalam karier politiknya adalah pembangunan infrastruktur. dia bekerja untuk meningkatkan infrastruktur kota-kota yang dipimpinnya, termasuk proyek-proyek seperti revitalisasi sungai, peningkatan jalan, dan transportasi publik.</p>
                    </li>
                    <li>
                    <p><strong>Pemahaman Rakyat dan Kebijakan Pro-Rakyat:</strong> Karier politik H.Caesar Rismanto ditandai dengan pendekatan pro-rakyat dan upaya untuk mengatasi masalah sosial ekonomi yang dihadapi oleh warga. Dia dikenal dekat dengan masyarakat, sering mengunjungi pasar-pasar tradisional dan tempat-tempat masyarakat.</p>
                    </li>
                    <li>
                    <p><strong>Komitmen Anti-Korupsi:</strong> H.Caesar Rismanto dikenal memiliki komitmen kuat terhadap pemberantasan korupsi. Selama masa pemerintahannya di tingkat lokal, dia juga berupaya memperbaiki tata kelola pemerintahan yang lebih transparan dan akuntabel.</p>
                    </li>
                    </ol>

               <div class="grid grid-cols-1 mt-8">
                    <div class="relative after:content-[''] after:absolute after:top-0 ltr:md:after:right-0 ltr:md:after:left-0 rtl:md:after:left-0 rtl:md:after:right-0 after:w-px after:h-full md:after:m-auto after:border-s-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ms-3 md:ms-0">
                        <!--Start content-->
                        <!--<div class="ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-amber-500 md:after:mx-auto ltr:md:after:right-0 ltr:md:after:left-0 rtl:md:after:left-0 rtl:md:after:right-0 ltr:after:-left-9 rtl:after:-right-9 before:content-[''] before:absolute md:before:mx-auto ltr:md:before:right-0 ltr:md:before:left-0 ltr:before:-left-11 rtl:md:before:left-0 rtl:md:before:right-0 rtl:before:-right-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                            <div class="grid md:grid-cols-2">
                                <div class="md:text-end md:me-8 relative">
                                    <img src="assets/images/logos/facebook-logo-2019.png" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                                    <h5 class="my-2 font-semibold text-lg">Facebook</h5>
                                    <h6 class="text-sm mb-0">2019-21</h6>
                                </div>

                                <div class="ltr:float-left rtl:float-right text-start md:ms-8 mt-6 md:mt-0">
                                    <h5 class="title mb-1 font-semibold">UX / UI Designer</h5>
                                    <p class="mt-3 mb-0 text-slate-400 text-[15px]">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>--> 
                        <!--End content--> 

                        <!--Start content-->
                        <!--<div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-amber-500 md:after:mx-auto ltr:md:after:right-0 ltr:md:after:left-0 ltr:after:-left-9 rtl:md:after:left-0 rtl:md:after:right-0 rtl:after:-right-9 before:content-[''] before:absolute md:before:mx-auto ltr:md:before:right-0 ltr:md:before:left-0 ltr:before:-left-11 rtl:md:before:left-0 rtl:md:before:right-0 rtl:before:-right-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                            <div class="grid md:grid-cols-2">
                                <div class="text-start md:ms-8 relative md:order-2">
                                    <img src="assets/images/logos/google-logo.png" class="rounded-full h-9 w-9 md:me-auto" alt="">
                                    <h5 class="my-2 font-semibold text-lg">Google Tech.</h5>
                                    <h6 class="text-sm mb-0">2018-19</h6>
                                </div>

                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                                    <h5 class="title mb-1 font-semibold">Sr. UX / UI Designer</h5>
                                    <p class="mt-3 mb-0 text-slate-400 text-[15px]">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>-->
                        <!--End content-->

                        <!--Start content-->
                        <!--<div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-amber-500 md:after:mx-auto ltr:md:after:right-0 ltr:md:after:left-0 ltr:after:-left-9 rtl:md:after:left-0 rtl:md:after:right-0 rtl:after:-right-9 before:content-[''] before:absolute md:before:mx-auto ltr:md:before:right-0 ltr:md:before:left-0 ltr:before:-left-11 rtl:md:before:left-0 rtl:md:before:right-0 rtl:before:-right-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                            <div class="grid md:grid-cols-2">
                                <div class="md:text-end md:me-8 relative">
                                    <img src="assets/images/logos/lenovo-logo.png" class="rounded-full h-9 w-9 md:ms-auto" alt="">
                                    <h5 class="my-2 font-semibold text-lg">Lenovo Ltd.</h5>
                                    <h6 class="text-sm mb-0">2016-18</h6>
                                </div>

                                <div class="ltr:float-left rtl:float-right text-start md:ms-8 mt-6 md:mt-0">
                                    <h5 class="title mb-1 font-semibold">Jr. UX / UI Designer</h5>
                                    <p class="mt-3 mb-0 text-slate-400 text-[15px]">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>-->
                        <!--End content-->

                        <!--Start content-->
                        <!--<div class="mt-12 ms-8 md:ms-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-amber-500 md:after:mx-auto ltr:md:after:right-0 ltr:md:after:left-0 ltr:after:-left-9 rtl:md:after:left-0 rtl:md:after:right-0 rtl:after:-right-9 before:content-[''] before:absolute md:before:mx-auto ltr:md:before:right-0 ltr:md:before:left-0 ltr:before:-left-11 rtl:md:before:left-0 rtl:md:before:right-0 rtl:before:-right-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                            <div class="grid md:grid-cols-2">
                                <div class="text-start md:ms-8 relative md:order-2">
                                    <img src="assets/images/logos/circle-logo.png" class="rounded-full h-9 w-9 md:me-auto" alt="">
                                    <h5 class="my-2 font-semibold text-lg">Circle CI</h5>
                                    <h6 class="text-sm mb-0">2015-16</h6>
                                </div>

                                <div class="ltr:float-left rtl:float-right md:text-end md:me-8 mt-6 md:mt-0 md:order-1">
                                    <h5 class="title mb-1 font-semibold">Front-end Web Designer</h5>
                                    <p class="mt-3 mb-0 text-slate-400 text-[15px]">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                </div>
                            </div>
                        </div>-->
                        <!--End content-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="project">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">Galeri Berita</h3>

                    <p class="text-slate-400 max-w-xl mx-auto text-[15px]">Informasi mengenai kegiatan Partai Gerindra di beberapa waktu lalu.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/sambut.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">Penyambutan</a>
                            <span class="block text-sm text-slate-400">10rb Kader Gerindra Tangerang Raya Sambut Prabowo</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/sambut.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div><!--end content-->
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/halal.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">Halal Bi Halal</a>
                            <span class="block text-sm text-slate-400">DPC Gerindra Kab. Tangerang Gelar Acara Halal Bihalal</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/halal.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div><!--end content-->
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/konsolidasi.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">Konsolidasi Akbar</a>
                            <span class="block text-sm text-slate-400">Konsolidasi Akbar pengurus Partai Gerindra Tangerang Raya</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/konsolidasi.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div><!--end content-->
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/bacaleg.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">Gerindra Bacaleg</a>
                            <span class="block text-sm text-slate-400">Gerindra Kota Tangerang Daftar Bacaleg ke KPU,Turidi Susanto: Target 13 Kursi</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/bacaleg.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>

                    </div>
                    <!--end content-->
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/rakercab.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">Rakercab Partai Gerindra</a>
                            <span class="block text-sm text-slate-400">Rakercab Partai Gerindra Kota Tangerang,Usulkan Prabowo Subianto Jadi Presiden 2024</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/rakercab.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div>
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/lebaran.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">DPC Gerindra Tangerang Bukber dan Bagikan Bingkisan Lebaran</a>
                            <span class="block text-sm text-slate-400">DPC Gerindra Kabupaten Tangerang Bukber dan Bagikan Bingkisan Lebaran Sebanyak 1.200 Buah</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/lebaran.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div>
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/dapil.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">H.Caesar Rismanto Jadi Caleg Dapil 5 Tangerang</a>
                            <span class="block text-sm text-slate-400">H.Caesar Rismanto Resmi jadi Caleg Partai Gerindra Kabupaten Tangerang Dapil 5</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/dapil.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div>
                    
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <img src="assets/images/works/kurban.jpg" alt="">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="#" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">DPC Partai Gerindra Kurban</a>
                            <span class="block text-sm text-slate-400">DPC Partai Gerindra Kabupaten Tangerang Potong 10 Ekor Sapi</span>
                        </div>

                        <div class="absolute z-10 opacity-0 group-hover:opacity-100 top-1/2 -translate-y-1/2 right-0 left-0 mx-auto text-center transition-all duration-500">
                            <a href="assets/images/works/kurban.jpg" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="testi">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">ASPIRASI RAKYAT</h3>

                    <p class="text-slate-400 max-w-xl mx-auto text-[15px]">ulasan tentang H. Caesar Rismanto</p>
                </div><!--end grid-->

                <div class="grid relative grid-cols-1 mt-6">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">sukses selalu buat pak h. caesar rismanto saya selalu mendukungmu</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">mamat alkatiri</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">Orang nya baik royal sama warga, pokokya sukses dan maju buat pak caesar</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">Neneng Sumarni</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">pak caesar sangat merakyat dan sangat peduli terhadap warga yang lainnya, dukung pak h.caesar rismanto 2024</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">Udin Samsudin</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">Dukung pak H. Caesar Rismanto caleg DPRD KAB. TANGERANG</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">Dadang Dermawan</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">H. Caesar orangnya memiliki komitmen yang sangat kuat untuk memajukan daerahnya jadi jangan sungkan untuk dukung pak H. Caesar Rismanto 2024 </p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">Agus Triyono</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                        
                        <div class="tiny-slide">
                            <!-- Content -->
                            <div class="customer-testi">
                                <div class="content relative rounded shadow shadow-gray-200 dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-amber-500"></i>
                                    <p class="text-slate-400 text-[15px]">orang yang sangat bijaksana dan selalu mendengar suara rakyat nya untuk masa depan yang cerah ayo kita berikan dukungan untuk pak H. Caesar Rismanto</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/client/07.jpg" class="h-14 w-14 rounded-full shadow-md mx-auto mb-1" alt="">
                                    <a href="#" class="text-base font-medium h5 hover:text-amber-500 duration-500 ease-in-out">Bambang sulistyo</a>
                                    <span class="text-slate-400 text-sm block">Warga</span>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        
        <section class="relative md:py-24 py-16" id="blog">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">Blogs or News</h3>

                    <p class="text-slate-400 max-w-xl mx-auto text-[15px]">Obviously I'm a Web Designer. Web Developer with over 7 years of experience. Experienced with all stages of the development.</p>
                </div><!--end grid-->
                
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8">
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="blog relative rounded-lg shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">

                        <img src="<?php echo $row["foto"]; ?>" alt="">

                        <div class="content p-6">
                            <a href="<?php echo $row["slug"]?>" class="text-[17px] hover:text-amber-500 dark:text-white dark:hover:text-amber-500 transition duration-500 ease-in-out font-medium h5"><?php echo $row["judul"]?></a>
                            <p class="text-slate-400 mt-3 text-[15px]"><?php echo $row["konten"]?></p>
                            
                            <div class="mt-5">
                                <a href="<?php echo $row["slug"]?>">Baca Selengkapnya <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!--<div class="blog relative rounded-lg shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                        <img src="" alt="">

                        <div class="content p-6">
                            <a href="" class="text-[17px] hover:text-amber-500 dark:text-white dark:hover:text-amber-500 transition duration-500 ease-in-out font-medium h5">Gerindra: Nama Cawapres Tak Akan Keluar Tanpa Persetujuan Cak Imin</a>
                            <p class="text-slate-400 mt-3 text-[15px]">Wakil Ketua Umum Gerindra, Habiburokhman menyebut piagam kerja sama politik Koalisi Kebangkitan Indonesia Raya (KKIR) secara prinsip tetap sama seusai Golkar dan PAN bergabung dengan koalisi. Ia mengatakan tidak akan keluar nama cawapres Prabowo tanpa persetujuan Ketua Umum PKB Muhaimin Iskandar (Cak Imin).</p>
                            
                            <div class="mt-5">
                                <a href="" class="hover:text-amber-500 dark:hover:text-amber-500 after:bg-amber-500 dark:text-white transition duration-500">Baca Selengkapnya <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog relative rounded-lg shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">

                        
                        <img src="" alt="">

                        <div class="content p-6">
                            <a href="" class="text-[17px] hover:text-amber-500 dark:text-white dark:hover:text-amber-500 transition duration-500 ease-in-out font-medium h5">Momen Prabowo Resmikan Rumah Pemenangan Relawan di Mente</a>
                            <p class="text-slate-400 mt-3 text-[15px]">Relawan yang hadir di lokasi kompak memakai atribut bertuliskan Prabowo. Di antaranya, Prabowo Mania 08, Genastara, Gerakan Prabowo 08, Bintang Garuda dan organ relawan lainnya.</p>
                            
                            <div class="mt-5">
                                <a href="" class="hover:text-amber-500 dark:hover:text-amber-500 after:bg-amber-500 dark:text-white transition duration-500">Baca Selengkapnya <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div><!--end grid -->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section  class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="contact">
            <div  class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 id ="dukung" class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold" style ="color :  #E8B020">Berikan Dukungan</h3>
                    <p  class="text-slate-400 max-w-xl mx-auto text-[15px]">isi formulir di bawah ini untuk mendukung saya, dan jangan lupa tinggalkan komentar.</p>
                <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-[30px]">
                    <div class="lg:col-span-8">
                        <div class="p-6 rounded-md shadow bg-white dark:bg-slate-900">
                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-5">
                                    <div class="lg:col-span-6 mb-5">
                                        <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="Nama :">
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <input name="email" id="email" type="email" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="Email :">
                                    </div><!--end col-->
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <input name="notelp" id="" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="No Telp: ">
                                    </div>
                                    <div class="mb-5">
                                        <input name="alamat" id="" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="Alamat :">
                                    </div>
                                    <div class="mb-5">
                                        <input name="noktp" id="" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-10 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="No KTP :">
                                    </div>

                                    <div class="mb-5">
                                        <textarea name="komentar" id="comments" class="form-input w-full py-2 px-3 border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded h-28 outline-none bg-transparent focus:border-amber-500/50 dark:focus:border-amber-500/50 focus:shadow-none focus:ring-0 text-[15px]" placeholder="Komentar :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit"  class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white rounded-md h-11 justify-center flex items-center">Berikan Dukungan</button>
                            </form>
                        </div>
                    </div>
                    <div class="lg:col-span-4">
                        <div class="lg:ms-8">
                            <div class="flex">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-phone block rounded text-2xl dark:text-white mb-0"></i>
                                </div>
    
                                <div class="flex-1 ms-6">
                                    <h5 class="text-[17px] dark:text-white mb-2 font-medium">Phone</h5>
                                    <a href="tel:+152534-468-854" class="text-slate-400 text-[15px]">+62 834-468-854</a>
                                </div>
                            </div>
    
                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-envelope block rounded text-2xl dark:text-white mb-0"></i>
                                </div>
    
                                <div class="flex-1 ms-6">
                                    <h5 class="text-[17px] dark:text-white mb-2 font-medium">Email</h5>
                                    <a href="mailto:contact@example.com" class="text-slate-400 text-[15px]">contact@example.com</a>
                                </div>
                            </div>
    
                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-map-marker block rounded text-2xl dark:text-white mb-0"></i>
                                </div>
    
                                <div class="flex-1 ms-6">
                                    <h5 class="text-[17px] dark:text-white mb-2 font-medium">Location</h5>
                                    <p class="text-slate-400 text-[15px] mb-2">C/54 Northwest Freeway, Suite 558, NewYork, USA 485</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid lg:grid-cols-12 md:grid-cols-3 grid-cols-1 items-center">
                        <div class="lg:col-span-3 md:text-start text-center">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="assets/images/hcr+burung.png" class="mx-auto md:me-auto md:ms-0" alt="">
                            </a>
                        </div>
                   
                       <div class="lg:col-span-5 text-center mt-6 md:mt-0" style="color : #fffff">
                            <p></p><strong> CERDAS | SOLUTIF | MERAKYAT</strong></p>
                        </div> 
                    

                  <!--      <ul class="lg:col-span-4 list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-amber-500 dark:hover:border-amber-500 hover:bg-amber-500 dark:hover:bg-amber-500"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul>end icon--> 
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->


        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-amber-500 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>