@extends('layouts.auth')

@section('content')

<form method="POST" enctype = "multipart/form-data" action="/edit/{{$ambulance->id}}">
    @csrf
<div class="p-6 justify-center w-full h-full">

<div class="mb-6">
@if(session('deleted'))
        <div class="alert text-red-700 text-center">
            <span class="closebtn text-red-800" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('deleted')}}
        </div>
        @endif
</div>


  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Choose Ambulance:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="ambname">
          <option {{ ($ambulance->ambname) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($ambulance->ambname) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($ambulance->ambname) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($ambulance->ambname) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($ambulance->ambname) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($ambulance->ambname) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($ambulance->ambname) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($ambulance->ambname) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($ambulance->ambname) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>


      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Name:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name">
        <option>--Select--</option>
          @foreach($users as $user)
          <option {{($user->name) == ($users1->name) ? 'selected' : ''}}>{{$user->name}}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>
  </div>
  
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
       Problem
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="problem">
          <option {{ ($ambulance->problem) == 'Mechanic' ? 'selected' : '' }}>Mechanic</option>
          <option {{ ($ambulance->problem) == 'Electric' ? 'selected' : '' }}>Electric</option>
          <option {{ ($ambulance->problem) == 'Hdede' ? 'selected' : '' }}>Hdede</option>
          <option {{ ($ambulance->problem) == 'Parts' ? 'selected' : '' }}>Parts</option>
          <option {{ ($ambulance->problem) == 'Accident' ? 'selected' : '' }}>Accident</option>
          <option {{ ($ambulance->problem) == 'Others' ? 'selected' : '' }}>Others</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>


    <div class="mt-2 w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Status
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status">
        <option {{ ($ambulance->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option {{ ($ambulance->status) == 'In Process' ? 'selected' : '' }}>In Process</option>
          <option {{ ($ambulance->status) == 'At Garage' ? 'selected' : '' }}>At Garage</option>
          <option {{ ($ambulance->status) == 'Done' ? 'selected' : '' }}>Done</option>
          <option {{ ($ambulance->status) == 'Requesting' ? 'selected' : '' }}>Requesting</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
       Due Date:
      </label>
    <input type ="date" value="{{$ambulance->duedate}}" name="date">
    </div>

  </div>

  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <div class="w-full">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        KM
      </label>
      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="KM" value="{{$ambulance->KM}}" type="number" placeholder="km">
    </div>
  </div>

      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Rebhan
      </label>
      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="rebhan" value="{{$ambulance->rebhan}}" type="text" placeholder="204ian">
    </div>
  </div>
        </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-password">
        Description
      </label>
      <input class="block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="Description" value="{{$ambulance->Description}}" type="text" placeholder="Notes">
    </div>
  </div>

  <div class="form-group">
    <table class="table">
        <tr>
            <td><label class="font-weight-bold">First Image</label></td>
            <td><input class="@error('file') is-invalid @enderror" type = "file" name="file" /></td>
            
          </tr>

            <tr>
            <td><label class="font-weight-bold">Second Image</label></td>
            <td><input class="@error('file') is-invalid @enderror" type = "file" name="file2" /></td>
            
            
        </tr>
        <tr>
            <td></td>
            <td><span class="text-muted">jpeg, jpg, png, gif</span></td>
            <td></td> 
    </table>
    </div>
</div>

        </div>
    <div class="ml-6 flex items-start">
    <div class="h-12">

    
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Submit
    </button>
        
        </div>
 
        <div class="ml-2 mt-2 h-12">
        <a  href="/allrequests" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        Cancel
        </a>

        </div>
        </div>

       
        </form>

        <form action="/image/{{$ambulance->id}}" method="GET">
       <div class="text-center"> <x-button>Show Images</x-button></div>
        </form>

        <div class="grid grid-cols-2 text-center mt-4">
        <div><form method="POST" action="/deletepic1/{{$ambulance->id}}">
            @csrf
              <x-button>Delete Picture 1</x-button>
           </form>
        </div>
        <div><form method="POST" action="/deletepic2/{{$ambulance->id}}">
            @csrf
              <x-button>Delete Picture 2</x-button>
           </form>
        </div>
@endsection
