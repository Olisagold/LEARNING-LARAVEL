<x-layout>
   <x-slot:heading>
    JOB LISTING
  </x-slot:heading>
  <ul>
     @foreach($jobs as $job)
        <li>
          <a href="/jobs/{{$job['id']}}" class="hover:underline">
              <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} Per Month
          </a>
        </li>
    @endforeach
  </ul>
</x-layout>