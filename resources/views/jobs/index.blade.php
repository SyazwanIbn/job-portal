<x-layout>
    {{-- breadcrumbs --}}
    <x-bread-crumbs  class="mb-4"
    :links="['Jobs' => route('jobs.index')]" />


    {{-- to build filter --}}
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4 ">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input
                        name="search"
                        placeholder="Search for any text"
                        value="{{ request('search') }}" />
                </div>
                <div>
                    <div>
                        <div class="mb-1 font-semibold">Salary</div>
                        <div class="flex gap-2">
                            <x-text-input
                            name="min_salary"
                            placeholder="From"
                            value="{{ request('min_salary') }}" />
                            <x-text-input
                            name="max_salary"
                            placeholder="To"
                            value="{{ request('max_salary') }}" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>

                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value=""
                        @checked(!request('experience')) />
                        <span class="ml-2">All</span>
                    </label>

                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="entry"
                        @checked('entry' === request('experience')) />
                        <span class="ml-2">Entry</span>
                    </label>

                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="intermediate"
                        @checked('intermediate' === request('experience'))/>
                        <span class="ml-2">Intermediate</span>
                    </label>

                    <label for="experience" class="mb-1 flex items-center">
                        <input type="radio" name="experience" value="senior"
                        @checked('senior' === request('experience'))/>
                        <span class="ml-2">Senior</span>
                    </label>
                </div>












                <div>4</div>
            </div>
            <button class="rounded-md border py-1 px-2 font-semibold bg-violet-500 text-white w-full">Search</button>
        </form>
    </x-card>

    {{-- display jobs --}}
    @foreach ($jobs as $job )
        <x-job-card class="m-4" :job="$job">
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>

    @endforeach
</x-layout>







