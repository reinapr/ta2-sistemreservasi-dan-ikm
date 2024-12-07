@props(['currentStep', 'steps'])

<div class="flex items-center justify-between max-w-4xl p-4 mx-auto mb-8">
    @foreach ($steps as $index => $step)
        <div class="text-sm text-center">
            <div
                class="flex items-center justify-center w-8 h-8 mx-auto rounded-full
                {{ $currentStep > $index ? 'bg-blue-700 text-white font-semibold' : 'bg-white text-blue-700 border-2 border-blue-700' }}">
                {{ $index + 1 }}
            </div>
            <p class="mt-2">{{ $step }}</p>
        </div>
        @if ($index < count($steps) - 1)
            <div class="flex-1 border-t-2 border-gray-300"></div>
        @endif
    @endforeach
</div>
