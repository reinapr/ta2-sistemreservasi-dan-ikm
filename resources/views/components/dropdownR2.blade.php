<!-- resources/views/components/dropdown-pemeriksaan.blade.php -->
@props(['label' => 'Pemeriksaan', 'options' => []])

<div class="relative">
    <div onclick="toggleDropdown('{{ $attributes->get('id') }}')" id="{{ $attributes->get('id') }}-label"
        class="w-80 p-2 bg-white border-2 border-blue-700 cursor-pointer font-semibold">
        {{ $label }}
    </div>
    <div id="{{ $attributes->get('id') }}-options" class="bg-white border border-gray-300 hidden">
        @foreach ($options as $option)
            <div onclick="selectPemeriksaanOption('{{ $option }}')"
                class="p-2 cursor-pointer hover:bg-blue-200 border-gray-200">
                {{ $option }}
            </div>
        @endforeach
    </div>
</div>

<script>
    function toggleDropdown(id) {
        document.getElementById(`${id}-options`).classList.toggle("hidden");
    }

    function selectPemeriksaanOption(option) {
        const id = '{{ $attributes->get('id') }}'; // ambil id dropdown
        document.getElementById(`${id}-label`).textContent = option; // Update label
        toggleDropdown(id); // Tutup dropdown
    }

    function updateDropdownOptions(id, options) {
        const container = document.getElementById(`${id}-options`);
        container.innerHTML = '';
        options.forEach(option => {
            const optionElement = document.createElement('div');
            optionElement.textContent = option;
            optionElement.className = "p-2 cursor-pointer hover:bg-blue-200 border-gray-200";
            optionElement.onclick = () => selectPemeriksaanOption(option); // Update label saat opsi dipilih
            container.appendChild(optionElement);
        });
    }
</script>
