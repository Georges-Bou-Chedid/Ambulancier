@extends('layouts.auth')

@section('content')
<div class="grid grid-cols-2 text-center mt-10 ml-4">
<div class="text-lg text-white subpixel-antialiased font-bold bg-clip-border p-6 bg-gray-800 border-4 border-indigo-300 ">First Image : </div>
<div class="text-lg text-white subpixel-antialiased font-bold bg-clip-border p-6 bg-gray-800 border-4 border-indigo-300 ">Second Image : </div>
</div>

<div class="grid grid-cols-2 img mt-4 ml-2">
<div>
<h2><img src="{{ asset('storage/'.$ambulance->img) }}"   style="width:400px;height:400px;" alt="Not Uploaded"></h2>
</div>

<div class="mt-4 ml-4" >
<h2><img src="{{ asset('storage/'.$ambulance->img2) }}"  style="width:400px;height:400px;"  alt="Not Uploaded"></h2>
</div>

<div class="ml-2 mt-8 h-12">
        <a  href="{{ url()->previous() }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        Back
        </a>

        </div>
@endsection