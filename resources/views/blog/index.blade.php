@extends('layouts.app')


@section('content')
    @if (session()->has('message'))
        <div class="bg-red-100  rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex justify-center ">
                <p class="font-bold "> {{ session()->get('message') }}</p>
            </div>
        </div>
    @endif
    <div class=" container m-auto text-center pt-15 pb-5 ">
        <h1 class="text-6xl font-bold ">{{ __('post.all posts') }}</h1>
    </div>

    @if (Auth::check())
        <div class=" container sm:grid   mx-auto p-5 border-b border-gray-300">
            <a href="/blog/create"
                class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">
                {{ __('post.add new post') }}
            </a>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class=" container sm:grid grid-cols-2 gap-15  mx-auto py-15 px-5 border-gray-300">
            <div class="flex">
                <img class="object-cover" src="/images/{{ $post->image_path }}" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
                    {{ $post->title }}
                </h2>
                <div> {{ __('post.by') }} 
                    <span class="text-gray-500 italic">{{ $post->user->name }}</span><br>
                    {{ __('post.on') }}
                    <span class="text-gray-500 italic">{{ date('d-m-y', strtotime($post->updated_at)) }}</span>
                    <p class="text-l text-gray-700 py-8 leading-8">
                    </p>
                    <a href="/blog/{{ $post->slug }}"
                        class="custom-btn py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">{{ __('post.read more') }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
