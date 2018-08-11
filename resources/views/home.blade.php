@extends('_layout')

@section('content')
<div class="w-full md:w-3/4 pr-0 md:pr-6">
    <p class="text-3xl leading-normal font-bold text-grey-darkest uppercase mb-4">
        Hello, I'm Johan <br/>
        A Software Engineer <br>
        based in Gauteng, South Africa.
    </p>

    <h4 class="text-2xl pt-4 font-hairline uppercase text-grey-darker mb-3 font-normal">About</h4>
    <p class="text-grey-dark mb-2 leading-normal text-justify">Currently a full time student finishing my Bachelor of Science Honours degree in Information Technology at the University of Johannesburg, South Africa.</p>
    <p class="text-grey-dark mb-2 leading-normal text-justify">I have an absolute love and passion for technology and engineering; from a young age I was busy taking apart electronics and figuring out what makes them tick; building hundreds of computers and (sadly) breaking even more.</p>
    
    <hr class="border border-grey-light">

    <h4 class="text-2xl pt-4 font-hairline uppercase text-grey-darker mb-3 font-normal">Toolbelt</h4>
    <p class="text-grey-dark mb-2 leading-normal text-justify">I am a quick learner and have dabbled in many different languages and technologies over the years.</p>
    
    <p class="text-grey-darkest leading-normal font-semibold">Proficient languages:</p>
    <ul class="text-grey-dark mb-2">
        <li>PHP (Laravel Framework)</li>
        <li>Javascript (ES6 | VueJS Framework)</li>
        <li>NodeJS (Electron)</li>
        <li>C++ &amp; Rust</li>
        <li>C# &amp; Java</li>
        <li>Python</li>
    </ul>
    
    <p class="text-grey-darkest leading-normal font-semibold">Technology Stack:</p>
    <ul class="text-grey-dark">
        <li>Git</li>
        <li>Amazon AWS</li>
        <li>Linode &amp; DigitalOcean</li>
        <li>VSCode &amp; VisualStudio &amp; Vim</li>
    </ul>
    
    <hr class="border border-grey-light">

    <h4 class="text-2xl pt-4 font-hairline uppercase text-grey-darker mb-3 font-normal">
        Projects
        <a href="https://github.com/johanleroux">@include('svg.github', ['class' => 'flex-inline fill-current text-grey-dark hover:text-grey-darkest h-6 w-6 align-top inline-block'])</a>
    </h4>
    
    <div class="text-grey-dark mb-2 leading-normal text-justify">
        <h1 class="text-lg font-semibold text-grey-darker no-underline">HireX</h1>
        <p class="pl-8">
            POS Based Rental Management system developed as a backend for any company that wants to manage, track and rent-out any product. <br>
            Equipped with authentication, roles, customer &amp; product management, violations, order &amp; invoice creation with PDF, customer deposits and statements, time-tracking, history logs and financial reports.
        </p>
        <p class="pl-8 text-grey-dark text-xs">Laravel | VueJS | MySQL | jQuery | NodeJS | NoSQL | Electron</p>
    </div>

    <div class="text-grey-dark mb-2 leading-normal text-justify">
        <h1 class="text-lg font-semibold text-grey-darker no-underline">
            Apollo
            <a href="https://github.com/johanleroux/apollo">@include('svg.github', ['class' => 'flex-inline fill-current text-grey-dark hover:text-grey-darkest h-6 w-6 align-top inline-block'])</a>
        </h1>
        <p class="pl-8">
            University Group Project that was built as an inventory management system which can track sales and delivery; and have forecasting which can determine any trends in the market place.
        </p>
        <p class="pl-8 text-grey-dark text-xs">Laravel | VueJS | MySQL | jQuery | Java | R | Python</p>
    </div>

    <div class="text-grey-dark mb-2 leading-normal text-justify">
        <h1 class="text-lg font-semibold text-grey-darker no-underline">
            Lomejo
            <a href="https://lomejo.co.za">@include('svg.globe', ['class' => 'flex-inline fill-current text-grey-dark hover:text-grey-darkest h-6 w-6 align-top inline-block'])</a>
        </h1>
        <p class="pl-8">
            Website showcasing a breeder selling Bull Terriers, with a gallery and contact section. 
        </p>
        <p class="pl-8 text-grey-dark text-xs">Laravel | VueJS | MySQL</p>
    </div>

    <div class="text-grey-dark mb-2 leading-normal text-justify">
        <h1 class="text-lg font-semibold text-grey-darker no-underline">
            Phumangeni
            <a href="https://phumangeni.co.za">@include('svg.globe', ['class' => 'flex-inline fill-current text-grey-dark hover:text-grey-darkest h-6 w-6 align-top inline-block'])</a>
        </h1>
        <p class="pl-8">
            Website showcasing a beautiful thatched cottage situated in Marloth Park near the Kruger National Park; includes a gallery and contact section.
        </p>
        <p class="pl-8 text-grey-dark text-xs">Laravel | VueJS</p>
    </div>

    <h4 class="text-2xl pt-4 font-hairline text-grey-dark mb-3 font-normal"><small>What to hire me? Send me a <a class="text-grey-darker no-underline hover:text-grey-darkest" href="mailto:mail@johanleroux.me">email</a></small></h4>
</div>
<div class="w-full md:w-1/4 pl-8 pl-12 mt-0 hidden md:block">
    <div class="border-l-2 border-grey-light pl-2 mb-4">
        <h2 class="pl-2 text-lg leading-tight font-normal text-grey-darkest uppercase mb-2">Elsewhere</h2>
        <ul class="leading-normal list-reset">
            <li class="pl-6 pb-2">
                <a href="https://github.com/johanleroux" class="flex no-underline text-grey-dark uppercase text-xs leading-loose hover:text-grey-darkest">
                    @include('svg.github', ['class' => 'flex-inline fill-current text-grey-darker h-6 w-6 mr-2 inline-block'])
                    GitHub
                </a>
            </li>
            <li class="pl-6 pb-2">
                <a href="https://www.linkedin.com/in/johan-roux-802434109/" class="flex no-underline text-grey-dark uppercase text-xs leading-loose hover:text-grey-darkest">
                    @include('svg.linkedin', ['class' => 'flex-inline fill-current text-blue-dark h-6 w-6 mr-2 inline-block'])
                    LinkedIn
                </a>
            </li>
            <li class="pl-6 pb-2">
                <a href="mailto:mail@johanleroux.me" class="flex no-underline text-grey-dark uppercase text-xs leading-loose hover:text-grey-darkest">
                    @include('svg.email', ['class' => 'flex-inline fill-current text-red h-6 w-6 mr-2 inline-block'])
                    Email
                </a>
            </li>
            <li class="pl-6 pb-2">
                <a href="https://twitter.com/johan_irl" class="flex no-underline text-grey-dark uppercase text-xs leading-loose hover:text-grey-darkest">
                    @include('svg.twitter', ['class' => 'flex-inline fill-current text-blue h-6 w-6 mr-2 inline-block'])
                    Twitter
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection