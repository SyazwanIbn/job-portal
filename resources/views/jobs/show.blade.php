<x-layout>
    <x-bread-crumbs  class="m-4"
    :links="['Jobs' => route('jobs.index'), $job->title => '#']" />


    <x-job-card :$job />
</x-layout>
