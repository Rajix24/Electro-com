<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Customer Account Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .sidebar-active {
            background-color: #282e39;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white min-h-screen">
<div class="flex h-screen overflow-hidden">
<aside class="w-72 bg-[#111318] border-r border-slate-800 flex flex-col justify-between p-6">

<div class="flex flex-col gap-8">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12 border-2 border-primary" data-alt="User profile picture showing a smiling man" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDkbMzxG5nlLyV8u7tVVs3VPtg_NjVrnliOo8dJDIfrfcAt6yeagSUWxqDVcGxP9lbrRspl7ynQu7HLTvGLSMpt7cogmbsV839hzpDmK20akxxo2sBj3JHCCFDdWb1Df7N6tKD7qeLlCuwOPlukWTdMfjegDql5cjT5bHd0AQVTQOofwM68tXvSh7UgjO8NLKZZCCugTjBopzawfhmKPYLkqaKDe9L0HHRjoNBWjFRVp4uXaj45wu3-U_hq7-e4MiMD3v7Z2FbuBwc");'></div>
<div class="flex flex-col">
<h1 class="text-white text-base font-semibold leading-tight"><?=$_SESSION['username']?></h1>
</div>
</div>

<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg sidebar-active text-white" href="#">
<span class="material-symbols-outlined text-primary">dashboard</span>
<span class="text-sm font-medium">Overview</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">shopping_bag</span>
<span class="text-sm font-medium">Order History</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">favorite</span>
<span class="text-sm font-medium">My Wishlist</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Profile Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">location_on</span>
<span class="text-sm font-medium">Saved Addresses</span>
</a>
</nav>
</div>
<div class="flex flex-col gap-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-red-400 hover:bg-red-500/10 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="text-sm font-medium">Logout</span>
</a>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-lg text-sm transition-all shadow-lg shadow-primary/20">
                    View Public Profile
                </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark">
<div class="max-w-6xl mx-auto p-8 space-y-8">
<!-- Page Heading -->
<div class="flex justify-between items-end">
<div class="space-y-1">
<h2 class="text-slate-900 dark:text-white text-4xl font-black tracking-tight">Welcome back, <?=$_SESSION['username']?></h2>
<p class="text-slate-500 dark:text-[#9da6b9] text-base">You have 2 items arriving soon.</p>
</div>
<div class="flex gap-3">
<button class="p-2 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">help</span>
</button>
</div>
</div>
<!-- Stats Cards Row -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Orders</p>
<span class="material-symbols-outlined text-primary text-xl">inventory_2</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">24</p>
<p class="text-[#0bda5e] text-xs font-bold uppercase tracking-wider flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +2% this month
                        </p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Wishlist Items</p>
<span class="material-symbols-outlined text-primary text-xl">favorite</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">12</p>
<p class="text-slate-400 text-xs font-medium uppercase">3 items on sale</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] shadow-sm">
<div class="flex justify-between items-start">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Loyalty Points</p>
<span class="material-symbols-outlined text-primary text-xl">stars</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">450 pts</p>
<div class="w-full bg-slate-200 dark:bg-slate-700 h-1.5 rounded-full mt-2">
<div class="bg-primary h-1.5 rounded-full" style="width: 75%"></div>
</div>
<p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mt-1">50 pts to Platinum</p>
</div>
</div>
<!-- Recent Order Tracker -->
<div class="space-y-4">
<h3 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight px-1">Active Shipment</h3>
<div class="rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] overflow-hidden shadow-sm">
<div class="p-6 flex flex-col md:flex-row gap-6 items-center">
<div class="w-32 h-32 bg-slate-100 dark:bg-slate-800 rounded-lg bg-center bg-cover border border-slate-200 dark:border-slate-700 shrink-0" data-alt="Modern noise cancelling wireless headphones" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKyTMpk6uEK_7zACrDV2UPVY_QqpqwI26pU_rcGY7Rpw4kJXepu8w4x_nBSOxTQ1TujQE6-Nqr60Wiq9IN4oDj0huXRWztVmtSBCYQldGOz-WyP0dTGYXhqUXq0oDobCdYQDScIH3O39qO4onbjuFDcVfid9HrUIdIvJ6UWxQSbbJQyEehUGaR8tp1MdpmJXhUufajbmweiC-rLO0c5vZ-5vkEtyvshxMdlBmwn4ZmfAGYmgdinjWQpaD3FG_UbpOqjAijXodHs2o");'></div>
<div class="flex-1 space-y-4 w-full">
<div class="flex flex-wrap justify-between items-start">
<div>
<p class="text-primary text-xs font-bold uppercase tracking-widest">In Transit</p>
<h4 class="text-slate-900 dark:text-white text-lg font-bold">Quantum X-1 Wireless Headphones</h4>
<p class="text-slate-500 dark:text-slate-400 text-sm italic">Order #782910 • Arriving by Oct 24</p>
</div>
<button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-lg hover:bg-primary/90 transition-all">
                                        Track Detailed History
                                    </button>
</div>
<!-- Progress Bar -->
<div class="relative pt-6 pb-2 px-2">
<div class="flex mb-2 items-center justify-between text-xs font-bold text-slate-500 uppercase tracking-tighter">
<span class="text-primary">Ordered</span>
<span class="text-primary">Processed</span>
<span class="text-primary">Shipped</span>
<span>Delivered</span>
</div>
<div class="overflow-hidden h-2 mb-4 text-xs flex rounded-full bg-slate-100 dark:bg-slate-800">
<div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary" style="width:75%"></div>
</div>
<!-- Tracking Indicators -->
<div class="absolute top-4 left-0 w-full flex justify-between px-1">
<div class="size-3 rounded-full bg-primary outline outline-4 outline-primary/20"></div>
<div class="size-3 rounded-full bg-primary outline outline-4 outline-primary/20"></div>
<div class="size-3 rounded-full bg-primary outline outline-4 outline-primary/20"></div>
<div class="size-3 rounded-full bg-slate-300 dark:bg-slate-600"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Recommended Section -->
<div class="space-y-6">
<div class="flex justify-between items-center px-1">
<h3 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight">Recommended for You</h3>
<a class="text-primary text-sm font-semibold hover:underline" href="#">View All Recommendations</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Product Card 1 -->
<div class="group flex flex-col rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="h-48 bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-105 transition-transform duration-300" data-alt="Smartwatch with metallic band and digital interface" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2WAgXXaVE5oRV5xEZP9wf55oIj04F4l59asa3fxSo8vqZFYQJibepqn_zRCZ9a63dA8ijApfdoTeEj-Yrd2BkqOzq9On2E1pPYKuHp8JFGPiqDkTQNj6dKa-S_ywk_bCrpFGeVG7w98IbEnhG2R84vbiY6CGCNc_zQ9PzypiT1PDVarJbiYj_UDEhp9d2dQzJQq-Nieg6c2Q2tOlsMqqUe_cV60_oM05SuySWxmh6RsD6ydfNIoMedvACG1pJtNQWVk-9eEf_FCk");'></div>
<div class="absolute top-3 left-3 bg-primary text-[10px] font-bold text-white px-2 py-1 rounded">NEW</div>
</div>
<div class="p-4 flex flex-col gap-1">
<p class="text-slate-400 text-xs font-medium">Wearables</p>
<h5 class="text-slate-900 dark:text-white text-sm font-bold truncate">Titanium Series Pro Watch</h5>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-500 text-sm">star</span>
<span class="text-xs text-slate-500 dark:text-slate-400">4.9 (124 reviews)</span>
</div>
<div class="flex justify-between items-center mt-auto">
<p class="text-primary font-bold text-lg">$299.00</p>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-xl">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="group flex flex-col rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="h-48 bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-105 transition-transform duration-300" data-alt="Minimalist high-end mechanical keyboard" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCuGMjtjGdk3KRzz8NBd9Z8oADgkoQZpUh5cD_GPg72Q0j9dGA8YdxUgxQKDpkbrWqIPuAF9IYqCB6ztr9WrmvQZ6J3qV_MHiGcxPvCsBSURACLpqSh0fB44PW0TN5Umpa32YZkuR-pLP0a5Tuf4RLtRbzh0B9v-U5QazF4C97eg-t_lFj5YWO0lc9HIHUuVc1wXLnWAqvZ3mLmNcHiH463DcaIptHRGCi7uxXvTXuWfIfcxlPRvzJJ-WMuBtRvAVqH0_ma1Nk9wrQ");'></div>
<div class="absolute top-3 left-3 bg-[#0bda5e] text-[10px] font-bold text-white px-2 py-1 rounded">SAVE 15%</div>
</div>
<div class="p-4 flex flex-col gap-1">
<p class="text-slate-400 text-xs font-medium">Accessories</p>
<h5 class="text-slate-900 dark:text-white text-sm font-bold truncate">Tactile Mechanical Keyboard</h5>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-500 text-sm">star</span>
<span class="text-xs text-slate-500 dark:text-slate-400">4.7 (89 reviews)</span>
</div>
<div class="flex justify-between items-center mt-auto">
<div class="flex flex-col">
<p class="text-slate-400 line-through text-[10px] leading-none">$149</p>
<p class="text-primary font-bold text-lg">$126.65</p>
</div>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-xl">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<div class="group flex flex-col rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="h-48 bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-105 transition-transform duration-300" data-alt="4K curved gaming monitor" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCiReLRZTQqjDonqLeYGjei6mEXTbL5VuNNxBZkbmlr_paTPPdWo8nbmkb2zi94CN7jm2zga4cMWUiEARh_ciKFR-ka_eWnn4YPuZu5HZXCGw9MOYoKtP0ju_rGUBcNr-jNCGUEYtF8QfRP353AuiY6IgN92T4p6Ow_Y2HqiPmSAbaUVq3PJCT8WpfgycXvP5EjdEe2cgHT20PgW5jauuQrc39hQK9XSaMtpJJDxgOMO8TVQwRR37pLvZWAINr08z07IbxilE-AzvQ");'></div>
</div>
<div class="p-4 flex flex-col gap-1">
<p class="text-slate-400 text-xs font-medium">Monitors</p>
<h5 class="text-slate-900 dark:text-white text-sm font-bold truncate">UltraWide 34" Curved OLED</h5>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-500 text-sm">star</span>
<span class="text-xs text-slate-500 dark:text-slate-400">5.0 (2.4k reviews)</span>
</div>
<div class="flex justify-between items-center mt-auto">
<p class="text-primary font-bold text-lg">$899.99</p>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-xl">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<div class="group flex flex-col rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="h-48 bg-slate-100 dark:bg-slate-800 relative overflow-hidden">
<div class="absolute inset-0 bg-center bg-cover group-hover:scale-105 transition-transform duration-300" data-alt="Sleek aluminum laptop on a desk" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAvaYB9OYNm-mLzeekPFuUllI8lhB9lNiaLt8Cn8em5oMHfJniBmNcYWzcrL3gtHgOrm6zZk_xLA9u5V9YUYa4CLutuTbrvSMNLJqbb6OqZHTVHx3A-1ibGkot5Yh8brFwWX0OzsjJQKP6YYeV6UEtfiE8tCc555gzr3CYuKZtDlZ3eiENRTFURuGoKYK3P7vr3EuOyO-_pjm_6KcRqHUxyclA5VClIXaGy_RdbjlmC-Pw9wbjaOSB1T4Kls-NlVLSbuL3evbG8Thk");'></div>
<div class="absolute top-3 left-3 bg-red-500 text-[10px] font-bold text-white px-2 py-1 rounded">HOT</div>
</div>
<div class="p-4 flex flex-col gap-1">
<p class="text-slate-400 text-xs font-medium">Laptops</p>
<h5 class="text-slate-900 dark:text-white text-sm font-bold truncate">Vanguard 14" Air Laptop</h5>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-yellow-500 text-sm">star</span>
<span class="text-xs text-slate-500 dark:text-slate-400">4.8 (432 reviews)</span>
</div>
<div class="flex justify-between items-center mt-auto">
<p class="text-primary font-bold text-lg">$1,149.00</p>
<button class="size-8 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-xl">add_shopping_cart</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>