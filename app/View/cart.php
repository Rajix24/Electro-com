<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Shopping Cart &amp; Checkout | ElectroStore</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen">
<!-- Top Navigation Bar -->
<header class="border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark/50 sticky top-0 z-50 backdrop-blur-md">
<div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-primary">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">bolt</span>
</div>
<h2 class="text-xl font-bold tracking-tight">ElectroStore</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Shop</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Deals</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Support</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden sm:flex items-center bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-1.5 w-64">
<span class="material-symbols-outlined text-slate-400 text-sm">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-slate-500" placeholder="Search products..." type="text"/>
</div>
<button class="p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors relative">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 right-1 size-4 bg-primary text-[10px] text-white flex items-center justify-center rounded-full">3</span>
</button>
<div class="size-8 rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden border border-slate-300 dark:border-slate-600">
<img alt="User" class="w-full h-full object-cover" data-alt="User profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiu3JAV-th3gnHup1r9Fbk2ZARrQs1noQ5cUqC5AsFXMqBfgrckcRc0CI1IVgR-01Zf6DWZjI82vZuZBbI6MHqUka_oo5RG4H-k7OVu7ia3ienJfwdEk71PDSalY7O17_qsFI55FyHAbUo8g3gLtb94UTJUnvz4dgMnd3atSgKlwxPacwLEfXxs3YY2QdDlui-FRQ9CJdB6103YNF_izA8C0h0ETeIJmqIVczeVfz8sofvn-2U__A3mww3uAYzw11aoyUi9MJkYJ8"/>
</div>
</div>
</div>
</header>
<main class="max-w-[1200px] mx-auto px-6 py-8">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 mb-6 text-sm">
<a class="text-slate-500 hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-xs text-slate-400">chevron_right</span>
<span class="font-medium">Checkout</span>
</nav>
<!-- Page Heading -->
<div class="mb-10">
<h1 class="text-4xl font-extrabold tracking-tight mb-2">Shopping Cart</h1>
<p class="text-slate-500 dark:text-slate-400">Review your items and complete your order.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<!-- Left Column: Cart Items and Checkout Form -->
<div class="lg:col-span-8 space-y-10">
<!-- Cart Items Section -->
<section>
<div class="flex items-center justify-between mb-4 pb-2 border-b border-slate-200 dark:border-slate-800">
<h3 class="text-lg font-bold">Items in Cart (3)</h3>
<button class="text-sm text-primary font-medium hover:underline">Clear all</button>
</div>
<div class="space-y-4">
<!-- Item 1 -->
<div class="flex flex-col sm:flex-row gap-6 bg-white dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors">
<div class="size-24 bg-slate-100 dark:bg-slate-800 rounded-lg flex-shrink-0">
<img class="w-full h-full object-contain p-2 rounded-lg" data-alt="Sony WH-1000XM5 wireless silver headphones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0HTw79CN_UP_U724A8EfDEmGeHmk-tXh_iKjThxRv8GY5TJ6BZBXBqJPRQr4NSVoER6mDbgLpYEFPEL8VKCZWgSGKV--akK9nRW7RlYFoCkp-wstVPO6fc8F_E1w5Eg1A46JvZMHVzbMoTpQ1xmdeX_ytOMOL6h7HCuLu-2eEz4Szqz-p0KvE7gZ378pBmgtq_idJG80h5vYwkUkhQg77bs_6wu32DOGETSetH_JrS9gZEhCQmsWO7IbWISSy0VqizuXrQkETUTE"/>
</div>
<div class="flex flex-col flex-1">
<div class="flex justify-between items-start">
<div>
<h4 class="font-semibold text-lg">Sony WH-1000XM5</h4>
<p class="text-sm text-slate-500 dark:text-slate-400">Color: Silver | SKU: SNY-XM5-SLV</p>
</div>
<p class="font-bold text-lg">$349.99</p>
</div>
<div class="mt-auto flex items-center justify-between">
<div class="flex items-center gap-3 bg-slate-100 dark:bg-slate-800 rounded-lg p-1">
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="text-sm font-bold w-4 text-center">1</span>
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
<button class="flex items-center gap-1.5 text-xs text-slate-500 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-sm">delete</span>
                                        Remove
                                    </button>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="flex flex-col sm:flex-row gap-6 bg-white dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors">
<div class="size-24 bg-slate-100 dark:bg-slate-800 rounded-lg flex-shrink-0">
<img class="w-full h-full object-contain p-2 rounded-lg" data-alt="Apple MacBook Pro 14-inch Space Gray" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAteRejxuYRRJECsMUc0Hl30EM7rsvOwZkwQZK9-x3oRdGAlvmEb53j4gojUm9TisnxfuZgmUzVkojrWGbCjG_biP6bJD7UCyRIlXAJlKDiy5VjrNY8kvEDwA8vmWgSLe2dCQ5kQGaMkNm9RoQsfUU1c0p8DUEs8rSitSAfWJKr5Uv3ZZJKGEbYxoSKVUUZNTzyFLHG_Lp4WU1lxEYs-PXh-OelNc556fPCY9QjpgvKHAbRaB0_BHZ7Qg00EHajXN08xj_vzWAEzZQ"/>
</div>
<div class="flex flex-col flex-1">
<div class="flex justify-between items-start">
<div>
<h4 class="font-semibold text-lg">Apple MacBook Pro 14"</h4>
<p class="text-sm text-slate-500 dark:text-slate-400">M2 Pro, 16GB RAM, 512GB SSD</p>
</div>
<p class="font-bold text-lg">$1,999.00</p>
</div>
<div class="mt-auto flex items-center justify-between">
<div class="flex items-center gap-3 bg-slate-100 dark:bg-slate-800 rounded-lg p-1">
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="text-sm font-bold w-4 text-center">1</span>
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
<button class="flex items-center gap-1.5 text-xs text-slate-500 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-sm">delete</span>
                                        Remove
                                    </button>
</div>
</div>
</div>
<!-- Item 3 -->
<div class="flex flex-col sm:flex-row gap-6 bg-white dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors">
<div class="size-24 bg-slate-100 dark:bg-slate-800 rounded-lg flex-shrink-0">
<img class="w-full h-full object-contain p-2 rounded-lg" data-alt="Magic Mouse 2 Space Gray" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKpGLZu9lW4K8Ej5y_YR49MKihi2yWf8iV_hzmPLPioGRzk9jYVFVniYE_6wcCsNomCV6hYl6VMHqKpO8pyLvKCUHsbQll7wY6zfn6ItYpbRY9nd0X_J1Pp-3pHsJx19wH56X4o06B9eprE9aB6q81XzcUGqnqa4RBgzsfY4sLmVbigsFKjRnlDo3PaDJw6MCQw5VWzBX5a9a9b6FhrkwgT9tYAyn6vdEP5KCcVY3utoMWatXws3HlcmvV209n5_fDXdHFdYpw00w"/>
</div>
<div class="flex flex-col flex-1">
<div class="flex justify-between items-start">
<div>
<h4 class="font-semibold text-lg">Apple Magic Mouse</h4>
<p class="text-sm text-slate-500 dark:text-slate-400">Wireless, Rechargeable, Space Gray</p>
</div>
<p class="font-bold text-lg">$99.00</p>
</div>
<div class="mt-auto flex items-center justify-between">
<div class="flex items-center gap-3 bg-slate-100 dark:bg-slate-800 rounded-lg p-1">
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="text-sm font-bold w-4 text-center">1</span>
<button class="size-8 flex items-center justify-center hover:bg-white dark:hover:bg-slate-700 rounded transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
<button class="flex items-center gap-1.5 text-xs text-slate-500 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-sm">delete</span>
                                        Remove
                                    </button>
</div>
</div>
</div>
</div>
</section>
<!-- Stepper Progress -->
<div class="flex items-center justify-between max-w-md mx-auto pt-8">
<div class="flex flex-col items-center gap-2">
<div class="size-10 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</div>
<span class="text-xs font-semibold">Shipping</span>
</div>
<div class="flex-1 h-px bg-slate-200 dark:bg-slate-800 mx-4 -mt-6"></div>
<div class="flex flex-col items-center gap-2 opacity-50">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center font-bold">2</div>
<span class="text-xs font-semibold">Payment</span>
</div>
<div class="flex-1 h-px bg-slate-200 dark:bg-slate-800 mx-4 -mt-6"></div>
<div class="flex flex-col items-center gap-2 opacity-50">
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center font-bold">3</div>
<span class="text-xs font-semibold">Review</span>
</div>
</div>
<!-- Checkout Form -->
<section class="bg-white dark:bg-slate-900/50 p-8 rounded-2xl border border-slate-200 dark:border-slate-800">
<h3 class="text-xl font-bold mb-6">Shipping Information</h3>
<form class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-sm font-medium text-slate-500">First Name</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="John" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-medium text-slate-500">Last Name</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="Doe" type="text"/>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-sm font-medium text-slate-500">Street Address</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="123 Technology Way" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-medium text-slate-500">City</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="San Francisco" type="text"/>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<label class="text-sm font-medium text-slate-500">State</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="CA" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-medium text-slate-500">Zip Code</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="94105" type="text"/>
</div>
</div>
<div class="md:col-span-2 flex items-center gap-3 pt-2">
<input class="rounded border-slate-300 dark:border-slate-700 text-primary focus:ring-primary bg-transparent" id="save-address" type="checkbox"/>
<label class="text-sm text-slate-500" for="save-address">Save this address for future purchases</label>
</div>
</form>
</section>
</div>
<!-- Right Column: Order Summary (Sticky) -->
<div class="lg:col-span-4 lg:sticky lg:top-24">
<div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl shadow-black/5">
<h3 class="text-xl font-bold mb-6">Order Summary</h3>
<div class="space-y-4 mb-6">
<div class="flex justify-between text-slate-500 dark:text-slate-400">
<span>Subtotal</span>
<span class="text-slate-900 dark:text-white font-medium">$2,447.99</span>
</div>
<div class="flex justify-between text-slate-500 dark:text-slate-400">
<span>Shipping</span>
<span class="text-green-500 font-medium">Free</span>
</div>
<div class="flex justify-between text-slate-500 dark:text-slate-400">
<span>Estimated Tax</span>
<span class="text-slate-900 dark:text-white font-medium">$208.08</span>
</div>
<div class="pt-4 border-t border-slate-200 dark:border-slate-800">
<div class="flex justify-between items-end">
<span class="text-lg font-bold">Total</span>
<span class="text-2xl font-black text-primary">$2,656.07</span>
</div>
</div>
</div>
<!-- Promo Code -->
<div class="mb-8">
<label class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2 block">Promo Code</label>
<div class="flex gap-2">
<input class="flex-1 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg text-sm px-3 focus:ring-primary focus:border-primary" placeholder="Enter code" type="text"/>
<button class="px-4 py-2 bg-slate-200 dark:bg-slate-700 font-bold text-sm rounded-lg hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors">Apply</button>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98] mb-4 flex items-center justify-center gap-2">
                        Proceed to Payment
                        <span class="material-symbols-outlined">arrow_forward</span>
</button>
<div class="flex flex-col items-center gap-4">
<div class="flex items-center gap-3 opacity-50 grayscale hover:grayscale-0 transition-all">
<span class="material-symbols-outlined text-2xl">credit_card</span>
<span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
<span class="material-symbols-outlined text-2xl">shield</span>
</div>
<p class="text-[10px] text-center text-slate-500 uppercase tracking-widest leading-relaxed">
                            Secured with 256-bit SSL Encryption<br/>
                            Compliant with PCI-DSS Standards
                        </p>
</div>
</div>
<!-- Admin Management Mini-Card (Contextual) -->
<div class="mt-8 p-4 bg-primary/5 border border-primary/20 rounded-xl flex items-center gap-4">
<div class="size-10 bg-primary/20 rounded-lg flex items-center justify-center text-primary">
<span class="material-symbols-outlined">settings</span>
</div>
<div>
<p class="text-xs font-bold text-primary uppercase tracking-tighter">Admin Panel</p>
<p class="text-sm font-medium">Manage Inventory &amp; Orders</p>
</div>
<a class="ml-auto material-symbols-outlined text-primary" href="#">open_in_new</a>
</div>
</div>
</div>
</main>
<footer class="mt-20 border-t border-slate-200 dark:border-slate-800 py-12">
<div class="max-w-[1200px] mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="col-span-2">
<div class="flex items-center gap-2 text-primary mb-4">
<span class="material-symbols-outlined">bolt</span>
<span class="font-bold">ElectroStore</span>
</div>
<p class="text-slate-500 text-sm max-w-xs leading-relaxed">
                    Premium electronics and hardware components for professionals and hobbyists since 2012.
                </p>
</div>
<div>
<h4 class="font-bold mb-4">Support</h4>
<ul class="space-y-2 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Returns &amp; Refunds</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Shipping Policy</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-4">Company</h4>
<ul class="space-y-2 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Privacy</a></li>
</ul>
</div>
</div>
<div class="max-w-[1200px] mx-auto px-6 mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 text-center text-xs text-slate-400">
            © 2024 ElectroStore Inc. All rights reserved.
        </div>
</footer>
</body></html>