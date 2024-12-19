<nav id="navbar" class="bg-[#100F16] border-b border-slate-500 sticky z-50 top-0 transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-6 flex justify-between items-center py-6">
        <!-- Logo -->
        <div>
            <a href="/index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_fyp.png" alt="Logo" class="h-6 md:h-8 lg:h-6 w-auto">
            </a>
        </div>

        <!-- Menu (Hidden on Mobile) -->
        <div class="hidden md:flex space-x-8">
            <a href="/index.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                Home
            </a>
            <a href="/about.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                About
            </a>
            <a href="/blog.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                Service
            </a>
            <a href="/belajar.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                Talent
            </a>
            <a href="/belajar.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                News
            </a>
            <a href="/belajar.html" class="text-slate-300 text-md font-normal hover:text-pink-700 border-b-2 border-transparent transition-all duration-300">
                Career
            </a>
        </div>

        <!-- Button -->
        <div class="hidden md:block space-x-3">
            <a href="#"
                class="px-4 py-2 bg-pink-700 text-slate-50 hover:text-white rounded-full hover:bg-pink-900 transition-colors duration-300">
                Contact US <i class="fi fi-ts-arrow-up-right text-sm ml-3"></i>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="focus:outline-none">
                <i class="fi fi-rr-bars-staggered"></i>
            </button>
        </div>
    </div>
</nav>
