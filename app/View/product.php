<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Product Detail View - ElectroStore</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Inter"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .fill-icon {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-4 lg:px-40 py-3">
<div class="max-w-[1280px] mx-auto flex items-center justify-between gap-8">
<div class="flex items-center gap-8">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl font-bold">bolt</span>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">ElectroStore</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Shop</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Categories</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Deals</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Support</a>
</nav>
</div>
<div class="flex flex-1 justify-end gap-4 items-center">
<div class="hidden sm:flex flex-1 max-w-md relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Search for products..."/>
</div>
<div class="flex gap-2">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined">shopping_cart</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined">person</span>
</button>
<button class="hidden md:flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-white text-sm font-bold hover:bg-blue-700 transition-all">
<span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
                        Admin
                    </button>
</div>
</div>
</div>
</header>
<main class="max-w-[1280px] mx-auto px-4 lg:px-8 py-6">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 text-sm mb-6 overflow-x-auto whitespace-nowrap">
<a class="text-slate-500 hover:text-primary flex items-center gap-1" href="#">
<span class="material-symbols-outlined text-[18px]">home</span>
                Home
            </a>
<span class="text-slate-400">/</span>
<a class="text-slate-500 hover:text-primary" href="#">Smartphones</a>
<span class="text-slate-400">/</span>
<a class="text-slate-500 hover:text-primary" href="#">Flagship Series</a>
<span class="text-slate-400">/</span>
<span class="text-slate-900 dark:text-white font-semibold">Quantum Pro Max 5G</span>
</nav>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left: Image Gallery -->
<div class="lg:col-span-7 space-y-4">
<div class="aspect-square bg-slate-200 dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800">
<div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Modern smartphone flagship with high resolution display" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCT_FTkL6cHOSw-30kI2xyOutE_3pBkY8KWsKMK7_fRExo8sIaRp29yTyTKMGaD4N8W5NQJip3P4boMpDvFr4A-V_o07xILwVTjLnYi0fosRwXf9wH_IJgTKUA1c3QGmY0-urPCXys3gRySQcYMxNRKn5mnhAjxMQB7deVge_QUghO8NoJciOGgjqu2u0JwnS29J-ohz3Qog8NBsKJAbwJgzJmS1nQr7C4N0fPcLXtzORIEpObhaxaK3jfn5DOY88Ep1JiUPDjXDi8')"></div>
</div>
<div class="grid grid-cols-4 gap-4">
<div class="aspect-square rounded-lg border-2 border-primary overflow-hidden cursor-pointer ring-offset-2 dark:ring-offset-background-dark">
<div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Front view of the flagship smartphone" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAw-xVe9bIjP6jEiGJDYmpvb-2ULPe2-xjcMHqRMnXemDZ2w9C8vZDOxAwDM9ly7uqf_WNcFAxNBWDreEv84b5UBngmyrYN_rbkhYM_HvDoKKx2y-UaYjttZNUTo6nxM49taZcoLjhJ08Tjj8xSmRWT-YVB7tse4JMrIWvWyhhLM-AqWkumF0XKpEcDAwmOS3vxwll_2PzBO4zmP6BKD6SZphOnmbq0XYW5L5VPNp3oNfDwBM_VA6rc0oEF7jeFkCCSwQ1dVeIpP9M')"></div>
</div>
<div class="aspect-square rounded-lg border border-slate-200 dark:border-slate-800 overflow-hidden cursor-pointer hover:border-primary transition-all">
<div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Side profile of sleek smartphone design" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDcdxPLqMJLpvuF4IRnNtpcYfqFbuxTXKsKCrI2QOl8ex2RyMPKpyc5u8Yj4RMbOMBCPbslcxoIH1SwAJywlw1U70SSsPnX7R5ee2KmAdZcyVl5XC6iX14EJGmA3VkiqIuGTbQDUh0Z0BvTnVIOXjPQefdx3V_b9lHP3cBalqxhLFPZGe6S073L70JNrMfagJrfbBV56uSyaH2FPtyf5-ubXSVBm8izjPF0kJoKxRVgtEj_XazcrHW7xko6ilnlW8KzM3RCoS_3UAg')"></div>
</div>
<div class="aspect-square rounded-lg border border-slate-200 dark:border-slate-800 overflow-hidden cursor-pointer hover:border-primary transition-all">
<div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Triple camera module close up shot" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC6LUEFczXlCST071UFdN4UOUa8Fifh728ety0GqSYdgeH58Gq4PAv6Jxm7ZdKKB3ojmUvuxohYWzC9eIZhIwgBuSiyxEqSrWVbEVHssUq1VselArt8L1iuf3yB2W0FfYOZCXzh_sb54UmqdJydKTjVyK1hrgqi37AX6nIfN1EhHSAw4grsu1JbbAIKfeEhfqrp93nJYcnVIZB-iIfbY2ZKyX1d3NyXxCJ5xD4jRV5EHMRxpXf7xsOR3CzeokLDMOR4T-YJXntTqUs')"></div>
</div>
<div class="aspect-square rounded-lg border border-slate-200 dark:border-slate-800 overflow-hidden cursor-pointer hover:border-primary transition-all relative">
<div class="w-full h-full bg-center bg-no-repeat bg-cover brightness-50" data-alt="Smartphone accessories lifestyle image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_CFcdhHDZGlj9vsKUjMZfJYYfsbW2EHA0NSWrq1KPbffD5ddJ3_MjtyR-1sr-IalczCcwP75OlFQhNUp5DBoImZA3hUyI7AUIRUZ3jhS6yWKftZuKPzNEQrJhHS0R_gcgGO5r-JV-iHoOc_Muyuueutt_vN3EUTeBrvQ_WgeQWgNsOZyabpkjwJcce4kTmMjUXz8RQDsQsutT2FIm944j2hDOzGQl-WYEQ-d_viZwJ01dWSPeyXeby3bqlorMrw1ON21airtJlOU')"></div>
<div class="absolute inset-0 flex items-center justify-center text-white font-bold text-lg">+3</div>
</div>
</div>
</div>
<!-- Right: Product Info -->
<div class="lg:col-span-5 flex flex-col">
<div class="mb-2">
<span class="px-2.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-primary/10 text-primary">New Arrival</span>
</div>
<h1 class="text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white leading-tight mb-4">Quantum Pro Max 5G - 512GB Graphite Grey</h1>
<div class="flex items-center gap-4 mb-6">
<div class="flex items-center text-yellow-500">
<span class="material-symbols-outlined fill-icon text-xl">star</span>
<span class="material-symbols-outlined fill-icon text-xl">star</span>
<span class="material-symbols-outlined fill-icon text-xl">star</span>
<span class="material-symbols-outlined fill-icon text-xl">star</span>
<span class="material-symbols-outlined text-xl">star_half</span>
<span class="ml-2 text-slate-900 dark:text-white font-bold">4.8</span>
</div>
<span class="text-slate-500 text-sm">|</span>
<span class="text-slate-500 text-sm font-medium">1,200+ Verified Purchases</span>
</div>
<div class="mb-8 flex items-baseline gap-3">
<span class="text-4xl font-bold text-primary">$1,199.00</span>
<span class="text-xl text-slate-400 line-through font-medium">$1,499.00</span>
<span class="text-green-500 font-bold text-sm bg-green-500/10 px-2 py-1 rounded">Save $300</span>
</div>
<div class="space-y-6 mb-8">
<div>
<h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider mb-3">Core Specifications</h3>
<div class="grid grid-cols-2 gap-3">
<div class="p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">memory</span>
<div>
<p class="text-[10px] text-slate-500 font-bold uppercase">Processor</p>
<p class="text-xs font-semibold">Snapdragon 8 Gen 3</p>
</div>
</div>
<div class="p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">battery_charging_full</span>
<div>
<p class="text-[10px] text-slate-500 font-bold uppercase">Battery</p>
<p class="text-xs font-semibold">5000mAh Lithium</p>
</div>
</div>
<div class="p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">photo_camera</span>
<div>
<p class="text-[10px] text-slate-500 font-bold uppercase">Camera</p>
<p class="text-xs font-semibold">200MP Main Lens</p>
</div>
</div>
<div class="p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">aspect_ratio</span>
<div>
<p class="text-[10px] text-slate-500 font-bold uppercase">Display</p>
<p class="text-xs font-semibold">6.8" OLED 144Hz</p>
</div>
</div>
</div>
</div>
</div>
<div class="mt-auto space-y-4">
<div class="flex items-center gap-4">
<div class="flex items-center bg-slate-100 dark:bg-slate-800 rounded-lg p-1 border border-slate-200 dark:border-slate-800">
<button class="w-10 h-10 flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-700 rounded transition-all">
<span class="material-symbols-outlined">remove</span>
</button>
<span class="w-12 text-center font-bold">1</span>
<button class="w-10 h-10 flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-700 rounded transition-all text-primary">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<button class="flex-1 bg-primary text-white font-bold h-12 rounded-lg hover:bg-blue-700 transition-all flex items-center justify-center gap-2 shadow-lg shadow-primary/25">
<span class="material-symbols-outlined">shopping_bag</span>
                            Add to Cart
                        </button>
</div>
<button class="w-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold h-12 rounded-lg hover:opacity-90 transition-all">
                        Buy Now
                    </button>
<div class="flex items-center justify-between text-xs text-slate-500 font-medium py-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-green-500 text-sm">local_shipping</span>
                            Free Express Shipping
                        </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-500 text-sm">verified_user</span>
                            2 Year Warranty
                        </div>
</div>
</div>
</div>
</div>
<!-- Tabbed Area -->
<div class="mt-20">
<div class="border-b border-slate-200 dark:border-slate-800 flex gap-8 overflow-x-auto no-scrollbar mb-8">
<button class="px-4 py-4 text-sm font-bold border-b-2 border-primary text-primary">Overview</button>
<button class="px-4 py-4 text-sm font-bold text-slate-500 hover:text-slate-900 dark:hover:text-white transition-all">Specifications</button>
<button class="px-4 py-4 text-sm font-bold text-slate-500 hover:text-slate-900 dark:hover:text-white transition-all flex items-center gap-2">
                    Reviews <span class="bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded-full text-[10px]">142</span>
</button>
<button class="px-4 py-4 text-sm font-bold text-slate-500 hover:text-slate-900 dark:hover:text-white transition-all">Support</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-12 py-4">
<div class="prose prose-slate dark:prose-invert">
<h2 class="text-2xl font-bold mb-4">Experience Perfection</h2>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        The Quantum Pro Max 5G isn't just a phone; it's a productivity powerhouse and a creative studio in your pocket. Powered by the latest silicon and featuring an industry-leading OLED display, it's designed for those who demand the best.
                    </p>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
<span>Advanced 200MP Triple Camera System with AI processing</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
<span>Hyper-fast 5G connectivity for lag-free gaming and streaming</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
<span>IP68 Water and Dust Resistance for ultimate durability</span>
</li>
</ul>
</div>
<div class="bg-slate-100 dark:bg-slate-800 rounded-xl p-8 flex items-center justify-center">
<div class="text-center">
<div class="size-24 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-4xl text-primary">bolt</span>
</div>
<h3 class="text-xl font-bold mb-2">Fast Charging Ready</h3>
<p class="text-slate-500 text-sm">Charge 0 to 80% in just 15 minutes with our proprietary hyper-charging technology.</p>
</div>
</div>
</div>
</div>
<!-- Related Products -->
<div class="mt-20 mb-20">
<div class="flex items-center justify-between mb-8">
<h2 class="text-2xl font-bold">Related Products</h2>
<div class="flex gap-2">
<button class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Related Item 1 -->
<div class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all">
<div class="aspect-square relative overflow-hidden">
<div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="High quality tablet accessory" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB_In03r82mUUIzL37pVOOTdT_vhAgj_hv9MZgBu_AMelbIx5ib3y8Vj2Fn7pPOul-S4VHZGIqRC-jr0c23kuT8CXibLMKUo6sQRnJt50G6HO6c8EhfCKYwVQYrBE1f0Z6-IxShnypHT0g5wOZQABo-hjBTivW9tnqXkgQQG0zykfDMo4fK-0LVxTgBLmdwR-SZ0ll9DR8nYeuG9d5u4sRgVC8yRSpISnGl2Fhz7q7cB3xWyEwIIK0fTiItH_5yfyCnTc771mM8Pe8')"></div>
<button class="absolute top-3 right-3 p-2 bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-slate-900 dark:text-white hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] font-bold text-primary uppercase mb-1">Accessories</p>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-1">Quantum Pods Pro Gen 2</h4>
<div class="flex items-center justify-between">
<span class="font-bold text-lg">$199.00</span>
<button class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Related Item 2 -->
<div class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all">
<div class="aspect-square relative overflow-hidden">
<div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Premium wireless headphones black" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaFXxsTnntd0Okp6nw-WflvCGJI_EH9b8Obk1TkcALcVqxrcq_XErpVi4MCHTJsUeMboGwo1ZvXolMogf5MEHP6rFE0tmfNQlk7kRo9Xx70nqGveleXa54Yq0pm1WsBISfCr-K6wRBuNTCmI2xcDxIUvX_q6J_5lws4KG2ulV1Wb_rZkuz503CkQcwUFFesfkgTUmm7DjVs31hFym_trMLQ34p7o8i4Yr8qfhVS4tWsjiF7W3MWcbKU_y5KLzWdf5yNcagRSwJMiQ')"></div>
<button class="absolute top-3 right-3 p-2 bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-slate-900 dark:text-white">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] font-bold text-primary uppercase mb-1">Audio</p>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-1">Sonic Boom Noise Cancelling</h4>
<div class="flex items-center justify-between">
<span class="font-bold text-lg">$349.00</span>
<button class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Related Item 3 -->
<div class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all">
<div class="aspect-square relative overflow-hidden">
<div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern smart watch with white strap" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyNBslU2lzLzD432kuzBwON3dCKKJpSE5yhgc7NsES2yjTuC4le4YAyOzoly27ayAv82q652dTlqyyce7PeW_OYYQxSD-jujs14mlOhg9uOMtJE2if4xlKtghBgn8Zj_MaDtfuvk5_LpFI9uTvrRjA0vhga3rAFGqv_Qd6USFP2NUYW_pPQGgvRrF46Juwr7V0VDUCcT1fGrTnBrS968KHnXaPuok-YwtBe_g1GjWq8_9qejY14BUgbzNnFD5ChyUC_FwVgtnQDy4')"></div>
<button class="absolute top-3 right-3 p-2 bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-slate-900 dark:text-white">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] font-bold text-primary uppercase mb-1">Wearables</p>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-1">Chronos Fit S2 Smartwatch</h4>
<div class="flex items-center justify-between">
<span class="font-bold text-lg">$279.00</span>
<button class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Related Item 4 -->
<div class="group bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden hover:shadow-xl transition-all">
<div class="aspect-square relative overflow-hidden">
<div class="w-full h-full bg-center bg-no-repeat bg-cover group-hover:scale-105 transition-transform duration-500" data-alt="Luxury smart watch titanium body" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA_-g9118wh9X3od51ltGmJNWR9edCUiKDZwzuK05fWOxLZFapRuEBsroDnE7k9b4-5lklfUt1F_Qf6LP414OPch_meXB7IUF1aQZSTiv9rv_KKTM0DLLBTkWi5I3VGDd12VyjSpJ9Mj73doygyGij8WTW5IptXbEa7nmBpY7JqS1XSn74zZRQkx5rxoFCxsUZoCyHoqrIL1cGuk4WpDi5M4hG5OoArQCYDFej0z_fxS8l_DxewamOIUxz6dDg18jd8gjY11lsp8tQ')"></div>
<button class="absolute top-3 right-3 p-2 bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-full text-slate-900 dark:text-white">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] font-bold text-primary uppercase mb-1">Wearables</p>
<h4 class="font-bold text-slate-900 dark:text-white mb-2 line-clamp-1">Elite Watch Titanium Edition</h4>
<div class="flex items-center justify-between">
<span class="font-bold text-lg">$599.00</span>
<button class="p-2 bg-slate-100 dark:bg-slate-800 rounded-lg group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Area -->
<footer class="bg-slate-100 dark:bg-slate-900/50 border-t border-slate-200 dark:border-slate-800 py-12 px-4 lg:px-40">
<div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
<div class="col-span-1 md:col-span-2">
<div class="flex items-center gap-2 text-primary mb-4">
<span class="material-symbols-outlined text-3xl font-bold">bolt</span>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight">ElectroStore</h2>
</div>
<p class="text-slate-500 text-sm max-w-sm">Elevating your digital lifestyle with premium electronics, cutting-edge technology, and exceptional service.</p>
</div>
<div>
<h4 class="font-bold mb-4">Customer Care</h4>
<ul class="space-y-2 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Shipping Info</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Returns &amp; Exchanges</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-4">Newsletter</h4>
<div class="flex gap-2">
<input class="flex-1 bg-slate-200 dark:bg-slate-800 border-none rounded-lg px-4 py-2 text-sm" placeholder="Your email"/>
<button class="bg-primary text-white p-2 rounded-lg">
<span class="material-symbols-outlined">send</span>
</button>
</div>
</div>
</div>
<div class="max-w-[1280px] mx-auto mt-12 pt-8 border-t border-slate-200 dark:border-slate-800 text-center text-xs text-slate-500">
            © 2024 ElectroStore Inc. All rights reserved. Built for performance.
        </div>
</footer>
</body></html>