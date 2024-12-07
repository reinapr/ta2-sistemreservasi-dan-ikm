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

<body class="bg-slate-100">
    <!--JUDUL-->
    <div class="text-center max-w-4xl mx-auto mt-10 bg-white rounded-lg">
        <section class="max-w-4xl py-10 mx-auto font-poppins ">
            <h1 class="text-2xl font-bold"> KUISIONER SURVEI KEPUASAN MASYARAKAT</h1>
            <br /> PADA RSUD KOTA TANJUNGPINANG
        </section>

        <div class="p-6">
            <h2 class="text-center text-lg font-semibold mb-6"></h2>

            <form>

                <x-forminput label="Responden" name="responden" type="radio" :options="['pasien' => 'Pasien', 'keluarga' => 'Keluarga Pasien']" />
                <x-forminput label="Jenis Kelamin" name="jenis_kelamin" type="radio" :options="['laki-laki' => 'Laki-Laki', 'perempuan' => 'Perempuan']" />
                <x-forminput label="Pendidikan Terakhir" name="pendidikan" type="select" placeholder="Pilih Pendidikan"
                    :options="[
                        'sd' => 'SD',
                        'smp' => 'SMP',
                        'sma' => 'SMA',
                        'diploma' => 'Diploma',
                        'sarjana' => 'Sarjana',
                        'magister' => 'Magister',
                        'doktor' => 'Doktor',
                    ]" />
                <x-forminput label="Umur" name="umur" type="number" placeholder="Masukkan umur Anda" />




                <div class="p-6">
                    <h3 class="mb-14 font-semibold text-xl text-blue-800">Pendapat Masyarakat Tentang Layanan</h3>
                    <h4 class="mb-10 font-light text-xs text-slate-400"> Jawablah pertanyaan dengan jujur</h4>

                    <x-questionikm
                        question="1. Bagaimana Pendapat Bapak/Ibu/Sdr. tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan di RSUD Kota Tanjungpinang"
                        name="question1" :options="[
                            '1' => 'Tidak Sesuai',
                            '2' => 'Kurang Sesuai',
                            '3' => 'Sesuai',
                            '4' => 'Sangat Sesuai',
                        ]" />

                    <x-questionikm
                        question="2. Bagaimana Pemahanan Bapak/Ibu/Sdr tentang kemudahan prosedur di unit ini"
                        name="question2" :options="[
                            '1' => 'Tidak Mudah',
                            '2' => 'Kurang Mudah',
                            '3' => 'Mudah',
                            '4' => 'Sangat Mudah',
                        ]" />

                    <x-questionikm
                        question="3. Bagaimana pendapat Bapak/Ibu/Sdr tentang kecepatan waktu dalam memberikan pelayanan di RSUD Kota Tanjungpinang"
                        name="question3" :options="[
                            '1' => 'Tidak Cepat',
                            '2' => 'Kurang Cepat',
                            '3' => 'Cepat',
                            '4' => 'Sangat Cepat',
                        ]" />

                    <x-questionikm
                        question="4. Bagaimana pendapat Bapak/Ibu/Sdr tentang kewajaran tarif/biaya dalam pelayanan di RSUD Kota Tanjungpinang"
                        name="question4" :options="[
                            '1' => 'Tidak Tidak Wajar',
                            '2' => 'Kurang Tidak Wajar',
                            '3' => 'Tidak Wajar',
                            '4' => 'Sangat Tidak Wajar',
                        ]" />

                    <x-questionikm
                        question="5. Bagaimana pendapat Bapak/Ibu/Sdr tentang kesesuaian hasil pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan"
                        name="question5" :options="[
                            '1' => 'Tidak Sesuai',
                            '2' => 'Kurang Sesuai',
                            '3' => 'Sesuai',
                            '4' => 'Sangat Sesuai',
                        ]" />

                    <x-questionikm
                        question="6. Bagaimana pendapat Bapak/Ibu/Sdr tentang kecepatan waktu dalam memberikan pelayanan di RSUD Kota Tanjungpinang"
                        name="question6" :options="[
                            '1' => 'Tidak Cepat',
                            '2' => 'Kurang Cepat',
                            '3' => 'Cepat',
                            '4' => 'Sangat Cepat',
                        ]" />

                    <x-questionikm
                        question="7. Bagaimana pendapat Bapak/Ibu/Sdr tentang kewajaran tarif/biaya dalam pelayanan di RSUD Kota Tanjungpinang"
                        name="question7" :options="[
                            '1' => 'Tidak Tidak Wajar',
                            '2' => 'Kurang Tidak Wajar',
                            '3' => 'Tidak Wajar',
                            '4' => 'Sangat Tidak Wajar',
                        ]" />

                    <x-questionikm
                        question="8. Bagaimana pendapat Bapak/Ibu/Sdr tentang kesesuaian hasil pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan"
                        name="question8" :options="[
                            '1' => 'Tidak Sesuai',
                            '2' => 'Kurang Sesuai',
                            '3' => 'Sesuai',
                            '4' => 'Sangat Sesuai',
                        ]" />
                </div>
        </div>
    </div>

</body>

</html>
