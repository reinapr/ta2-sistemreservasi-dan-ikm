<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


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

<body class="font-sans">

    <!--JUDUL-->
    <section class="max-w-4xl py-10 mx-auto font-poppins ">
        <h1 class="text-2xl font-bold"> Reservasi Pasien Umum</h1>
    </section>


    <!--STEP BAR-->
    <x-step-bar :currentStep="1" :steps="['Mengisi Data Diri', 'Memilih Prosedur', 'Memilih Jadwal', 'Selesai']" />


    <!--FORM-->
    <div class="max-w-2xl mx-auto font-poppins after:content-['*'] after:text-red-600 after:ml-0.5">
        <x-forminput label="NIK" id="nik" placeholder="Nomor Induk Kependudukan" />
        <x-forminput label="Nama Lengkap" id="nama-lengkap" placeholder="Masukkan Nama lengkap" />
        <x-forminput label="Tanggal Lahir" id="tanggal-lahir" placeholder="dd/mm/yyyy" />
        <x-forminput label="Alamat" id="alamat" placeholder=" " />
        <x-forminput label="Nama Dokter yang Meminta" id="nama dokter" placeholder=" " />
    </div>

    <div class="flex items-center justify-between max-w-2xl mx-auto mb-6 font-poppins">
        <form class="flex-1" action="">
            <label for="surat-rujukan"
                class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">
                Bukti Surat Rujukan
            </label>
            <input type="text" id="surat-rujukan"
                class="w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200" />
        </form>

        <button
            class="px-3 py-2 ml-4 font-semibold text-blue-700 border-2 border-blue-700 rounded-md hover:text-white hover:bg-blue-700">
            Cari File
        </button>
    </div>




    <!--BUTTON 1-->
    <div>
        <x-button2 id="selanjutnya-btn" label="Selanjutnya" variant="1" />
    </div>





    <!--DROPDOWN-->








</body>

</html>
