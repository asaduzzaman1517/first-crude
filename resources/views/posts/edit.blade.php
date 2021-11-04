@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create post
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="{{ route('post.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="block">

                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="author"
                    value="{{ $post->author }}">

                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="title" value="{{ $post->title }}">

                    <input type=" text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="description" value="{{ $post->description }}">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>

            </div>
        </form>
    </div>
@endsection
