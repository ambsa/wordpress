<?php
if (! defined('ABSPATH')) {
    exit; // Menghentikan eksekusi jika file diakses langsung
}

// Memanggil header.php
get_header();
?>

<?php
// Memanggil navbar.php
include get_template_directory() . '/navbar.php';
?>

<?php
/*
Template Name: Home Page
*/
?>

<!-- Hero Section -->
<section>
    <div class="container mx-auto px-6 lg:px-20 mt-10 sm:mt-20 md:mt-24 lg:mt-30">
        <!-- Teks Hero -->
        <div class="text-left sm:text-left md:text-left lg:text-left">
            <h1 class="text-3xl sm:text-5xl lg:text-8xl font-semibold text-slate-100">
                Innovative Brand Solutions for Growth
            </h1>
            <div class="relative lg:absolute lg:right-0 lg:w-80 order-1 lg:order-3 mt-10">
                <p class="text-slate-50 text-left">
                    Hubungkan bakatmu dengan dunia dan dapatkan berita terkini. Semua ada di FYP Media.
                </p>
            </div>
            <div class="mt-14 space-y-4 lg:space-x-4 lg:space-y-0 flex flex-col lg:flex-row justify-center lg:justify-start">
                <a href="#"
                    class="px-10 py-3 bg-pink-700 text-slate-50 hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300 flex justify-center items-center">
                    Get in Touch <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
                </a>
                <a href="#"
                    class="px-10 py-3 bg-transparent border text-slate-50 hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300 flex justify-center items-center">
                    Read News here <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
                </a>


            </div>
        </div>
    </div>
    <div class="mt-20">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting.jpeg" alt="Meeting image" class="w-5/6 h-96 hidden sm:block contrast-50 brightness-90 object-cover rounded-[20px] mx-auto">
    </div>
</section>

<!-- Swiper Autoplay (Brand) -->
<section class="mt-20">
    <div class="bg-neutral-800 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Swiper -->
            <div class="swiper-container swiper-autoplay overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sicepat.png"
                            alt="Sicepat"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sekolahmu.png"
                            alt="Sekolahmu"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ruang_guru.png"
                            alt="Ruang Guru"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bca.png"
                            alt="Bank BCA"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bibit.png"
                            alt="Bibit"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pegadaian.png"
                            alt="Pegadaian"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pluang.png"
                            alt="Pluang"
                            class="max-h-12 sm:max-h-16 lg:max-h-24 w-auto sm:w-1/2 lg:w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- influencing Customers -->
<section class="mt-20">
    <div class="container mx-auto px-6 lg:px-12 py-12 flex flex-col lg:flex-row items-center justify-between">

        <!-- Bagian Teks -->
        <div class="sm:text-left md:text-left lg:text-left lg:w-2/5 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-slate-300 leading-tight">
                We help you boost your brand to grow
            </h1>
        </div>

        <!-- Bagian Paragraf -->
        <div class="lg:w-1/2 flex justify-center mt-6 lg:mt-0">
            <p class="text-slate-300 sm:text-md md:text-md lg:text-lg text-justify">
                We collaborate with companies and individuals
                across industries to ensure our services evolve.
                We guide brands through shifting markets and amplify
                emerging businesses with impactful digital communication.
            </p>
        </div>
    </div>

    <!-- Garis pemisah -->
    <div class="w-11/12 h-px bg-slate-300 mt-4 mx-auto"></div>

    <div class="container mx-auto px-6 lg:px-12 py-12 flex flex-col lg:flex-row items-center justify-between mt-20">
        <!-- Bagian Judul -->
        <div class="text-left lg:text-left lg:w-2/5 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-slate-300 leading-tight">
                Numbers that speak volume
            </h1>
        </div>

        <!-- Bagian Angka -->
        <div class="lg:w-1/2 flex justify-center sm:mt-10">
            <div class="flex flex-row justify-center lg:justify-start space-x-12">
                <!-- Angka 12+ -->
                <div class="text-center">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">12<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
                <!-- Angka 385+ -->
                <div class="text-center">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">385<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
                <!-- Angka 93+ -->
                <div class="text-center">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">93<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service -->
<section class="mt-20">
    <div class="container">
        <h1 class="text-slate-50 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold text-start ml-5 py-5">
            Our Service <i class="fi fi-rr-arrow-up-right text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl ml-3"></i>
        </h1>

    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Swiper -->
            <div class="swiper-container swiper-cards relative overflow-hidden">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide bg-neutral-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white">FYP Management</h3>
                            <p class="text-sm text-white mt-2">
                                Crafting digital experience where beauty meets ROI, turning heads and unlocking revenue potential with every click.
                            </p>
                            <div class="flex justify-center mt-4">
                                <a href="#"
                                    class="inline-block text-center px-3 py-2 sm:px-10 sm:py-2 lg:px-10 lg:py-3 sm:text-sm lg:text-md bg-white text-black font-medium rounded-full hover:bg-pink-700 shadow-lg transition-colors duration-300 whitespace-nowrap">
                                    Get in Touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-neutral-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white">FYP Management</h3>
                            <p class="text-sm text-white mt-2">
                                Crafting digital experience where beauty meets ROI, turning heads and unlocking revenue potential with every click.
                            </p>
                            <div class="flex justify-center mt-4">
                                <a href="#"
                                    class="inline-block text-center px-3 py-2 sm:px-10 sm:py-2 lg:px-10 lg:py-3 sm:text-sm lg:text-md bg-white text-black font-medium rounded-full hover:bg-pink-700 shadow-lg transition-colors duration-300 whitespace-nowrap">
                                    Get in Touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-neutral-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white">FYP Management</h3>
                            <p class="text-sm text-white mt-2">
                                Crafting digital experience where beauty meets ROI, turning heads and unlocking revenue potential with every click.
                            </p>
                            <div class="flex justify-center mt-4">
                                <a href="#"
                                    class="inline-block text-center px-3 py-2 sm:px-10 sm:py-2 lg:px-10 lg:py-3 sm:text-sm lg:text-md bg-white text-black font-medium rounded-full hover:bg-pink-700 shadow-lg transition-colors duration-300 whitespace-nowrap">
                                    Get in Touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-neutral-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white">FYP Management</h3>
                            <p class="text-sm text-white mt-2">
                                Crafting digital experience where beauty meets ROI, turning heads and unlocking revenue potential with every click.
                            </p>
                            <div class="flex justify-center mt-4">
                                <a href="#"
                                    class="inline-block text-center px-3 py-2 sm:px-10 sm:py-2 lg:px-10 lg:py-3 sm:text-sm lg:text-md bg-white text-black font-medium rounded-full hover:bg-pink-700 shadow-lg transition-colors duration-300 whitespace-nowrap">
                                    Get in Touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-neutral-800 shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white">FYP Management</h3>
                            <p class="text-sm text-white mt-2">
                                Crafting digital experience where beauty meets ROI, turning heads and unlocking revenue potential with every click.
                            </p>
                            <div class="flex justify-center mt-4">
                                <a href="#"
                                    class="inline-block text-center px-3 py-2 sm:px-10 sm:py-2 lg:px-10 lg:py-3 sm:text-sm lg:text-md bg-white text-black font-medium rounded-full hover:bg-pink-700 shadow-lg transition-colors duration-300 whitespace-nowrap">
                                    Get in Touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak card -->
                </div>

                <!-- Tombol Navigasi -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<!-- Garis pemisah yang lebih tipis dan tidak full -->
<div class="w-11/12 h-px bg-slate-50 mt-20 mx-auto"></div>

<!-- Berita FYP -->
<section class="mt-20">
    <div class="container mx-auto p-6">
        <!-- Header Section -->
        <div class="container flex justify-between items-center py-5">
            <h1 class="text-slate-50 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold">
                <span
                    class="inline-block w-2 h-6 sm:h-8 md:h-10 lg:h-11 bg-red-500 rounded-full mr-2">
                </span>
                News
            </h1>
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full mr-10 hover:bg-pink-700 transition duration-200 text-center hidden md:inline-block">
                More news <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
            </a>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 items-center max-w-6xl mx-auto px-4 py-7">
            <!-- Card 1 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-40 object-cover rounded-lg">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-40 object-cover rounded-lg">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-40 object-cover rounded-lg">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
        </div>

        <!-- More News Button for Small Screens -->
        <div class="mt-6 text-center md:hidden">
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full hover:bg-pink-700 transition duration-200">
                More news <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
            </a>
        </div>
    </div>
</section>

<!-- Garis pemisah yang lebih tipis dan tidak full -->
<div class="w-11/12 h-px bg-slate-50 mt-4 mx-auto"></div>

<!-- Berita FYP lawas -->
<section class="mt-20">
    <div class="container mx-auto p-6">
        <!-- Header Section -->
        <div class="container flex justify-between items-center py-5">
        <h1 class="text-slate-50 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold">
                <span
                    class="inline-block w-2 h-6 sm:h-8 md:h-10 lg:h-11 bg-red-500 rounded-full mr-2">
                </span>
                Latest Articles
            </h1>
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full mr-10 hover:bg-pink-700 transition duration-200 text-center hidden md:inline-block">
                More news <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
            </a>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 items-center max-w-6xl mx-auto px-4 py-7">
            <!-- Card 1 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people3.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-52 rounded-lg object-cover">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people3.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-52 object-cover rounded-lg">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="flex flex-col bg-transparent rounded-lg shadow-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people3.jpeg"
                    alt="people"
                    class="w-full h-32 sm:h-36 lg:h-52 object-cover rounded-lg">
                <div class="flex-grow p-2 bg-[#100F16]">
                    <h3 class="text-sm font-semibold mb-2 text-white">FYP Media News</h3>
                    <p class="text-white text-xl mb-4">Desak Kusuma Dewi: Perjalanan Menjadi Content Creator dan reviewer</p>
                    <p class="text-red-500 text-xs">By Dhimas - 17 Desember 2002</p>
                </div>
            </div>
        </div>

        <!-- More News Button for Small Screens -->
        <div class="mt-6 text-center md:hidden">
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full hover:bg-pink-700 transition duration-200">
                More news <i class="fi fi-rr-arrow-up-right text-white text-sm ml-3"></i>
            </a>
        </div>
    </div>
</section>


<!-- Garis pemisah yang lebih tipis dan tidak full -->
<div class="w-11/12 h-px bg-slate-50 mt-4 mx-auto"></div>

<section class="mt-20">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center py-10">
            <h1 class="text-slate-50 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-light lg:mb-6">
                Ready to <span class="font-semibold">work</span> with us?
            </h1>
            <!-- Link ke halaman tentang kami -->
            <a href="<?php echo get_site_url() . '/about-us'; ?>"
                class="mt-5 bg-white text-black text-sm md:text-base px-6 py-3 rounded-full hover:bg-pink-700 hover:text-white transition duration-200">
                Get in touch <i class="fi fi-rr-arrow-up-right text-black text-sm ml-2"></i>
            </a>
        </div>
    </div>
</section>










<?php
// Memanggil footer.php
get_footer();
?>