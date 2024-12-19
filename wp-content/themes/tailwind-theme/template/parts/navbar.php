<nav>
        <div class="container mx-auto px-6 flex justify-between items-center py-6">
            <!-- Logo -->
            <div>
                <a href="/index.html"><img src="/assets/img/logo.png" alt="Logo" class="h-6 md:h-8 lg:h-10 w-auto"></a>
            </div>

            <!-- Menu (Hidden on Mobile) -->
            <div class="hidden md:flex space-x-8">
                <a href="/index.html"
                    class="text-purple-900 text-lg font-semibold hover:text-purple-600 border-b-2 border-transparent hover:border-purple-600 transition-all duration-300">
                    Home
                </a>
                <a href="/about.html"
                    class="text-purple-900 text-lg font-semibold hover:text-purple-600 border-b-2 border-transparent hover:border-purple-600 transition-all duration-300">
                    About Us
                </a>
                <a href="/blog.html"
                    class="text-purple-900 text-lg font-semibold hover:text-purple-600 border-b-2 border-transparent hover:border-purple-600 transition-all duration-300">
                    Blog
                </a>
                <a href="/belajar.html"
                    class="text-purple-900 text-lg font-semibold hover:text-purple-600 border-b-2 border-transparent hover:border-purple-600 transition-all duration-300">
                    Belajar
                </a>
            </div>

            <!-- Button -->
            <div class="hidden md:block space-x-4">
                <a href="#"
                    class="px-4 py-2 border border-purple-400 text-purple-900 hover:text-white rounded-lg hover:bg-purple-600 transition-colors duration-300">
                    Sign Up
                </a>
                <a href="#"
                    class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-900 transition-colors duration-300">
                    Sign In
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <i class="fi fi-rr-bars-staggered"></i>
                </button>
            </div>
        </div>

        <!-- Overlay -->
        <div id="menu-overlay"
            class="hidden fixed inset-0 bg-black bg-opacity-50 transition-opacity duration-300"></div>

        <!-- Mobile Slide-in Menu -->
        <div id="mobile-menu"
            class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-500 ease-in-out">
            <!-- Close Button -->
            <div class="p-4">
                <button id="close-menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <i class="fi fi-rr-cross"></i> <!-- Ganti dengan ikon silang yang diinginkan -->
                </button>
            </div>
            <div class="flex flex-col p-6 space-y-4">
                <a href="/index.html" class="text-purple-900 font-semibold hover:text-purple-600">Home</a>
                <a href="/about.html" class="text-purple-900 font-semibold hover:text-purple-600">About Us</a>
                <a href="/blog.html" class="text-purple-900 font-semibold hover:text-purple-600">Blog</a>
                <a href="/belajar.html" class="text-purple-900 font-semibold hover:text-purple-600">Belajar</a>

                <!-- Buttons -->
                <div class="mt-4 space-y-2">
                    <a href="#"
                        class="block px-4 py-2 text-center border border-purple-400 text-purple-900 hover:text-white rounded-lg hover:bg-purple-600 transition-colors duration-300">
                        Sign Up
                    </a>
                    <a href="#"
                        class="block px-4 py-2 text-center bg-purple-600 text-white rounded-lg hover:bg-purple-900 transition-colors duration-300">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </nav>
