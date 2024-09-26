<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
        <article class="py-8 max-w-screen-md">
            <h2 class="mb-4 text-2xl tracking-tight font-semibold">
                {{ $post['title'] }}
            </h2>
            <div>
                By <a class="hover:underline text-gray-500" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> {{-- "{{ $post['url'] }}" --}}
                in <a class="hover:underline text-gray-500" href="/category/{{ $post->category->slug }}"> {{ $post->category->name }} </a> | {{ $post->created_at->diffForHumans() }}
                <p class="my-1">
                    {{ $post['body']}}
                </p>
                <a class="text-blue-500 hover:underline font-medium" href="/blog/">&laquo; Return</a>
            </div>
        </article>
</x-layout>