
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <!-- Include your styles from Vite -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
</head>
<body>
    @include('components.nav-bar')

    <h1 class="text-3xl font-bold underline bg-slate-500">
        Hello world!
    </h1>

    <!-- Your other content goes here -->

    <script>
        // Initialize Alpine.js
        document.addEventListener('DOMContentLoaded', function () {
            Alpine.start();
        });
    </script>
</body>
</html>
