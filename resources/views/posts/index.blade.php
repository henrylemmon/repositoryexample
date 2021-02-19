<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($posts as $post)
                        <h2 class="@if (! $loop->last) mb-6 @endif font-semibold text-2xl text-blue-500 underline leading-tight">
                            <a href="{{ $post->path() }}">{{ $post->title }}</a>
                        </h2>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
