<x-layout>
   <x-slot:heading>
    JOB LISTING
  </x-slot:heading>
   @foreach($jobs as $job)
    <li><strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} Per Month</li>
  @endforeach
</x-layout>