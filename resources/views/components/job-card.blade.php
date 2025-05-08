<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">
            RM{{ number_format($job->salary)  }}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-2">
            <div>Company Name:</div>
            <div>{{ $job->location  }}</div>
        </div>

        <div class="flex items-center space-x-2 text-xs">
            <x-tag class="rounded-md border px-2 py-1">{{ Str::ucfirst($job->experience) }}</x-tag>
            <x-tag class="rounded-md border px-2 py-1">{{ $job->category }}</x-tag>
        </div>
    </div>

    {{  $slot }}

</x-card>
