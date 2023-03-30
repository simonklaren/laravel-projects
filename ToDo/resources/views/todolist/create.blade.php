<head>
    <title>To Do List Aanmaken</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<x-app-layout>
    <form class="text-gray-600 body-font relative" method="POST" action="{{route('doAddNewToDoList')}}">
        @csrf
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">New To Do list</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit exercitationem labore nostrum tempore nemo, ad officiis aspernatur temporibus cumque repellendus nam officia laboriosam distinctio quo ullam possimus porro culpa facere.</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <input type="hidden" name="project_id" value="{{ $project_id }}">
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="to_do_list_naam" class="leading-7 text-sm text-gray-600">To Do List Naam:</label>
                  <input required type="text" id="to_do_list_naam" name="to_do_list_naam" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full mt-4">
               <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add</button>
              </div>
            </div>
          </div>
        </div>
    </form>
</x-app-layout>