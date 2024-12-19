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

<!-- Hero Section -->
<section>
    <div class="container mx-auto px-6 lg:px-20 mt-10 sm:mt-20 md:mt-24 lg:mt-30">
        <!-- Teks Hero -->
        <div class="text-center lg:text-left">
            <h1 class="text-3xl sm:text-5xl lg:text-8xl font-semibold text-slate-100">
                Innovative Brand
            </h1>
            <h1 class="text-3xl sm:text-5xl lg:text-8xl font-semibold text-slate-100 mt-5">
                Solutions for Growth
            </h1>
            <div class="mt-14 space-y-4 lg:space-x-4 lg:space-y-0 flex flex-col lg:flex-row justify-center lg:justify-start">
                <a href="#"
                    class="px-6 py-3 bg-pink-700 text-slate-50 hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300">
                    Get in Touch <i class="fi fi-rs-arrow-up-right text-slate-50 ml-2"></i>
                </a>
                <a href="#"
                    class="px-6 py-3 bg-transparent border text-slate-50 hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300">
                    Read News here <i class="fi fi-rs-arrow-up-right text-slate-50 ml-2"></i>
                </a>
            </div>
            <div class="flex lg:justify-end">
                <p class="text-left text-slate-50 lg:w-80 lg:ml-auto">
                    Hubungkan bakatmu dengan dunia dan dapatkan berita terkini. Semua ada di FYP Media.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting.jpeg" alt="Meeting image" class="w-5/6 h-96 contrast-50 brightness-90 object-cover rounded-[20px] mx-auto">
    </div>
</section>

<section class="mt-20">
    <div class="bg-neutral-800 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Swiper -->
            <div class="swiper-container swiper-autoplay overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sicepat.png" alt="Sicepat" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sekolahmu.png" alt="Sekolahmu" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ruang_guru.png" alt="Ruang Guru" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bca.png" alt="Bank BCA" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bibit.png" alt="Bibit" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pegadaian.png" alt="Pegadaian" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pluang.png" alt="Pluang" class="max-h-24 w-auto object-contain hover:scale-110 transition-transform duration-300" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-20">
    <div class="container mx-auto px-6 lg:px-12 py-12 flex flex-col-reverse lg:flex-row items-center justify-between mt-20">

        <div class="text-center lg:text-left lg:w-2/5 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-slate-300 leading-tight">
                We help you boost your brand to grow
            </h1>
        </div>

        <div class="lg:w-1/2 flex justify-center">
            <p class="text-slate-300 text-lg text-justify">
                We collaborate with companies and individuals
                across various industries to ensure our services
                are continually expanding and evolving. By guiding
                brands through rapidly shifting markets and amplifying
                the voices of emerging businesses, we strive to build impactful
                digital communication that makes a difference.
            </p>
        </div>
    </div>

    <!-- Garis pemisah yang lebih tipis dan tidak full -->
    <div class="w-11/12 h-px bg-slate-300 mt-4 mx-auto"></div>

    <div class="container mx-auto px-6 lg:px-12 py-12 flex flex-col-reverse lg:flex-row items-center justify-between mt-20">
        <!-- Bagian Judul -->
        <div class="text-center lg:text-left lg:w-2/5 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-slate-300 leading-tight">
                Numbers that speak volume
            </h1>
        </div>

        <!-- Bagian Angka -->
        <div class="lg:w-1/2 flex justify-center">
            <div class="flex space-x-12">
                <!-- Angka 12+ -->
                <div class="text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white">12<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
                <!-- Angka 385+ -->
                <div class="text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white">385<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
                <!-- Angka 93+ -->
                <div class="text-center">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white">93<span class="text-pink-700">+</span></h2>
                    <p class="text-slate-300 text-lg">Year experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-20">
    <div class="container">
        <h1 class="text-slate-50 text-5xl font-semibold text-start ml-10 py-5">
            Our Service <i class="fi fi-ts-arrow-up-right text-3xl"></i>
        </h1>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Swiper -->
            <div class="swiper-container swiper-cards relative overflow-hidden">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="https://via.placeholder.com/300x200" alt="Card 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800">Card Title 1</h3>
                            <p class="text-sm text-gray-600 mt-2">Description for card 1.</p>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak card -->
                </div>

                <!-- Tombol Navigasi -->
                <div class="swiper-button-next">
                </div>
                <div class="swiper-button-prev ">
                </div>

            </div>
        </div>
    </div>
</section>

    <!-- Garis pemisah yang lebih tipis dan tidak full -->
    <div class="w-11/12 h-px bg-slate-50 mt-20 mx-auto"></div>

<section class="mt-20">
    <div class="container mx-auto p-6">
        <div class="container flex justify-between items-center py-5">
            
            <h1 class="text-slate-50 text-5xl font-semibold">
                <span class="text-red-500">I</span>News
            </h1>
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full mr-10 hover:bg-pink-700 transition duration-200 text-center">
                More news <i class="fi fi-ts-arrow-up-right text-sm ml-3"></i>
            </a>
        </div>

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
    </div>
</section>

    <!-- Garis pemisah yang lebih tipis dan tidak full -->
    <div class="w-11/12 h-px bg-slate-50 mt-4 mx-auto"></div>

<section class="mt-20">
    <div class="container mx-auto p-6">
        <div class="container flex justify-between items-center py-5">
            
            <h1 class="text-slate-50 text-5xl font-semibold">
                <span class="text-red-500">I</span>Latest articles
            </h1>
            <a href="#"
                class="bg-transparent border border-white text-slate-50 text-sm px-5 py-3 rounded-full mr-10 hover:bg-pink-700 transition duration-200 text-center">
                More news <i class="fi fi-ts-arrow-up-right text-sm ml-3"></i>
            </a>
        </div>

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
    </div>
</section>

    <!-- Garis pemisah yang lebih tipis dan tidak full -->
    <div class="w-11/12 h-px bg-slate-50 mt-4 mx-auto"></div> 

<section class="mt-20">
    <div class="container mx-auto p-6">
        <div class="container flex justify-between items-center py-5">
            
            <h1 class="text-slate-50 text-5xl font-base ml-10">
                Ready to <span class="font-semibold">working</span> with us ?
            </h1>
            <!-- Link ke halaman tentang kami -->
            <a href="<?php echo get_site_url(). '/about-us';?>"
                class="bg-transparent bg-white text-black text-sm px-5 py-3 rounded-full mr-10 hover:bg-pink-700 transition duration-200 text-center">
                Get in touch<i class="fi fi-ts-arrow-up-right text-sm ml-3"></i>
            </a>
        </div>
</section>










<?php
// Memanggil footer.php
get_footer();
?>