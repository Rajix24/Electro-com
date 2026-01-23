<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TechStore - Premium Electronics</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<!-- Global Header -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between gap-8">
<!-- Logo -->
<div class="flex items-center gap-2 flex-shrink-0">
<div class="size-9 bg-primary flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-white">bolt</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">TechStore</h1>
</div>
<!-- Main Nav -->
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Laptops</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Smartphones</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Audio</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Accessories</a>
</nav>
<!-- Search -->
<div class="flex-1 max-w-md hidden lg:block">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 transition-all outline-none" placeholder="Search premium electronics..." type="text"/>
<div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center gap-1 opacity-50 pointer-events-none">
<span class="text-[10px] border border-slate-400 rounded px-1">⌘</span>
<span class="text-[10px] border border-slate-400 rounded px-1">K</span>
</div>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-3">
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors relative group">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 right-1 size-4 bg-primary text-[10px] font-bold text-white flex items-center justify-center rounded-full border-2 border-background-light dark:border-background-dark">3</span>
</button>
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">
<span class="material-symbols-outlined">account_circle</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:border-slate-800 mx-1"></div>
<a href="FrontController/logIn" class="hidden sm:flex items-center gap-2 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 px-4 py-2 rounded-lg text-sm font-bold hover:opacity-90 transition-opacity">
                    Log In
    </a>
</div>
<div class="h-8 w-[1px] bg-slate-200 dark:border-slate-800 mx-1"></div>
<a href="FrontController/signUp" class="hidden sm:flex items-center gap-2 bg-slate-900 dark:bg-slate-100 text-white dark:text-slate-900 px-4 py-2 rounded-lg text-sm font-bold hover:opacity-90 transition-opacity">
                    Sign Up
    </a>
</div>
</div>
</header>
<main class="max-w-[1200px] mx-auto px-6 py-8">
<!-- Hero Section -->
<section class="relative rounded-2xl overflow-hidden mb-12">
<div class="grid grid-cols-1 lg:grid-cols-2 bg-slate-100 dark:bg-slate-800/50 min-h-[480px]">
<div class="flex flex-col justify-center p-12 lg:p-16 order-2 lg:order-1">
<span class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold tracking-widest uppercase rounded mb-4">New Release</span>
<h1 class="text-4xl lg:text-6xl font-black text-slate-900 dark:text-white leading-tight mb-6">
                        The Future of Computing: <span class="text-primary">UltraBook Pro</span>
</h1>
<p class="text-slate-600 dark:text-slate-400 text-lg mb-8 max-w-md">
                        Experience unparalleled performance and sleek design with our latest flagship laptop. Engineered for creators and power users.
                    </p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary text-white px-8 py-4 rounded-lg font-bold hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2 shadow-lg shadow-primary/25">
                            Shop Now <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="bg-white dark:bg-slate-900 text-slate-900 dark:text-white border border-slate-200 dark:border-slate-700 px-8 py-4 rounded-lg font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                            Learn More
                        </button>
</div>
</div>
<div class="relative min-h-[300px] order-1 lg:order-2">
<div class="absolute inset-0 bg-center bg-cover" data-alt="Modern sleek laptop floating in dark space with neon highlights" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtA_Bix_IbcR_XWaLnYS_KXwvR-yNDrWSPPxtORKHidF4xbwzMDoSVj3GwzNMfLEp-5QhOi-6M6OTMFdU2pCj4bucdPS8mYorh18wnReZAncKUcOONMC3zMGa6KiF9ItGbdNGP7XoqDH58pRmll83j-JISYrApdRyrd9YF8qcy0_x7AnRe02HY04p3s4ip8VJepvq0PhWS6fw_RmkirNnJn4ZlGj-XLd0BWb5uihX57NPWW2m0KVVJpzP_L7KI6KvUNreQP_fZ0IM');">
</div>
<div class="absolute inset-0 bg-gradient-to-r from-slate-100 dark:from-slate-800 lg:from-transparent to-transparent"></div>
</div>
</div>
</section>
<!-- Category Shortcuts -->
<section class="mb-16">
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<a class="group flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-primary transition-all" href="#">
<div class="size-12 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined">laptop_mac</span>
</div>
<div>
<p class="font-bold text-sm">Laptops</p>
<p class="text-xs text-slate-500">240+ Products</p>
</div>
</a>
<a class="group flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-primary transition-all" href="#">
<div class="size-12 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined">smartphone</span>
</div>
<div>
<p class="font-bold text-sm">Phones</p>
<p class="text-xs text-slate-500">180+ Products</p>
</div>
</a>
<a class="group flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-primary transition-all" href="#">
<div class="size-12 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined">headphones</span>
</div>
<div>
<p class="font-bold text-sm">Audio</p>
<p class="text-xs text-slate-500">120+ Products</p>
</div>
</a>
<a class="group flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-primary transition-all" href="#">
<div class="size-12 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined">watch</span>
</div>
<div>
<p class="font-bold text-sm">Wearables</p>
<p class="text-xs text-slate-500">85+ Products</p>
</div>
</a>
</div>
</section>
<!-- Featured Products -->
<section class="mb-16">
<div class="flex items-end justify-between mb-8 px-2">
<div>
<h2 class="text-2xl font-bold tracking-tight">Featured Products</h2>
<p class="text-slate-500 text-sm">Handpicked top-rated electronics for you</p>
</div>
<a class="text-primary text-sm font-bold flex items-center gap-1 hover:underline underline-offset-4" href="#">
                    View All <span class="material-symbols-outlined text-sm">chevron_right</span>
</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Product Card 1 -->
<div class="group bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-4 hover:shadow-xl dark:hover:shadow-primary/5 transition-all">
<div class="relative aspect-square rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800 mb-4">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-110 transition-transform duration-500" data-alt="Professional grade digital camera on a white background" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuATwAgPiwmRWFudSbRVu4B-vGnHHlix_ybpcgF_Aea2Ri0W47GwoSi2YCHQdICc6H_q_Qv1bRISr4LgpSm2C8kSoCxtA69Ok1LodKV08JP9lsMmOfYEalZQxAKu0qCMpBkr_cgRMYZ90FOfna2Bd5dJRjWcS51nXsiCIhZtLBoDEfJL346SOdFJSHHsjj0aN_OQSN7ofqE3w12OqUDUfhFy2zYnqY2-c37f__2fkhJFZMOQ6_BbXPvYu1LN4ISv3hgdRPp3L3_Dq10');"></div>
<button class="absolute top-3 right-3 size-8 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="space-y-1 mb-4">
<p class="text-[10px] font-bold text-primary uppercase tracking-wider">Cameras</p>
<h3 class="font-bold text-slate-900 dark:text-white truncate">Lumix GH6 Pro Creator</h3>
<p class="text-slate-500 text-xs line-clamp-1">8K Video recording, 25.2MP sensor</p>
</div>
<div class="flex items-center justify-between">
<span class="text-lg font-black">$2,199.00</span>
<button class="size-10 bg-primary text-white rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
<!-- Product Card 2 -->
<div class="group bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-4 hover:shadow-xl dark:hover:shadow-primary/5 transition-all">
<div class="relative aspect-square rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800 mb-4">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-110 transition-transform duration-500" data-alt="Matte black wireless headphones with premium finish" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBRI1wpX0po3_UvP2BNWcPF_Xz-jJPe35vC_kN1kSYUN01eI_z4JQmtue-z1Q0jhx-u-uhZScNYeloOyerTBmJT4i6vuaBej3xgJvsl_iT-dpZ8tHjpBwEzOUevSqnLwJKWocHRWGwM92B_nkHjNDEJa7zCh9RO-boDK_O6oNFc8U7Y4vLwGuQmpJKBoR-QmVsbEeGMibbNhu5M1ktnE4MX4bN6iB07ZLJe18duoP6IKIZnqJrgaiayOZO3yUIQSGBNTL3pBB-gn50');"></div>
<span class="absolute top-3 left-3 px-2 py-1 bg-green-500 text-white text-[10px] font-bold rounded">SALE</span>
</div>
<div class="space-y-1 mb-4">
<p class="text-[10px] font-bold text-primary uppercase tracking-wider">Audio</p>
<h3 class="font-bold text-slate-900 dark:text-white truncate">Studio Wireless Pro 3</h3>
<p class="text-slate-500 text-xs line-clamp-1">Active Noise Cancelling, 40h Battery</p>
</div>
<div class="flex items-center justify-between">
<div class="flex flex-col">
<span class="text-lg font-black">$299.00</span>
<span class="text-xs text-slate-400 line-through">$349.00</span>
</div>
<button class="size-10 bg-primary text-white rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">shopping_bag</span>
</button>
</div>
</div>
<!-- Product Card 3 -->
<div class="group bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-4 hover:shadow-xl dark:hover:shadow-primary/5 transition-all">
<div class="relative aspect-square rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800 mb-4">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-110 transition-transform duration-500" data-alt="Modern smartphone with edge to edge screen and triple lens camera" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA5-vnsS6CiOBjqiAuOT2k-3ZB7qVnScnoSCcPdjXbKWqeiKwC58eYK-7Ga8Ui3wwXfw9t2sd4Zcfb5o2-JL1tzXfpGW456lSZXoVqiNO4bKbkX3y9NoGdmcaluvABche0370p2P9ac7RnTWY1C59NbpBxP_YGIMjKjVsWFFo6g11IQN-92FC7FO8Xf3Gx7Igb3PCTK3Hurcxpfqo5r4AfAA5kpV_AfQa2-TUpzZG-Xw9ai98I2j-dgCD3R5BFb88Oz4x40ZjPO9kE');"></div>
</div>
<div class="space-y-1 mb-4">
<p class="text-[10px] font-bold text-primary uppercase tracking-wider">Phones</p>
<h3 class="font-bold text-slate-900 dark:text-white truncate">ProPhone 15 Ultra</h3>
<p class="text-slate-500 text-xs line-clamp-1">Titanium frame, A17 Bionic chip</p>
</div>
<div class="flex items-center justify-between">
<span class="text-lg font-black">$1,199.00</span>
<button class="size-10 bg-primary text-white rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
<!-- Product Card 4 -->
<div class="group bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-4 hover:shadow-xl dark:hover:shadow-primary/5 transition-all">
<div class="relative aspect-square rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800 mb-4">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-110 transition-transform duration-500" data-alt="Smartwatch with metallic band and vibrant digital display" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAVCBv1sV_FC3yoC0Z4ukh8ba2IbeSqhoph4KMOuWlryJIh5hVdZUVMYwi1ojSRDxBcqkBtYjgFPmPJNCd1ryRNY-gsbflUoBTZ8Ta5Wc8CgGIehDgGMQCEFLCaCeuMmNDaIi2Jl3F7NCAJp--nK44AOe9jsGbjWCHzsIUKVo8LNu_XQlRX3ahTQQ8i0n9BYmiffU3mL2lbPF8tyfXI8OutgRKh0Mt_DmUxb2axp6q2j4a1hI2ERtK1IH1HUAGSesodqt2XFJOaqnk');"></div>
</div>
<div class="space-y-1 mb-4">
<p class="text-[10px] font-bold text-primary uppercase tracking-wider">Wearables</p>
<h3 class="font-bold text-slate-900 dark:text-white truncate">Neo Watch Series X</h3>
<p class="text-slate-500 text-xs line-clamp-1">Health monitoring, GPS, Always-on</p>
</div>
<div class="flex items-center justify-between">
<span class="text-lg font-black">$449.00</span>
<button class="size-10 bg-primary text-white rounded-lg flex items-center justify-center hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
</section>
<!-- Promotional Banner -->
<section class="mb-16">
<div class="relative rounded-2xl overflow-hidden bg-primary p-12 flex flex-col items-center text-center gap-6">
<div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;"></div>
<h2 class="text-3xl font-black text-white relative z-10">Flash Sale: 20% off all Audio gear</h2>
<p class="text-white/80 max-w-xl relative z-10">Limited time offer. Upgrade your listening experience with our premium selection of headphones and speakers.</p>
<div class="flex gap-4 relative z-10">
<div class="bg-white/10 backdrop-blur px-4 py-2 rounded-lg text-white font-mono text-xl font-bold">12<span class="text-xs uppercase ml-1 opacity-60">h</span></div>
<div class="bg-white/10 backdrop-blur px-4 py-2 rounded-lg text-white font-mono text-xl font-bold">45<span class="text-xs uppercase ml-1 opacity-60">m</span></div>
<div class="bg-white/10 backdrop-blur px-4 py-2 rounded-lg text-white font-mono text-xl font-bold">30<span class="text-xs uppercase ml-1 opacity-60">s</span></div>
</div>
<button class="bg-white text-primary px-8 py-3 rounded-lg font-bold hover:scale-105 transition-transform relative z-10">Shop Sale</button>
</div>
</section>
<!-- New Arrivals -->
<section class="mb-16">
<div class="flex items-end justify-between mb-8 px-2">
<div>
<h2 class="text-2xl font-bold tracking-tight">New Arrivals</h2>
<p class="text-slate-500 text-sm">Be the first to own the latest tech</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Highlight Card 1 -->
<div class="group relative h-80 rounded-2xl overflow-hidden bg-slate-900">
<div class="absolute inset-0 bg-center bg-cover opacity-60 group-hover:scale-105 transition-transform duration-700" data-alt="Collection of gaming keyboards and mice with RGB lighting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA4XoX9KNFKElyw8yRcj3AlTKO6WQI8qLxADSp4UF4PaMj_hQ5GbGUVkyv7u9_tX6aV_-_AUiuD4UeoHLYBacFpXf5guovOjVNsHnxBiOG0CAP7dT06ogeY33wiKXUZVAVcFy-5MCbNBTHS_kKMk1qxG041Xz9vL2JUIvp2Y8d38WImD655E81l8p81c1c2b2wyYNPpgrv-58K2CqIRooq7Z2EfCh0r5WvDUi9CAyAKMI049O2TlNQmLrRuQKIKFvzGEhvo_UscGRM');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
<div class="absolute bottom-0 left-0 p-8">
<span class="text-primary font-bold text-xs uppercase tracking-widest mb-2 block">Accessories</span>
<h3 class="text-2xl font-black text-white mb-4">Elite Gaming Kit</h3>
<button class="flex items-center gap-2 text-white font-bold group-hover:gap-4 transition-all">
                            Explore Collection <span class="material-symbols-outlined">arrow_right_alt</span>
</button>
</div>
</div>
<!-- Highlight Card 2 -->
<div class="group relative h-80 rounded-2xl overflow-hidden bg-slate-900">
<div class="absolute inset-0 bg-center bg-cover opacity-60 group-hover:scale-105 transition-transform duration-700" data-alt="Desktop setup with multiple high resolution monitors" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBvADej2iCMNw87KKXPSBZP9lscPk7fDKLU1PkwLOqzLfxsohCpYARtpvKv8f0DtxlOybrNr2_qT3n1Y_USgOUuL8MGKgCPK68JRwVGxIRfdCWrOQus52GZaBCNXuaCNtVPArz4loI4ZCpU4n-PrMu4ZRQ1uFc4XH2B3HfpT81y6IYpHkDg6ok_U9Ig1nXCkkoHZZMR6buoB2A86lQ42OoWDA1ygNYO5vpHaDhN6CqBSjqWCwcu6Vz3i85jHrd1cj983yrJvSo2ZNM');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
<div class="absolute bottom-0 left-0 p-8">
<span class="text-primary font-bold text-xs uppercase tracking-widest mb-2 block">Displays</span>
<h3 class="text-2xl font-black text-white mb-4">Ultrawide 4K Series</h3>
<button class="flex items-center gap-2 text-white font-bold group-hover:gap-4 transition-all">
                            View Models <span class="material-symbols-outlined">arrow_right_alt</span>
</button>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 py-16 px-6">
<div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
<div class="space-y-6">
<div class="flex items-center gap-2">
<div class="size-8 bg-primary flex items-center justify-center rounded-lg text-white">
<span class="material-symbols-outlined text-xl">bolt</span>
</div>
<h2 class="text-lg font-bold">TechStore</h2>
</div>
<p class="text-slate-500 text-sm leading-relaxed">
                    Premium electronic shop providing the latest in consumer technology. Quality and performance guaranteed.
                </p>
<div class="flex gap-4">
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">language</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-slate-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">chat</span></a>
</div>
</div>
<div>
<h4 class="font-bold mb-6">Shop</h4>
<ul class="space-y-4 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Laptops &amp; Computers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Smartphones &amp; Tablets</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Audio &amp; Headphones</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Accessories</a></li>
<li><a class="hover:text-primary transition-colors" href="#">New Arrivals</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Support</h4>
<ul class="space-y-4 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Order Status</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Shipping Policy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Returns &amp; Refunds</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Product Warranty</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Newsletter</h4>
<p class="text-sm text-slate-500 mb-4">Stay updated with the latest tech releases and exclusive offers.</p>
<form class="flex flex-col gap-2">
<input class="bg-slate-100 dark:bg-slate-900 border-none rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-primary/50 outline-none" placeholder="your@email.com" type="email"/>
<button class="bg-primary text-white font-bold py-2 rounded-lg text-sm hover:opacity-90 transition-opacity">Subscribe</button>
</form>
</div>
</div>
<div class="max-w-[1200px] mx-auto mt-16 pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-500 text-xs">© 2024 TechStore. All rights reserved.</p>
<div class="flex gap-6 text-xs text-slate-500">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>