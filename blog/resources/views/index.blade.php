@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Welkom bij mijn blog!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Bekijk Posts
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="\images\qr-code.png" width="300" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Wat houd deze blog in?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Deze blog is gebaseerd op mijn leven, wat ik mee maak en mijn ervaringen.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Deze blog is voornamelijk gecreëerd voor opleiding doeleinden. Daarvoor zal deze website ook niet bedoeld zijn voor publiek gebruik.
            </p>
        </div>
    </div>
    
    <div class="background-video grid grid-cols-1 m-auto">
        <div class="text-center p-15 text-white">
            <h2 class="text-2xl pb-5 text-l"> 
                Welke programeer talen beheers ik?
            </h2>

            <span class="font-extrabold block text-4xl py-1">
                HTML/CSS
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Python
            </span>
            <span class="font-extrabold block text-4xl py-1">
                PHP
            </span>
            <span class="font-extrabold block text-4xl py-1">
                C#
            </span>
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 bg-grey-500">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>
    
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
    
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>
    
                <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Lees meer »
                </a>
    
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a 
                            href="/blog/{{ $post->slug }}/edit"
                            class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                            Edit
                        </a>
                    </span>
    
                    <span class="float-right">
                         <form 
                            action="/blog/{{ $post->slug }}"
                            method="POST">
                            @csrf
                            @method('delete')
    
                            <button
                                class="text-red-500 pr-3"
                                type="submit">
                                Delete
                            </button>
    
                        </form>
                    </span>
                @endif
            </div>
        </div>    
    @endforeach
@endsection