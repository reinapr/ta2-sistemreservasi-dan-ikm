<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<script>
    tailwind.config = {
        theme: {
            extend:{
                spacing:{
                    13: '3.25rem'
                },
                fontFamily: {
                    poppins:['Poppins'],
                }
            }
        }
    }
</script>

</head>

<body class="font-poppins">

    <!--JUDUL-->
    <section class="max-w-4xl py-10 mx-auto font-poppins ">
        <h1 class="text-2xl font-bold"> Reservasi Pasien Umum</h1>
    </section>


    <!--STEP-->
    <div class="flex items-center justify-between max-w-4xl p-4 mx-auto mb-8">

        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-white bg-blue-700 rounded-full">1</div>
            <p class="mt-2 "> Mengisi Data Diri</p>
        </div>

        <div class="flex-1 border-t-2 border-gray-300"></div>
        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-blue-700 bg-white border-2 border-blue-700 rounded-full">2</div>
            <p class="mt-2">Memilih Prosedur</p>
        </div>

        <div class="flex-1 border-t-2 border-gray-300"></div>
        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-blue-700 bg-white border-2 border-blue-700 rounded-full">3</div>
            <p>Memilih Jadwal</p>
        </div>

    </div>


    <!--FORM-->
    <div class="max-w-2xl mx-auto font-poppins">
        <form action="">
            <span class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">NIK</span>
            <input type="name" id="name"
            placeholder=" Nomor Induk Kependudukan"
            class="block w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200 invalid:text-red-700 invalid:focus:ring-pink-400 invalid:focus:border-pink-700 peer"/>
            <p class="invisible m-1 text-xs text-pink-700 peer-invalid:visible">NIK tidak valid</p>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mb-6 font-poppins">
        <form action="">
            <span class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">Nama Lengkap</span>
            <input type="name" id="name"
            placeholder=" masukkan nama lengkap"
            class="block w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200"/>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mb-6 font-poppins">
        <form action="">
            <span class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">Nama Lengkap</span>
            <input type="name" id="name"
            placeholder=" masukkan nama lengkap"
            class="block w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200"/>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mb-6 font-poppins">
        <form action="">
            <span class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">Nama Lengkap</span>
            <input type="name" id="name"
            placeholder=" masukkan nama lengkap"
            class="block w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200"/>
        </form>
    </div>

    <div class="max-w-2xl mx-auto mb-6 font-poppins">
        <form action="">
            <span class="block mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">Nama Lengkap</span>
            <input type="name" id="name"
            placeholder=" masukkan nama lengkap"
            class="block w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200"/>
        </form>
    </div>

   <div class="flex items-center">
    <div class="flex max-w-2xl mx-auto mb-6 font-poppins">
        <form action="">

            <span class=" mb-1 font-semibold text-blue-700 after:content-['*'] after:text-red-600 after:ml-0.5">Bukti Surat Rujukan</span>
            <input type="name" id="name"
            class="w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200"/>


            <button class="flex-1 px-3 py-2 mx-auto font-semibold text-blue-700 border-2 border-blue-700 rounded-md hover:text-white hover:bg-blue-700">Cari File</button>
        </form>


    </div>
   </div>

    <!--BUTTON 1-->
    <div>
        <button class="block px-5 py-2 mx-auto font-semibold text-white bg-blue-700 rounded-md hover:bg-white hover:border-blue-700 hover:border-2 hover:text-blue-700 active:bg-blue-800 active:text-white">Selanjutnya</button>
    </div>





    <!--STEP 2-->
    <div class="flex items-center justify-between max-w-4xl p-4 mx-auto mt-40 mb-8">

        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-white bg-blue-700 rounded-full">1</div>
            <p class="mt-2 "> Mengisi Data Diri</p>
        </div>

        <div class="flex-1 border-t-2 border-gray-300"></div>
        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-white bg-blue-700 rounded-full">2</div>
            <p class="mt-2">Memilih Prosedur</p>
        </div>

        <div class="flex-1 border-t-2 border-gray-300"></div>
        <div class="text-sm text-center">
            <div class="flex items-center justify-center w-8 h-8 mx-auto text-blue-700 bg-white border-2 border-blue-700 rounded-full">3</div>
            <p>Memilih Jadwal</p>
        </div>

    </div>


    <!--CHECKLIST RADIOLOGI/LABORATORIUM-->
    <div class="max-w-4xl p-4 mx-auto mb-8 bg-gray-100 rounded-lg">
        <div class="flex items-center">
            <label for="expertise" class="flex p-2 mr-2 font-bold bg-white border border-gray-300 rounded-md">Expertise</label>
            <input type="text" id="expertise" class="flex-1 p-2 border border-gray-300 rounded-md" value="dr. Permata Yulanda, Sp. Rad">
        </div>
    </div>


    <!--DROPDOWN-->





    <!--BUTTON 2-->
    <div class="flex justify-between">
        <button class="block px-5 py-2 mx-auto font-semibold text-white bg-blue-700 rounded-md hover:bg-white hover:border-blue-700 hover:border-2 hover:text-blue-700 active:bg-blue-800 active:text-white">Kembali</button>
        <button class="block px-5 py-2 mx-auto font-semibold text-white bg-blue-700 rounded-md hover:bg-white hover:border-blue-700 hover:border-2 hover:text-blue-700 active:bg-blue-800 active:text-white">Selanjutnya</button>
    </div>


</body>

</html>
