@extends('layouts.auth')

@section('content')

<form method="POST" action="/appelet/{{$appelets->id}}">
    @csrf
<div class="p-6 justify-center w-full h-full">
  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        1st Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first">
        <option>--Select--</option>
          <option {{ ($appelets->first) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->first) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->first) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->first) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->first) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->first) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->first) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->first) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->first) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>


      <div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        2nd Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="second">
        <option>--Select--</option>
        <option {{ ($appelets->second) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->second) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->second) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->second) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->second) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->second) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->second) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->second) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->second) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>
  
  
  
    <div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
       3rd Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="third">
        <option>--Select--</option>
        <option {{ ($appelets->third) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->third) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->third) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->third) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->third) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->third) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->third) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->third) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->third) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      </div>


    <div class="mt-2 w-full md:w-1/4 px-8 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        4th Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="fourth"> 
        <option>--Select--</option>
        <option {{ ($appelets->fourth) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->fourth) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->fourth) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->fourth) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->fourth) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->fourth) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->fourth) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->fourth) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->fourth) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

</div>




<div class="flex flex-wrap -mx-3 mb-6">


<div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
<label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
    5th Appel
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="five">
    <option>--Select--</option>
      <option {{ ($appelets->first) == '284' ? 'selected' : '' }}>284</option>
      <option {{ ($appelets->first) == '285' ? 'selected' : '' }}>285</option>
      <option {{ ($appelets->first) == '286' ? 'selected' : '' }}>286</option>
      <option {{ ($appelets->first) == '256' ? 'selected' : '' }}>256</option>
      <option {{ ($appelets->first) == '257' ? 'selected' : '' }}>257</option>
      <option {{ ($appelets->first) == '211' ? 'selected' : '' }}>211</option>
      <option {{ ($appelets->first) == '224' ? 'selected' : '' }}>224</option>
      <option {{ ($appelets->first) == '288' ? 'selected' : '' }}>288</option>
      <option {{ ($appelets->first) == '287' ? 'selected' : '' }}>287</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
  </div>


  <div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
<label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
    6th Appel
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="six">
    <option>--Select--</option>
    <option {{ ($appelets->second) == '284' ? 'selected' : '' }}>284</option>
      <option {{ ($appelets->second) == '285' ? 'selected' : '' }}>285</option>
      <option {{ ($appelets->second) == '286' ? 'selected' : '' }}>286</option>
      <option {{ ($appelets->second) == '256' ? 'selected' : '' }}>256</option>
      <option {{ ($appelets->second) == '257' ? 'selected' : '' }}>257</option>
      <option {{ ($appelets->second) == '211' ? 'selected' : '' }}>211</option>
      <option {{ ($appelets->second) == '224' ? 'selected' : '' }}>224</option>
      <option {{ ($appelets->second) == '288' ? 'selected' : '' }}>288</option>
      <option {{ ($appelets->second) == '287' ? 'selected' : '' }}>287</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
  </div>



<div class="w-full md:w-1/4 px-8 mb-6 md:mb-0">
<label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
   7th Appel
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="seven">
    <option>--Select--</option>
    <option {{ ($appelets->third) == '284' ? 'selected' : '' }}>284</option>
      <option {{ ($appelets->third) == '285' ? 'selected' : '' }}>285</option>
      <option {{ ($appelets->third) == '286' ? 'selected' : '' }}>286</option>
      <option {{ ($appelets->third) == '256' ? 'selected' : '' }}>256</option>
      <option {{ ($appelets->third) == '257' ? 'selected' : '' }}>257</option>
      <option {{ ($appelets->third) == '211' ? 'selected' : '' }}>211</option>
      <option {{ ($appelets->third) == '224' ? 'selected' : '' }}>224</option>
      <option {{ ($appelets->third) == '288' ? 'selected' : '' }}>288</option>
      <option {{ ($appelets->third) == '287' ? 'selected' : '' }}>287</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
  </div>


<div class="mt-2 w-full md:w-1/4 px-8 mb-6 md:mb-0">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
    8th Appel
  </label>
  <div class="relative">
    <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="eight"> 
    <option>--Select--</option>
    <option {{ ($appelets->fourth) == '284' ? 'selected' : '' }}>284</option>
      <option {{ ($appelets->fourth) == '285' ? 'selected' : '' }}>285</option>
      <option {{ ($appelets->fourth) == '286' ? 'selected' : '' }}>286</option>
      <option {{ ($appelets->fourth) == '256' ? 'selected' : '' }}>256</option>
      <option {{ ($appelets->fourth) == '257' ? 'selected' : '' }}>257</option>
      <option {{ ($appelets->fourth) == '211' ? 'selected' : '' }}>211</option>
      <option {{ ($appelets->fourth) == '224' ? 'selected' : '' }}>224</option>
      <option {{ ($appelets->fourth) == '288' ? 'selected' : '' }}>288</option>
      <option {{ ($appelets->fourth) == '287' ? 'selected' : '' }}>287</option>
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
    </div>
  </div>
</div>

</div>




  <div class="flex flex-wrap -mx-3 mb-6">


    <div class="w-full md:w-1/2 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        1st Adv Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="firstadv"> 
        <option>--Select--</option>
        <option {{ ($appelets->firstadv) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->firstadv) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->firstadv) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->firstadv) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->firstadv) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->firstadv) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->firstadv) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->firstadv) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->firstadv) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

      <div class="w-full md:w-1/2 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        2nd Adv Appel
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="secondadv"> 
        <option>--Select--</option>
        <option {{ ($appelets->secondadv) == '284' ? 'selected' : '' }}>284</option>
          <option {{ ($appelets->secondadv) == '285' ? 'selected' : '' }}>285</option>
          <option {{ ($appelets->secondadv) == '286' ? 'selected' : '' }}>286</option>
          <option {{ ($appelets->secondadv) == '256' ? 'selected' : '' }}>256</option>
          <option {{ ($appelets->secondadv) == '257' ? 'selected' : '' }}>257</option>
          <option {{ ($appelets->secondadv) == '211' ? 'selected' : '' }}>211</option>
          <option {{ ($appelets->secondadv) == '224' ? 'selected' : '' }}>224</option>
          <option {{ ($appelets->secondadv) == '288' ? 'selected' : '' }}>288</option>
          <option {{ ($appelets->secondadv) == '287' ? 'selected' : '' }}>287</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
        </div>


  <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full md:w-1/2 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
        Appel Mission
      </label>
      <input type = "text" value="{{$appelets->firstmission}}" name="firstmission">
    </div>

  <div class="w-full md:w-1/2 px-8 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2" for="grid-state">
       Appel Post
      </label>
      <input type = "text" value="{{$appelets->secondmission}}" name="secondmission">
    </div>


        </div>
    <div class="ml-6 flex items-start">
    <div class="h-12">

    
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Save
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
