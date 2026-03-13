<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - EverHealthFlow</title>
    <meta name="description" content="EverHealthFlow Terms of Service. Read our terms and conditions for using our website.">
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Terms of Service</h1>
            <div class="prose prose-lg mx-auto text-gray-600">
                <h3>1. Terms</h3>
                <p>By accessing this website, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>

                <h3>2. Use License</h3>
                <p>Permission is granted to temporarily download one copy of the materials on EverHealthFlow's website for personal, non-commercial transitory viewing only. Under this license you may not:</p>
                <ul>
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose, or for any public display;</li>
                    <li>attempt to decompile or reverse engineer any software contained on the website;</li>
                    <li>remove any copyright or other proprietary notations from the materials;</li>
                    <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                </ul>

                <h3>3. Disclaimer</h3>
                <p>The materials on this website are provided on an 'as is' basis. EverHealthFlow makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property.</p>

                <h3>4. Limitations</h3>
                <p>In no event shall EverHealthFlow or its suppliers be liable for any damages arising out of the use or inability to use the materials on this website, even if an authorized representative has been notified of the possibility of such damage.</p>

                <h3>5. Accuracy of materials</h3>
                <p>The materials appearing on this website could include technical, typographical, or photographic errors. EverHealthFlow does not warrant that any of the materials are accurate, complete or current. Changes may be made at any time without notice.</p>

                <h3>6. Links</h3>
                <p>EverHealthFlow has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. Use of any linked website is at the user's own risk.</p>

                <h3>7. Modifications</h3>
                <p>EverHealthFlow may revise these terms of service at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms.</p>

                <h3>8. Governing Law</h3>
                <p>These terms and conditions are governed by and construed in accordance with the laws of Delaware, USA and you irrevocably submit to the exclusive jurisdiction of the courts in that State.</p>
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
