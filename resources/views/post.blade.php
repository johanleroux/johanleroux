@extends('_layout')

@section('content')
<div class="w-full p-8 bg-white shadow text-center mb-8 ">
    <a href="{{ url('/') }}" class="flex-inline mb-2 no-underline leading-loose tracking-wide text-base text-grey-darkest hover:text-blue hover:underline">
        @include('svg.logo', ['class' => 'flex-inline fill-current'])
    </a>
    <h2 class="text-4xl py-2 font-light text-grey-darkest">{{ $post->title }}</h2>
    <p class="text-base font-light leading-normal text-grey-dark mb-4">
        @foreach($post->tags as $tag)
            <a class="text-grey-dark no-underline hover:underline hover:text-blue" href="{{ url('blog', $tag->slug) }}">{{ $tag->name }}</a>@if (!$loop->last),@endif
        @endforeach  
    </p>
    <p class="text-base font-light leading-normal text-grey-dark mb-4">
        {{ $post->published_at->format('jS \\of F Y') }}
    </p>
</div>

<div class="w-full p-8 pt-4 bg-white shadow font-light text-grey-darkest leading-loose">
    {!! $post->formatted_text !!}
    
    <p class="font-normal">What to hire me? Send me a <a class="text-grey-darkest underline hover:text-blue" href="mailto:mail@johanleroux.me">email</a>.</p>
</div>
@endsection