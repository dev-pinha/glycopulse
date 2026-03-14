<?php
session_start();
if (!empty($_SERVER['QUERY_STRING'])) {
    $_SESSION['cam'] = $_SERVER['QUERY_STRING'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glyco Pulse™ Official Store | Blood Sugar Support Capsules</title>
    <meta name="description" content="Buy authentic Glyco Pulse capsules directly from the official partner. 180-day money-back guarantee. Fast shipping. Secure checkout.">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Glyco Pulse™ Official Store | Blood Sugar Support Capsules">
    <meta property="og:description" content="Buy authentic Glyco Pulse capsules directly from the official partner. 180-day money-back guarantee.">
    <meta property="og:image" content="assets/images/product-hero.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Glyco Pulse™ Official Store | Blood Sugar Support Capsules">
    <meta property="twitter:description" content="Buy authentic Glyco Pulse capsules. 180-day money-back guarantee. Free shipping on 6-bottle orders.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            500: '#ef4444',
                            600: '#dc2626',
                            800: '#991b1b',
                            900: '#450a0a',
                            accent: '#dc2626',
                            'accent-hover': '#b91c1c',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .bg-brand-gradient {
            background: linear-gradient(135deg, #450a0a 0%, #7f1d1d 50%, #991b1b 100%);
        }
        .text-accent { color: #dc2626; }
        .bg-accent { background-color: #dc2626; }
        .hover-bg-accent-dark:hover { background-color: #b91c1c; }
    </style>

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Glyco Pulse",
      "description": "Glyco Pulse is a blood sugar support supplement with 7 clinically-studied ingredients including berberine, cinnamon, chromium, and more. Capsules, 30 per bottle.",
      "brand": { "@type": "Brand", "name": "Glyco Pulse" },
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.8", "reviewCount": "12043" },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "price": "49.00",
        "priceValidUntil": "2026-12-31",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Announcement Bar -->
    <div class="bg-accent text-white text-center py-2 text-sm font-bold tracking-wide">
        OFFICIAL STORE PARTNER &nbsp;|&nbsp; LIMITED TIME: FREE SHIPPING ON 6 BOTTLE ORDERS
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 shadow-sm transition-all duration-300" id="main-header" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <span class="text-3xl font-extrabold text-brand-900 tracking-tight">Glyco Pulse™</span>
                    <span class="bg-red-50 text-brand-800 text-xs font-semibold px-2.5 py-0.5 rounded border border-red-100">OFFICIAL</span>
                </div>

                <!-- Nav -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#how-it-works" class="text-brand-900 hover:text-accent font-medium transition">How It Works</a>
                    <a href="#ingredients" class="text-brand-900 hover:text-accent font-medium transition">Ingredients</a>
                    <a href="#reviews" class="text-brand-900 hover:text-accent font-medium transition">Reviews</a>
                    <a href="#faq" class="text-brand-900 hover:text-accent font-medium transition">FAQ</a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-brand-900 hover:text-accent focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- CTA -->
                <a href="#order-now" class="hidden md:inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-bold rounded-full text-white bg-accent hover-bg-accent-dark transition shadow-lg transform hover:-translate-y-0.5">
                    Check Availability
                </a>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-collapse x-cloak class="md:hidden border-t border-gray-100 bg-white absolute left-0 right-0 shadow-lg">
                <nav class="flex flex-col p-4 space-y-4 text-center">
                    <a href="#ingredients" @click="mobileMenuOpen = false" class="text-brand-900 font-bold text-lg hover:text-accent py-2">Ingredients</a>
                    <a href="#reviews" @click="mobileMenuOpen = false" class="text-brand-900 font-bold text-lg hover:text-accent py-2">Reviews</a>
                    <a href="#bundles" @click="mobileMenuOpen = false" class="text-brand-900 font-bold text-lg hover:text-accent py-2">Pricing</a>
                    <a href="#faq" @click="mobileMenuOpen = false" class="text-brand-900 font-bold text-lg hover:text-accent py-2">FAQ</a>
                    <a href="#order-now" @click="mobileMenuOpen = false" class="bg-accent text-white font-bold py-3 px-6 rounded-full mx-auto w-full max-w-xs block">Order Now</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-brand-gradient pt-16 pb-24 lg:pt-24 lg:pb-32 overflow-hidden text-white">
        <div class="absolute inset-0 z-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mix-blend-overlay"></div>
        <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-red-500 rounded-full blur-[120px] opacity-20"></div>
        <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-accent rounded-full blur-[120px] opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="text-center lg:text-left space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white text-sm font-semibold border border-white/20 mb-2 animate-fade-in-up backdrop-blur-sm">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                        High Demand: Limited Stock Available
                    </div>

                    <h1 class="text-4xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight animate-fade-in-up drop-shadow-sm">
                        Glyco Pulse™ <br class="hidden lg:block"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-200 to-rose-400">Support Healthy Blood Sugar</span> Naturally
                    </h1>

                    <p class="text-lg text-gray-200 leading-relaxed max-w-2xl mx-auto lg:mx-0 animate-fade-in-up font-light">
                        Clinically-studied ingredients in every capsule. Manuka honey extract, Gymnema Sylvestre, berberine, and more. Made in the USA. 180-day money-back guarantee.
                    </p>

                    <!-- Mobile Product Image -->
                    <div class="block lg:hidden relative w-64 mx-auto my-8 animate-fade-in-up">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-white/20 rounded-full blur-2xl opacity-40"></div>
                        <img src="assets/images/product-hero.png" alt="Glyco Pulse Bottles" class="relative z-10 w-full h-auto drop-shadow-xl">
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-4 pt-4 animate-fade-in-up justify-center lg:justify-start">
                        <a href="#order-now" class="group relative inline-flex items-center justify-between px-8 py-3.5 text-lg font-bold text-white transition-all duration-300 bg-[#D11846] hover:bg-[#b0143b] rounded-full shadow-[0_10px_40px_-10px_rgba(209,24,70,0.5)] w-full sm:w-auto min-w-[260px] overflow-hidden">
                            <span class="relative z-10">Get Glyco Pulse Now</span>
                            <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-white/20 rounded-full group-hover:translate-x-1 transition-transform">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </a>

                        <div class="inline-flex flex-col items-center lg:items-start gap-2 px-5 py-3 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-colors shadow-lg">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-[#FFC900]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-[#FFC900]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-[#FFC900]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-[#FFC900]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-4 h-4 text-[#FFC900]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <div class="flex flex-col text-center lg:text-left">
                                <span class="text-white text-base font-bold leading-tight">4.8/5 Rating</span>
                                <span class="text-white/80 text-xs font-medium">(12,043 Reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Image (Desktop) -->
                <div class="hidden lg:flex relative h-full items-center justify-center animate-fade-in">
                    <div class="relative w-full max-w-lg mx-auto aspect-[4/5]">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-white/20 rounded-full blur-3xl opacity-40"></div>
                        <div class="relative z-10 transform hover:scale-105 transition duration-700 ease-out">
                            <img src="assets/images/product-hero.png" alt="Glyco Pulse Bottles" class="w-full h-auto drop-shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-12 md:mt-20 pt-8 border-t border-white/10 flex justify-center lg:justify-start">
                <img src="assets/images/icons-fda.webp" alt="Trust Badges: Natural, Non-GMO, Made in USA, FDA Registered" class="h-16 md:h-20 object-contain opacity-90 hover:opacity-100 transition duration-300">
            </div>
        </div>
    </section>

    <!-- Product Section (Shopify Style) -->
    <section id="order-now" class="py-24 bg-[#fdfbf6]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 xl:gap-20">

                <!-- Left: Product Gallery -->
                <div class="space-y-6" x-data="{ activeImage: 'assets/images/6kits.png' }">
                    <div class="relative aspect-square bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden group">
                        <img :src="activeImage" alt="Glyco Pulse Product" class="w-full h-full object-contain p-8 transform group-hover:scale-105 transition duration-500">
                        <div x-show="activeImage.includes('6kits')" class="absolute top-6 left-6 bg-accent text-white text-sm font-bold px-4 py-1.5 rounded-full shadow-lg">
                            BEST VALUE
                        </div>
                    </div>

                    <!-- Thumbnails -->
                    <div class="grid grid-cols-5 gap-2">
                        <button @click="activeImage = 'assets/images/6kits.png'" :class="activeImage.includes('6kits') ? 'ring-2 ring-accent ring-offset-2' : 'hover:opacity-80'" class="aspect-square bg-white rounded-xl border border-gray-200 p-1 transition">
                            <img src="assets/images/6kits.png" class="w-full h-full object-contain">
                        </button>
                        <button @click="activeImage = 'assets/images/3kits.png'" :class="activeImage.includes('3kits') ? 'ring-2 ring-accent ring-offset-2' : 'hover:opacity-80'" class="aspect-square bg-white rounded-xl border border-gray-200 p-1 transition">
                            <img src="assets/images/3kits.png" class="w-full h-full object-contain">
                        </button>
                        <button @click="activeImage = 'assets/images/2kits.png'" :class="activeImage.includes('2kits') ? 'ring-2 ring-accent ring-offset-2' : 'hover:opacity-80'" class="aspect-square bg-white rounded-xl border border-gray-200 p-1 transition">
                            <img src="assets/images/2kits.png" class="w-full h-full object-contain">
                        </button>
                        <button @click="activeImage = 'assets/images/lifestyle-1.jpg'" :class="activeImage.includes('lifestyle-1') ? 'ring-2 ring-accent ring-offset-2' : 'hover:opacity-80'" class="aspect-square bg-gray-100 rounded-xl border border-gray-200 p-0 overflow-hidden transition">
                            <img src="assets/images/lifestyle-1.jpg" class="w-full h-full object-cover">
                        </button>
                        <button @click="activeImage = 'assets/images/lifestyle-2.jpg'" :class="activeImage.includes('lifestyle-2') ? 'ring-2 ring-accent ring-offset-2' : 'hover:opacity-80'" class="aspect-square bg-gray-100 rounded-xl border border-gray-200 p-0 overflow-hidden transition">
                            <img src="assets/images/lifestyle-2.jpg" class="w-full h-full object-cover">
                        </button>
                    </div>

                    <!-- Trust Indicators (Desktop) -->
                    <div class="hidden lg:grid grid-cols-4 gap-4 pt-6 border-t border-gray-200/60">
                        <div class="text-center">
                            <div class="w-12 h-12 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-2 text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-[10px] uppercase font-bold tracking-wide text-gray-500">Natural</span>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-2 text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                            </div>
                            <span class="text-[10px] uppercase font-bold tracking-wide text-gray-500">Non-GMO</span>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-2 text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/></svg>
                            </div>
                            <span class="text-[10px] uppercase font-bold tracking-wide text-gray-500">USA Made</span>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-2 text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-[10px] uppercase font-bold tracking-wide text-gray-500">GMP Cert</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Product Details & Form -->
                <div class="flex flex-col h-full" x-data="{
                    selectedPackage: '6',
                    checkoutLinks: {
                        '6': 'checkout.php?pkg=6',
                        '3': 'checkout.php?pkg=3',
                        '2': 'checkout.php?pkg=2'
                    }
                }">
                    <div class="mb-2 flex items-center gap-2">
                        <span class="bg-red-700 text-white text-xs font-bold px-2 py-1 rounded">BLOOD SUGAR SUPPORT</span>
                        <div class="flex items-center text-yellow-500 text-sm font-bold">
                            <div class="flex">
                                <?php for($i=0;$i<5;$i++) echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'; ?>
                            </div>
                            <span class="ml-1 text-gray-900">4.8/5</span>
                            <a href="#reviews" class="ml-2 text-gray-400 hover:text-accent underline decoration-gray-300 underline-offset-2">12,043 reviews</a>
                        </div>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-extrabold text-brand-900 tracking-tight mb-4">Glyco Pulse™ Capsules</h1>

                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Clinically-studied ingredients to support healthy blood sugar levels. Manuka honey extract, Gymnema Sylvestre, berberine, and more in every capsule. <strong class="text-gray-900">Over 500,000 bottles sold.</strong>
                    </p>

                    <!-- Bundle Selection -->
                    <div class="space-y-4 mb-8">
                        <span class="text-sm font-bold uppercase tracking-wide text-gray-400">Choose Quantity</span>

                        <!-- 6 Bottles -->
                        <div @click="selectedPackage = '6'; activeImage = 'assets/images/6kits.png'" class="relative cursor-pointer transition-all duration-200" :class="selectedPackage === '6' ? 'transform scale-[1.02]' : 'opacity-80 hover:opacity-100'">
                            <div class="absolute -top-3 left-6 z-10 bg-accent text-white text-[10px] uppercase font-bold px-3 py-1 rounded-full shadow-sm">Most Popular</div>
                            <div class="border-2 rounded-xl p-4 flex items-center gap-4 bg-white" :class="selectedPackage === '6' ? 'border-accent bg-red-50/30' : 'border-gray-200'">
                                <div class="w-6 h-6 rounded-full border-2 flex items-center justify-center flex-shrink-0" :class="selectedPackage === '6' ? 'border-accent' : 'border-gray-300'">
                                    <div class="w-3 h-3 rounded-full bg-accent" x-show="selectedPackage === '6'"></div>
                                </div>
                                <div class="w-16 h-16 bg-white rounded-lg border border-gray-100 p-1 flex-shrink-0">
                                    <img src="assets/images/6kits.png" class="w-full h-full object-contain">
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-bold text-brand-900 text-lg">6 Bottles <span class="text-sm font-normal text-gray-500">(180 Day Supply)</span></span>
                                        <div class="text-right">
                                            <span class="block font-bold text-xl text-brand-900">$49<span class="text-xs font-medium text-gray-500">/ea</span></span>
                                            <span class="block text-xs text-gray-500 font-medium">($294 Total)</span>
                                        </div>
                                    </div>
                                    <div class="text-xs text-accent font-bold flex items-center gap-2">
                                        <span>YOU SAVE $780</span>
                                        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                                        <span>FREE SHIPPING</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Bottles -->
                        <div @click="selectedPackage = '3'; activeImage = 'assets/images/3kits.png'" class="relative cursor-pointer transition-all duration-200" :class="selectedPackage === '3' ? 'transform scale-[1.02]' : 'opacity-80 hover:opacity-100'">
                            <div class="border-2 rounded-xl p-4 flex items-center gap-4 bg-white" :class="selectedPackage === '3' ? 'border-accent bg-red-50/30' : 'border-gray-200'">
                                <div class="w-6 h-6 rounded-full border-2 flex items-center justify-center flex-shrink-0" :class="selectedPackage === '3' ? 'border-accent' : 'border-gray-300'">
                                    <div class="w-3 h-3 rounded-full bg-accent" x-show="selectedPackage === '3'"></div>
                                </div>
                                <div class="w-16 h-16 bg-white rounded-lg border border-gray-100 p-1 flex-shrink-0">
                                    <img src="assets/images/3kits.png" class="w-full h-full object-contain">
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-bold text-brand-900 text-lg">3 Bottles <span class="text-sm font-normal text-gray-500">(90 Day Supply)</span></span>
                                        <div class="text-right">
                                            <span class="block font-bold text-xl text-brand-900">$69<span class="text-xs font-medium text-gray-500">/ea</span></span>
                                            <span class="block text-xs text-gray-500 font-medium">($207 Total)</span>
                                        </div>
                                    </div>
                                    <div class="text-xs text-green-600 font-bold"><span>YOU SAVE $330 &bull; FREE SHIPPING</span></div>
                                </div>
                            </div>
                        </div>

                        <!-- 2 Bottles -->
                        <div @click="selectedPackage = '2'; activeImage = 'assets/images/2kits.png'" class="relative cursor-pointer transition-all duration-200" :class="selectedPackage === '2' ? 'transform scale-[1.02]' : 'opacity-80 hover:opacity-100'">
                            <div class="border-2 rounded-xl p-4 flex items-center gap-4 bg-white" :class="selectedPackage === '2' ? 'border-accent bg-red-50/30' : 'border-gray-200'">
                                <div class="w-6 h-6 rounded-full border-2 flex items-center justify-center flex-shrink-0" :class="selectedPackage === '2' ? 'border-accent' : 'border-gray-300'">
                                    <div class="w-3 h-3 rounded-full bg-accent" x-show="selectedPackage === '2'"></div>
                                </div>
                                <div class="w-16 h-16 bg-white rounded-lg border border-gray-100 p-1 flex-shrink-0">
                                    <img src="assets/images/2kits.png" class="w-full h-full object-contain">
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-bold text-brand-900 text-lg">2 Bottles <span class="text-sm font-normal text-gray-500">(60 Day Supply)</span></span>
                                        <div class="text-right">
                                            <span class="block font-bold text-xl text-brand-900">$79<span class="text-xs font-medium text-gray-500">/ea</span></span>
                                            <span class="block text-xs text-gray-500 font-medium">($158 Total)</span>
                                        </div>
                                    </div>
                                    <div class="text-xs text-green-600 font-bold"><span>YOU SAVE $200</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ATC Button -->
                    <a :href="checkoutLinks[selectedPackage]" class="w-full bg-accent hover:bg-[#b91c1c] text-white text-xl font-bold py-5 rounded-full shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 text-center flex items-center justify-center gap-3">
                        <span>Add To Cart</span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <p class="text-center text-xs text-gray-400 mt-4 mb-8 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        Guaranteed Safe & Secure Checkout
                    </p>

                    <!-- Accordion Details -->
                    <div class="border-t border-gray-200 divide-y divide-gray-200" x-data="{ open: 'description' }">
                        <div class="py-4">
                            <button @click="open = open === 'description' ? null : 'description'" class="flex justify-between items-center w-full text-left font-bold text-gray-900">
                                <span>Description</span>
                                <span x-show="open !== 'description'">+</span><span x-show="open === 'description'">-</span>
                            </button>
                            <div x-show="open === 'description'" x-collapse class="pt-4 text-gray-600 text-sm leading-relaxed">
                                Glyco Pulse is a daily blood sugar support supplement formulated with clinically-studied ingredients including concentrated Manuka honey extract and Gymnema Sylvestre. Take 2 capsules daily — one in the morning and one in the evening — to support healthy glucose levels, balanced metabolism, and steady all-day energy. Made in the USA in a GMP-certified, FDA-registered facility.
                            </div>
                        </div>
                        <div class="py-4">
                            <button @click="open = open === 'delivery' ? null : 'delivery'" class="flex justify-between items-center w-full text-left font-bold text-gray-900">
                                <span>Shipping & Delivery</span>
                                <span x-show="open !== 'delivery'">+</span><span x-show="open === 'delivery'">-</span>
                            </button>
                            <div x-show="open === 'delivery'" x-collapse class="pt-4 text-gray-600 text-sm leading-relaxed">
                                Orders are processed within 24 hours. US shipping typically takes 3-5 business days. International shipping can take 10-14 days. You will receive a tracking number via email once your order ships.
                            </div>
                        </div>
                        <div class="py-4">
                            <button @click="open = open === 'guarantee' ? null : 'guarantee'" class="flex justify-between items-center w-full text-left font-bold text-gray-900">
                                <span>180-Day Guarantee</span>
                                <span x-show="open !== 'guarantee'">+</span><span x-show="open === 'guarantee'">-</span>
                            </button>
                            <div x-show="open === 'guarantee'" x-collapse class="pt-4 text-gray-600 text-sm leading-relaxed">
                                We are so confident in Glyco Pulse that we offer a 180-day money-back guarantee. If you are not satisfied for any reason, simply contact us for a full refund, no questions asked.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section (Deep Link: #benefits) -->
    <section id="benefits" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-accent font-bold tracking-wide uppercase text-sm mb-3">Why Choose Glyco Pulse</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-brand-900 mb-6">6 Key Benefits of Glyco Pulse</h3>
                <p class="text-xl text-gray-600">A comprehensive, science-backed formula designed for real results.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $benefits = [
                    ["Supports Healthy Glucose Levels", "Helps keep your blood sugar in a healthy range and supports a more balanced metabolism, so you can feel steadier and more in control throughout the day.", "M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"],
                    ["Targets Gut-Based Root Causes", "Helps combat harmful gut bacteria using key actives such as concentrated Manuka honey extract and Gymnema Sylvestre, supporting stronger insulin response and more stable glucose.", "M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"],
                    ["Delivers Steady Daily Energy", "Balanced glucose means fewer highs and lows. Glyco Pulse is crafted to support smooth, all-day energy without harsh crashes or jitters.", "M13 10V3L4 14h7v7l9-11h-7z"],
                    ["Supports Clear Energy &amp; Focus", "By promoting steadier glucose levels, Glyco Pulse helps you enjoy clearer energy, better mental focus, and smoother days.", "M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"],
                    ["Supports Healthy Circulation &amp; Nerves", "By helping keep blood sugar in a healthier range, Glyco Pulse supports circulation and nerve comfort, helping ease tingling and discomfort.", "M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"],
                    ["100% Natural &amp; Non-GMO", "Glyco Pulse uses a 100% natural, non-GMO formula, is stimulant-free, and is manufactured in a GMP-certified, FDA-registered facility. Gentle on your system for long-term support.", "M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"],
                ];
                foreach ($benefits as $b) {
                    echo '<div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-red-100 transition duration-300 group">
                        <div class="w-14 h-14 bg-red-50 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="' . $b[2] . '"/></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-accent transition">' . $b[0] . '</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">' . $b[1] . '</p>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Special Offer CTA (Deep Link: #special-offer) -->
    <section id="special-offer" class="py-16 bg-brand-gradient text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mix-blend-overlay"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Special Promo: Save Up To 73% Today</h2>
            <p class="text-lg text-red-100 mb-8 max-w-2xl mx-auto">Claim your discounted Glyco Pulse now while supplies last. Free shipping on 6-bottle orders + 180-day money-back guarantee.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#order-now" class="inline-flex items-center justify-center px-10 py-4 text-lg font-bold text-brand-900 bg-white hover:bg-gray-100 rounded-full shadow-xl transform hover:-translate-y-1 transition duration-300 gap-2">
                    <span>Get Glyco Pulse — $49/Bottle</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <span class="text-white/80 text-sm">One-time payment. No subscriptions.</span>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-accent font-bold tracking-wide uppercase text-sm mb-3">Multi-Action Formula</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-brand-900 mb-6">How Glyco Pulse Works</h3>
                <p class="text-xl text-gray-600">Rather than relying on a single mechanism, Glyco Pulse targets blood sugar support from multiple angles.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Activates AMPK</h4>
                    <p class="text-gray-600">Berberine activates AMPK, your body's metabolic master switch, helping regulate how cells process glucose.</p>
                </div>
                <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Improves Insulin Sensitivity</h4>
                    <p class="text-gray-600">Cinnamon and chromium help cells respond more effectively to insulin, supporting better glucose uptake.</p>
                </div>
                <div class="text-center p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Antioxidant Protection</h4>
                    <p class="text-gray-600">Alpha-lipoic acid and prickly pear cactus provide powerful antioxidant support for metabolic health.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section id="ingredients" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-accent font-bold tracking-wide uppercase text-sm mb-3">Pure Formulation</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-brand-900 mb-6">7 Clinically-Studied Ingredients</h3>
                <p class="text-xl text-gray-600">Every ingredient in Glyco Pulse is backed by published research and third-party tested for purity.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $ingredients = [
                    ["Berberine HCl", "Activates AMPK to regulate glucose metabolism. Shown in meta-analyses to lower FPG and HbA1c.", "M13 10V3L4 14h7v7l9-11h-7z"],
                    ["Cinnamon Extract", "Improves insulin sensitivity and may lower fasting plasma glucose in clinical trials.", "M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0 .076.09.154.024.228"],
                    ["Chromium Picolinate", "Essential trace mineral that enhances insulin action and supports glycemic control.", "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"],
                    ["Fenugreek Seed", "Beneficial effects on glycemic control and lipids demonstrated in systematic reviews.", "M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"],
                    ["Prickly Pear Cactus", "Reduces postprandial blood glucose with hypoglycemic and antioxidant effects.", "M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"],
                    ["Banaba Leaf", "Contains corosolic acid that decreases blood sugar within ~60 minutes in human studies.", "M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"],
                    ["Alpha-Lipoic Acid", "Powerful antioxidant associated with dose-dependent reductions in HbA1c and fasting glucose.", "M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"],
                ];
                foreach ($ingredients as $ing) {
                    echo '<div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 group">
                        <div class="w-14 h-14 bg-red-50 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="' . $ing[2] . '"/></svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-accent transition">' . $ing[0] . '</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">' . $ing[1] . '</p>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-24 bg-brand-900 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-accent font-bold uppercase tracking-wide mb-2">Real Results</h2>
                <h3 class="text-3xl md:text-5xl font-extrabold mb-6">Join Thousands of Success Stories</h3>
                <p class="text-xl text-red-100 max-w-2xl mx-auto">Glyco Pulse has helped over 120,000 customers support healthy blood sugar. Here's what they have to say.</p>
            </div>
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
                <?php
                $reviews = [
                    ["Margaret T.", "Phoenix, AZ", "My A1C dropped from 6.4 to 5.8 after 3 months of consistent use. My doctor was pleasantly surprised at my last checkup.", 5],
                    ["Robert K.", "Dallas, TX", "No more afternoon energy crashes. Since starting Glyco Pulse, my energy stays steady all day. Sugar cravings are way down too.", 5],
                    ["Linda P.", "San Diego, CA", "Ordered 6 bottles, no regrets. My fasting glucose went from 142 to 118 in the first month. I'm staying on this for the long haul.", 5],
                    ["James W.", "Chicago, IL", "I didn't expect this benefit, but my blood sugar used to spike at night and wake me up. That doesn't happen anymore. Finally sleeping through the night.", 5],
                    ["Patricia H.", "Nashville, TN", "The 6-bottle pack is the way to go. Saved a ton of money and I'm set for half the year. My husband and I both take it.", 5],
                    ["David R.", "Denver, CO", "I was skeptical about another supplement, but the ingredient list convinced me. Berberine alone is worth it. This has everything.", 4],
                    ["Susan M.", "Seattle, WA", "Customer service was amazing when I had a question about dosage. The product itself is high quality. Very happy with my purchase!", 5],
                    ["William C.", "Austin, TX", "Steady improvements over 90 days. Not an overnight fix, but the science is solid and I can see the difference in my readings.", 4],
                    ["Carol A.", "Tampa, FL", "I've recommended this to all my friends with blood sugar concerns. It just works. Simple as that.", 5]
                ];
                foreach ($reviews as $review) {
                    echo '<div class="bg-white text-gray-900 p-6 rounded-2xl shadow-lg break-inside-avoid transform hover:-translate-y-1 transition duration-300">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-accent font-bold text-sm">' . substr($review[0], 0, 1) . '</div>
                            <div>
                                <h4 class="font-bold text-sm">' . $review[0] . ' <span class="font-normal text-gray-400">— ' . $review[1] . '</span></h4>
                                <span class="text-xs text-green-600 bg-green-50 px-2 py-0.5 rounded-full border border-green-100 flex items-center gap-1 w-max">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                    Verified Purchase
                                </span>
                            </div>
                        </div>
                        <div class="flex text-yellow-400 mb-3">';
                    for($i=0; $i<$review[3]; $i++) echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                    echo '</div>
                        <p class="text-gray-600 text-sm leading-relaxed">"' . $review[2] . '"</p>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="bundles" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-extrabold text-brand-900 mb-6">Select Your Package</h2>
                <p class="text-xl text-gray-500">Secure Your Glyco Pulse Supply Today with a 180-Day Money-Back Guarantee</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 items-center max-w-6xl mx-auto">

                <!-- 6 Bottles (Best Value - Center) -->
                <div class="bg-white text-gray-900 rounded-2xl p-8 border-4 border-accent transform scale-105 shadow-2xl relative md:order-2">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-accent text-white font-bold px-6 py-1.5 rounded-full text-sm uppercase tracking-wide shadow-md">Best Value</div>
                    <div class="h-48 flex items-center justify-center mb-6">
                        <img src="assets/images/6kits.png" alt="6 Bottles Glyco Pulse" class="h-full object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-2">Premium</h3>
                    <p class="text-center text-gray-500 mb-6 font-medium">180 Day Supply</p>
                    <div class="text-center mb-6">
                        <span class="text-5xl font-extrabold text-brand-900">$49</span><span class="text-gray-500 font-medium">/bottle</span>
                        <span class="block text-sm font-bold text-gray-900 mt-2">Total: $294</span>
                        <span class="text-gray-400 text-xs line-through block mt-1">Regular $1,074</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 6 Bottles Glyco Pulse</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 180-Day Guarantee</li>
                        <li class="flex items-center font-bold text-accent"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> FREE US Shipping</li>
                    </ul>
                    <a href="checkout.php?pkg=6" class="block w-full py-4 text-center font-bold bg-accent hover:bg-[#b91c1c] text-white rounded-xl transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">Buy Best Value</a>
                    <div class="mt-4 text-center">
                        <img src="assets/images/cards_row.webp" alt="Payment Cards" class="h-6 mx-auto opacity-70">
                    </div>
                </div>

                <!-- 3 Bottles -->
                <div class="bg-white text-gray-900 rounded-2xl p-8 border border-gray-200 transform transition hover:-translate-y-2 hover:shadow-xl md:order-3">
                    <div class="h-48 flex items-center justify-center mb-6">
                        <img src="assets/images/3kits.png" alt="3 Bottles Glyco Pulse" class="h-full object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-2">Standard</h3>
                    <p class="text-center text-gray-500 mb-6 font-medium">90 Day Supply</p>
                    <div class="text-center mb-6">
                        <span class="text-5xl font-extrabold text-brand-900">$69</span><span class="text-gray-500 font-medium">/bottle</span>
                        <span class="block text-sm font-bold text-gray-900 mt-2">Total: $207</span>
                        <span class="text-gray-400 text-xs line-through block mt-1">Regular $537</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 3 Bottles Glyco Pulse</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 180-Day Guarantee</li>
                        <li class="flex items-center font-bold text-accent"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> FREE US Shipping</li>
                    </ul>
                    <a href="checkout.php?pkg=3" class="block w-full py-4 text-center font-bold bg-gray-100 hover:bg-gray-200 text-gray-900 rounded-xl transition">Buy Standard</a>
                    <div class="mt-4 text-center">
                        <img src="assets/images/cards_row.webp" alt="Payment Cards" class="h-6 mx-auto opacity-50">
                    </div>
                </div>

                <!-- 2 Bottles -->
                <div class="bg-white text-gray-900 rounded-2xl p-8 border border-gray-200 transform transition hover:-translate-y-2 hover:shadow-xl md:order-1">
                    <div class="h-48 flex items-center justify-center mb-6">
                        <img src="assets/images/2kits.png" alt="2 Bottles Glyco Pulse" class="h-full object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-2">Starter</h3>
                    <p class="text-center text-gray-500 mb-6 font-medium">60 Day Supply</p>
                    <div class="text-center mb-6">
                        <span class="text-5xl font-extrabold text-brand-900">$79</span><span class="text-gray-500 font-medium">/bottle</span>
                        <span class="block text-sm font-bold text-gray-900 mt-2">Total: $158</span>
                        <span class="text-gray-400 text-xs line-through block mt-1">Regular $358</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 2 Bottles Glyco Pulse</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 180-Day Guarantee</li>
                        <li class="flex items-center text-gray-400"><svg class="w-5 h-5 text-gray-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg> + $9.99 Shipping</li>
                    </ul>
                    <a href="checkout.php?pkg=2" class="block w-full py-4 text-center font-bold bg-gray-100 hover:bg-gray-200 text-gray-900 rounded-xl transition">Buy Starter</a>
                    <div class="mt-4 text-center">
                        <img src="assets/images/cards_row.webp" alt="Payment Cards" class="h-6 mx-auto opacity-50">
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center">
                <img src="assets/images/guarantee.webp" alt="180 Day Guarantee" class="h-32 mx-auto mb-6 hover:scale-105 transition duration-500">
                <p class="max-w-2xl mx-auto text-gray-600 text-sm leading-relaxed">
                    Glyco Pulse is backed by a 100% money back guarantee for a full 180 days from your original purchase. If you're not totally and completely satisfied with this product, your results or your experience, simply let us know and we'll refund every penny. No questions asked.
                </p>
            </div>
        </div>
    </section>

    <!-- Guarantee Section (Deep Link: #guarantee) -->
    <section id="guarantee" class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-accent font-bold tracking-wide uppercase text-sm mb-3">Risk-Free Purchase</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-900 mb-6">Our 180-Day Money-Back Guarantee</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        We're so confident you'll experience powerful results that we back Glyco Pulse with a 100% satisfaction guarantee for 180 days. Start using it, experience more stable daily energy, fewer blood sugar crashes, and gradually healthier readings.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Track your progress. If you're not satisfied for any reason — or no reason at all — contact us and we'll refund your money in full. No questions asked, no hassles.
                    </p>
                    <a href="#order-now" class="inline-flex items-center gap-2 px-8 py-3.5 font-bold text-white bg-accent hover:bg-[#b91c1c] rounded-full shadow-lg transform hover:-translate-y-0.5 transition duration-300">
                        <span>Try Glyco Pulse Risk-Free</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/guarantee.webp" alt="180-Day Money-Back Guarantee Badge" class="h-64 md:h-80 object-contain hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Section (Deep Link: #shipping) -->
    <section id="shipping" class="py-24 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-accent font-bold tracking-wide uppercase text-sm mb-3">Fast & Free Delivery</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-brand-900 mb-6">Free Shipping &amp; Fast Delivery</h3>
                <p class="text-xl text-gray-600">We ship orders the same day they are received whenever possible.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center border border-gray-100 shadow-sm">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Same-Day Processing</h4>
                    <p class="text-gray-600 text-sm">Orders placed before 2 PM EST ship the same business day.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center border border-gray-100 shadow-sm">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">US Delivery: 5-7 Days</h4>
                    <p class="text-gray-600 text-sm">Free shipping on 3 and 6-bottle orders. Tracking number provided via email.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center border border-gray-100 shadow-sm">
                    <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">International Shipping</h4>
                    <p class="text-gray-600 text-sm">We ship worldwide. International orders typically arrive within 10-14 business days.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <p class="text-sm text-gray-500">All orders include a tracking number. Your order is a <strong>one-time payment</strong> — no auto-ship subscriptions or hidden charges.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-white" x-data="{ active: null }">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-brand-900 mb-12">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <?php
                $faqs = [
                    ["Is Glyco Pulse safe?", "Glyco Pulse is an all-natural supplement made with clinically-studied ingredients. It is manufactured in the USA in an FDA-registered, GMP-certified facility. Each batch is third-party tested for purity and potency. It is stimulant-free and non-habit forming. However, if you are taking prescription medications, especially for blood sugar or blood pressure, consult your physician before starting any new supplement."],
                    ["What's inside Glyco Pulse?", "Inside every bottle of Glyco Pulse is a unique proprietary blend built around concentrated Manuka honey extract and Gymnema Sylvestre, along with supporting ingredients like Berberine HCl, Ceylon cinnamon extract, chromium picolinate, fenugreek seed, prickly pear cactus, banaba leaf, and alpha-lipoic acid."],
                    ["How do I take Glyco Pulse?", "Simply take 2 capsules of Glyco Pulse each day with water — one in the morning and one in the evening. Our proprietary blend of natural ingredients will get to work right away, helping support stable, healthy blood sugar levels."],
                    ["How long before I see results?", "Most users report noticeable improvements in energy and reduced sugar cravings within the first 2-3 weeks. For blood sugar markers like fasting glucose or A1C, allow 60-90 days of consistent use. We recommend taking Glyco Pulse for at least 3 to 6 months for the best results."],
                    ["What if Glyco Pulse doesn't work for me?", "Every bottle comes with a 180-day money-back guarantee. If you are unsatisfied with your results for any reason, simply contact us and we'll refund every penny. No questions asked, no hassles."],
                    ["How many bottles should I order?", "We recommend taking Glyco Pulse for at least 3 to 6 months so it has enough time to help rebalance your gut, support insulin function, and give you the best possible results. The 3 or 6-bottle packages offer the best value and ensure you don't run out during the critical support period."],
                    ["Is this a one-time payment?", "Yes. Your order today is a one-time payment with no auto-ship subscriptions or hidden charges — exactly as shown on this page. You will never be billed again unless you choose to reorder."],
                    ["How quickly will my package arrive?", "We ship out orders the same day they are received whenever possible. If you're in the U.S., you can expect the package in about 5 to 7 business days. If you're outside the U.S., it may take a bit longer depending on your local carriers. All orders include a tracking number sent to your email."]
                ];
                foreach ($faqs as $i => $faq) {
                    $num = $i + 1;
                    echo '<div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                        <button @click="active === ' . $num . ' ? active = null : active = ' . $num . '" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition">
                            <span class="font-bold text-gray-900">' . $faq[0] . '</span>
                            <span x-show="active !== ' . $num . '" class="text-gray-400 font-bold text-xl">+</span>
                            <span x-show="active === ' . $num . '" class="text-accent font-bold text-xl">-</span>
                        </button>
                        <div x-show="active === ' . $num . '" x-collapse class="px-6 pb-6 text-gray-600 border-t border-gray-100 bg-gray-50/50">
                            <p class="mt-2">' . $faq[1] . '</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-brand-900 border-t border-red-900 py-12 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0 text-center md:text-left">
                    <span class="text-2xl font-extrabold text-white tracking-tight block">Glyco Pulse™</span>
                    <p class="text-red-200 text-sm mt-2">&copy; <?php echo date("Y"); ?> Glyco Pulse. All rights reserved.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#special-offer" class="text-red-200 hover:text-white text-sm transition">Special Offer</a>
                    <a href="#guarantee" class="text-red-200 hover:text-white text-sm transition">Guarantee</a>
                    <a href="#shipping" class="text-red-200 hover:text-white text-sm transition">Shipping</a>
                    <a href="about.php" class="text-red-200 hover:text-white text-sm transition">About Us</a>
                    <a href="contact.php" class="text-red-200 hover:text-white text-sm transition">Contact Us</a>
                    <a href="privacy.php" class="text-red-200 hover:text-white text-sm transition">Privacy Policy</a>
                    <a href="terms.php" class="text-red-200 hover:text-white text-sm transition">Terms of Service</a>
                </div>
            </div>
            <div class="mt-8 text-center text-xs text-red-300/60 max-w-4xl mx-auto border-t border-red-900 pt-8">
                <p>The content of this site is for informational purposes only, and is not a substitute for professional medical advice, diagnosis or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition.</p>
                <div class="mt-4 text-[10px] uppercase tracking-widest opacity-50">FDA Disclaimer: These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</div>
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 p-4 md:hidden z-50 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)]">
        <div class="flex items-center justify-between gap-4">
            <div class="flex flex-col">
                <span class="text-xs text-brand-900 font-bold uppercase tracking-wide">Best Seller</span>
                <span class="text-lg font-extrabold text-accent">$49<span class="text-sm text-gray-500 font-normal">/bottle</span></span>
            </div>
            <a href="#order-now" class="flex-1 bg-accent text-white text-center font-bold py-3 rounded-full shadow-lg hover:bg-[#b91c1c] transition">
                Buy Now
            </a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>
