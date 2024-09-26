<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    @foreach ($posts as $post) 
        <article class="py-8 max-w-screen-md border-b border-gray-400">
            <h2 class="mb-4 text-2xl tracking-tight font-semibold">
                {{ $post['title'] }}
            </h2>
            <div>
                By <a class="hover:underline text-gray-500" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> {{-- "{{ $post['url'] }}" --}}
                in <a class="hover:underline text-gray-500" href="/category/{{ $post->category->slug }}"> {{ $post->category->name }} </a> | {{ $post->created_at->format('j F Y') }}
                <p class="my-1">
                    {{ Str::limit($post['body'], 150) }}
                </p>
                <a class="text-blue-500 hover:underline font-medium" href="/blog/{{ $post['slug'] }}">Read More &raquo;</a>
            </div>
        </article>
        {{-- <article class="py-8 max-w-screen-md border-b border-gray-400">
            <h2 class="mb-4 text-2xl tracking-tight font-semibold">
                Judul Artikel 2
            </h2>
            <div>
                <a class="hover:underline" href="https://en.wikipedia.org/wiki/J._K._Rowling">J. K. Rowling</a> | 30 Oktober 2022
                <p class="my-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam quod sunt libero nesciunt enim
                    consectetur animi odit pariatur reprehenderit eum expedita excepturi,
                    quibusdam praesentium ipsum nostrum aliquid labore commodi.
                </p>
                <a class="text-blue-500 hover:underline font-medium" href="#">Read More &raquo;</a>
            </div>
        </article> --}}
    @endforeach
</x-layout>