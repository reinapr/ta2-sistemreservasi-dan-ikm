@props(['categories' => []])

<ul class="p-4 bg-blue-100 rounded-lg">
    @foreach ($categories as $key => $label)
        <li class="mb-2">
            <button onclick="showProcedureOptions('{{ $key }}')" class="w-full text-left text-blue-500">
                {{ $label }}
            </button>
        </li>
    @endforeach
</ul>
