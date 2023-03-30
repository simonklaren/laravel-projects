<head>
    <title>To Do List</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">The To Do List</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et adipisci praesentium vel distinctio exercitationem eos quasi totam saepe cumque, assumenda quae consequatur, aspernatur voluptas quis tempore ducimus nesciunt. Perferendis, reiciendis?</p>
          </div>
          <div class="flex flex-wrap -m-4">

            @foreach ($project as $post)

            <div class="xl:w-1/3 md:w-1/2 p-4">
              <div class="border border-gray-200 p-6 rounded-lg">
                <a href="{{url('/project/' .$post->id. '')}}"><h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $post->name }}</h2></a>
                <p class="leading-relaxed text-base">Start-datum: {{ $post->start_date }}. Eind-datum: {{ $post->end_date }}.</p>
              </div>
            </div>
            
            @endforeach

          </div>
          <a href="{{route('newProject')}}" ><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Nieuw Project</button></a>
        </div>
      </section>
</x-app-layout>
