<html lang="en">

head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

<title>Laravel</title>
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

<body class="font-sans bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 p-6 bg-white">
            <div class="flex flex-col items-center">
                <img alt="Doctor illustration" class="mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/85UEUonfMA0fBUYIRXizlqrkCNQKUCAyjldCWuhYNYH10a3TA.jpg"
                    width="100" />
                <h2 class="text-xl font-bold text-blue-600">
                    Radiologi
                </h2>
                <p class="text-gray-400">
                    Laboratorium
                </p>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-4/5 p-6">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 mb-6 bg-white rounded-lg shadow-md">
                <div>
                    <p class="font-bold text-blue-600">
                        Kamis, 12 September 2024
                    </p>
                    <p class="text-gray-600">
                        Instalasi: Radiologi
                    </p>
                    <p class="text-gray-600">
                        dr. Permata Yulanda, Sp. Rad.
                    </p>
                </div>
                <div class="flex items-center">
                    <div class="mr-6 text-center">
                        <p class="text-gray-600">
                            Total Pasien
                        </p>
                        <p class="text-3xl font-bold text-blue-600">
                            999
                        </p>
                        <div class="flex justify-center mt-2 space-x-2">
                            <span class="px-2 py-1 text-green-600 bg-green-200 rounded">
                                9
                            </span>
                            <span class="px-2 py-1 text-yellow-600 bg-yellow-200 rounded">
                                10
                            </span>
                            <span class="px-2 py-1 text-red-600 bg-red-200 rounded">
                                4
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600">
                            Antrian
                        </p>
                        <p class="text-3xl font-bold text-blue-600">
                            6
                        </p>
                    </div>
                </div>
                <button class="px-4 py-2 text-white bg-blue-600 rounded-lg">
                    Scan QR-Code
                </button>
            </div>
            <!-- Filters -->
            <div class="flex items-center mb-4">
                <input class="p-2 mr-4 border border-gray-300 rounded-lg" type="date" />
                <div class="flex space-x-4">
                    <button class="font-bold text-blue-600">
                        Semua
                    </button>
                    <button class="text-gray-600">
                        Selesai
                    </button>
                    <button class="text-gray-600">
                        Antrian
                    </button>
                    <button class="text-gray-600">
                        Belum Konfirmasi
                    </button>
                    <button class="text-gray-600">
                        Dibatalkan
                    </button>
                </div>
            </div>
            <!-- Patient List -->
            <div class="space-y-4">
                <!-- Patient Item -->
                <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="p-2 mr-4 text-center text-green-600 bg-green-200 rounded-lg">
                            <p>
                                12/09
                            </p>
                            <p>
                                14:00
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-blue-600">
                                Nama
                            </p>
                            <p class="text-gray-600">
                                Nomor Kode Booking
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <p class="font-bold text-blue-600">
                            U.S.G
                        </p>
                        <p class="text-gray-600">
                            Liver and Vesica Fellea
                        </p>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg">
                            C
                        </button>
                        <button class="px-4 py-2 text-green-600 bg-green-200 rounded-lg">
                            Contoh
                        </button>
                    </div>
                </div>
                <!-- Repeat Patient Item with different colors -->
                <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="p-2 mr-4 text-center text-red-600 bg-red-200 rounded-lg">
                            <p>
                                12/09
                            </p>
                            <p>
                                14:00
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-blue-600">
                                U.S.G
                            </p>
                            <p class="text-gray-600">
                                Liver and Vesica Fellea
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <p class="font-bold text-blue-600">
                            U.S.G
                        </p>
                        <p class="text-gray-600">
                            Liver and Vesica Fellea
                        </p>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg">
                            file
                        </button>
                        <button class="px-4 py-2 text-red-600 bg-red-200 rounded-lg">
                            Contoh
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="p-2 mr-4 text-center text-yellow-600 bg-yellow-200 rounded-lg">
                            <p>
                                12/09
                            </p>
                            <p>
                                14:00
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-blue-600">
                                U.S.G
                            </p>
                            <p class="text-gray-600">
                                Liver and Vesica Fellea
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <p class="font-bold text-blue-600">
                            U.S.G
                        </p>
                        <p class="text-gray-600">
                            Liver and Vesica Fellea
                        </p>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg">
                            C
                        </button>
                        <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg">
                            Contoh
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="p-2 mr-4 text-center text-green-600 bg-green-200 rounded-lg">
                            <p>
                                12/09
                            </p>
                            <p>
                                14:00
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-blue-600">
                                U.S.G
                            </p>
                            <p class="text-gray-600">
                                Liver and Vesica Fellea
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <p class="font-bold text-blue-600">
                            U.S.G
                        </p>
                        <p class="text-gray-600">
                            Liver and Vesica Fellea
                        </p>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg">
                            C
                        </button>
                        <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg">
                            Contoh
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
