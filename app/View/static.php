<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Product Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-white transition-colors duration-200">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- TopNavBar Component -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#282e39] bg-background-light dark:bg-background-dark px-10 py-3">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-white">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">ElectroAdmin</h2>
</div>
<label class="flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full overflow-hidden">
<div class="text-[#9da6b9] flex border-none bg-slate-200 dark:bg-[#282e39] items-center justify-center pl-4">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-slate-200 dark:bg-[#282e39] text-slate-900 dark:text-white focus:outline-0 focus:ring-0 h-full placeholder:text-[#9da6b9] px-4 pl-2 text-sm font-normal" placeholder="Search products..." value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden lg:flex items-center gap-9">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary dark:hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary dark:hover:text-primary transition-colors" href="#">Orders</a>
<a class="text-primary text-sm font-bold border-b-2 border-primary py-1" href="#">Products</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary dark:hover:text-primary transition-colors" href="#">Customers</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary dark:hover:text-primary transition-colors" href="#">Analytics</a>
</div>
<div class="flex gap-2">
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-200 dark:bg-[#282e39] text-slate-600 dark:text-white">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-200 dark:bg-[#282e39] text-slate-600 dark:text-white">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" data-alt="Avatar of the administrator" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD9ekeBAVkdDz7mC70nEliEh7yKjCn6106jjOO4DpzLa2hnqfKS_c7Ba_f8P1z-ZoW9yoMAu2zKnT9YKq0QzDnGTpc5u0V40ZpUh9jaegcA1EfB2zD8vqL2O1kJn9JmbMPalJ7IWvEfH_jjzENsHnJeCKZCniQ-eWlv1o9Xp2re6fKgbdvrU_ZjH-sXG4TOJHjvGWUVLjFBqhws1S5ZlLgPmQWJ-DeMeWMVXDxB_qeJfWkcMLY1Ep22if0kkpMSygO5RdyZ02P3R7w");'></div>
</div>
</header>
<main class="flex flex-1 flex-col px-4 md:px-10 lg:px-40 py-8">
<!-- PageHeading Component -->
<div class="flex flex-wrap items-center justify-between gap-3 pb-8">
<div>
<p class="text-slate-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Product Management</p>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Manage your store's inventory and product details</p>
</div>
<button class="flex min-w-[120px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-11 px-5 bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
<span class="material-symbols-outlined">add</span>
<span class="truncate">Add New Product</span>
</button>
</div>
<!-- Filters Section -->
<div class="bg-slate-100 dark:bg-[#1c222d] rounded-xl p-4 mb-6 border border-slate-200 dark:border-[#282e39] flex flex-wrap items-end gap-4">
<!-- TextField/Select Component - Category -->
<label class="flex flex-col min-w-[200px] flex-1 lg:flex-none">
<p class="text-slate-700 dark:text-slate-300 text-xs font-bold uppercase tracking-wider pb-2">Category</p>
<div class="relative">
<select class="form-input appearance-none w-full rounded-lg text-slate-900 dark:text-white border border-slate-300 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] focus:ring-2 focus:ring-primary h-11 px-4 text-sm">
<option value="all">All Categories</option>
<option value="smartphones">Smartphones</option>
<option value="laptops">Laptops</option>
<option value="audio">Audio &amp; Accessories</option>
<option value="monitors">Monitors</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
</div>
</label>
<!-- TextField/Select Component - Stock Status -->
<label class="flex flex-col min-w-[200px] flex-1 lg:flex-none">
<p class="text-slate-700 dark:text-slate-300 text-xs font-bold uppercase tracking-wider pb-2">Stock Status</p>
<div class="relative">
<select class="form-input appearance-none w-full rounded-lg text-slate-900 dark:text-white border border-slate-300 dark:border-[#3b4354] bg-white dark:bg-[#1c1f27] focus:ring-2 focus:ring-primary h-11 px-4 text-sm">
<option value="all">All Statuses</option>
<option value="instock">In Stock</option>
<option value="lowstock">Low Stock</option>
<option value="outstock">Out of Stock</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">filter_list</span>
</div>
</label>
<!-- Quick Chips -->
<div class="flex-1 flex flex-col">
<p class="text-slate-700 dark:text-slate-300 text-xs font-bold uppercase tracking-wider pb-2">Quick Filters</p>
<div class="flex gap-2 flex-wrap">
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-primary/10 border border-primary/30 px-4 text-primary text-xs font-bold">
<span>Featured</span>
<span class="material-symbols-outlined text-sm">star</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-slate-200 dark:bg-[#282e39] px-4 text-slate-600 dark:text-slate-300 text-xs font-bold hover:bg-slate-300 dark:hover:bg-[#343b48]">
<span>On Sale</span>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-slate-200 dark:bg-[#282e39] px-4 text-slate-600 dark:text-slate-300 text-xs font-bold hover:bg-slate-300 dark:hover:bg-[#343b48]">
<span>Discontinued</span>
</button>
</div>
</div>
</div>
<!-- Table Component -->
<div class="overflow-hidden rounded-xl border border-slate-200 dark:border-[#3b4354] bg-white dark:bg-[#111318] shadow-xl">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-[#1c1f27] border-b border-slate-200 dark:border-[#3b4354]">
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider w-20">Image</th>
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider min-w-[200px]">Product Name</th>
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Category</th>
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Price</th>
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">Stock Level</th>
<th class="px-6 py-4 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-[#3b4354]">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-[#1c1f27]/50 transition-colors group">
<td class="px-6 py-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg w-12 border border-slate-200 dark:border-[#3b4354]" data-alt="iPhone 15 Pro thumbnail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCShgEinuyNjkqKUgS0wfIgAGCnQ2irFhGVqy4XvFa-hRt2eB5pVSxsHX9w1AzGDudtQaHzI9zMTAUB6EcD3zJsxsfi_fExNOxpY42DKp8IC-pnNZlifJzOUCZyFFoWeBoAWOzDJbdCa4DpOIup0d1LE09WyhMblaGFw3jlaq-qART_z70JQENVArm6sFk-9C5_f8-c6twOg__In_Jya1azFz3XyqnXYhazROWEN5U3BezRne45WhwkGd6XRm07e9YL3omPe3W79qs");'></div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-slate-900 dark:text-white font-semibold text-sm">iPhone 15 Pro</span>
<span class="text-slate-400 text-xs">SKU: APP-IP15-P</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-[#282e39] px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300">Smartphones</span>
</td>
<td class="px-6 py-4 text-slate-900 dark:text-white font-medium text-sm">$999.00</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 overflow-hidden rounded-full bg-slate-200 dark:bg-[#3b4354] h-1.5">
<div class="h-full rounded-full bg-green-500" style="width: 85%;"></div>
</div>
<p class="text-slate-900 dark:text-white text-xs font-bold">85</p>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-slate-600 dark:text-white hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-red-500 hover:bg-red-500 hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-[#1c1f27]/50 transition-colors group">
<td class="px-6 py-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg w-12 border border-slate-200 dark:border-[#3b4354]" data-alt="MacBook Air M2 thumbnail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDqDdkrW-SgMbTPgsf4OvDDsMkiggdozGfbSRGcV7uvSaYBMtlDp8ag4eg11OYcq0snue6iSIQxP8ia97dBZAZ-s14ZtonjeIlkDPAFAwpVpRVAQVGxtUxCrJ5N-jLVBUsmBW_6wZiNBPLPs8bNBreeQhNhl4bc5xboJBGu3qvH0E5-kjn1vr1RjvCODNG0ZxT2qr_IGNltbn0_FjP_MtWurMyLp-e1ClLWoA1Vv5owLAnYI8CeuJA-BKCDV1lU4HLhKGcXBUNuqcA");'></div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-slate-900 dark:text-white font-semibold text-sm">MacBook Air M2</span>
<span class="text-slate-400 text-xs">SKU: APP-MBA-M2</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-[#282e39] px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300">Laptops</span>
</td>
<td class="px-6 py-4 text-slate-900 dark:text-white font-medium text-sm">$1,199.00</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 overflow-hidden rounded-full bg-slate-200 dark:bg-[#3b4354] h-1.5">
<div class="h-full rounded-full bg-orange-400" style="width: 40%;"></div>
</div>
<p class="text-slate-900 dark:text-white text-xs font-bold">40</p>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-slate-600 dark:text-white hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-red-500 hover:bg-red-500 hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-[#1c1f27]/50 transition-colors group">
<td class="px-6 py-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg w-12 border border-slate-200 dark:border-[#3b4354]" data-alt="Sony Headphones thumbnail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBCLMNioMeOzx6XNirdWJhdEr8w87-kquY_B87UFNd8xCZ6-yITTsokb1bf9WLzZ9wo707TxasIXrA_QbfZidAchtTH4sqEXzHPRJmILBa-XdUOYFUgU5mqm5jtBKN4UQsezTOaR18ADAZVdiI7N1S4CbTPaeUrePfevyU3s1UMrWD70Sur626uhlG9hFxGw5ZUiU1e1SkC_-Pi07-isv1j3Hp-PIL4snTve-Gp515u8LxHH6LAyzftQ6fja-97Q-RN9PdKMrVT148");'></div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-slate-900 dark:text-white font-semibold text-sm">Sony WH-1000XM5</span>
<span class="text-slate-400 text-xs">SKU: SNY-XM5-W</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-[#282e39] px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300">Accessories</span>
</td>
<td class="px-6 py-4 text-slate-900 dark:text-white font-medium text-sm">$349.00</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 overflow-hidden rounded-full bg-slate-200 dark:bg-[#3b4354] h-1.5">
<div class="h-full rounded-full bg-red-500" style="width: 12%;"></div>
</div>
<p class="text-slate-900 dark:text-white text-xs font-bold">12</p>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-slate-600 dark:text-white hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-red-500 hover:bg-red-500 hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 dark:hover:bg-[#1c1f27]/50 transition-colors group">
<td class="px-6 py-4">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg w-12 border border-slate-200 dark:border-[#3b4354]" data-alt="Dell Monitor thumbnail" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDE42RKpumd0nRgy85LuzhVf7otBFTNpOWWNrj1KxGWVJ4E70YjjxIVo3iWWNvk_saQqXBQVwlEL8zKv4W4cVA1Np7OmDomdtCrbjlHp_B-J6Lx9zjS3YrV8nzCLoBZn6oOQoL7kFTsLMivhvUjOw2AEQ8jLJ-Bkm88Uu4aSNhJicPT4n3HOl-5WLSamZPj6CXzhcdZPoLFKkg70ZA0sAWJb_98kqw8iEOSwvKbBByify1DcPAYNyryW3pTJkRHeNwYVsmtRaCpbX8");'></div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-slate-900 dark:text-white font-semibold text-sm">Dell UltraSharp 27</span>
<span class="text-slate-400 text-xs">SKU: DEL-U27-M</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-[#282e39] px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-slate-300">Monitors</span>
</td>
<td class="px-6 py-4 text-slate-900 dark:text-white font-medium text-sm">$599.00</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 overflow-hidden rounded-full bg-slate-200 dark:bg-[#3b4354] h-1.5">
<div class="h-full rounded-full bg-orange-400" style="width: 28%;"></div>
</div>
<p class="text-slate-900 dark:text-white text-xs font-bold">25</p>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-slate-600 dark:text-white hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-[#282e39] text-red-500 hover:bg-red-500 hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Section -->
<div class="flex items-center justify-between border-t border-slate-200 dark:border-[#3b4354] bg-slate-50 dark:bg-[#1c1f27] px-6 py-4">
<div class="flex items-center gap-4">
<p class="text-slate-500 text-xs font-medium">Showing 1-10 of 256 products</p>
</div>
<div class="flex items-center gap-2">
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-slate-200 dark:bg-[#282e39] text-slate-500 dark:text-slate-400 hover:bg-slate-300 dark:hover:bg-[#343b48] disabled:opacity-50" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-primary text-white font-bold text-sm">1</button>
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-[#282e39] font-medium text-sm">2</button>
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-[#282e39] font-medium text-sm">3</button>
<span class="text-slate-400">...</span>
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-transparent text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-[#282e39] font-medium text-sm">26</button>
<button class="flex items-center justify-center rounded-lg h-9 w-9 bg-slate-200 dark:bg-[#282e39] text-slate-500 dark:text-slate-400 hover:bg-slate-300 dark:hover:bg-[#343b48]">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>