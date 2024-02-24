@extends('layouts.app')


@section('content')
    @if (session()->has('message'))
        <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex justify-center ">
                    <p class="font-bold "> {{ session()->get('message') }}</p>
            </div>
        </div>
    @endif
    <div class=" container m-auto text-center pt-15 pb-5 ">
        <h1 class="text-6xl font-bold ">{{ $post->title }}</h1>
        <div class="mt-5">
            {{ __('post.by') }} 
            <span class="text-gray-500 italic">{{ $post->user->name }}</span><br>
            {{ __('post.on') }}
            <span class="text-gray-500 italic">{{ date('d-m-y', strtotime($post->updated_at)) }}</span>
        </div>
    </div>

    <div class=" container m-auto pt-15 pb-5 ">
        <div class="flex h-96">
            <img class="object-cover w-full" src="/images/{{ $post->image_path }}" alt="">
        </div>
        <div class="text-l text-gray-700 py-8 leading-6">
            <p class="text-l text-gray-700 py-8 leading-8"> {{ $post->description }}
            </p>
        </div>
        @if (Auth::user() && Auth::user()->id == $post->user_id)
            <a href="/blog/{{ $post->slug }}/edit"
                class="bg-green-700 text-green-100  mt-6 inline-block  py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">{{ __('post.edit') }}
            </a>
            <form action="/blog/{{ $post->slug }}" method="post" class="inline-block ">
                @csrf
                @method('delete')
                <button type="submit"
                    class="bg-red-700 text-red-100  mt-6 inline-block  py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">{{ __('post.delete') }}
                </button>
            </form>
        @endif
    </div>
@endsection
