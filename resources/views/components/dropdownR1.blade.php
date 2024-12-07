<!-- resources/views/components/dropdown-posisi.blade.php -->
@props(['label' => 'Posisi', 'options' => [], 'onOptionSelected' => ''])

<div class="relative">
    <div onclick="toggleDropdown('{{ $attributes->get('id') }}')" id="{{ $attributes->get('id') }}-label"
        class="w-80 p-2 bg-white border-2 border-blue-700 cursor-pointer font-semibold">
        {{ $label }}
    </div>
    <div id="{{ $attributes->get('id') }}-options" class="bg-white border border-gray-300 hidden">
        @foreach ($options as $option)
            <div onclick="selectOption('{{ $attributes->get('id') }}', '{{ $option }}')"
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

    function selectOption(id, option) {
        document.getElementById(`${id}-label`).textContent = option;
        toggleDropdown(id);

        // Memanggil fungsi JavaScript untuk memperbarui opsi di DropdownPemeriksaan
        if (typeof window['{{ $onOptionSelected }}'] === 'function') {
            window['{{ $onOptionSelected }}'](option);
        }
    }
</script>
