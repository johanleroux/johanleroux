@extends('_layout')

@section('content')
<div class="w-full p-8 bg-white shadow text-center mb-8 ">
    <a href="{{ url('/') }}" class="flex-inline mb-2 no-underline leading-loose tracking-wide text-base text-grey-darkest hover:text-blue hover:underline">
        @include('svg.logo', ['class' => 'flex-inline fill-current'])
    </a>
    <h2 class="text-4xl py-2 font-light text-grey-darkest">Blog</h2>
    <p class="text-base font-light leading-normal text-grey-dark mb-4">
        @foreach($tags as $tag)
            <a class="text-grey-dark no-underline hover:underline hover:text-blue" href="{{ url('blog', $tag->slug) }}">{{ $tag->name }}</a>@if (!$loop->last),@endif
        @endforeach  
    </p>
</div>

<div class="w-full p-8 bg-white shadow font-light text-grey-darkest leading-loose">
    @foreach($posts as $post)
        <div class="mb-4">
            <a class="text-2xl leading-none font-normal mb-3 text-grey-darkest no-underline hover:text-blue" href="{{ $post->url }}">{{ $post->title }}</a><br>
            <p class="mb-4">
                {{ $post->published_at->format('F j, Y') }} | 
                @foreach($post->tags as $tag)
                    <a class="text-grey-darkest no-underline hover:underline hover:text-blue" href="{{ url('blog', $tag->slug) }}">{{ $tag->name }}</a>@if (!$loop->last),@endif
                @endforeach
            </p>
        </div>
    @endforeach

    <p class="font-normal">What to hire me? Send me a <a class="text-grey-darkest underline hover:text-blue" target="_blank" href="mailto:mail@johanleroux.me">email</a>.</p>
</div>
@endsection