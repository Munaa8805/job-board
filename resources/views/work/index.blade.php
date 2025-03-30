<x-layout>
    <x-slot name="title">
        All Jobs
    </x-slot>
    <h1 class="text-3xl font-bold text-center mb-4">
        We help to find your dream job
    </h1>
    <x-navbar />

    <x-card class="mb-4 text-sm" x-data="">
        <form x-ref="filters" id="filtering-form" action="{{ route('works.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <input
                        class='w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2'
                        type="text" name="search" value="{{ request('search') }}" placeholder="Search for any text"
                        form-ref="filters" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>

                    <div class="flex space-x-2">
                        <input
                            class='w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2'
                            type="text" name="min_salary" value="{{ request('min_salary') }}" placeholder="From"
                            form-ref="filters" />
                        <input
                            class='w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2'
                            type="text" name="max_salary" value="{{ request('max_salary') }}" placeholder="To"
                            form-ref="filters" />
                    </div>
                </div>
                {{-- <div>
                    <div class="mb-1 font-semibold">Experience</div>


                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                </div> --}}
            </div>

            <button type="submit" class='rounded-md border border-slate-300 bg-white px-2.5 py-1.5 text-center text-sm
    font-semibold text-black shadow-sm hover:bg-slate-100'>Filter</button>
        </form>
    </x-card>
    <div>
        @foreach ($works as $work)
        <x-card class="mb-4">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-medium">{{ mb_strimwidth($work->title , 0 , 40, "...") ?? "No title"}}</h2>
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
                <a href="{{ route('works.show', $work) }}" class="text-sm text-blue-500 hover:underline">View
                    Details</a>
            </div>
        </x-card>
        @endforeach
    </div>

</x-layout>