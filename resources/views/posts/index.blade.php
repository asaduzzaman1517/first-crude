@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                blog post
            </h1>
        </div>
        <div class="pt-10 mb-5 w-3/5 m-auto">
            <a href="{{ route('post.create') }}" class="border-b-2 pb-2 border-dotted italic text-gray-500 capitalize">
                Add a new car &rarr;
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="m-auto w-3/5">
                <div class="float-right">
                    <a href="{{ route('post.edit', $post->id) }}"
                        class="border-b-2 pb-2 border-dotted italic text-green-500 capitalize">
                        edit &rarr;
                    </a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="border-b-2 mt-3 pb-2 border-dotted italic text-red-500 capitalize">
                            remove &rarr;
                        </button>
                    </form>
                </div>
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    {{ $post->author }}
                </span>

                <h2 class="text-gray-700 text-5xl hover:text-gray-500 capitalize">
                    {{ $post->title }}
                </h2>

                <p class="text-lg text-gray-700 py-6">
                    {{ $post->description }}
                </p>

                {{-- <span class="uppercase text-gray-600 font-bold text-xs">
                    {{ $createdAt = Carbon::parse($post->created_at); }}
                    {{ $post->created_at = $createdAt->format('M d Y'); }}
                </span> --}}

                <hr class="mt-4 mb-8">
            </div>
        @endforeach

    </div>
@endsection
