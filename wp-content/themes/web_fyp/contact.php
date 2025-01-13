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
Template Name: Contact Page
*/
?>

<section class="mb-20">
    <div class="container mx-auto px-6 lg:px-20 mt-10 sm:mt-20 md:mt-24 lg:mt-30">
        <!-- Teks Hero -->
        <div class="text-left sm:text-left md:text-left lg:text-left">
            <h1 class="text-2xl sm:text-4xl lg:text-6xl font-semibold text-slate-100">
                Siap Untuk Memberi Project ?
            </h1>
        </div>
        <div class="text-md sm:text-xl lg:text-2xl font-normal text-slate-100 mt-5">
            <p>Start finding your purpose with us. See our latest vacancies below.</p>
        </div>
    </div>
</section>

<section>
    <div class="max-w-5xl mx-auto p-6">
        <form action="/submit-form" method="POST" class="space-y-4 text-slate-100">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium mb-2"><i class="fi fi-rr-circle-1"></i> Nama Kamu</label>
                    <input type="text" id="name" name="name" required class="w-full px-3 py-2 bg-transparent border-b-2 border-slate-300 text-slate-100 focus:outline-none focus:border-slate-100" placeholder="What’s your Name?">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium mb-2"><i class="fi fi-rr-circle-2"></i> Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 bg-transparent border-b-2 border-slate-300 text-slate-100 focus:outline-none focus:border-slate-100" placeholder="What’s your Email?">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium mb-2"><i class="fi fi-rr-circle-3"></i> No. Telepon</label>
                    <input type="tel" id="phone" name="phone" required class="w-full px-3 py-2 bg-transparent border-b-2 border-slate-300 text-slate-100 focus:outline-none focus:border-slate-100" placeholder="What’s your Number?">
                </div>
            </div>

            <div>
                <label for="project_subject" class="block text-sm font-medium mb-2"><i class="fi fi-rr-circle-4"></i> Project Subject</label>
                <input type="text" id="project_subject" name="project_subject" required class="w-full px-3 py-2 bg-transparent border-b-2 border-slate-300 text-slate-100 focus:outline-none focus:border-slate-100" placeholder="What’s your Project Type?">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium mb-2"><i class="fi fi-rr-circle-5"></i> Massage</label>
                <textarea id="message" name="message" required class="w-full px-3 py-2 bg-transparent border-b-2 border-slate-300 text-slate-100 focus:outline-none focus:border-slate-100" rows="2" placeholder="Let us know about your detail project"></textarea>
            </div>

            <div>
                <button type="submit" class="w-full md:w-1/5 px-4 py-2 bg-slate-100 text-black hover:bg-pink-900 hover:text-white rounded-full font-semibold flex items-center justify-center transition-all duration-300 ease-in-out">
                    Kirim Pesan Ini
                    <i class="fi fi-rr-arrow-up-right text-black text-xs ml-3 font-semibold"></i>
                </button>
            </div>
        </form>
    </div>
</section>








<?php
// Memanggil footer.php
get_footer();
?>