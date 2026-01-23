
<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard Overview</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .sidebar-active {
            background-color: #135bec;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased font-display">
<div class="flex min-h-screen overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-slate-900 dark:bg-[#0f172a] flex flex-col border-r border-slate-800 shrink-0">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary rounded-lg p-1.5 flex items-center justify-center">
<span class="material-symbols-outlined text-white text-2xl">bolt</span>
</div>
<div>
<h1 class="text-white text-lg font-bold leading-none">ElectroAdmin</h1>
<p class="text-slate-400 text-xs mt-1">Management Panel</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Overview</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">package</span>
<span class="text-sm font-medium">Products</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">category</span>
<span class="text-sm font-medium">Categories</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Users</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-sm font-medium">Orders</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors" href="/AuthUser/logout">
<span class="material-symbols-outlined">login</span>
<span class="text-sm font-medium">log Out</span>
</a>
</nav>
<div class="p-4 border-t border-slate-800">
<div class="flex items-center gap-3 p-2 rounded-lg hover:bg-slate-800 transition-colors cursor-pointer">
<div class="size-9 rounded-full bg-slate-700 bg-cover bg-center" data-alt="User profile avatar of admin manager" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBEZbgzOYv03Phg0bltSYufFg-THKwLRcWT2fXm-kq2E8k5REv4uSRHB-XRJlcnw4AU6Kw-GxJ0JCsM_BNtMQfJH_RilDcUBqF9amPAMVt2DLQYo9HYur8emh7lKbgxcEF5dpM8ikuUBp4CaC_iarL2nISeRuCCG4-31mURnLAm6NEFM47nzBAVAjt2aOXYw_PqdLSLz9Bsf4wlkS5bysS10Stdct7Jj7cUR7bEC6s4kCbzvfVfhymJLDQ6yWIlQW65t5Mh2jU-dlY');"></div>
<div class="flex-1 overflow-hidden">
<p class="text-sm font-medium text-white truncate"><?=$_SESSION['username'];
?></p>
<p class="text-xs text-slate-400 truncate">Store Admin</p>
</div>
<span class="material-symbols-outlined text-slate-500 text-sm">settings</span>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- Top Navigation Bar -->
<header class="h-16 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-8 flex items-center justify-between sticky top-0 z-10">
<div class="flex items-center gap-6">
<h2 class="text-lg font-bold text-slate-900 dark:text-white tracking-tight">Dashboard Overview</h2>
<div class="relative w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary text-slate-900 dark:text-white placeholder:text-slate-500" placeholder="Search orders, products..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="size-10 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-background-dark"></span>
</button>
<button class="px-4 h-10 bg-primary hover:bg-primary/90 text-white text-sm font-semibold rounded-lg flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
                        New Product
                    </button>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-8 space-y-8">
<!-- KPI Stats Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-emerald-500 text-xs font-bold bg-emerald-500/10 px-2 py-1 rounded-full flex items-center gap-0.5">
<span class="material-symbols-outlined text-sm">trending_up</span>
                                12.5%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Sales</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">$124,500.00</h3>
<p class="text-xs text-slate-400 mt-2">vs last month: $110,650</p>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-lg bg-orange-500/10 flex items-center justify-center text-orange-500">
<span class="material-symbols-outlined">shopping_basket</span>
</div>
<span class="text-red-500 text-xs font-bold bg-red-500/10 px-2 py-1 rounded-full flex items-center gap-0.5">
<span class="material-symbols-outlined text-sm">trending_down</span>
                                2.4%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">New Orders</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">456</h3>
<p class="text-xs text-slate-400 mt-2">Target: 500 per month</p>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-500">
<span class="material-symbols-outlined">person_add</span>
</div>
<span class="text-emerald-500 text-xs font-bold bg-emerald-500/10 px-2 py-1 rounded-full flex items-center gap-0.5">
<span class="material-symbols-outlined text-sm">trending_up</span>
                                5.1%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Users</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">1,234</h3>
<p class="text-xs text-slate-400 mt-2">Current online: 42</p>
</div>
</section>
<!-- Recent Orders Section -->
<section class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Recent Orders</h3>
<button class="text-primary text-sm font-semibold hover:underline">View All Orders</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Order ID</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Customer</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Date</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">Total</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">#ORD-7732</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200" data-alt="Customer avatar placeholder"></div>
<span class="text-sm text-slate-600 dark:text-slate-300">John Doe</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">Oct 24, 2023</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400">Shipped</span>
</td>
<td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white text-right">$299.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">#ORD-7731</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200" data-alt="Customer avatar placeholder"></div>
<span class="text-sm text-slate-600 dark:text-slate-300">Jane Smith</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">Oct 24, 2023</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700 dark:bg-blue-500/10 dark:text-blue-400">Processing</span>
</td>
<td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white text-right">$1,150.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">#ORD-7730</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200" data-alt="Customer avatar placeholder"></div>
<span class="text-sm text-slate-600 dark:text-slate-300">Robert Brown</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400">Pending</span>
</td>
<td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white text-right">$45.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">#ORD-7729</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200" data-alt="Customer avatar placeholder"></div>
<span class="text-sm text-slate-600 dark:text-slate-300">Alice White</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400">Shipped</span>
</td>
<td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white text-right">$820.00</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-900 dark:text-white">#ORD-7728</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200" data-alt="Customer avatar placeholder"></div>
<span class="text-sm text-slate-600 dark:text-slate-300">Michael Ross</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500 dark:text-slate-400">Oct 22, 2023</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-rose-100 text-rose-700 dark:bg-rose-500/10 dark:text-rose-400">Cancelled</span>
</td>
<td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white text-right">$120.00</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800 flex justify-center">
<nav class="flex items-center gap-1">
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="size-8 flex items-center justify-center rounded border border-primary bg-primary text-white text-xs font-bold">1</button>
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 text-xs">2</button>
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 text-xs">3</button>
<button class="size-8 flex items-center justify-center rounded border border-slate-200 dark:border-slate-700 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</nav>
</div>
</section>
<!-- Footer/Bottom Info -->
<footer class="flex items-center justify-between text-slate-500 text-sm py-4">
<p>© 2023 ElectroStore Management Panel</p>
<div class="flex gap-6">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">System Status</a>
<a class="hover:text-primary transition-colors" href="#">Help Center</a>
</div>
</footer>
</div>
</main>
</div>
</body></html>