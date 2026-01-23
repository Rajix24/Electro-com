<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sign Up - TechStore</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
<style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-auth-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(19, 91, 236, 0.1) 1px, transparent 0);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="flex min-h-screen">
<div class="w-full lg:w-1/2 flex flex-col p-8 md:p-12 lg:p-24 justify-center bg-white dark:bg-background-dark relative z-10">
<div class="max-w-md w-full mx-auto">
<div class="flex items-center gap-2 mb-12">
<div class="size-9 bg-primary flex items-center justify-center rounded-lg shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white">bolt</span>
</div>
<h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">TechStore</h1>
</div>
    <div class="mb-10">
    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-2">Create an account</h2>
    <p class="text-slate-500 dark:text-slate-400">Join our community for exclusive deals and personalized experience.</p>
    </div>
<form method="POST" action="/AuthUser/signUp" class="space-y-5">
<div>
<label class="block text-sm font-semibold mb-2 text-slate-700 dark:text-slate-300" for="fullname">Full Name</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">person</span>
<input name="username" class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-800 rounded-lg py-3 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all outline-none" id="fullname" placeholder="Enter Your Name" required="" type="text"/>
<!-- <input name="role" value="user" type="hidden"/> -->
</div>
</div>
<div>
<label class="block text-sm font-semibold mb-2 text-slate-700 dark:text-slate-300" for="email">Email Address</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">mail</span>
<input name="email" class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-800 rounded-lg py-3 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all outline-none" id="email" placeholder="name@company.com" required="" type="email"/>
</div>
</div>
<div>
<label class="block text-sm font-semibold mb-2 text-slate-700 dark:text-slate-300" for="password">Password</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock</span>
<input name="password" class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-800 rounded-lg py-3 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all outline-none" id="password" placeholder="••••••••" required="" type="password"/>
</div>
<div class="mt-3">
<div class="flex justify-between items-center mb-1.5">
<span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider">Password Strength</span>
<span class="text-[11px] font-bold text-yellow-500 uppercase tracking-wider">Medium</span>
</div>
<div class="flex gap-1 h-1">
<div class="flex-1 bg-primary rounded-full"></div>
<div class="flex-1 bg-primary rounded-full"></div>
<div class="flex-1 bg-slate-200 dark:bg-slate-800 rounded-full"></div>
<div class="flex-1 bg-slate-200 dark:bg-slate-800 rounded-full"></div>
</div>
</div>
</div>
<div class="flex items-start gap-3 py-2">
<div class="flex items-center h-5">
<input class="w-5 h-5 rounded border-slate-300 text-primary focus:ring-primary/50 bg-slate-50 dark:bg-slate-900 dark:border-slate-700" id="terms" required="" type="checkbox"/>
</div>
<label class="text-sm text-slate-600 dark:text-slate-400 leading-tight" for="terms">
                            I agree to the <a class="text-primary font-bold hover:underline" href="#">Terms of Service</a> and <a class="text-primary font-bold hover:underline" href="#">Privacy Policy</a>.
                        </label>
</div>
<button 
  type="submit" class="block w-full text-center bg-primary text-white py-4 px-6 rounded-xl font-bold text-lg
          hover:bg-primary/90 transition-all duration-200
          shadow-xl shadow-primary/30
          active:scale-95 mt-4">
    Create Account
    </button>
</form>
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-slate-200 dark:border-slate-800"></div>
</div>
<div class="relative flex justify-center text-xs uppercase">
<span class="bg-white dark:bg-background-dark px-4 text-slate-500 font-medium">Or continue with</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 border border-slate-200 dark:border-slate-800 py-2.5 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
<img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcJWCxs19qPTQTveyaWHmxosIoQQuH4kQ9meuf4zI7NBneDM2cGqLVO36eJsEZus8RtNq6XQy_Y6QEthJmoHusx4rtDpjCIE0O2Uyy8XU1WNhHnNVKkoZpPgq8ivyDM3tV-uwTD3lXNWriv4cl3Ur3EBuYbf95GF2TZDi_uD2g3Kui4EfQdlyihEN5LoJ8OHB7UmtgK9dKQecJqgyKUxfi1H1hv83MZydSA9Et1TzuW3X_wA5zlUqZFM5NSeFKPLwrd45zoU7GFj4"/>
<span class="text-sm font-semibold">Google</span>
</button>
<button class="flex items-center justify-center gap-2 border border-slate-200 dark:border-slate-800 py-2.5 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
<img alt="Apple" class="w-5 h-5 dark:invert" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCiLCpBbLhUYcGYJJ-35diurHATN75HGZ6ggfKNAwOs-YyeZv3rPNEP5uFlmpIRjMZE-6b1DXtyxQVmReh7cEqK7682srY2Ymfl3SoW4VdJpQjg8NoTAqwN7E6M4p5RuoRz-SpUl9_NaRX4awyzYBF8gj0A_jRyFTeCKgN5c1fLluT72qQbiirgxg8DRe6SRqzY3IIkKXU6whtwKjmcvhOd8aLNmS_ce_mLfxI_M9EgxY2wHv5JUhmZpaR4kgS242zoW3cxv9lHiU"/>
<span class="text-sm font-semibold">Apple</span>
</button>
</div>
<p class="mt-10 text-center text-sm text-slate-500">
                    Already have an account? 
                    <a class="text-primary font-bold hover:underline ml-1" href="#">Sign In</a>
</p>
</div>
</div>
<div class="hidden lg:flex lg:w-1/2 bg-slate-900 relative overflow-hidden">
<div class="absolute inset-0 bg-auth-pattern opacity-30"></div>
<div class="absolute inset-0 bg-center bg-cover scale-110 opacity-60 mix-blend-overlay" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBvADej2iCMNw87KKXPSBZP9lscPk7fDKLU1PkwLOqzLfxsohCpYARtpvKv8f0DtxlOybrNr2_qT3n1Y_USgOUuL8MGKgCPK68JRwVGxIRfdCWrOQus52GZaBCNXuaCNtVPArz4loI4ZCpU4n-PrMu4ZRQ1uFc4XH2B3HfpT81y6IYpHkDg6ok_U9Ig1nXCkkoHZZMR6buoB2A86lQ42OoWDA1ygNYO5vpHaDhN6CqBSjqWCwcu6Vz3i85jHrd1cj983yrJvSo2ZNM');"></div>
<div class="relative z-20 flex flex-col justify-between p-16 w-full h-full">
<div class="space-y-4 max-w-lg">
<span class="inline-block px-3 py-1 bg-primary/20 text-primary text-xs font-bold tracking-widest uppercase rounded border border-primary/30 backdrop-blur-sm">Exclusive Member Perks</span>
<h2 class="text-5xl font-black text-white leading-[1.1]">Join for the best tech experience.</h2>
<p class="text-slate-300 text-lg">Create an account to track your orders, save items to your wishlist, and enjoy 10% off your first purchase.</p>
</div>
<div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-8 max-w-md">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
<span class="material-symbols-outlined fill-1">star</span>
</div>
<p class="text-white font-medium italic mb-6">"The best place to find cutting-edge electronics. Their customer portal makes managing my business equipment so much easier."</p>
<div class="flex items-center gap-4">
<div class="size-12 rounded-full bg-slate-700 overflow-hidden border-2 border-primary/50">
<div class="w-full h-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAeHVV-Aj8GrF3sEKzWHvo-s561tqm0hJoJ44T_fKKqgp_o155FSyk5-5rbEIizMQ2UFniVz27j_EjMQ-6hSasLOEF-grQRmyKz5P2QNjbd34pebQWAP6oxIn9GzoPM-6SJoX-jMUAY4kVpqN8s8CFzH3IBOvDW-U-6yFPolFLUp2wZU6_Cg_fG_7aJa8_ylb_c7X3ywfq3_WX4u6JO4XhNiyhsKws4RKc46Egho_9TeoQZHA5fw7ucrK5rKLn6bh1MSsoYUFfAU_Y')"></div>
</div>
<div>
<p class="text-white font-bold text-sm">Marcus Chen</p>
<p class="text-slate-400 text-xs uppercase tracking-wider font-bold">Creative Director</p>
</div>
</div>
</div>
</div>
<div class="absolute -bottom-24 -right-24 size-96 bg-primary/20 rounded-full blur-[120px]"></div>
<div class="absolute -top-24 -left-24 size-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
</div>
</div>

</body></html>