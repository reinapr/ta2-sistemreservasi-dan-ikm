@props(['label', 'placeholder' => '', 'type' => 'text', 'options' => [], 'name' => '', 'onchange' => ''])

<div class="mb-8">
    <label class="max-w-4xl font-semibold text-blue-800 block mb-2 ">
        {{ $label }}
    </label>

    @if ($type === 'radio')
        <div class="flex items-center space-x-8 mt-1">
            @foreach ($options as $key => $value)
                <label class="flex items-center">
                    <input type="radio" id="{{ $key }}" name="{{ $name }}" value="{{ $key }}"
                        class="form-radio mr-2" onchange="{{ $onchange }}">
                    <span>{{ $value }}</span>
                </label>
            @endforeach
        </div>
    @elseif ($type === 'radio2')
        <div class="max-w-full flex justify-between space-x-8 mt-1">
            @foreach ($options as $key => $value)
                <div class="bg-white border border-gray-300 rounded-md p-2 max-w-full text-center">
                    <input type="radio" id="{{ $key }}" name="{{ $name }}"
                        value="{{ $key }}" class="hidden peer" onchange="{{ $onchange }}">
                    <label for="{{ $key }}"
                        class="font-semibold w-80 inline-block py-2 rounded-md cursor-pointer transition-colors duration-300 text-blue-700
                        peer-checked:bg-blue-700 peer-checked:text-white hover:bg-blue-700 hover:text-white">
                        {{ $value }}
                    </label>
                </div>
            @endforeach
        </div>
    @elseif($type === 'select')
        <select
            {{ $attributes->merge(['class' => 'w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200']) }}>
            <option value="">{{ $placeholder }}</option>
            @foreach ($options as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    @else
        <input type="{{ $type }}" placeholder="{{ $placeholder }}"
            {{ $attributes->merge(['class' => 'w-full px-3 py-2 text-sm border rounded-md shadow placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-indigo-200 focus:border-indigo-200']) }}>
    @endif
</div>
