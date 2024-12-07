<!DOCTYPE html>
<html lang="en">

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

<body>
    <!-- Judul -->
    <section class="max-w-4xl py-10 mx-auto font-poppins">
        <h1 class="text-2xl font-bold">Reservasi Pasien Umum</h1>
    </section>

    <!--STEP BAR-->
    <x-step-bar :currentStep="2" :steps="['Mengisi Data Diri', 'Memilih Prosedur', 'Memilih Jadwal', 'Selesai']" />


    <!-- Prosedur Radiologi/Laboratorium -->
    <div class="max-w-4xl p-4 mx-auto mb-10 bg-blue-100 rounded-lg">
        <h2 class="text-lg font-bold">Pilih Layanan</h2>
        <div class="flex items-center space-x-4">
            <x-forminput type="radio2" label="Pilih Layanan" name="layanan" :options="['radiologi' => 'Radiologi', 'laboratorium' => 'Laboratorium']"
                onchange="handleLayananChange(this)" />

        </div>
        <div class="flex items-center mt-4">
            <label class="mr-2 font-bold">Expertise:</label>
            <input type="text" id="expertise" class="flex-1 p-2 border border-gray-300 rounded-md" value=""
                readonly>
        </div>
    </div>

    <!-- Dropdown Posisi dan Pemeriksaan -->
    <div class="flex max-w-4xl mx-auto space-x-4">
        <div class="w-1/2">
            <label for="dropdownPosisi" class="block font-bold">Pilih Posisi</label>
            <select id="dropdownPosisi" class="w-full p-2 border border-gray-300 rounded-md"
                onchange="updatePemeriksaanOptions(this)">
                <option value="">Posisi</option>
                <option value="Satu Posisi">Satu Posisi</option>
                <option value="Dua Posisi">Dua Posisi</option>
                <option value="Tiga/Empat Posisi">Tiga/Empat Posisi</option>
                <option value="USG">USG</option>
            </select>
        </div>
        <div class="w-1/2">
            <label for="dropdownPemeriksaan" class="block font-bold">Pilih Pemeriksaan</label>
            <select id="dropdownPemeriksaan" class="w-full p-2 border border-gray-300 rounded-md" disabled>
                <option value="">Pemeriksaan</option>
            </select>
        </div>
    </div>

    <!-- Summary -->
    <div id="summary" class="max-w-4xl p-4 mx-auto mt-10 mb-10 bg-blue-100 rounded-lg ">
        <h2 class="mb-4 text-lg font-semibold">Summary</h2>

        <p class="flex mb-2"><strong class="p-2 mr-6 bg-white border border-gray-300 rounded-md">Prosedur </strong>
            <span id="summaryLayanan" class="flex-1 p-2 bg-white border border-gray-300 rounded-md ">-</span>
        </p>

        <p class="flex mb-2"><strong class="p-2 mr-6 bg-white border border-gray-300 rounded-md">Expertise</strong>
            <span id="summaryExpertise" class="flex-1 p-2 bg-white border border-gray-300 rounded-md ">-</span>
        </p>

        <p class="flex mb-2"><strong class="p-2 mr-6 bg-white border border-gray-300 rounded-md">Posisi</strong> <span
                id="summaryPosisi" class="flex-1 p-2 bg-white border border-gray-300 rounded-md ">-</span></p>

        <p class="flex mb-2"><strong class="p-2 mr-6 bg-white border border-gray-300 rounded-md">Pemeriksaan</strong>
            <span id="summaryPemeriksaan" class="flex-1 p-2 bg-white border border-gray-300 rounded-md ">-</span>
        </p>
    </div>

    <script>
        // Update Expertise
        function handleLayananChange(radio) {
            const expertiseField = document.getElementById("expertise");
            const layananSummary = document.getElementById("summaryLayanan");
            const expertiseSummary = document.getElementById("summaryExpertise");

            if (radio.value === "radiologi") {
                expertiseField.value = "dr. Permata Yulanda, Sp. Rad";
            } else if (radio.value === "laboratorium") {
                expertiseField.value = "dr. Reina, Sp. Lab";
            }

            layananSummary.textContent = radio.value.charAt(0).toUpperCase() + radio.value.slice(1);
            expertiseSummary.textContent = expertiseField.value;
        }

        // Update Pemeriksaan Options
        function updatePemeriksaanOptions(select) {
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

            const pemeriksaanSelect = document.getElementById("dropdownPemeriksaan");
            const posisiSummary = document.getElementById("summaryPosisi");
            const pemeriksaanSummary = document.getElementById("summaryPemeriksaan");

            // Update Summary
            posisiSummary.textContent = select.value || "-";
            pemeriksaanSummary.textContent = "-";

            // Clear and Enable Pemeriksaan Dropdown
            pemeriksaanSelect.innerHTML = '<option value="">-- Pilih Pemeriksaan --</option>';
            if (select.value) {
                pemeriksaanSelect.disabled = false;
                pemeriksaanOptions[select.value].forEach(option => {
                    const opt = document.createElement("option");
                    opt.value = option;
                    opt.textContent = option;
                    pemeriksaanSelect.appendChild(opt);
                });
            } else {
                pemeriksaanSelect.disabled = true;
            }

            pemeriksaanSelect.addEventListener("change", function() {
                pemeriksaanSummary.textContent = this.value || "-";
            });
        }
    </script>
</body>

</html>
