<!DOCTYPE html>
<html lang="en"
      x-data="{ dark: localStorage.getItem('theme') === 'dark' || window.matchMedia('(prefers-color-scheme: dark)').matches }"
      x-init="
          if (dark) document.documentElement.classList.add('dark');
          $watch('dark', val => {
              localStorage.setItem('theme', val ? 'dark' : 'light');
              document.documentElement.classList.toggle('dark', val);
          })"
      :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Vince Paisan - Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' };
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>

    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => AOS.init({ once: true }));
    </script>
</head>
<body class="bg-white text-black dark:bg-[#0f172a] dark:text-white">

<!-- NAVBAR -->
<nav class="fixed top-0 w-full z-30 bg-white text-black dark:bg-[#0f172a] dark:text-white shadow-md text-base md:text-lg" x-data="{ open: false }">
    <div class="max-w-screen-[1720px] mx-auto px-8 sm:px-6 lg:px-12">
        <div class="flex justify-between items-center h-20 relative">
            <a href="{{ route('home') }}" class="flex items-center space-x-2 z-20">
                <img src="{{ asset('images/jayveeLogo_WNoBG.png') }}" alt="Logo" class="w-8 h-8">
                <h1 class="hidden md:block text-xl font-bold">John Vince Paisan</h1>
            </a>
            <a href="{{ route('home') }}" class="absolute left-1/2 -translate-x-1/2 block md:hidden z-10">
                <h1 class="text-lg font-bold">John Vince Paisan</h1>
            </a>
            <div class="flex items-center space-x-4">
                <button @click="dark = !dark" class="p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                    <i :class="dark ? 'fas fa-sun text-yellow-400' : 'fas fa-moon text-gray-700'"></i>
                </button>
                <button @click="open = !open" class="md:hidden z-20">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="hidden md:flex space-x-8 ml-auto items-center">
                <li><a href="#" class="hover:text-gray-700 dark:hover:text-white">Home</a></li>
                <li><a href="#about" class="hover:text-gray-700 dark:hover:text-white">About</a></li>
                <li><a href="#projects" class="hover:text-gray-700 dark:hover:text-white">Projects</a></li>
                <li><a href="#contact" class="hover:text-gray-700 dark:hover:text-white">Contact</a></li>
            </ul>
        </div>
    </div>
    <div x-show="open" x-transition x-cloak class="md:hidden px-4 pb-4 space-y-2 bg-white text-black dark:bg-[#0f172a] dark:text-white">
        <a href="#" class="block hover:text-gray-700 dark:hover:text-white">Home</a>
        <a href="#about" class="block hover:text-gray-700 dark:hover:text-white">About</a>
        <a href="#projects" class="block hover:text-gray-700 dark:hover:text-white">Projects</a>
        <a href="#contact" class="block hover:text-gray-700 dark:hover:text-white">Contact</a>
    </div>
</nav>

<section class="min-h-screen px-1 md:px-6 pt-8 md:pt-8 bg-gradient-to-br from-white via-gray-100 to-white dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-12 relative overflow-hidden">
    <!-- Binary background -->
    <div class="absolute inset-0 opacity-10 text-[8px] font-mono whitespace-pre-wrap pointer-events-none select-none text-gray-400 dark:text-gray-700 leading-none">
        01010110 01101001 01101110 01100011 01100101 00100000 01000011 01101111 01100100 01100101
    </div>

    <div class="md:w-1/2 space-y-4 animate-fade-in-up z-10" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-semibold text-gray-700 dark:text-gray-300">Hello 👋</h2>
        <h1 class="text-5xl md:text-6xl font-bold leading-tight text-red-600 dark:text-red-400">I'm John Vince</h1>
        <p class="text-xl md:text-2xl font-medium text-gray-600 dark:text-gray-400">
            Software Engineer · Data Analyst · Virtual Assistant
        </p>
        <p class="text-sm text-gray-500 dark:text-gray-500">
            🚀 2+ yrs experience · 💼 Laravel, Tailwind, AlpineJS · 📊 Excel, SQL, Power BI
        </p>

        <!-- Code Snippet Card -->
        <div class="bg-gray-900 text-left text-green-400 font-mono text-xs p-4 rounded-lg shadow-lg overflow-auto max-w-md mt-6">
            <p><span class="text-purple-400">const</span> greet = (<span class="text-yellow-300">name</span>) =&gt; <span class="text-blue-300">Hello, ${name}!</span>;</p>
            <p>greet(<span class="text-blue-300">"World"</span>);</p>
        </div>

        <!-- Tech Stack Logos -->
        <div class="flex justify-start items-center flex-wrap gap-4 mt-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="h-8"/>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="h-8"/>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind" class="h-8"/>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-8"/>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" class="h-8"/>
        </div>

        <div class="grid grid-cols-3 gap-4 text-center mt-6">
            <div class="bg-white dark:bg-gray-800 shadow-lg p-4 rounded-xl">
                <i class="fas fa-code text-3xl text-red-500"></i>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Clean Code</p>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-lg p-4 rounded-xl">
                <i class="fas fa-database text-3xl text-red-500"></i>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Data Analysis</p>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-lg p-4 rounded-xl">
                <i class="fas fa-terminal text-3xl text-red-500"></i>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Backend Logic</p>
            </div>
        </div>

        <div class="flex flex-wrap gap-4 mt-6">
            <a href="#contact" class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-2xl font-semibold shadow-md transition duration-300 transform hover:scale-105">
                <i class="fas fa-rocket mr-2"></i> Got a project?
            </a>
            <a href="/resume.pdf" target="_blank" class="bg-white dark:bg-black border border-gray-300 dark:border-white text-gray-800 dark:text-white px-6 py-3 rounded-2xl font-semibold hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-300 transform hover:scale-105">
                <i class="fas fa-download mr-2"></i> My Resume
            </a>
        </div>
    </div>

    <div class="md:w-1/2 flex justify-center relative z-10" data-aos="zoom-in">
        <div class="relative w-60 h-60 md:w-80 md:h-80 rounded-full overflow-hidden shadow-2xl border-4 border-white dark:border-black hover:scale-105 transition duration-500">
            <img src="/images/jayveeProfile.png" alt="Jayvee" class="object-cover w-full h-full" />
            <div class="absolute inset-0 bg-gradient-to-tr from-red-400/30 via-transparent to-purple-400/30 rounded-full pointer-events-none"></div>
        </div>

        <!-- Badge -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white text-xs px-3 py-1 rounded-full shadow-md">
            <i class="fas fa-laptop-code mr-1"></i> Passion for Programming
        </div>

        <!-- Background Pattern Decoration -->
        <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-purple-400 to-red-500 opacity-20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-20 h-20 bg-red-300 opacity-10 rounded-full blur-2xl animate-spin-slow"></div>
    </div>
</section>

<!-- WAVE TRANSITION -->
<div class="relative">
  <svg class="absolute -bottom-1 w-full" viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path fill="currentColor" d="M0,64L80,69.3C160,75,320,85,480,90.7C640,96,800,96,960,80C1120,64,1280,32,1360,16L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z" class="text-white dark:text-gray-900"></path>
  </svg>
</div>

<!-- TESTIMONIALS SECTION -->
<section id="testimonials" class="px-6 md:px-16 mt-32 text-center">
    <h2 class="text-3xl font-bold text-red-600 dark:text-red-400 mb-10">Testimonials</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md">
            <p class="text-gray-600 dark:text-gray-300 italic mb-4">"John Vince helped us automate our reports, saving hours every week. Highly reliable!"</p>
            <h4 class="font-bold text-gray-800 dark:text-gray-200">— Maria, Team Lead</h4>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md">
            <p class="text-gray-600 dark:text-gray-300 italic mb-4">"His websites are sleek, responsive, and fast. Great to work with!"</p>
            <h4 class="font-bold text-gray-800 dark:text-gray-200">— David, Small Business Owner</h4>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-md">
            <p class="text-gray-600 dark:text-gray-300 italic mb-4">"Professional, creative, and always meets deadlines. Highly recommend!"</p>
            <h4 class="font-bold text-gray-800 dark:text-gray-200">— Clarisse, Freelancer</h4>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="mt-28 px-6 md:px-16 text-center">
    <div class="bg-red-500 dark:bg-red-600 text-white p-10 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold mb-4">Let’s Build Something Together</h2>
        <p class="mb-6 text-lg">Whether it's a website, dashboard, or automation — I'm ready to help!</p>
        <a href="#contact" class="bg-white text-red-600 px-6 py-3 font-semibold rounded-xl hover:bg-gray-100 transition">
            Contact Me
        </a>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="px-6 md:px-16 mt-28 grid md:grid-cols-2 gap-16 items-center">
    <div class="space-y-6 animate-fade-in-up" data-aos="fade-right">
        <h2 class="text-3xl font-bold text-red-600 dark:text-red-400">About Me</h2>
        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
            I started my software journey in photography, evolving into a full-stack developer and data analyst. I blend technical skills with creative problem-solving to deliver impactful solutions.
        </p>
        <div class="flex gap-10">
            <div>
                <h3 class="text-2xl font-bold text-red-400">20+</h3>
                <p class="text-sm text-gray-500 dark:text-gray-600">Projects Completed</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-red-400">95%</h3>
                <p class="text-sm text-gray-500 dark:text-gray-600">Client Satisfaction</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-red-400">2+</h3>
                <p class="text-sm text-gray-500 dark:text-gray-600">Years Experience</p>
            </div>
        </div>
    </div>
    <div class="space-y-6 animate-fade-in-up" data-aos="fade-left">
        <h3 class="text-xl font-bold">Services</h3>
        <ul class="grid gap-4 text-gray-700 dark:text-gray-300">
            <li class="flex items-center gap-3">
                <i class="fas fa-code text-red-400"></i> Website Development
            </li>
            <li class="flex items-center gap-3">
                <i class="fas fa-mobile-alt text-red-400"></i> App Development
            </li>
            <li class="flex items-center gap-3">
                <i class="fas fa-server text-red-400"></i> Website Hosting
            </li>
            <li class="flex items-center gap-3">
                <i class="fas fa-robot text-red-400"></i> Task Automation
            </li>
        </ul>
    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="mt-28 px-6 md:px-16">
    <h2 class="text-3xl font-bold mb-10 text-center text-red-600 dark:text-red-400">Skills</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-gray-700 dark:text-gray-300">
        <div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
            <i class="fab fa-laravel text-3xl text-red-500 mb-2"></i>
            <p class="font-semibold">Laravel</p>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
            <i class="fab fa-js text-3xl text-yellow-400 mb-2"></i>
            <p class="font-semibold">JavaScript</p>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
            <i class="fas fa-database text-3xl text-blue-500 mb-2"></i>
            <p class="font-semibold">SQL</p>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
            <i class="fas fa-chart-line text-3xl text-green-400 mb-2"></i>
            <p class="font-semibold">Power BI</p>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="mt-28 px-6 md:px-16 mb-20">
    <h2 class="text-3xl font-bold mb-10 text-center md:text-left text-red-600 dark:text-red-400">Contact Me</h2>
    <form class="space-y-6 max-w-2xl mx-auto md:mx-0 bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-md" data-aos="fade-up">
        <div>
            <label class="block mb-1 font-medium">Name</label>
            <input type="text" placeholder="Your name" class="w-full px-4 py-2 rounded-xl bg-gray-100 dark:bg-gray-800 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-red-400 outline-none transition">
        </div>
        <div>
            <label class="block mb-1 font-medium">Email</label>
            <input type="email" placeholder="you@example.com" class="w-full px-4 py-2 rounded-xl bg-gray-100 dark:bg-gray-800 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-red-400 outline-none transition">
        </div>
        <div>
            <label class="block mb-1 font-medium">Message</label>
            <textarea placeholder="Let's talk..." class="w-full px-4 py-2 rounded-xl bg-gray-100 dark:bg-gray-800 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-red-400 outline-none transition" rows="5"></textarea>
        </div>
        <button type="submit" class="bg-red-500 text-white font-semibold px-6 py-3 rounded-xl hover:bg-red-600 transition">
            Send Message
        </button>
    </form>
</section>

<!-- FOOTER -->
<footer class="bg-gray-100 dark:bg-gray-900 text-center py-6 text-sm text-gray-500 dark:text-gray-400">
    © 2025 John Vince Paisan. All rights reserved.
</footer>


</body>
</html>