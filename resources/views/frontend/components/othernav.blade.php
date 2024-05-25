    {{-- navbar --}}
    <nav class="top-0 z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 my-0 md:my-0 lg:my-0 lg:py-8 bg-white shadow-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="leading-relaxed inline-block whitespace-nowrap uppercase text-white h-10"
                    href="{{ route('landing') }}">
                    <img src="{{ ImageService::getImageUrl(@$globalSection['header']['big_logo']) }}" alt="OIC Logo"
                        class="h-12 md:h-12 lg:h-20 mr-4 py-1 absolute z-10 -top-1 md:-top-1 lg:top-4"></a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none anim-btn"
                    type="button" onclick="toggleNavbar('main-collapse-navbar')">
                    <div class="header justify-end anim-ctr">
                        <div class="burger-container">
                            <div id="burger-main">
                                <div class="bar topBar"></div>
                                <div class="bar btmBar"></div>
                            </div>
                        </div>
                    </div>
                    {{-- <i class="text-black fas fa-bars"></i> --}}
                </button>
            </div>
            {{-- desktop menu --}}
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden">
                <ul class="flex flex-col lg:flex-row lg:ml-auto">
                    <li class="flex items-center hover:text-white">
                        @if (Auth::check())
                            <button data-modal-toggle="logout-confirmation-modal"
                                class="bg-white main-button hover:text-white tracking-wider border-solid border-1 border-gray-600 text-gray-600 active:bg-gray-100 text-sm font-bold px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                type="submit" style="transition: all 0.3s ease 0s;"
                                data-modal-target="logout-confirmation-modal">
                                <i
                                    class="fas fa-circle text-1xs items-center mr-2 my-auto py-auto text-gray-800 dot-icon hover:text-white sm:hidden md:block"></i>
                                Hi, {{ Auth::user()->name }}
                            </button>
                        @endif
                        @if (!Auth::check())
                            <button
                                class="bg-def-green hover:bg-white hover:text-green-600 tracking-wider border-solid border-1 border-gray-800 text-gray-800 active:bg-gray-100 text-sm font-bold px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                type="button" style="transition: all 0.3s ease 0s;" data-modal-target="auth-modal"
                                data-modal-toggle="auth-modal">
                                <i
                                    class="fas fa-circle text-1xs items-center mr-2 my-auto py-auto text-gray-800 dot-icon hover:text-white sm:hidden md:block"></i>
                                {{ $menuItems[3] }}
                            </button>
                        @endif
                    </li>
                </ul>
            </div>
            {{-- end of desktop menu --}}
        </div>
        {{-- mobile menu --}}
        <div class="z-50 px-4 md:px-12 sm:px-4 pb-2 w-7/12 float-right justify-end items-end bg-white lg:bg-transparent lg:shadow-none hidden rounded-2xl right-4 top-16 absolute shadow-lg shadow-gray-700"
            id="main-collapse-navbar">
            <ul class="flex flex-col lg:flex-row lg:ml-auto mt-5 lg:hidden">
               
                <li class="flex items-center hover:text-white">
                    @if (Auth::check())
                        <button data-modal-toggle="logout-confirmation-modal"
                            class="bg-white main-button hover:text-white tracking-wider border-solid border-1 border-gray-600 text-gray-600 active:bg-gray-100 text-sm font-bold px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 mb-3"
                            type="button" style="transition: all 0.3s ease 0s;"
                            data-modal-target="logout-confirmation-modal">
                            <i
                                class="fas fa-circle text-1xs items-center mr-2 my-auto py-auto text-gray-800 dot-icon hover:text-white sm:hidden md:block"></i>
                            Hi, {{ Auth::user()->name }}
                        </button>

                        <button data-modal-toggle="profile-modal"
                            class="bg-white main-button hover:text-white tracking-wider border-solid border-1 border-gray-600 text-gray-600 active:bg-gray-100 text-sm font-bold px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button" style="transition: all 0.3s ease 0s;"
                            data-modal-target="profile-modal">
                            <i
                                class="fas fa-circle text-1xs items-center mr-2 my-auto py-auto text-gray-800 dot-icon hover:text-white sm:hidden md:block"></i>
                            Ubah Profil
                        </button>
                    @endif
                    @if (!Auth::check())
                        <button
                            class="w-full bg-def-green hover:bg-white hover:text-green-600 tracking-wider border-solid border-1 border-gray-800 text-gray-800 active:bg-gray-100 text-sm font-bold px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 mb-3"
                            type="button" style="transition: all 0.3s ease 0s;" data-modal-target="auth-modal"
                            data-modal-toggle="auth-modal">
                            <i
                                class="fas fa-circle text-1xs items-center mr-2 my-auto py-auto text-gray-800 dot-icon hover:text-white sm:hidden md:block"></i>
                            {{ $menuItems[3] }}
                        </button>
                    @endif

                </li>
            </ul>
        </div>
        {{-- end of mobile menu --}}
    </nav>
    {{-- end of navbar --}}
