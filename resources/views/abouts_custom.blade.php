@extends('base')

@section('title')
    <title>Abouts</title>
@endsection

@section('content')
<section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 ">
    <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
        <div class="flex flex-wrap ">
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                <div class="relative lg:max-w-md">
                    <img src="{{asset('img/about_us.jpg')}}" alt="aboutimage"
                        class="relative z-10 object-cover w-full rounded h-96">
                    <div
                        class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-blue-500 rounded shadow dark:border-blue-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                        <p class="text-lg font-semibold md:w-72">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="absolute top-0 left-0 w-16 h-16 text-blue-700 dark:text-gray-300 opacity-10"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                </path>
                            </svg> Successfully Providing business solutions from 25 years
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                <div class="pl-4 mb-6 border-l-4 border-blue-500 ">
                    <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Who we are?</span>
                    <h1 class="mt-2 text-3xl font-black text-gray-700 md:text-5xl dark:text-gray-300">
                        About Us
                    </h1>
                </div>
                <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                    amet. labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                    amet. amet. labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit
                    amet.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    Lorem ipsum dolor sit amet.
                </p>
              
            </div>
        </div>
    </div>
</section>

<section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 ">
    <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
        <div class="flex flex-wrap ">
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                <img src="{{asset('img/about_us.jpg')}}" alt=""
                    class="relative z-40 object-cover w-full h-96 rounded-3xl">
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                <h2 class="mb-4 text-4xl font-semibold text-blue-500 dark:text-gray-300">
                    About Us
                </h2>
                <p class="mb-10 text-base leading-7 text-gray-500 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniamLorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                </p>
                <a href="#"
                    class="px-4 py-3 text-blue-700 transition-all transform border border-blue-500 rounded-3xl hover:bg-blue-600 dark:border-blue-400 dark:hover:bg-blue-500 dark:hover:text-gray-100 dark:hover:border-blue-500 dark:text-blue-400 hover:text-gray-100">
                    Discover more
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Start -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-20 text-center">
            <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Master Cleanse Reliac
                Heirloom</h1>
            <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
                man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
        </div>
        <div class="flex flex-wrap -m-4 text-center">
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="inline-block w-12 h-12 mb-3 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M8 17l4 4 4-4m-4-5v9"></path>
                        <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">2.7K</h2>
                    <p class="leading-relaxed">Downloads</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="inline-block w-12 h-12 mb-3 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">1.3K</h2>
                    <p class="leading-relaxed">Users</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="inline-block w-12 h-12 mb-3 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                        <path
                            d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
                        </path>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">74</h2>
                    <p class="leading-relaxed">Files</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="inline-block w-12 h-12 mb-3 text-indigo-500" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">46</h2>
                    <p class="leading-relaxed">Places</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4 text-center">
            <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">2.7K</h2>
                <p class="leading-relaxed">Users</p>
            </div>
            <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">1.8K</h2>
                <p class="leading-relaxed">Subscribes</p>
            </div>
            <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">35</h2>
                <p class="leading-relaxed">Downloads</p>
            </div>
            <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">4</h2>
                <p class="leading-relaxed">Products</p>
            </div>
        </div>
    </div>
</section>
<!-- Statistics End -->

<!-- Test Timeline Start -->
<div class="flex items-center justify-center h-screen px-6 bg-white md:px-60">
  <div class="space-y-6 border-l-2 border-dashed">
    <div class="relative w-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
      </svg>
      <div class="ml-6">
        <h4 class="font-bold text-blue-500">Frontend Development.</h4>
        <p class="max-w-screen-sm mt-2 text-sm text-gray-500">Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>
        <span class="block mt-1 text-sm font-semibold text-blue-500">2007</span>
      </div>
    </div>
    <div class="relative w-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
      </svg>
      <div class="ml-6">
        <h4 class="font-bold text-blue-500">Graphic Design.</h4>
        <p class="max-w-screen-sm mt-2 text-sm text-gray-500">Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
        <span class="block mt-1 text-sm font-semibold text-blue-500">2007</span>
      </div>
    </div>
    <div class="relative w-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
      </svg>
      <div class="ml-6">
        <h4 class="font-bold text-blue-500">Lead Ui/Ux Designer.</h4>
        <p class="max-w-screen-sm mt-2 text-sm text-gray-500">Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor</p>
        <span class="block mt-1 text-sm font-semibold text-blue-500">2007</span>
      </div>
    </div>
    <div class="relative w-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
      </svg>
      <div class="ml-6">
        <h4 class="font-bold text-blue-500">Lead Ui/Ux Designer.</h4>
        <p class="max-w-screen-sm mt-2 text-sm text-gray-500">Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor</p>
        <span class="block mt-1 text-sm font-semibold text-blue-500">2007</span>
      </div>
    </div>
  </div>
</div>
<!-- Test Timeline End -->


<!-- Test Timeline 2 Start -->
<div class="flex items-center justify-center h-screen px-6 bg-white md:px-60">
    <div class="-my-6">

    <!-- Item #1 -->
    <div class="relative py-6 pl-8 sm:pl-32 group">
        <!-- Purple label -->
        <div class="mb-1 text-2xl font-medium text-indigo-500 font-caveat sm:mb-0">The origin</div>
        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
        <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
            <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">May, 2020</time>
            <div class="text-xl font-bold text-slate-900">Acme was founded in Milan, Italy</div>
        </div>
        <!-- Content -->
        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</div>
    </div>
    
    <!-- Item #2 -->
    <div class="relative py-6 pl-8 sm:pl-32 group">
        <!-- Purple label -->
        <div class="mb-1 text-2xl font-medium text-indigo-500 font-caveat sm:mb-0">The milestone</div>
        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
        <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
            <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">May, 2021</time>
            <div class="text-xl font-bold text-slate-900">Reached 5K customers</div>
        </div>
        <!-- Content -->
        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</div>
    </div>
    
    <!-- Item #3 -->
    <div class="relative py-6 pl-8 sm:pl-32 group">
        <!-- Purple label -->
        <div class="mb-1 text-2xl font-medium text-indigo-500 font-caveat sm:mb-0">The acquisitions</div>
        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
        <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
            <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">May, 2022</time>
            <div class="text-xl font-bold text-slate-900">Acquired various companies, inluding Technology Inc.</div>
        </div>
        <!-- Content -->
        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</div>
    </div>
    
    <!-- Item #4 -->
    <div class="relative py-6 pl-8 sm:pl-32 group">
        <!-- Purple label -->
        <div class="mb-1 text-2xl font-medium text-indigo-500 font-caveat sm:mb-0">The IPO</div>
        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
        <div class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-indigo-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
            <time class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">May, 2023</time>
            <div class="text-xl font-bold text-slate-900">Acme went public at the New York Stock Exchange</div>
        </div>
        <!-- Content -->
        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</div>
    </div>

    </div>
</div>
<!-- Test Timeline 2 End -->


<!-- Team Start -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-20 text-center">
            <h1 class="mb-4 text-2xl font-medium text-gray-900 title-font">OUR TEAM</h1>
            <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.
            </p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="flex flex-col items-center h-full text-center">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg"
                        src="https://dummyimage.com/200x200">
                    <div class="w-full">
                        <h2 class="text-lg font-medium text-gray-900 title-font">Alper Kamu</h2>
                        <h3 class="mb-3 text-gray-500">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="flex flex-col items-center h-full text-center">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg"
                        src="https://dummyimage.com/201x201">
                    <div class="w-full">
                        <h2 class="text-lg font-medium text-gray-900 title-font">Holden Caulfield</h2>
                        <h3 class="mb-3 text-gray-500">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="flex flex-col items-center h-full text-center">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg"
                        src="https://dummyimage.com/202x202">
                    <div class="w-full">
                        <h2 class="text-lg font-medium text-gray-900 title-font">Atticus Finch</h2>
                        <h3 class="mb-3 text-gray-500">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
                <div class="flex flex-col items-center h-full text-center">
                    <img alt="team" class="flex-shrink-0 object-cover object-center w-full h-56 mb-4 rounded-lg"
                        src="https://dummyimage.com/203x203">
                    <div class="w-full">
                        <h2 class="text-lg font-medium text-gray-900 title-font">Henry Letham</h2>
                        <h3 class="mb-3 text-gray-500">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team End -->

<!-- Testimonials Start -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="mb-12 text-3xl font-medium text-center text-gray-900 title-font">Testimonials</h1>
        <div class="flex flex-wrap -m-4">
            <div class="w-full p-4 md:w-1/2">
                <div class="h-full p-8 bg-gray-100 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="block w-5 h-5 mb-4 text-gray-400" viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday
                        carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                        post-ironic heirloom try-hard pabst authentic iceland.</p>
                    <a class="inline-flex items-center">
                        <img alt="testimonial" src="https://dummyimage.com/106x106"
                            class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                        <span class="flex flex-col flex-grow pl-4">
                            <span class="font-medium text-gray-900 title-font">Holden Caulfield</span>
                            <span class="text-sm text-gray-500">UI DEVELOPER</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/2">
                <div class="h-full p-8 bg-gray-100 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="block w-5 h-5 mb-4 text-gray-400" viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday
                        carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                        post-ironic heirloom try-hard pabst authentic iceland.</p>
                    <a class="inline-flex items-center">
                        <img alt="testimonial" src="https://dummyimage.com/107x107"
                            class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                        <span class="flex flex-col flex-grow pl-4">
                            <span class="font-medium text-gray-900 title-font">Alper Kamu</span>
                            <span class="text-sm text-gray-500">DESIGNER</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="w-full mx-auto text-center xl:w-1/2 lg:w-3/4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="inline-block w-8 h-8 mb-8 text-gray-400" viewBox="0 0 975.036 975.036">
                <path
                    d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
            <p class="text-lg leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki
                taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag
                drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book
                skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before
                they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb
                next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking
                vinegar.</p>
            <span class="inline-block w-10 h-1 mt-8 mb-6 bg-indigo-500 rounded"></span>
            <h2 class="text-sm font-medium tracking-wider text-gray-900 title-font">HOLDEN CAULFIELD</h2>
            <p class="text-gray-500">Senior Product Designer</p>
        </div>
    </div>
</section>
<!-- Testimonials End -->

@endsection
