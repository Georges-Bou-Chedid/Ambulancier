@extends('layouts.auth')

@section('content')
 
   <!-- This is an example component -->
<div class="flex items-center px-4">
    <div class='overflow-x-auto w-full'>

    <div class="mt-6 text-center text-4xl text-green-700">
        Archive
</div>

        <!-- Table -->
       
        <table class='mt-6 mx-auto max-w-8xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="bg-gray-50">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Ambulance
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        KM
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
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Rebhan
                    </th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                        Created_at
					</th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Archived_at
					</th>
					<th class="font-semibold text-sm uppercase px-6 py-4">
                       
					</th>

                </tr>
            </thead>
			
            <tbody class="divide-y divide-gray-200">
            @foreach($archived as $archiveds)
                <tr>
                    <td class="px-6 py-4 text-center">
                     
                         {{$archiveds->ambname}}
                    </td>
                    <td class="px-6 py-4 text-center">
                     
                     {{$archiveds->KM}}
                </td>
                    <td class="px-6 py-4">
                     {{$archiveds->name}}
                    </td>
                    <td class="px-6 py-4 text-center">
                       {{$archiveds->problem}}
                    </td>
                    <td class="px-6 py-4 text-center">
					{{$archiveds->Description}}
                    </td>
					<td class="px-6 py-4">
					{{$archiveds->status}}
                    </td>
                    <td class="px-6 py-4 text-center">
                     {{$archiveds->rebhan}}
                </td>
					<td class="px-6 py-4">
                        {{$archiveds->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        {{$archiveds->updated_at}}
                    </td>
		
                </tr>
				@endforeach
               
            </tbody>
        </table>

    </div>
</div>


       
@endsection

   
