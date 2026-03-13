<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EverHealthFlow</title>
    <meta name="description" content="Contact EverHealthFlow customer support. We're here to help with any questions about Glyco Pulse or your order.">
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
            <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Contact Us</h1>
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-sm">
                <p class="text-gray-600 mb-6 text-center">Have questions about your order or Glyco Pulse? We're here to help.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Mailing Address</h3>
                            <p class="text-gray-600">
                                Glyco Pulse c/o<br>
                                Supplements Wholesale LLC<br>
                                1111B S GOVERNORS AVE<br>
                                DOVER, DE 19904
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Email</h3>
                            <a href="mailto:support@everhealthflow.com" class="text-brand-600 hover:underline">support@everhealthflow.com</a>
                        </div>
                    </div>
                </div>
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
        </div>
    </footer>

</body>
</html>
