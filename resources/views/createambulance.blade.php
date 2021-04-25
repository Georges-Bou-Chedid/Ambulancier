@extends('layouts.auth')

@section('content')

<form method="POST" enctype = "multipart/form-data" action="/create">
    @csrf
<div class="p-6 justify-center w-full h-full">
  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Choose Ambulance:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="ambname">
          <option>284</option>
          <option>285</option>
          <option>286</option>
          <option>256</option>
          <option>257</option>
          <option>211</option>
          <option>224</option>
          <option>288</option>
          <option>287</option>
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
          @foreach($users as $user)
          <option>{{$user->name}}</option>
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
          <option>Mechanic</option>
          <option>Electric</option>
          <option>Hdede</option>
          <option>Parts</option>
          <option>Accident</option>
          <option>Others</option>
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
          <option>Pending</option>
          <option>In Process</option>
          <option>At Garage</option>
          <option>Done</option>
          <option>204 Request</option>
          <option>Idara Request</option>
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
    <input type ="date" name="date">
    </div>

  </div>

  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <div class="w-full">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        KM
      </label>
      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="KM" type="number" placeholder="km">
    </div>
  </div>

      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Rebhan
      </label>
      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="rebhan" type="text" placeholder="204ian">
    </div>
  </div>
        </div>


  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-password">
        Description
      </label>
      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="Description" type="text" placeholder="Notes">
    </div>
  </div>

  <div class="field">


</div>

        </div>
    <div class="ml-6 flex items-start">
    <div class="h-12">

    
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Submit
    </button>
        
        </div>
 
        <div class="ml-2 mt-2 h-12">
        <a  href="{{ url()->previous() }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        Cancel
        </a>

        </div>
        </div>

       
        </form>
@endsection
