@extends('_layout')

@section('content')
<div class="w-full p-8 bg-white shadow text-center mb-8 ">
    <a href="{{ url('/') }}" class="flex-inline mb-2 no-underline leading-loose tracking-wide text-base text-grey-darkest hover:text-blue hover:underline">
        @include('svg.logo', ['class' => 'flex-inline fill-current'])
    </a>
    <h2 class="text-4xl py-2 font-light text-grey-darkest">Johan le Roux</h2>
    <p class="text-base font-light leading-normal text-grey-dark mb-4">Software Engineer</p>

    <div class="text-center">
        <a class="no-underline text-grey-dark hover:text-blue" aria-label="Github" rel="noreferrer" href="https://github.com/johanleroux" target="_blank">
            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8 w-8 fill-current"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8 0-5.4.2-33 .2-55.3 0-15.6-5.2-25.5-11.3-30.7 37-4.1 76-9.2 76-73.1 0-18.2-6.5-27.3-17.1-39 1.7-4.3 7.4-22-1.7-45-13.9-4.3-45.7 17.9-45.7 17.9-13.2-3.7-27.5-5.6-41.6-5.6-14.1 0-28.4 1.9-41.6 5.6 0 0-31.8-22.2-45.7-17.9-9.1 22.9-3.5 40.6-1.7 45-10.6 11.7-15.6 20.8-15.6 39 0 63.6 37.3 69 74.3 73.1-4.8 4.3-9.1 11.7-10.6 22.3-9.5 4.3-33.8 11.7-48.3-13.9-9.1-15.8-25.5-17.1-25.5-17.1-16.2-.2-1.1 10.2-1.1 10.2 10.8 5 18.4 24.2 18.4 24.2 9.7 29.7 56.1 19.7 56.1 19.7 0 13.9.2 36.5.2 40.6 0 4.3-3 9.5-11.5 8-66-22.1-112.2-84.9-112.2-158.3 0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7-.2-1.5 1.1-2.8 3-3.2 1.9-.2 3.7.6 3.9 1.9.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4-2.2.2-3.7-.9-3.7-2.4 0-1.3 1.5-2.4 3.5-2.4 1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3-1.9-.4-3.2-1.9-2.8-3.2.4-1.3 2.4-1.9 4.1-1.5 2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6-1.5-1.3-1.9-3.2-.9-4.1.9-1.1 2.8-.9 4.3.6 1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3 1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6-1.1-1.3-1.3-2.8-.4-3.5.9-.9 2.4-.4 3.5.6 1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4-1.3-.6-1.9-1.7-1.5-2.6.4-.6 1.5-.9 2.8-.4 1.3.7 1.9 1.8 1.5 2.6z"></path></svg>
        </a>
        <a class="no-underline text-grey-dark hover:text-blue" aria-label="Linkedin" rel="noreferrer" href="https://www.linkedin.com/in/johan-roux-802434109/" target="_blank">
            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8 w-8 fill-current"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
        </a>
        <a class="no-underline text-grey-dark hover:text-blue" aria-label="Twitter" rel="noreferrer" href="https://twitter.com/johan_irl" target="_blank">
            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8 w-8 fill-current"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg>
        </a>
        <a class="no-underline text-grey-dark hover:text-blue" aria-label="Email" rel="noreferrer" href="mailto:mail@johanleroux.me" target="_blank">
            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 438 438" class="h-8 w-8 fill-current"><path fill="currentColor" d="M431.398 210.987L363.444 53.388c-1.903-4.762-5.373-8.757-10.421-11.991-5.041-3.239-10.037-4.854-14.985-4.854H100.499c-4.949 0-9.945 1.615-14.987 4.854-5.042 3.234-8.52 7.229-10.422 11.991L7.137 210.987C2.378 222.598 0 234.302 0 246.102V383.72c0 4.949 1.807 9.23 5.424 12.848 3.619 3.613 7.902 5.424 12.851 5.424h401.991c4.948 0 9.229-1.811 12.847-5.424 3.614-3.617 5.421-7.898 5.421-12.848V246.102c-.001-11.8-2.373-23.504-7.136-35.115zm-139.327 26.552l-27.113 54.819h-91.367l-27.123-54.819H56.247c.193-.38.428-1.14.715-2.282.287-1.14.525-1.903.715-2.283l60.526-141.607h202.138l60.521 141.607c.194.575.431 1.335.711 2.283.288.947.524 1.707.719 2.282h-90.221z"/></svg>
        </a>
    </div>
</div>

<div class="block md:flex -mx-2">
    <div class="flex-1 mb-4 mx-2 p-8 bg-white shadow font-light text-grey-darkest leading-loose">
        <h4 class="text-2xl mb-3 font-normal leading-none">HireX</h4>
        <p class="mb-4">POS Based Rental Management system developed as a backend for any company that wants to manage, track and rent-out any product.</p>
        <p class="mb-4">Equipped with authentication, roles, customer &amp; product management, violations, order &amp; invoice creation with PDF, customer deposits and statements, time-tracking, history logs and financial reports.</p>

        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Laravel</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">VueJS</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">MySQL</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">jQuery</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">NodeJS</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">NoSQL</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Electron</span>
    </div>
    <div class="flex-1 mb-4 mx-2 p-8 bg-white shadow font-light text-grey-darkest leading-loose">
        <h4 class="text-2xl mb-3 font-normal leading-none">Apollo</h4>
        <p class="mb-4">University Group Project that was built as an inventory management system which can track sales and delivery; and have forecasting which can determine any trends in the market place.</p>

        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Laravel</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">VueJS</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">MySQL</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">jQuery</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Java</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">R</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Python</span>
    </div>
</div>
<div class="block md:flex -mx-2">
    <div class="flex-1 mb-4 mx-2 p-8 bg-white shadow font-light text-grey-darkest leading-loose">
        <h4 class="text-2xl mb-3 font-normal leading-none">Lomejo</h4>
        <p class="mb-4">Website showcasing a breeder selling Bull Terriers, with a gallery and contact section. </p>

        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Laravel</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">VueJS</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">MySQL</span>
    </div>
    <div class="flex-1 mb-4 mx-2 p-8 bg-white shadow font-light text-grey-darkest leading-loose">
        <h4 class="text-2xl mb-3 font-normal leading-none">Phumangeni</h4>
        <p class="mb-4">UWebsite showcasing a beautiful thatched cottage situated in Marloth Park near the Kruger National Park; includes a gallery and contact section.</p>

        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">Laravel</span>
        <span class="inline-block bg-blue-lightest text-sm px-1 mr-2 mb-2 rounded">VueJS</span>
    </div>
</div>
@endsection