@props([
    'question' => '', // Label untuk pertanyaan
    'name' => '', // Nama yang sama untuk semua radio button agar saling eksklusif
    'options' => [], // Array label untuk setiap opsi jawaban
])

<div class="max-w-4xl">
    <h3 class="mb-4 text-left font-semibold text-sm text-blue-800">{{ $question }}</h3>
    <div class="mb-12 flex justify-between max-w-4xl">
        @foreach ($options as $value => $label)
            <label class="flex items-center">
                <input type="radio" name="{{ $name }}" value="{{ $value }}"
                    class="form-radio h-4 w-4 text-blue-600" {{ $attributes }}>
                <span class="ml-2 text-sm text-black">{{ $label }}</span>
            </label>
        @endforeach
    </div>
</div>
