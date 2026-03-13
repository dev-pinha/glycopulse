<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - EverHealthFlow</title>
    <meta name="description" content="Learn about EverHealthFlow and our mission to provide independent, evidence-based health supplement reviews.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; } [x-cloak] { display: none !important; }</style>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { brand: { 600: '#dc2626', 700: '#b91c1c', 900: '#1a1a2e' } } } }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.php" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-brand-600 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900">EverHealthFlow</span>
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="index.php#reviews-section" class="text-gray-600 hover:text-gray-900 font-medium transition text-sm">Reviews</a>
                    <a href="index.php#ingredients" class="text-gray-600 hover:text-gray-900 font-medium transition text-sm">Ingredients</a>
                    <a href="index.php#faq" class="text-gray-600 hover:text-gray-900 font-medium transition text-sm">FAQ</a>
                </div>
                <a href="index.php#order-now" class="hidden md:inline-flex bg-brand-600 text-white px-5 py-2.5 rounded-full font-bold hover:bg-brand-700 transition text-sm">Check Availability</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">About EverHealthFlow</h1>
            <div class="prose prose-lg mx-auto text-gray-600">
                <p>EverHealthFlow is an independent health and wellness publication dedicated to providing evidence-based reviews of dietary supplements. Our editorial team includes certified health professionals who evaluate products based on ingredient quality, scientific evidence, manufacturing standards, and real user experiences.</p>
                <p>We believe consumers deserve transparent, well-researched information to make informed decisions about their health. Every review we publish undergoes a rigorous fact-checking process before publication.</p>
                <p>For order fulfillment and customer support, Glyco Pulse is distributed by Supplements Wholesale LLC, an established supplement distributor partnered with ISO-certified manufacturing facilities in the United States.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4 text-sm text-gray-400">
                    <a href="about.php" class="hover:text-gray-600 transition">About Us</a>
                    <a href="contact.php" class="hover:text-gray-600 transition">Contact Us</a>
                    <a href="privacy.php" class="hover:text-gray-600 transition">Privacy Policy</a>
                    <a href="terms.php" class="hover:text-gray-600 transition">Terms of Service</a>
                </div>
                <p class="text-sm text-gray-400">&copy; <?php echo date("Y"); ?> EverHealthFlow. All rights reserved.</p>
            </div>
            <div class="mt-6 text-center text-xs text-gray-400 max-w-4xl mx-auto border-t border-gray-100 pt-6">
                <p>The content of this site is for informational purposes only, and is not a substitute for professional medical advice, diagnosis or treatment.</p>
            </div>
        </div>
    </footer>

</body>
</html>
