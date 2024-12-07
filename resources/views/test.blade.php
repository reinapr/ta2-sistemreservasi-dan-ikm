<html>

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
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .scrollable-menu {
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
</head>

<body class="p-8 bg-white">
    <div class="max-w-4xl mx-auto">
        <h1 class="mb-4 text-xl font-bold">Reservasi Pasien Umum</h1>



        <div class="flex mb-8">
            <!-- SIDEBAR-->
            <div class="w-1/3">
                <ul class="p-4 bg-blue-100 rounded-lg scrollable-menu">
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('hematologi')" class="w-full text-left text-blue-500">
                            Hematologi
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('hemostasis')" class="w-full text-left text-blue-500">
                            Hemostasis
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('molekular')" class="w-full text-left text-blue-500">
                            Molekular
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('alergiAutoimun')" class="w-full text-left text-blue-500">
                            Alergi-Autoimun
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('hati')" class="w-full text-left text-blue-500">
                            Hati
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('jantung')" class="w-full text-left text-blue-500">
                            Jantung
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('hepatitis')" class="w-full text-left text-blue-500">
                            Hepatitis
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('lipid')" class="w-full text-left text-blue-500">
                            Lipid
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('ginjal')" class="w-full text-left text-blue-500">
                            Ginjal
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('petandaTumor')" class="w-full text-left text-blue-500">
                            Petanda Tumor
                        </button>
                    </li>
                    <li class="mb-2">
                        <button onclick="showProcedureOptions('diabetes')" class="w-full text-left text-blue-500">
                            Diabetes
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('gasDarah')" class="w-full text-left text-blue-500">
                            Gas Darah-Elektrolit
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('tiroid')" class="w-full text-left text-blue-500">
                            Tiroid-Paratiroid
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('napza')" class="w-full text-left text-blue-500">
                            Napza-Obat
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('urinFeses')" class="w-full text-left text-blue-500">
                            Urin-Feses
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('infeksi')" class="w-full text-left text-blue-500">
                            Infeksi
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('cairanTubuh')" class="w-full text-left text-blue-500">
                            Cairan Tubuh
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('mikrobiologi')" class="w-full text-left text-blue-500">
                            Mikrobiolohi
                        </button>
                    </li>
                    <li>
                        <button onclick="showProcedureOptions('infeksi')" class="w-full text-left text-blue-500">
                            Infeksi
                        </button>
                    </li>
                </ul>
            </div>


            <div class="w-3/4">
                <div class="p-4 bg-white border border-gray-300 rounded-lg">
                    <div id="procedure-options" class="grid grid-cols-2 gap-4 mb-4">

                    </div>
                </div>
            </div>
        </div>

        <!--sUMMARY -->
        <div class="p-4 bg-white border border-gray-300 rounded-lg">
            <h2 class="mb-4 font-bold">Ringkasan</h2>
            <div id="summary" class="grid grid-cols-1 gap-4">
                <p class="text-gray-500">Belum ada pilihan yang dipilih.</p>
            </div>
        </div>
    </div>

    <script>
        const procedures = {
            hematologi: ["Hematologi Rutin", "Retikulosit", "Hematologi Lengkap", "I/T Ratio", "Hematologi Lengkap + ",
                "Hitung Jenis", "Laju Endap Darah (LED)", "Golongan Darah", "Retikulosit", "Morfologi Darah Tepi",
                "Ferntin", "Serum Iron (SI)", "TIBC", "Coombs Test", "Cd 5"
            ],
            hemostasis: ["PT/INR", "APTT", "D-Dimer", "Waktu Pendaharan (BT)", "Waktu Pembekuan (CT)"],
            molekular: ["HPV DNA", "HBV DNA", "HCV RNA", "HIV RNA", "TB PCR (Gen Expert / TCM TB)",
                "RT-PCR SARS CoV 2"
            ],
            alergiAutoimun: ["ASTO", "RF"],
            hati: ["AST(SGOT)", "ALT (SGPT)", "Protein Total "],
            jantung: ["CKMB (Massa)", "Troponin 1", "HS Troponin 1", "HsCRP"],
            hepatitis: ["ICT (Rapid)", "HBsAg Konfirmasi", "HBsAg ELiSA", "Anti HBs", "HBeAg ICT", "Anti HCV Total"],
            lipid: ["Kolesterol Total", "Kolestrerol HDL", "Kolesterol LDL"],
            ginjal: ["Urea N", "Kreatinin/eGFR", "Asam Urat", "Mikroalbumin Urin", "Kreatinin Urin",
                "Mikroalbuminuria Sewaktu (ACR)"
            ],
            petandaTumor: ["AFP", "CEA", "PSA Total"],
            diabetes: ["Glukosa Puasa*", "Glukosa 2 Jam PP**", "Glukosa Sewaktu", "Glukosa Toleransi Tes (GTT)*",
                "HnAIc"
            ],
            gasDarah: ["Analisis Gas Darah", "Elektrolit Darah (Na, K, Cl/Ca)", "Elektrolit Urin (Na, K, Cl/Ca)"],
            tiroid: ["Free T3", "Free T4", "TSHs"],
            napza: ["Amphetamin (Shabu)", "Metamphetamin (Ecstasy)", "Morfin (Heroin, Opiat)", "Benzodiazepin",
                "Cocain", "THC (Canabis/Marijuana)"
            ],
            urinFeses: ["Urinalisis Rutin", "B HCG Urin / Tes Kehamilan", "Feses Rutin", "Darah Samar Feses"],
            infeksi: ["CRP Kuantitatif", "Dengue Antigen (NS1)", "Dengue IgG/IgM", "Anti Salmonella typhi IgM (Tubea)",
                "Widal", "VDRL/RPR", "TPHA", "Aanti HIV Penyaring", "Antigen SARS-CoV-2", "Malaria (Rapid+Slide)"
            ],
            cairanTubuh: ["Analisa Cairan Otak", "Analisa Cairan Pleura", "Analisa Cairan Ascites",
                "Analisa Cairan Sendi", "Analisa Fertilitas Sperma", "Analisa Sekret Uretra",
                "Analisa Sekret Vagina"
            ],
            mikrobiologi: ["Pewarnaan Gram", "Pewarnaan BTA", "Pewarnaan BTA 3x (SPS)", "Pewarnaan KOH",
                "Kultur Resistensi Aerob", "Darah", "Urin", "Feses", "Sputum", "Swab/pus", "Sekret Vagina",
                "Cairan Tubuh", "Kultur Anaerob & Kepekaan", "Kultur Jamur", "Pemeriksaan Diphteri"
            ],
        };

        const summary = {};


        function showProcedureOptions(type) {
            const optionsDiv = document.getElementById('procedure-options');
            optionsDiv.innerHTML = '';

            if (procedures[type]) {
                procedures[type].forEach((procedure) => {
                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.id = procedure;
                    checkbox.value = procedure;
                    checkbox.classList.add('mr-2');
                    checkbox.addEventListener('change', () => updateSummary(type, procedure, checkbox.checked));

                    const label = document.createElement('label');
                    label.htmlFor = procedure;
                    label.textContent = procedure;

                    const div = document.createElement('div');
                    div.appendChild(checkbox);
                    div.appendChild(label);

                    optionsDiv.appendChild(div);
                });
            }
        }


        function updateSummary(category, procedure, isChecked) {
            if (!summary[category]) {
                summary[category] = [];
            }

            if (isChecked) {
                summary[category].push(procedure);
            } else {
                summary[category] = summary[category].filter(item => item !== procedure);
            }

            renderSummary();
        }


        function renderSummary() {
            const summaryDiv = document.getElementById('summary');
            summaryDiv.innerHTML = '';

            for (const [category, procedures] of Object.entries(summary)) {
                if (procedures.length > 0) {
                    const categoryTitle = document.createElement('p');
                    categoryTitle.classList.add('font-bold');
                    categoryTitle.textContent = category.charAt(0).toUpperCase() + category.slice(1);

                    const proceduresText = document.createElement('p');
                    proceduresText.textContent = procedures.join(', ');

                    summaryDiv.appendChild(categoryTitle);
                    summaryDiv.appendChild(proceduresText);
                }
            }

            if (summaryDiv.innerHTML === '') {
                summaryDiv.innerHTML = '<p class="text-gray-500">Belum ada pilihan yang dipilih.</p>';
            }
        }
    </script>
</body>

</html>
