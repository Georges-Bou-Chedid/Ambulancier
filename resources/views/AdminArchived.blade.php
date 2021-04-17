@extends('layouts.auth')

@section('content')

<div class="mt-6 text-center text-2xl text-white rounded-2xl bg-gray-800">
        ARCHIVE
</div>

<div class="mt-4 ml-12 text-left">
   
    <form action="/searcharchive" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="h-8 w-48 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none"  name="term"
            placeholder="Search anything...""> 

            @if(isset($details))

            <div class="ml-2 mt-6 h-12">
                 <a  href="{{ url()->previous() }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                 Back
                </a>
             </div>

            @else
            <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"> <i class="fa fa-search text-gray-600 z-20 hover:text-gray-500"></i></span>
            </button>
        </span>
        @endif

        <span>
        @if(session('message'))
        <div class="alert">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('message')}}
        </div>
        @endif
        </span>


    </div>
</form>
</div>

@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

 
   <!-- This is an example component -->
<div class="flex items-center px-4">
    <div class='overflow-x-auto w-full'>


        <!-- Table -->
       
        <table class='mt-4 mx-auto max-w-6xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
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
		
                    <td class="px-6 py-4 text-center">
                    <form method="post" action="/archive/{{$archiveds->id}}">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-600 hover:underline">
                   Delete
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

   

