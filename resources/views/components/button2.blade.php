@props(['id' => '', 'label', 'type' => 'button', 'variant' => '1', 'isSelected' => false])

@php
    $baseClass = 'px-4 py-2 font-semibold rounded-md transition-colors duration-300 ';
    $selectedClass = 'bg-blue-600 text-white';

    $class = match ($variant) {
        '1' => $baseClass .
            'w-40 text-white bg-blue-700 hover:bg-white hover:border-blue-700 hover:border-2 hover:text-blue-700 active:bg-blue-800 active:text-white',
        '2' => $baseClass .
            'w-80 text-blue-700 bg-white border-2 border-blue-700 hover:bg-blue-700 hover:text-white active:bg-blue-800 active:text-white focus:bg-blue-700 focus:outine-none focus:text-white',
        '3' => $baseClass .
            'w-full text-white bg-blue-700 hover:bg-white hover:border-blue-700 hover:border-2 hover:text-blue-700 active:bg-blue-800 active:text-white',
    };

    // Jika button sudah dipilih, tambahkan kelas terpilih
    if ($isSelected) {
        $class .= ' ' . $selectedClass;
    }
@endphp

<button id="{{ $id }}" type="{{ $type }}"
    {{ $attributes->merge(['class' => $class, 'onclick' => 'toggleButton(this)']) }}>
    {{ $label }}
</button>

<script>
    function toggleButton(button) {
        // Mengubah kelas button untuk menandakan bahwa button telah diklik
        button.classList.toggle('bg-blue-600');
        button.classList.toggle('text-white');
        button.classList.toggle('bg-blue-700');
    }
</script>
