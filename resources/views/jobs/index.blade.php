<x-layout>
    {{-- breadcrumbs --}}
    <x-bread-crumbs  class="mb-4"
    :links="['Jobs' => route('jobs.index')]" />


    {{-- to build filter --}}
    <x-card class="mb-4 text-sm">
        <form id="filtering-form" action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4 ">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input
                        name="search"
                        placeholder="Search for any text" form-id="filtering-form"
                        value="{{ request('search') }}" />
                </div>
                <div>
                    <div>
                        <div class="mb-1 font-semibold">Salary</div>
                        <div class="flex gap-2">
                            <x-text-input
                            name="min_salary"
                            placeholder="From" form-id="filtering-form"
                            value="{{ request('min_salary') }}" />
                            <x-text-input
                            name="max_salary"
                            placeholder="To" form-id="filtering-form"
                            value="{{ request('max_salary') }}" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                        <x-radio-group name="experience"
                        :options="\App\Models\Job::$experience"></x-radio-group>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                        <x-radio-group name="category"
                        :options="\App\Models\Job::$categories"></x-radio-group>
                </div>
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







