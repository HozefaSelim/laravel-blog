@extends('layouts.app')


@section('content')
    <div class=" container m-auto text-center pt-15 pb-5 ">
        <h1 class="text-6xl font-bold ">{{ __('post.edit') }}</h1>
    </div>

    <div class=" container m-auto pt-15 pb-5 ">
        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $post->title }}"
                class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">
                @error('title')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
            <textarea name="description" class="w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5 ">
                {{ $post->description }}
                </textarea>
                @error('description')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror

            <div class="py-15 ">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">{{ __('post.upload') }}</span> {{ __('post.drag') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400"> png, jpg, jped </p>
                        </div>
                        <input id="dropzone-file" type="file" name="image" class="hidden" />
                    </label>
                </div>
                @error('image')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror

            </div>
            <button type="submit"
                class="bg-green-700 hover:bg-green-200 text-gray-200 hover:text-gray-700 transition duration-300 cursor-pointer  font-bold uppercase rounded-lg p-5">
                {{ __('post.submit post') }}</button>
        </form>
    </div>
@endsection
