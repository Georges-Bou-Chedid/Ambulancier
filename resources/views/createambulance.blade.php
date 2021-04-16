@extends('layouts.auth')

@section('content')

<form method="POST" action="/create">
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
          <option>Requesting</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">

  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

  <style>
    [x-cloak] {
      display: none;
    }
  </style>

  <div class="antialiased sans-serif">
      <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
       

                  <label for="datepicker" class="font-bold mb-1 text-gray-700 block">Select Date</label>
                  <div class="relative">
                      <input type="hidden" name="date" x-ref="date">
                      <input 
                          type="text"
                          readonly
                          x-model="datepickerValue"
                          @click="showDatepicker = !showDatepicker"
                          @keydown.escape="showDatepicker = false"
                          class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                          placeholder="Select date">

                          <div class="absolute top-0 right-0 px-3 py-2">
                              <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                              </svg>
                          </div>


                          <!-- <div x-text="no_of_days.length"></div>
                          <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                          <div x-text="new Date(year, month).getDay()"></div> -->

                          <div 
                              class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" 
                              style="width: 17rem" 
                              x-show.transition="showDatepicker"
                              @click.away="showDatepicker = false">

                              <div class="flex justify-between items-center mb-2">
                                  <div>
                                      <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                      <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                  </div>
                                  <div>
                                      <button 
                                          type="button"
                                          class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                          :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                          :disabled="month == 0 ? true : false"
                                          @click="month--; getNoOfDays()">
                                          <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                          </svg>  
                                      </button>
                                      <button 
                                          type="button"
                                          class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                          :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                          :disabled="month == 11 ? true : false"
                                          @click="month++; getNoOfDays()">
                                          <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                          </svg>									  
                                      </button>
                                  </div>
                              </div>

                              <div class="flex flex-wrap mb-3 -mx-1">
                                  <template x-for="(day, index) in DAYS" :key="index">	
                                      <div style="width: 14.26%" class="px-1">
                                          <div
                                              x-text="day" 
                                              class="text-gray-800 font-medium text-center text-xs"></div>
                                      </div>
                                  </template>
                              </div>

                              <div class="flex flex-wrap -mx-1">
                                  <template x-for="blankday in blankdays">
                                      <div 
                                          style="width: 14.28%"
                                          class="text-center border p-1 border-transparent text-sm"	
                                      ></div>
                                  </template>	
                                  <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                      <div style="width: 14.28%" class="px-1 mb-1">
                                          <div
                                              @click="getDateValue(date)"
                                              x-text="date"
                                              class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                              :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                          ></div>
                                      </div>
                                  </template>
                              </div>
                          </div>

                  </div>	 
              </div>

      

      <script>
          const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
          const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

          function app() {
              return {
                  showDatepicker: false,
                  datepickerValue: '',

                  month: '',
                  year: '',
                  no_of_days: [],
                  blankdays: [],
                  days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                  initDate() {
                      let today = new Date();
                      this.month = today.getMonth();
                      this.year = today.getFullYear();
                  },

                  isToday(date) {
                      const today = new Date();
                      const d = new Date(this.year, this.month, date);

                      return today.toDateString() === d.toDateString() ? true : false;
                  },

                  getDateValue(date) {
                      let selectedDate = new Date(this.year, this.month, date);
                      this.datepickerValue = selectedDate.toDateString();

                      this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

                      console.log(this.$refs.date.value);

                      this.showDatepicker = false;
                  },

                  getNoOfDays() {
                      let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                      // find where to start calendar day of week
                      let dayOfWeek = new Date(this.year, this.month).getDay();
                      let blankdaysArray = [];
                      for ( var i=1; i <= dayOfWeek; i++) {
                          blankdaysArray.push(i);
                      }

                      let daysArray = [];
                      for ( var i=1; i <= daysInMonth; i++) {
                          daysArray.push(i);
                      }

                      this.blankdays = blankdaysArray;
                      this.no_of_days = daysArray;
                  }
              }
          }
      </script>
    </div>

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
