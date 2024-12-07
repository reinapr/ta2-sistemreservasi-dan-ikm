<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<a <body>

    <!--JUDUL-->
    <section class="max-w-4xl py-10 mx-auto font-poppins ">
        <h1 class="text-2xl font-bold"> Reservasi Pasien Umum</h1>
    </section>

    <!--STEP BAR-->
    <x-step-bar :currentStep="2" :steps="["Mengisi Data Diri", "Memilih Prosedur" , "Memilih Jadwal" , "Selesai"
        ]" />

    <!--CHECKLIST RADIOLOGI/LABORATORIUM-->
    <div class="max-w-4xl p-4 mx-auto mb-10 bg-blue-100 rounded-lg">

        <div class="flex items-center">
            <x-forminput label="Pilih Layanan" name="layanan" type="radio2" :options="['radiologi' => 'Radiologi', 'laboratorium' => 'Laboratorium']" />
        </div>

        <div class="flex items-center mt-2">
            <label class="flex p-2 mr-2 font-bold bg-white border border-gray-300 rounded-md">Expertise</label>
            <input type="text" id="expertise" class="flex-1 p-2 border border-gray-300 rounded-md"
                value="dr. Permata Yulanda, Sp. Rad" readonly>
        </div>
    </div>

    <!--RADIOLOGI -->
    <!--DROPDOWN RADIOLOGI -->
    <div class="flex justify-between max-w-4xl p-4 mx-auto">

        <x-dropdownR1 id="dropdownPosisi" label="Posisi" :options="['Satu Posisi', 'Dua Posisi', 'Tiga/Empat Posisi', 'USG']"
            onOptionSelected="updatePemeriksaanOptions" />
        <x-dropdownR2 id="dropdownPemeriksaan" label="Pemeriksaan" :options="[]" />
    </div>

    <!--SUMMARY RADIOLOGI -->
    <div id="summaryRad" class="max-w-4xl p-4 mx-auto mt-10 mb-10 bg-white rounded-lg">
        <div class="items-center mb-4">
            <div class="px-4 py-2 font-semibold text-center bg-yellow-200 rounded-l ">Radiologi
            </div>

            <div class="flex items-center">
                <label for="expertise"
                    class="flex p-2 mr-2 font-bold bg-white border border-gray-300 rounded-md">Expertise</label>
                <input type="text" id="expertise" class="flex-1 p-2 border border-gray-300 rounded-md"
                    value="dr. Permata Yulanda, Sp. Rad" readonly>
            </div>

            <div class="flex items-center">
                <label for="expertise"
                    class="flex p-2 mr-2 font-bold bg-white border border-gray-300 rounded-md">Expertise</label>
                <input type="text" id="expertise" class="flex-1 p-2 border border-gray-300 rounded-md"
                    value="dr. Permata Yulanda, Sp. Rad" readonly>
            </div>

            <div class="max-w-4xl px-2 py-4 mx-auto">
                <x-button2 label="Cari Jadwal" variant="3" />
            </div>

        </div>

    </div>





    <!--LABORATORIUM -->
    <!--DROPDOWN lABORATORIUM -->
    <!--SUMMARY LABORATORIUM -->



    <div class="flex justify-between max-w-4xl p-4 mx-auto">
        <x-button2 label="Kembali" variant="1" />
        <x-button2 label="Selanjutnya" variant="1" />
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
                    // Radio button event listener
                    document.querySelectorAll('input[name="layanan"]').forEach(radio => {
                        radio.addEventListener('change', (event) => {
                            const selected = event.target.value;
                            document.getElementById('selectedLayanan').textContent = selected.charAt(0)
                                .toUpperCase() + selected.slice(1);
                            document.getElementById('expertise').value = selected === 'radiologi' ?
                                'dr. Permata Yulanda, Sp. Rad' : 'dr. Reina, Sp. Lab';
                        });
                    });


                    function toggleButton(selectedId, deSelectedId) {
                        document.getElementById('radiologi-btn').classList.add('selected');
                        document.getElementById('laboratorium-btn').classList.remove('selected');
                    }

                    document.getElementById('radiologi-btn').addEventListener('click', function() {
                        toggleButton('radiologi-btn', 'laboratorium-btn');
                    });

                    document.getElementById('laboratorium-btn').addEventListener('click', function() {
                        toggleButton('laboratorium-btn', 'radiologi-btn');
                    });


                    document.getElementById('radiologi-btn').addEventListener('click', function() {
                        document.getElementById('expertise').value = 'dr. Permata Yulanda, Sp. Rad';
                        document.getElementById('dropdownSection').style.display = 'block';
                    });

                    document.getElementById('laboratorium-btn').addEventListener('click', function() {
                        document.getElementById('expertise').value = 'dr. Reina, Sp. Lab';
                        document.getElementById('dropdownSection').style.display = 'block';
                    });

                    function updatePemeriksaanOptions(selectedOption) {
                        const pemeriksaanOptions = {
                            "Satu Posisi": ["Basis Cranil", "Wators", "Sella tunsica", "Maxilla", "Clavicula",
                                "Thorax P.A", "Thorax Lateral",
                                "Thorax Left Lateral Decubitus (LLD)", "Thorax Right Lateral Decubitus (RLD)",
                                "Top Foto Lardotic", "Abdomen/BNO", "Pervis", "Panoramic", "Chepalo", "Dental"
                            ],
                            "Dua Posisi": ["Orbita", "Os Nasal", "Schadel AP/L", "Sinus Paranasalis", "Mastoid",
                                "Temporo Mandibular Joint", "Mandibula", "Os Zigomaticum", "Cervical AP/LAT",
                                "Shoulder Joint", "Os Humerus AP/LAT", "Art Cubiti AP/LAT", "Antebrachili AP/LAT",
                                "Whrist Joint AP/LAT", "Manus", "Digiti AP/LAT", "Thorax AP/LAT", "Strenum",
                                "Vertebrae Thoracalis AP/LAT", "Vertebrae Thoraco Lumbal AP/LAT",
                                "Vertebrae Lumbalis AP/LAT", "Vertebrae Lumbo-Sacral AP/LAT", "Sacmcocygeus AP/LAT",
                                "Hip Joint", "Femur AP/LAT", "Art Genu AP/LAT", "Os Crurus AP/LAT",
                                "Ankle Joint AP/LAT", "Pedis", "Calcanus"
                            ],
                            "Tiga/Empat Posisi": ["Abdomen Tiga Posisi", "Cervical AP/LAT Oblique",
                                "Thoracal AP/LAT Oblique",
                                "Thoraca-Lumbal AP/LAT Oblique", "Lumbal AP/LAT Oblique",
                                "Lumbal-Sacral AP/LAT Oblique"
                            ],
                            "USG": ["Schadel", "Thyroid", "Thorax", "Mammae", "Soft Tissue Massa", "Whole Abdomen",
                                "Upper Abdomen", "Lower Abdomen", "Liver dan Vesica Fellea", "Urologi", "Renal",
                                "Prostate", "Scrotum/Testis", "Obgyn", " Muskuloskeletal"
                            ]
                        };

                        const options = pemeriksaanOptions[selectedOption] || [];
                        updateDropdownOptions('dropdownPemeriksaan', options);
                    }
    </script>

    </body>


</html>
