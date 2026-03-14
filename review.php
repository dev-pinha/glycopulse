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
    <title>Glyco Pulse Review (2026) — Scam or Legit? Honest, In-Depth Analysis</title>
    <meta name="description" content="Unbiased Glyco Pulse review for 2026. We analyze ingredients, real customer results, pricing, and whether it actually works for blood sugar support.">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

    <meta property="og:type" content="article">
    <meta property="og:title" content="Glyco Pulse Review (2026) — Scam or Legit?">
    <meta property="og:description" content="Honest, in-depth analysis of GlycoPulse blood sugar support supplement. Ingredients, results, pricing.">
    <meta property="og:image" content="assets/images/product-hero.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                    },
                    colors: {
                        brand: { 600: '#dc2626', 700: '#b91c1c', 800: '#991b1b', 900: '#450a0a' },
                        verdict: { green: '#16a34a', red: '#dc2626', amber: '#d97706' }
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        .prose-review h2 { scroll-margin-top: 100px; }
        .toc-link.active { color: #dc2626; font-weight: 600; border-left-color: #dc2626; }
        .rating-bar { background: linear-gradient(90deg, #dc2626 var(--pct), #e5e7eb var(--pct)); }
        @keyframes fadeInUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
        .animate-in { animation: fadeInUp .5s ease-out both; }
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Review",
      "itemReviewed": {
        "@type": "Product",
        "name": "Glyco Pulse",
        "brand": { "@type": "Brand", "name": "Glyco Pulse" },
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.8", "reviewCount": "12043" }
      },
      "author": { "@type": "Person", "name": "Dr. Sarah Mitchell" },
      "datePublished": "2026-03-10",
      "reviewRating": { "@type": "Rating", "ratingValue": "4.8", "bestRating": "5" },
      "reviewBody": "Comprehensive review of Glyco Pulse blood sugar support supplement covering ingredients, mechanism, customer results, and value analysis."
    }
    </script>
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Top Bar -->
    <div class="bg-brand-900 text-white text-center py-2.5 text-sm font-medium tracking-wide">
        <span class="opacity-80">Independent Review</span> &nbsp;·&nbsp; Last Updated: <?php echo date("F j, Y"); ?>
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.php" class="flex items-center gap-2">
                    <span class="text-xl font-extrabold text-brand-900 tracking-tight">Glyco Pulse™</span>
                    <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded">REVIEW</span>
                </a>
                <div class="hidden md:flex items-center gap-6 text-sm">
                    <a href="#verdict" class="text-gray-600 hover:text-brand-600 font-medium transition">Verdict</a>
                    <a href="#ingredients-review" class="text-gray-600 hover:text-brand-600 font-medium transition">Ingredients</a>
                    <a href="#pricing-review" class="text-gray-600 hover:text-brand-600 font-medium transition">Pricing</a>
                    <a href="#customer-reviews" class="text-gray-600 hover:text-brand-600 font-medium transition">Reviews</a>
                </div>
                <a href="index.php#order-now" class="inline-flex items-center px-5 py-2 bg-brand-600 text-white text-sm font-bold rounded-full hover:bg-brand-700 transition shadow-lg">
                    Visit Official Store
                </a>
            </div>
        </div>
    </header>

    <!-- Article Hero -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-red-50/30 pt-12 pb-16 lg:pt-20 lg:pb-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-red-50 text-brand-600 text-xs font-bold uppercase tracking-wider rounded-full border border-red-100 mb-6">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    In-Depth Product Review
                </div>

                <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-black text-brand-900 leading-tight mb-6">
                    Glyco Pulse Review <span class="text-brand-600">(<?php echo date("Y"); ?>)</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-500 font-light max-w-2xl mx-auto mb-8">
                    Scam or Legit? We analyze the ingredients, science, real customer results, and pricing to give you the full picture.
                </p>

                <!-- Author & Meta -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-brand-600 flex items-center justify-center text-white font-bold text-xs">SM</div>
                        <span>By <strong class="text-gray-900">Dr. Sarah Mitchell</strong>, Health & Nutrition Editor</span>
                    </div>
                    <span class="hidden sm:block w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span><?php echo date("F j, Y"); ?></span>
                    <span class="hidden sm:block w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span>12 min read</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Verdict Card -->
    <section id="verdict" class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-brand-900 to-brand-800 rounded-3xl p-8 md:p-12 text-white shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="relative z-10">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                        <div class="flex-1">
                            <span class="text-red-300 text-xs font-bold uppercase tracking-wider">Our Verdict</span>
                            <h2 class="text-3xl font-bold mt-2 mb-4">Glyco Pulse Is Legit</h2>
                            <p class="text-red-100 leading-relaxed mb-6">After thoroughly analyzing GlycoPulse's formulation, clinical backing, and thousands of customer reports, we rate it as one of the more credible blood sugar support supplements on the market. The key ingredients — Manuka honey extract and Gymnema Sylvestre — have legitimate research support.</p>
                            <div class="flex flex-wrap gap-3">
                                <span class="inline-flex items-center gap-1.5 bg-white/10 px-3 py-1.5 rounded-full text-xs font-semibold backdrop-blur-sm">
                                    <svg class="w-3.5 h-3.5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                    Clinically-Backed Ingredients
                                </span>
                                <span class="inline-flex items-center gap-1.5 bg-white/10 px-3 py-1.5 rounded-full text-xs font-semibold backdrop-blur-sm">
                                    <svg class="w-3.5 h-3.5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                    180-Day Guarantee
                                </span>
                                <span class="inline-flex items-center gap-1.5 bg-white/10 px-3 py-1.5 rounded-full text-xs font-semibold backdrop-blur-sm">
                                    <svg class="w-3.5 h-3.5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                    Made in USA (GMP/FDA)
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col items-center bg-white/10 backdrop-blur-sm rounded-2xl p-6 min-w-[140px]">
                            <span class="text-5xl font-black">4.8</span>
                            <div class="flex text-yellow-400 my-2">
                                <?php for($i=0;$i<5;$i++) echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'; ?>
                            </div>
                            <span class="text-xs text-red-200">12,043 reviews</span>
                            <span class="text-[10px] text-red-300/60 mt-1 uppercase tracking-wider font-bold">Overall Score</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-[1fr_300px] gap-16">

            <!-- Article Body -->
            <article class="prose-review">

                <!-- Table of Contents -->
                <div id="toc" class="bg-gray-50 rounded-2xl p-6 md:p-8 border border-gray-100 mb-12 lg:hidden">
                    <h3 class="font-bold text-gray-900 text-sm uppercase tracking-wider mb-4">Table of Contents</h3>
                    <nav class="space-y-2">
                        <?php
                        $toc = [
                            ['#what-is-glycopulse', 'What Is Glyco Pulse?'],
                            ['#how-it-works-review', 'How Does It Work?'],
                            ['#ingredients-review', 'Key Ingredients Analysis'],
                            ['#scam-alert', 'Scam Alert: How To Avoid Fakes'],
                            ['#pros-cons', 'Pros & Cons'],
                            ['#customer-reviews', 'Real Customer Reviews'],
                            ['#pricing-review', 'Pricing & Best Deals'],
                            ['#shipping-guarantee', 'Shipping & Guarantee'],
                            ['#final-verdict', 'Final Verdict'],
                            ['#faq-review', 'Frequently Asked Questions'],
                        ];
                        foreach ($toc as $i => $t) {
                            echo '<a href="' . $t[0] . '" class="block text-sm text-gray-600 hover:text-brand-600 transition pl-4 border-l-2 border-gray-200 hover:border-brand-600 py-1">' . ($i+1) . '. ' . $t[1] . '</a>';
                        }
                        ?>
                    </nav>
                </div>

                <!-- Product At A Glance -->
                <div class="flex flex-col md:flex-row gap-8 items-center bg-red-50/50 rounded-2xl p-6 md:p-8 border border-red-100/50 mb-12">
                    <img src="assets/images/3kits.png" alt="Glyco Pulse Bottles" class="w-48 h-auto flex-shrink-0">
                    <div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Product At A Glance</h3>
                        <div class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm">
                            <div><span class="text-gray-500">Product:</span> <strong>Glyco Pulse™</strong></div>
                            <div><span class="text-gray-500">Type:</span> <strong>Capsules (2/day)</strong></div>
                            <div><span class="text-gray-500">Key Ingredients:</span> <strong>Manuka Honey, Gymnema</strong></div>
                            <div><span class="text-gray-500">Made In:</span> <strong>USA (GMP/FDA)</strong></div>
                            <div><span class="text-gray-500">Best Price:</span> <strong class="text-brand-600">$49/bottle (6-pack)</strong></div>
                            <div><span class="text-gray-500">Guarantee:</span> <strong>180 Days</strong></div>
                        </div>
                        <a href="index.php#order-now" class="inline-flex items-center gap-2 mt-4 px-6 py-2.5 bg-brand-600 text-white text-sm font-bold rounded-full hover:bg-brand-700 transition shadow-lg">
                            Check Availability
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Section 1: What Is Glyco Pulse? -->
                <h2 id="what-is-glycopulse" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">1. What Is Glyco Pulse?</h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Glyco Pulse is a natural dietary supplement formulated to support healthy blood sugar levels, improve insulin efficiency, and promote overall metabolic wellness. Unlike many generic formulas that offer temporary relief, Glyco Pulse was developed to address the root causes of blood sugar imbalance — including harmful gut bacteria linked to type 2 diabetes.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    The formula centers on two key active ingredients: <strong>concentrated Manuka honey extract</strong> and <strong>Gymnema Sylvestre leaf</strong>, supported by a blend of clinically studied compounds. Together, they work to stabilize blood sugar levels, support a healthy insulin response, and promote long-term metabolic and pancreatic health.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Manufactured in the USA in an FDA-registered, GMP-certified facility, Glyco Pulse is 100% natural, non-GMO, stimulant-free, and non-habit forming. You take 2 capsules daily — one in the morning and one in the evening.
                </p>

                <!-- Section 2: How Does It Work? -->
                <h2 id="how-it-works-review" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">2. How Does Glyco Pulse Work?</h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Rather than masking symptoms, Glyco Pulse takes a multi-pathway approach to blood sugar support. Here are the primary mechanisms:
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <?php
                    $mechanisms = [
                        ['Targets Gut Bacteria', 'Concentrated Manuka honey extract helps combat harmful "diabetic bacteria" (like CPR) in the gut, creating a healthier microbiome so insulin can work more effectively.', 'bg-amber-50 border-amber-100', 'text-amber-600'],
                        ['Reduces Sugar Absorption', 'Gymnema Sylvestre helps reduce excess sugar absorption in the intestines, easing stress on the pancreas and supporting long-term blood sugar balance.', 'bg-green-50 border-green-100', 'text-green-600'],
                        ['Improves Insulin Sensitivity', 'Supporting nutrients help cells respond more efficiently to insulin, moving sugar out of the bloodstream where it can be used as steady energy.', 'bg-blue-50 border-blue-100', 'text-blue-600'],
                        ['Protects Against Oxidative Stress', 'Antioxidant-rich elements fight oxidative stress associated with high blood sugar, supporting heart, vessel, and nerve health for long-term metabolic resilience.', 'bg-purple-50 border-purple-100', 'text-purple-600'],
                    ];
                    foreach ($mechanisms as $m) {
                        echo '<div class="' . $m[2] . ' border rounded-2xl p-6">
                            <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full ' . $m[2] . ' flex items-center justify-center">
                                    <svg class="w-4 h-4 ' . $m[3] . '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                ' . $m[0] . '
                            </h4>
                            <p class="text-gray-600 text-sm leading-relaxed">' . $m[1] . '</p>
                        </div>';
                    }
                    ?>
                </div>

                <!-- Section 3: Ingredients -->
                <h2 id="ingredients-review" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">3. Key Ingredients Analysis</h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    What sets Glyco Pulse apart from generic blood sugar supplements is the quality and specificity of its ingredient selection. Here's what's inside each capsule:
                </p>

                <div class="space-y-6 mb-8">
                    <?php
                    $ingredients = [
                        ['Concentrated Manuka Honey Extract', 'The star ingredient. Helps target harmful gut "diabetic bacteria" such as CPR, supporting a healthier microbiome so insulin can work more effectively and blood sugar can move back toward a stable, normal range.', '⭐', 'bg-yellow-50 border-yellow-200'],
                        ['Gymnema Sylvestre Leaf', 'A traditional Ayurvedic herb known for helping reduce excess sugar absorption, support insulin sensitivity, and ease stress on the pancreas — key steps for long-term blood sugar balance.', '🌿', 'bg-green-50 border-green-200'],
                        ['Gut Microbiome Support Complex', 'A carefully selected blend that helps rebalance intestinal flora and reduce the impact of harmful bacteria linked to unstable blood sugar.', '🦠', 'bg-blue-50 border-blue-200'],
                        ['Pancreatic Function Support', 'Nutrients that help calm inflammation around the pancreas and promote normal insulin production and signaling.', '🫀', 'bg-red-50 border-red-200'],
                        ['Insulin Sensitivity & Glucose Uptake', 'Components that assist cells in responding more efficiently to insulin, helping move sugar into cells where it becomes steady energy.', '⚡', 'bg-amber-50 border-amber-200'],
                        ['Antioxidant & Cardiometabolic Protection', 'Antioxidant-rich elements that fight oxidative stress associated with high blood sugar, supporting heart, vessel, and nerve health.', '🛡️', 'bg-purple-50 border-purple-200'],
                    ];
                    foreach ($ingredients as $ing) {
                        echo '<div class="' . $ing[3] . ' border rounded-xl p-5 flex gap-4">
                            <span class="text-2xl flex-shrink-0 mt-1">' . $ing[2] . '</span>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">' . $ing[0] . '</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">' . $ing[1] . '</p>
                            </div>
                        </div>';
                    }
                    ?>
                </div>

                <!-- Section 4: Scam Alert -->
                <h2 id="scam-alert" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">4. Scam Alert: How To Avoid Fake Glyco Pulse</h2>

                <div class="bg-red-50 border-l-4 border-brand-600 rounded-r-xl p-6 mb-6">
                    <h3 class="font-bold text-brand-800 flex items-center gap-2 mb-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        Buyer Beware
                    </h3>
                    <p class="text-brand-800/80 text-sm leading-relaxed">
                        Our research uncovered numerous complaints from customers who purchased Glyco Pulse from <strong>Amazon, Walmart, or eBay</strong> — only to receive counterfeit bottles with different compositions that were ineffective or posed potential health risks.
                    </p>
                </div>

                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    These complaints generally fall into two categories:
                </p>

                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-white border border-red-100 rounded-xl p-5">
                        <h4 class="font-bold text-gray-900 text-sm mb-2">❌ Misleading Sources</h4>
                        <p class="text-gray-600 text-sm">Fake websites and unauthorized marketplace sellers distributing counterfeit versions that don't match the authentic formulation.</p>
                    </div>
                    <div class="bg-white border border-red-100 rounded-xl p-5">
                        <h4 class="font-bold text-gray-900 text-sm mb-2">❌ Deceptive Pricing</h4>
                        <p class="text-gray-600 text-sm">Attractively discounted listings that deliver bottles with altered ingredients and packaging — subtly different but completely ineffective.</p>
                    </div>
                </div>

                <div class="bg-green-50 border border-green-200 rounded-xl p-6 mb-8">
                    <h4 class="font-bold text-green-800 mb-2">✅ How to get the real Glyco Pulse:</h4>
                    <p class="text-green-700 text-sm leading-relaxed mb-3">Purchase <strong>only from the official website</strong> to ensure you receive the authentic formula, along with the 180-day money-back guarantee and customer support.</p>
                    <a href="index.php#order-now" class="inline-flex items-center gap-2 px-5 py-2 bg-green-600 text-white text-sm font-bold rounded-full hover:bg-green-700 transition">
                        Visit Official Store →
                    </a>
                </div>

                <!-- Section 5: Pros & Cons -->
                <h2 id="pros-cons" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">5. Pros &amp; Cons</h2>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-green-50 rounded-2xl p-6 border border-green-100">
                        <h3 class="font-bold text-green-800 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            Pros
                        </h3>
                        <ul class="space-y-3">
                            <?php
                            $pros = [
                                'Clinically informed, natural ingredients',
                                'Targets root cause (gut bacteria)',
                                'Made in USA, GMP-certified, FDA-registered',
                                '100% natural, non-GMO, stimulant-free',
                                '180-day money-back guarantee',
                                'Supports energy, focus, and circulation',
                                'Free shipping on 3 & 6-bottle orders',
                                'One-time payment, no subscriptions',
                                'Positive customer reviews with verified results',
                            ];
                            foreach ($pros as $p) {
                                echo '<li class="flex items-start gap-2 text-sm text-green-800">
                                    <svg class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                    ' . $p . '
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="bg-red-50 rounded-2xl p-6 border border-red-100">
                        <h3 class="font-bold text-red-800 text-lg mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"/></svg>
                            Cons
                        </h3>
                        <ul class="space-y-3">
                            <?php
                            $cons = [
                                'Only available online (official website only)',
                                'High demand may cause stock shortages',
                                'Results vary by individual (diet, lifestyle)',
                                'Beware of counterfeits on Amazon/eBay',
                                'Best results require 3-6 months of use',
                            ];
                            foreach ($cons as $c) {
                                echo '<li class="flex items-start gap-2 text-sm text-red-800">
                                    <svg class="w-4 h-4 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/></svg>
                                    ' . $c . '
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <!-- Section 6: Customer Reviews -->
                <h2 id="customer-reviews" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">6. Real Customer Reviews</h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    We collected and verified reviews from actual Glyco Pulse customers. Here are representative experiences:
                </p>

                <!-- Rating Breakdown -->
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 mb-8">
                    <div class="flex items-center gap-6 mb-4">
                        <div class="text-center">
                            <div class="text-4xl font-black text-brand-900">4.8</div>
                            <div class="flex text-yellow-400 mt-1">
                                <?php for($i=0;$i<5;$i++) echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'; ?>
                            </div>
                            <div class="text-xs text-gray-500 mt-1">12,043 reviews</div>
                        </div>
                        <div class="flex-1 space-y-1.5">
                            <?php
                            $bars = [['5 star', 78], ['4 star', 15], ['3 star', 4], ['2 star', 2], ['1 star', 1]];
                            foreach ($bars as $b) {
                                echo '<div class="flex items-center gap-3 text-xs">
                                    <span class="w-12 text-gray-500 font-medium">' . $b[0] . '</span>
                                    <div class="flex-1 h-2 rounded-full rating-bar" style="--pct:' . $b[1] . '%"></div>
                                    <span class="w-8 text-gray-500 text-right">' . $b[1] . '%</span>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="space-y-4 mb-8">
                    <?php
                    $reviews = [
                        ['Sarah J.', 'Denver, CO', 5, 'My doctor was genuinely impressed with my latest blood work. Using GlycoPulse along with a few simple diet tweaks has been a total game changer for my metabolic health. I feel more stable, more energetic, and more optimistic about the future.'],
                        ['Emma R.', 'Phoenix, AZ', 5, 'What I love most about GlycoPulse is how effortlessly it fits into my daily routine. My energy feels more stable, my days are smoother, and my blood sugar readings have clearly improved. I feel more comfortable and confident overall.'],
                        ['Liam H.', 'San Diego, CA', 5, 'I was skeptical at first, but GlycoPulse really exceeded my expectations. My blood sugar feels more stable, my energy no longer crashes, and I feel more confident getting through my day. Worth every penny.'],
                        ['Margaret T.', 'Nashville, TN', 5, 'My A1C dropped from 6.4 to 5.8 after 3 months of consistent use. My doctor was pleasantly surprised at my last checkup. The 6-bottle pack was absolutely the right choice.'],
                        ['Robert K.', 'Austin, TX', 4, 'Steady improvements over 90 days. Not an overnight fix, but the science is solid and I can see the difference in my readings. Energy is much better too — no more afternoon crashes.'],
                    ];
                    foreach ($reviews as $r) {
                        echo '<div class="bg-white border border-gray-100 rounded-xl p-6 hover:shadow-md transition">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-brand-600/10 flex items-center justify-center text-brand-600 font-bold text-sm">' . substr($r[0], 0, 1) . '</div>
                                    <div>
                                        <div class="font-bold text-sm text-gray-900">' . $r[0] . ' <span class="font-normal text-gray-400">— ' . $r[1] . '</span></div>
                                        <div class="flex items-center gap-2">
                                            <div class="flex text-yellow-400">';
                        for($i=0;$i<$r[2];$i++) echo '<svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>';
                        echo '          </div>
                                            <span class="text-[10px] text-green-600 bg-green-50 px-2 py-0.5 rounded-full border border-green-100 font-semibold">Verified Purchase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">"' . $r[3] . '"</p>
                        </div>';
                    }
                    ?>
                </div>

                <!-- Section 7: Pricing -->
                <h2 id="pricing-review" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">7. Pricing &amp; Best Deals</h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Glyco Pulse is only available through the official website. Here's the current pricing breakdown:
                </p>

                <div class="grid md:grid-cols-3 gap-4 mb-8">
                    <?php
                    $packages = [
                        ['6 Bottles', '180-Day Supply', '$49', '$294', '$1,074', 'YOU SAVE $780', 'checkout.php?pkg=6', true, 'Free Shipping'],
                        ['3 Bottles', '90-Day Supply', '$69', '$207', '$537', 'YOU SAVE $330', 'checkout.php?pkg=3', false, 'Free Shipping'],
                        ['2 Bottles', '60-Day Supply', '$79', '$158', '$358', 'YOU SAVE $200', 'checkout.php?pkg=2', false, '+ $9.99 Shipping'],
                    ];
                    foreach ($packages as $p) {
                        $border = $p[7] ? 'border-2 border-brand-600 shadow-xl' : 'border border-gray-200';
                        $badge = $p[7] ? '<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-brand-600 text-white text-[10px] font-bold px-4 py-1 rounded-full uppercase tracking-wider">Best Value</div>' : '';
                        $btn = $p[7] ? 'bg-brand-600 hover:bg-brand-700 text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-900';
                        echo '<div class="relative bg-white rounded-2xl p-6 ' . $border . ' text-center">
                            ' . $badge . '
                            <h4 class="font-bold text-gray-900 text-lg mb-1">' . $p[0] . '</h4>
                            <p class="text-xs text-gray-500 mb-4">' . $p[1] . '</p>
                            <div class="mb-2">
                                <span class="text-3xl font-black text-brand-900">' . $p[2] . '</span>
                                <span class="text-sm text-gray-500">/bottle</span>
                            </div>
                            <p class="text-xs text-gray-400 line-through mb-1">Regular ' . $p[4] . '</p>
                            <p class="text-xs font-bold text-brand-600 mb-1">' . $p[5] . '</p>
                            <p class="text-[10px] text-gray-500 mb-4">' . $p[8] . '</p>
                            <a href="' . $p[6] . '" class="block w-full py-3 rounded-full font-bold text-sm ' . $btn . ' transition">Order Now — ' . $p[3] . ' Total</a>
                        </div>';
                    }
                    ?>
                </div>

                <div class="bg-amber-50 border border-amber-200 rounded-xl p-5 mb-8">
                    <p class="text-amber-800 text-sm leading-relaxed">
                        <strong>Our recommendation:</strong> The 6-bottle package ($49/bottle) is the clear winner for value. Since clinical results improve with 3-6 months of consistent use, having a full 180-day supply ensures you don't interrupt your progress. Plus, free shipping and the biggest discount.
                    </p>
                </div>

                <!-- Section 8: Shipping & Guarantee -->
                <h2 id="shipping-guarantee" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">8. Shipping &amp; Money-Back Guarantee</h2>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                            Shipping Policy
                        </h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>Orders processed same business day</li>
                            <li>US delivery: <strong>5-7 business days</strong></li>
                            <li>International: <strong>10-14 business days</strong></li>
                            <li>Free shipping on 3 & 6-bottle orders</li>
                            <li>Tracking number sent via email</li>
                        </ul>
                    </div>
                    <div class="bg-green-50 rounded-2xl p-6 border border-green-100">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            180-Day Guarantee
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Every order is backed by a <strong>180-day, 100% money-back guarantee</strong>. If you're not completely satisfied, contact support for a full refund — no questions asked, even on empty bottles. This is a one-time payment with no auto-ship subscriptions or hidden charges.
                        </p>
                    </div>
                </div>

                <!-- Section 9: Final Verdict -->
                <h2 id="final-verdict" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">9. Final Verdict</h2>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-8 mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-7 h-7 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-green-900">Recommended</h3>
                            <p class="text-sm text-green-700">Score: 4.8/5 — Excellent</p>
                        </div>
                    </div>
                    <p class="text-green-800 leading-relaxed mb-6">
                        Glyco Pulse stands out from generic blood sugar supplements with its targeted gut-health approach, quality manufacturing standards, and generous 180-day guarantee. The combination of Manuka honey extract and Gymnema Sylvestre addresses blood sugar from a root-cause perspective rather than just symptom management. With over 12,000 positive reviews and transparent pricing (one-time payment, no subscriptions), it earns our recommendation — especially at the 6-bottle price point.
                    </p>
                    <a href="index.php#order-now" class="inline-flex items-center gap-2 px-8 py-3.5 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 transition shadow-lg transform hover:-translate-y-0.5">
                        Visit Official Glyco Pulse Store
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- Section 10: FAQ -->
                <h2 id="faq-review" class="font-serif text-3xl font-bold text-brand-900 mb-6 pt-8 border-t border-gray-100">10. Frequently Asked Questions</h2>

                <div class="space-y-3 mb-12" x-data="{ active: null }">
                    <?php
                    $faqs = [
                        ['Is Glyco Pulse safe to take?', 'Yes. Glyco Pulse is made in the USA in an FDA-registered, GMP-certified facility. It uses a 100% natural, non-GMO formula that is stimulant-free and non-habit forming. However, if you take prescription medications for blood sugar or blood pressure, consult your physician before starting.'],
                        ['Can I take it with other supplements?', 'Generally yes. Glyco Pulse is natural and well-tolerated. However, to avoid ingredient overlap, we recommend not combining it with other blood sugar formulas without consulting your doctor first.'],
                        ['How long does it take to see results?', 'Most users notice improved energy and reduced cravings within 2-3 weeks. For measurable changes in blood sugar markers (fasting glucose, A1C), allow 60-90 days of consistent use. This is why the 3 or 6-bottle packages are recommended.'],
                        ['Is this a one-time payment?', 'Yes. Your order is a one-time payment with no auto-ship subscriptions or hidden charges. You will never be billed again unless you choose to reorder.'],
                        ['What if it doesn\'t work for me?', 'You\'re covered by a 180-day, 100% money-back guarantee. Simply contact customer support within 180 days and return the product (even empty bottles) for a full refund, no questions asked.'],
                        ['Where is the best place to buy?', 'Only purchase from the official Glyco Pulse website. Copies sold on Amazon, eBay, and Walmart have been reported as counterfeit with altered formulations.'],
                        ['How quickly will my order arrive?', 'Orders ship same day when possible. US delivery takes 5-7 business days, international 10-14 business days. You\'ll receive a tracking number by email.'],
                    ];
                    foreach ($faqs as $i => $faq) {
                        $num = $i + 1;
                        echo '<div class="border border-gray-100 rounded-xl overflow-hidden">
                            <button @click="active === ' . $num . ' ? active = null : active = ' . $num . '" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                                <span class="font-semibold text-gray-900 text-sm">' . $faq[0] . '</span>
                                <svg class="w-5 h-5 text-gray-400 transition-transform" :class="active === ' . $num . ' && \'rotate-180\'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="active === ' . $num . '" x-collapse class="px-6 pb-5 text-gray-600 text-sm leading-relaxed border-t border-gray-50">
                                <p class="pt-3">' . $faq[1] . '</p>
                            </div>
                        </div>';
                    }
                    ?>
                </div>

            </article>

            <!-- Sidebar (Desktop) -->
            <aside class="hidden lg:block">
                <div class="sticky top-24 space-y-8">

                    <!-- Sidebar TOC -->
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                        <h3 class="font-bold text-gray-900 text-xs uppercase tracking-wider mb-4">Contents</h3>
                        <nav class="space-y-1.5">
                            <?php
                            foreach ($toc as $i => $t) {
                                echo '<a href="' . $t[0] . '" class="toc-link block text-xs text-gray-500 hover:text-brand-600 transition pl-3 border-l-2 border-gray-200 hover:border-brand-600 py-1">' . ($i+1) . '. ' . $t[1] . '</a>';
                            }
                            ?>
                        </nav>
                    </div>

                    <!-- Sidebar CTA -->
                    <div class="bg-brand-900 rounded-2xl p-6 text-white text-center">
                        <img src="assets/images/3kits.png" alt="Glyco Pulse" class="w-32 mx-auto mb-4">
                        <h4 class="font-bold text-lg mb-1">Glyco Pulse™</h4>
                        <div class="flex justify-center text-yellow-400 mb-2">
                            <?php for($i=0;$i<5;$i++) echo '<svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'; ?>
                        </div>
                        <p class="text-red-200 text-xs mb-4">4.8/5 — 12,043 Reviews</p>
                        <div class="mb-4">
                            <span class="text-3xl font-black">$49</span>
                            <span class="text-red-200 text-sm">/bottle</span>
                        </div>
                        <a href="index.php#order-now" class="block w-full py-3 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-full transition text-sm shadow-lg">
                            Visit Official Store
                        </a>
                        <p class="text-red-300/50 text-[10px] mt-3">180-Day Money-Back Guarantee</p>
                    </div>

                    <!-- Trust Badges -->
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                        <div class="grid grid-cols-2 gap-3 text-center">
                            <div class="text-xs text-gray-500 font-medium">
                                <div class="w-8 h-8 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                Natural
                            </div>
                            <div class="text-xs text-gray-500 font-medium">
                                <div class="w-8 h-8 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/></svg>
                                </div>
                                USA Made
                            </div>
                            <div class="text-xs text-gray-500 font-medium">
                                <div class="w-8 h-8 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                </div>
                                GMP Certified
                            </div>
                            <div class="text-xs text-gray-500 font-medium">
                                <div class="w-8 h-8 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                Non-GMO
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Bottom CTA -->
    <section class="py-16 bg-brand-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Try Glyco Pulse?</h2>
            <p class="text-red-200 text-lg mb-8 max-w-2xl mx-auto">Get the authentic formula with a 180-day money-back guarantee. Only available on the official website.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.php#order-now" class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-brand-900 font-bold rounded-full hover:bg-gray-100 transition shadow-xl text-lg">
                    Visit Official Store — From $49/Bottle
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
            <p class="text-red-300/50 text-xs mt-4">One-time payment. No subscriptions. Free shipping on 3+ bottles.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 py-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
                <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-400">
                    <a href="index.php" class="hover:text-gray-600 transition">Store</a>
                    <a href="about.php" class="hover:text-gray-600 transition">About</a>
                    <a href="contact.php" class="hover:text-gray-600 transition">Contact</a>
                    <a href="privacy.php" class="hover:text-gray-600 transition">Privacy</a>
                    <a href="terms.php" class="hover:text-gray-600 transition">Terms</a>
                </div>
                <p class="text-xs text-gray-400">&copy; <?php echo date("Y"); ?> Glyco Pulse Review. All rights reserved.</p>
            </div>
            <div class="text-center text-[10px] text-gray-400 max-w-3xl mx-auto space-y-3">
                <p><strong class="text-gray-500">Disclaimer:</strong> The statements made regarding this product have not been evaluated by the Food and Drug Administration. The information provided is not intended to substitute or replace any medical treatment. It is advisable to consult with a healthcare professional for personalized health advice. Individual results may vary.</p>
                <p><strong class="text-gray-500">Marketing Disclosure:</strong> This website functions as a marketplace. Therefore, it is important to note that the owner of this website has a financial association with the products and services advertised on the site. The owner receives compensation when a qualified lead is referred, but that is the extent of the relationship.</p>
                <p><strong class="text-gray-500">Advertising Disclosure:</strong> This website and the products and services mentioned on the site are part of an advertising marketplace. It is important to understand that this website operates as an advertisement and not a news publication. Any depictions of individuals on this site are models. The owner of this site, as well as the products and services mentioned, solely offers a platform for consumers to obtain and compare information.</p>
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 p-3 md:hidden z-50 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)]">
        <a href="index.php#order-now" class="block w-full bg-brand-600 text-white text-center font-bold py-3 rounded-full shadow-lg">
            Visit Official Store — $49/Bottle
        </a>
    </div>

</body>
</html>
