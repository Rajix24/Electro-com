<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TechStore - User Login</title>
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-slate-900 min-h-screen flex items-center justify-center">
<div class="flex w-full min-h-screen">
<div class="hidden lg:flex lg:w-1/2 relative">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Someone using a premium laptop in a sleek office" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtA_Bix_IbcR_XWaLnYS_KXwvR-yNDrWSPPxtORKHidF4xbwzMDoSVj3GwzNMfLEp-5QhOi-6M6OTMFdU2pCj4bucdPS8mYorh18wnReZAncKUcOONMC3zMGa6KiF9ItGbdNGP7XoqDH58pRmll83j-JISYrApdRyrd9YF8qcy0_x7AnRe02HY04p3s4ip8VJepvq0PhWS6fw_RmkirNnJn4ZlGj-XLd0BWb5uihX57NPWW2m0KVVJpzP_L7KI6KvUNreQP_fZ0IM');">
<div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
</div>
<div class="relative z-10 flex flex-col justify-between p-12 text-white">
<div class="flex items-center gap-2">
<div class="size-10 bg-white flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-primary font-bold">bolt</span>
</div>
<span class="text-2xl font-bold tracking-tight">TechStore</span>
</div>
<div>
<h2 class="text-4xl font-bold mb-4">Elevate your workspace with the next generation of tech.</h2>
<p class="text-lg text-white/80 max-w-md">Join our community of innovators and get access to exclusive deals on premium electronics.</p>
</div>
<div class="text-sm opacity-70">
                    © 2024 TechStore. All rights reserved.
                </div>
</div>
</div>
<div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
<div class="max-w-md w-full">
<div class="lg:hidden flex items-center justify-center gap-2 mb-12">
<div class="size-10 bg-primary flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-white">bolt</span>
</div>
<h1 class="text-2xl font-bold tracking-tight">TechStore</h1>
</div>
<div class="mb-10 text-center lg:text-left">
<h2 class="text-3xl font-bold text-slate-900 mb-2">Welcome Back</h2>
<p class="text-slate-500">Please enter your details to sign in to your account.</p>
</div>
<form action="/AuthUser/login" method="POST" class="space-y-6">
<div>
<label class="block text-sm font-semibold text-slate-700 mb-2" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
<input name="email" autocomplete="email" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" id="email" name="email" placeholder="name@company.com" required="" type="email"/>
</div>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 mb-2" for="password">Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
<input name="password" autocomplete="current-password" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 text-primary focus:ring-primary border-slate-300 rounded" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block text-sm text-slate-600" for="remember-me">Remember me</label>
</div>
<div class="text-sm">
<a class="font-semibold text-primary hover:text-blue-700 transition-colors" href="#">Forgot Password?</a>
</div>
</div>
<button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-lg shadow-primary/20 text-sm font-bold text-white bg-primary hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all transform active:scale-[0.98]" type="submit">
                        Sign In
                    </button>
</form>
<div class="mt-8 relative">
<div aria-hidden="true" class="absolute inset-0 flex items-center">
<div class="w-full border-t border-slate-200"></div>
</div>
<div class="relative flex justify-center text-sm">
<span class="px-4 bg-white text-slate-500">Or continue with</span>
</div>
</div>
<div class="mt-8 grid grid-cols-2 gap-4">
<button class="w-full flex items-center justify-center gap-2 py-3 px-4 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors text-sm font-semibold text-slate-700" type="button">
<svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                        Google
                    </button>
<button class="w-full flex items-center justify-center gap-2 py-3 px-4 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors text-sm font-semibold text-slate-700" type="button">
<svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
<path d="M17.05 20.28c-.96.95-2.21 1.72-3.72 1.72-1.54 0-2.47-.93-3.95-.93-1.47 0-2.58.91-3.92.91-1.39 0-2.72-.82-3.72-1.85C.4 18.72-1 15.65-1 12.67c0-3.1 1.95-4.75 3.82-4.75 1.01 0 1.86.38 2.59.38.74 0 1.45-.43 2.65-.43 1.3 0 2.22.46 3.06 1.03.48.33 1.13.9 1.49 1.5-2.43.91-2.9 3.82-2.4 5.21.43 1.33 1.55 2.88 2.84 3.67zm-3.23-14.8c0-2.06-1.74-3.75-3.8-3.75-.03 0-.07 0-.1.01-.01.12-.02.24-.02.36 0 1.92 1.63 3.67 3.73 3.74.1 0 .19-.36.19-.36z" transform="translate(4,0) scale(1)"></path>
</svg>
                        Apple
                    </button>
</div>
<div class="mt-12 text-center">
<p class="text-sm text-slate-600">Don't have an account? <a class="font-bold text-primary hover:underline" href="/FrontController/signUp">Create an account</a></p>
</div>
</div>
</div>
</div>

</body></html>