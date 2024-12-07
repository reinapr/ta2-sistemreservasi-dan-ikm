<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <title>@yield('title', 'Laravel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    spacing: {
                        13: '3.25rem'
                    },
                    fontFamily: {
                        poppins: ['Poppins'],
                    }
                }
            }
        }
    </script>
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans font-poppins">
    <!-- Container utama -->
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
