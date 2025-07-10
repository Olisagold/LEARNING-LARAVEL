<x-layout>
   <x-slot:heading>
    JOB
  </x-slot:heading>
  <h2 class="font-bold text-lg">
    {{$job['title']}}
  </h2>
  <p>
    This Job pays {{$job['salary']}} Per Month
  </p>
</x-layout>