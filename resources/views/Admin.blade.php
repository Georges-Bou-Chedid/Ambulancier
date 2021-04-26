@extends('layouts.auth')

@section('content')

<div>
@if(session('success'))
        <div class="alert text-green-800 text-center">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('success')}}
        </div>
        @endif
</div>

<div>
@if(session('appelet'))
        <div class="alert text-green-800 text-center">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('appelet')}}
        </div>
        @endif
</div>

<div>
@if(session('success2'))
        <div class="alert text-green-800 text-center">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('success2')}}
        </div>
        @endif
</div>

<div>
@if(session('edited'))
        <div class="alert text-green-800 text-center">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('edited')}}
        </div>
        @endif
</div>

<div class="grid grid-cols-3">
<div>
        <p class="text-center text-2xl mt-4 font-bold">Touw2ifet</p>

            <form action="/addtouw2ifet" method="POST">
                 @csrf
            <tr><table class="border-separate border border-green-800 mt-6 m-auto table-auto">
            <tr><th class="border border-green-800">Name</th>
                <th class="border border-green-800">From</th>
                 <th class="border border-green-800">To</th>
                <th style="text-align:center"><button class="btn btn-success" type="submit"><i class="fas fa-plus"></i></button></td></tr>
            </form>

                
            @foreach($akal as $akals)
                <form action="/savetouw2ifet/{{$akals->id}}" method="POST">
                 @csrf
                 @method('PUT')

                 <tr><td class="text-center">
                 <input id="type" class="ml-2 mr-2" value="{{$akals->name}}" style="height:30px ; width:100px" name="name">
                </td> 


                <td class="border border-green-800"> <input style="height:30px ; width:100px" type ="date" value="{{$akals->from}}" name="date1">

                 <td class="border border-green-800"> <input style="height:30px ; width:100px" type ="date" value="{{$akals->to}}"  name="date2">
              
                 <td><button  class="ml-2 " type="submit"><i class="far fa-save icon1"></i></button></td>
                 </form>

                 <form action="/deletetouw2ifet/{{$akals->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <td><button  class="ml-2" type="submit"><i class="fas fa-trash icon" style="text-align:center"></i></button></td></tr>
                </form>
                @endforeach
                </table>

</div>

<div class="text-center">
	<form method="GET" action="/appelet">
  <button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Go To Appelet
    </button>
</form>
</div>

</div>

	<div class="text-center">
	<form method="GET" action="/create">
  <button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Add Request +
    </button>
</form>
</div>



<div class="mt-4 ml-12 text-center">

    <form action="/search" method="POST" role="search">
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


   <!-- This is an example component -->
<div class="flex items-center px-4">
    <div class='overflow-x-auto w-full'>



        <!-- Table -->

        <table class='table-auto mt-4 mx-auto max-w-8xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
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
                        Approved
                    </th>

                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        Rebhan
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
                    <td class="px-6 py-4 text-center">

                     {{$ambulances->KM}}
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

                    <td class="px-6 py-4 text-center">
                    <form action ="/approved/{{$ambulances->id}}" method="POST">
                    @csrf
                    <input type="checkbox" name ="approved" onClick="this.form.submit()" @if ($ambulances->approved == true) checked @endif>
                    </form>
                    </td>
                   

                    <td class="px-6 py-4 text-center">

                     {{$ambulances->rebhan}}
                </td>

              
					<td class="px-6 py-4">
                        {{$ambulances->created_at}}
                    </td>
					<td class="px-6 py-4" @foreach ($ambulance1 as $ambulances1) @if($ambulances->id == $ambulances1->id) style="color:red" @endif @endforeach>
						{{$ambulances->duedate}}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="/edit/{{$ambulances->id}}" class="text-red-600 hover:underline">Edit</a>
                    </td>

                    <td class="px-6 py-4 text-center">
                        <form method="post" action="/delete/{{$ambulances->id}}">
                            @method('DELETE')
                            @csrf
                            <button class="text-red-600 hover:underline">
                                Delete
                            </button>
                        </form>
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



