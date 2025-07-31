<!DOCTYPE html>
<html lang="en" x-data>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>John Vince Paisan - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>[x-cloak] { display: none !important; }</style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#0f172a] text-white font-sans pt-">

<!-- NAVBAR -->
<nav class="fixed top-0 w-full z-30 bg-[#0f172a] shadow-md text-white text-base md:text-lg" x-data="{ open: false }">
    <div class="w-full max-w-screen-full mx-auto px-4 sm:px-6 lg:px-20">
        <div class="flex justify-between items-center h-20 relative">
            <!-- Logo and Title -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 z-20">
                <img src="{{ asset('images/jayveeLogo_WNoBG.png') }}" alt="Logo" class="w-8 h-8">
                <!-- Desktop title -->
                <h1 class="hidden md:block text-xl font-bold text-white">John Vince Paisan</h1>
            </a>

            <!-- Mobile-centered title -->
            <a href="{{ route('home') }}" class="absolute left-1/2 -translate-x-1/2 block md:hidden z-10">
                <h1 class="text-lg font-bold text-white">John Vince Paisan</h1>
            </a>

            <!-- Hamburger Menu (Mobile) -->
            <button @click="open = !open" class="md:hidden text-white focus:outline-none z-20">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Desktop Navigation -->
            <ul class="hidden md:flex space-x-8 ml-auto items-center text-base lg:text-lg">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="#about" class="hover:text-white">About</a></li>
                <li><a href="#projects" class="hover:text-white">Projects</a></li>
                <li><a href="#contact" class="hover:text-white">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition x-cloak class="md:hidden px-4 pb-4 space-y-2 bg-[#0f172a] text-gray-300">
        <a href="#" class="block hover:text-white">Home</a>
        <a href="#about" class="block hover:text-white">About</a>
        <a href="#projects" class="block hover:text-white">Projects</a>
        <a href="#contact" class="block hover:text-white">Contact</a>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="flex flex-col md:flex-row items-center justify-center min-h-screen px-2 md:px-6 mt-1 text-center">
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center space-y-1 mx-auto">
        <h2 class="text-3xl md:text-4xl">Hello. 👋</h2>
        <h1 class="text-4xl md:text-5xl font-bold">I'm John Vince</h1>
        <p class="text-xl md:text-2xl font-semibold">
            <span class="block md:inline">Software Engineer</span>
            <span class="hidden md:inline"> - </span>
            <span class="block md:inline">Data Analyst</span>
            <span class="hidden md:inline"> - </span>
            <span class="block md:inline">Virtual Assistant</span>
        </p>
        <div class="mt-6 space-x-2">
            <a href="#" class="bg-red-400 px-4 py-2 rounded hover:bg-red-500">Got a project?</a>
            <a href="#" class="border px-4 py-2 rounded hover:bg-white hover:text-[#0f172a]">My resume</a>
        </div>
    </div>

    <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <div class="relative w-64 h-64 md:w-[430px] md:h-[430px] flex items-center justify-center">
            <div class="absolute inset-0 rounded-full z-0 opacity-100 blur-md border-4 border-white"
                 style="background: url('/images/jayvee_BG.png') no-repeat center; background-size: cover;">
            </div>
            <img src="/images/jayveeProfile.png" alt="Jayvee"
                 class="rounded-full w-full h-full object-cover relative z-10"/>
        </div>
    </div>
</section>

<!-- SKILLS + ABOUT -->
<section id="about" class="px-6 md:px-16 mt-20 grid md:grid-cols-2 gap-12">
    <div class="space-y-4 text-center md:text-left">
        <h3 class="text-lg font-bold">Website Development</h3>
        <h3 class="text-lg font-bold">App Development</h3>
        <h3 class="text-lg font-bold">Website Hosting</h3>
    </div>
    <div>
        <h2 class="text-3xl font-bold mb-4">About me</h2>
        <p class="text-gray-300 mb-6">
            I started my software journey from photography and evolved into a passion for full-stack development and data analysis.
        </p>
        <div class="flex gap-6 justify-center md:justify-start">
            <div>
                <h3 class="text-xl font-bold">20+</h3>
                <p class="text-sm text-gray-300">Completed Projects</p>
            </div>
            <div>
                <h3 class="text-xl font-bold">95%</h3>
                <p class="text-sm text-gray-300">Client satisfaction</p>
            </div>
            <div>
                <h3 class="text-xl font-bold">2+</h3>
                <p class="text-sm text-gray-300">Years experience</p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="mt-20 px-6 md:px-16">
    <h2 class="text-3xl font-bold mb-8 text-center md:text-left">Projects</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-[#1e293b] p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold">Portfolio Website</h3>
            <p class="text-sm text-gray-300">Built using Laravel and Tailwind CSS. Responsive and fast.</p>
        </div>
        <div class="bg-[#1e293b] p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold">Data Dashboard</h3>
            <p class="text-sm text-gray-300">Interactive dashboard built with Chart.js and Laravel.</p>
        </div>
        <div class="bg-[#1e293b] p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-semibold">VA Task Automation</h3>
            <p class="text-sm text-gray-300">Scripts and tools to automate client tasks and reporting.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="mt-20 px-6 md:px-16 mb-20">
    <h2 class="text-3xl font-bold mb-6 text-center md:text-left">Contact Me</h2>
    <form class="space-y-6 max-w-xl mx-auto md:mx-0">
        <div>
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" class="w-full p-2 rounded bg-[#1e293b] text-white border border-gray-600" />
        </div>
        <div>
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" class="w-full p-2 rounded bg-[#1e293b] text-white border border-gray-600" />
        </div>
        <div>
            <label class="block mb-1 font-semibold">Message</label>
            <textarea class="w-full p-2 rounded bg-[#1e293b] text-white border border-gray-600" rows="4"></textarea>
        </div>
        <button type="submit" class="bg-red-400 px-6 py-2 rounded hover:bg-red-500">Send</button>
    </form>
</section>

</body>
</html>
