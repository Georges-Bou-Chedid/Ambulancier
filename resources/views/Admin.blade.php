@extends('layouts.auth')

@section('content')
 
   <!-- This is an example component -->
<div class="flex items-center px-4">
    <div class='overflow-x-auto w-full'>

	<div class="text-center">
	<form method="GET" action="/create">
  <button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Add Request +
    </button>
</form> 
</div>

        <!-- Table -->
		
        <table class='mt-6 mx-auto max-w-8xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="bg-gray-50">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Ambulance
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Your Name
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Problem
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Description
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        status
                    </th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                        Created_at
					</th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                        ~Due Date
					</th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                       
					</th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                       
					</th>

                </tr>
            </thead>
			
            <tbody class="divide-y divide-gray-200">
			@foreach($ambulance as $ambulances)
                <tr>
                    <td class="px-6 py-4 text-center">
                     
                         {{$ambulances->ambname}}
                    </td>
                    <td class="px-6 py-4">
                     {{$ambulances->name}}
                    </td>
                    <td class="px-6 py-4 text-center">
                       {{$ambulances->problem}}
                    </td>
                    <td class="px-6 py-4 text-center">
					{{$ambulances->Description}}
                    </td>
					<td class="px-6 py-4">
					{{$ambulances->status}}
                    </td>
					<td class="px-6 py-4">
                        {{$ambulances->created_at}}
                    </td>
					<td class="px-6 py-4">
						{{$ambulances->duedate}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="/edit/{{$ambulances->id}}" class="text-red-600 hover:underline">Edit</a>
                    </td>
					<td class="px-6 py-4 text-center">
                    <form method="post" action="/archive/{{$ambulances->id}}">
                    @csrf
                    <button class="text-green-600 hover:underline">
                   Archive
                    </button>
                </form>
                    </td>
                </tr>
				@endforeach
               
            </tbody>
        </table>

    </div>
</div>


       
@endsection

   

