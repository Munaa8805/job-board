<x-layout>
    <x-slot name="title">
        {{$work->title}}
    </x-slot>
    <x-navbar />
    <x-card>
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-medium">{{ $work->title ?? "No title"}}</h2>
            <p class="text-slate-500">Salary : ${{number_format( $work->salary ) ?? "0"}}</p>

        </div>
        <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">

            <div class="flex space-x-4">
                <div>Company: </div>
                <div>{{ $work->company ?? "Nice beautifull" }}</div>
            </div>
            <div class="flex space-x-1 text-xs">
                <x-tag>
                    {{Str::ucfirst($work->experience)}}
                </x-tag>
                <x-tag>
                    {{Str::ucfirst($work->category)}}
                </x-tag>
            </div>

        </div>
        <p class="text-sm text-slate-500">
            {!!nl2br(e($work->description))!!}
        </p>
        <div class="mt-4 flex justify-between items-center">
            <p class="text-sm text-slate-500">Posted on: {{ $work->created_at->format('d M Y') }}</p>
            <a href="{{ route('works.index') }}" class="text-sm text-blue-500 hover:underline">
                Back</a>
        </div>
    </x-card>
</x-layout>