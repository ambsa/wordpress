<nav id="navbar" class="bg-inherit sticky z-50 top-0 border-b-2 border-gray-800 transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-6 flex justify-between items-center py-6">
        <!-- Logo -->
        <div>
            <a href="/index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_fyp.png" alt="Logo" class="h-6 md:h-8 lg:h-6 w-auto">
            </a>
        </div>

        <!-- Menu (Hidden on Mobile) -->
        <div class="hidden md:flex space-x-8">
            <a href="<?php echo home_url('/home'); ?>" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                Home
            </a>
            <a href="/about.php" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                About
            </a>
            <!-- Menu dengan Dropdown -->
            <div class="relative group" id="dropdown-container">
                <button class="flex items-center text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300" id="dropdown-button">
                    Service
                    <i id="dropdown-icon" class="fi fi-rr-angle-down ml-2 text-sm size-3"></i>
                </button>

                <!-- Dropdown -->
                <div
                    id="dropdown-menu"
                    class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100">
                    <a
                        href="/web-development.php"
                        class="block px-4 py-2 text-gray-700 hover:bg-rose-500 hover:text-white transition-colors duration-200">
                        Web Development
                    </a>
                    <a
                        href="/seo-services.php"
                        class="block px-4 py-2 text-gray-700 hover:bg-rose-500 hover:text-white transition-colors duration-200">
                        SEO Services
                    </a>
                    <a
                        href="/marketing.php"
                        class="block px-4 py-2 text-gray-700 hover:bg-rose-500 hover:text-white transition-colors duration-200">
                        Digital Marketing
                    </a>
                </div>
            </div>
            <a href="/talent.php" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                Talent
            </a>
            <a href="/news.php" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                News
            </a>
            <a href="/career.php" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                Career
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="text-slate-300 text-md font-normal hover:text-rose-500 border-b-2 border-transparent transition-all duration-300">
                Contact
            </a>
        </div>

        <!-- Button -->
        <div class="hidden md:block space-x-3">
            <a href="#"
                class="px-4 py-2 bg-[#F1F3F4] font-semibold text-black hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300">
                Contact US <i class="fi fi-rr-arrow-up-right font-semibold text-black text-sm ml-2"></i>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="focus:outline-none">
                <i class="fi fi-rr-bars-staggered text-white"></i>
            </button>
        </div>
    </div>
    <!-- Overlay -->
    <div id="menu-overlay" class="hidden fixed inset-0 bg-white bg-opacity-50 z-40"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed top-0 left-0 h-full w-64 bg-[#0F1017] shadow-lg transform -translate-x-full transition-transform duration-500 ease-in-out z-50">
        <div class="p-4 flex justify-end">
            <button id="close-menu-button" class="z-50">
                <i class="fi fi-rr-cross text-white"></i>
            </button>
        </div>
        <div class="flex flex-col p-6 space-y-4">
            <a href="/index.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">Home</a>
            <a href="/about.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">About Us</a>
            <a href="/blog.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">Service</a>
            <a href="/belajar.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">Talent</a>
            <a href="/belajar.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">News</a>
            <a href="/belajar.html" class="text-slate-50 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">Career</a>
        </div>
    </div>
</nav>