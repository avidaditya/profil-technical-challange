@extends('frontend.components.main')

@section('seo_title', @$data['content_data']['seo']['title'])
@section('seo_description', @$data['content_data']['seo']['description'])
@section('seo_keywords', @$data['content_data']['seo']['keywords'])
@section('seo_image', @$data['content_data']['seo']['image'])

@section('content')
    <div ng-controller="lokasiController" ng-init="initLocation()">
        {{-- Hero Section --}}
        <section class="py-10 md:py-20 bg-gray-200 rounded-3xl rounded-t-none">
            <div class="container mx-auto px-4 flex flex-wrap">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-5/12 ml-auto mr-auto px-4 order-2 md:order-2 lg:order-1">
                        <div class="md:pr-8">
                            <h4 class="text-2xl font-semibold text-center lg:text-left text-primary pt-6 lg:pt-0">
                                {{ $data['name'] }}</h4>
                            <h3 class="mt-2 text-2xl md:text-3xl font-semibold text-center lg:text-left">
                                {{ @$data['content_data']['about']['title'] }}</h3>
                            <p
                                class="mt-4 text-base md:text-lg lg:text-lg leading-relaxed text-gray-600 text-center lg:text-left">
                                {{ @$data['content_data']['about']['description'] }}
                            </p>
                        </div>
                        <div class="mt-6 sm:text-center md:text-left text-center">
                            <a href="#solusi"
                                class="bg-def-green text-gray-800 active:bg-gray-700 text-lg font-bold px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 hover:bg-white hover:text-gray-800"
                                type="button" style="transition: all 0.3s ease 0s;">
                                Sumbang Idemu Sekarang
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-7/12 ml-auto mr-auto px-3 order-1 md:order-1 lg:order-2 pb-4 md:pb-0 lg:pb-0">
                        <img alt="..."
                            class="max-w-full rounded-3xl shadow-lg h-400 md:h-[28rem] lg:h-[28rem] w-full object-cover"
                            src="{{ ImageService::getImageUrl(@$data['content_data']['about']['img']) }}" />
                    </div>
                </div>
            </div>
        </section>
        {{-- end of Hero section --}}
        {{-- Content Section --}}
        <section class="py-20">
            <div class="container mx-auto px-4 flex flex-wrap">
                <div class="w-full lg:w-8/12 mx-auto px-2 md:px-4">
                    {{-- Video --}}
                    <div>
                        <iframe class="w-full aspect-video rounded-2xl"
                            src="https://www.youtube.com/embed/{{ @$data['content_data']['content']['youtube'] }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                        {{-- <video class="w-full rounded-3xl" controls>
                            <source src="{{ ImageService::getImageUrl(@$data['content_data']['content']['video']) }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video> --}}
                    </div>
                    <div class="lg:mt-10 mt-6">
                        <h2 class="text-2xl md:text-3xl font-semibold leading-tight">
                            {{ @$data['content_data']['content']['title'] }}</h2>
                    </div>
                    <div class="lg:mt-6 mt-4 flex flex-col gap-3 leading-relaxed">
                        {{-- {!! @$data['content_data']['content']['description'] !!} --}}
                        @includeWhen($slug === 'belitung', 'scratch.belitung')
                        @includeWhen($slug === 'lombok-tengah', 'scratch.lombok-tengah')
                        @includeWhen($slug === 'magelang', 'scratch.magelang')
                        @includeWhen($slug === 'malang', 'scratch.malang')
                    </div>
                    <div class="mt-6">
                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-3xl md:h-[28rem]">
                                @foreach (@$data['content_data']['images'] ?? [] as $item)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ ImageService::getImageUrl($item) }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Slider indicators -->
                            <div
                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                @foreach (@$data['content_data']['images'] ?? [] as $item)
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide {{ $loop->index + 1 }}"
                                        data-carousel-slide-to="{{ $loop->index }}"></button>
                                @endforeach
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Lokasi Lainnya --}}
                <div class="w-full md:w-4/12 mx-auto px-4 hidden lg:block">
                    <h2 class="text-3xl font-semibold">Lokasi Lainnya</h2>
                    <div class="mt-6 flex flex-col gap-8">
                        @foreach ($others ?? [] as $item)
                            <div class="bg-gray-200 rounded-3xl px-4 pt-4 pb-4 flex flex-col gap-4 text-gray-700">
                                <img class="w-full object-cover rounded-xl h-56"
                                    src="{{ ImageService::getImageUrl($item['cover_img']) }}" alt="">
                                <h4 class="text-2xl font-semibold px-3">{{ $item['name'] }}</h4>
                                {{-- <p class="px-3">
                                    {{ Helper::readMore($item['description']) }}
                                </p> --}}
                                <a class="color-def-purple text-lg underline px-3 pb-3 hover:text-gray-800 transition-all duration-300"
                                    href="{{ route('lokasi', [$item['slug']]) }}">Ikut
                                    Berinovasi</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- end of lokasi lainnya --}}

            </div>
        </section>
        {{-- end of Content section --}}

        {{-- Solution Section --}}
        <section class="py-20 bg-gray-200" id="solusi">
            <div class="container mx-auto px-4 flex flex-col">
                <div class="flex flex-col gap-2">

                    <div class="flex md:flex-row flex-col justify-between items-center">
                        <h2 class="text-3xl font-semibold mb-4 md:mb-0">Ide Terkumpul</h2>
                        <div class="relative md:w-96 hidden md:block">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="search" ng-model="params.search"
                                ng-blur="loadLocation()"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pencarian kata kunci..." required />
                        </div>
                    </div>


                    {{-- filter desktop --}}
                    <div class=" md:flex-row flex-wrap justify-between items-center hidden md:flex">
                        <div class="flex flex-wrap gap-8">

                            <div class="flex gap-2 items-center w-12/12">
                                <label class="text-md w-full">Urut Berdasarkan</label>
                                <select id="sort-by" ng-change="loadLocation()" ng-model="params.urut" name="urut"
                                    class="bg-gray-50 border min-w-[12rem] px-4 border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Terpopuler</option>
                                    <option>Terbaru</option>
                                    <option>Terlama</option>
                                </select>
                            </div>

                            <div class="flex gap-2 items-center w-12/12">
                                <label class="text-md w-56">Filter Berdasarkan</label>
                                <select id="filter-by" name="berdasarkan" ng-model="params.berdasarkan"
                                    ng-change="loadLocation()"
                                    class="bg-gray-50 border min-w-[12rem] px-4 border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Semua</option>
                                    <option>Ide Saya</option>
                                    {{-- <option {{count($query_param) > 0 ? ($query_param['berdasarkan'] == 'Tags' ? 'selected' : '') : ''}}>Tags</option> --}}
                                    @foreach ($sektors ?? [] as $value)
                                        <option value="{{ $value->id }}">{{ $value->sektor }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <a class="text-md underline" ng-click="refreshFilter()" href="javascript:">Hapus Filter</a>
                    </div>

                    {{-- end of filter desktop --}}

                    {{-- filter mobile --}}
                    <div class="items-center block md:hidden w-full">
                        <div id="accordion-collapse w-full mx-auto items-center flex flex-wrap" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1 flex flex-wrap">
                                <button type="button"
                                    class="flex flex-wrap items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-2xl dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#filter-menu" aria-expanded="false"
                                    aria-controls="filter-menu">
                                    <span>Filter Solusi</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 justify-between"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="filter-menu" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div
                                    class="flex flex-wrap p-5 border border-b-0 bg-gray-100 rounded-b-2xl text-center w-full ml-auto mr-auto items-center">

                                    {{-- search bar --}}
                                    <div class="relative w-full md:w-96">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="search" id="default-search" name="search"
                                            ng-model="params.search" ng-blur="loadLocation()"
                                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                                            placeholder="Pencarian kata kunci..." required />
                                    </div>
                                    {{-- end of search bar --}}

                                    <label class="text-md w-full flex flex-col mx-auto mb-3 mt-4 px-4 text-start">Urut
                                        Berdasarkan</label>
                                    <select id="urutan" ng-change="loadLocation()" ng-model="params.urut"
                                        name="urut"
                                        class="bg-gray-50 border w-full mx-auto flex flex-col px-4 border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-purple-500 focus:border-purple-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                        <option>Terpopuler</option>
                                        <option>Terbaru</option>
                                        <option>Terlama</option>
                                    </select>
                                    <label class="text-md w-full flex flex-col mx-auto mb-3 mt-4 px-4 text-start">Filter
                                        Berdasarkan</label>
                                    <select id="filter" name="berdasarkan" ng-change="loadLocation()"
                                        ng-model="params.berdasarkan"
                                        class="bg-gray-50 border w-full mx-auto flex flex-col px-4 border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-purple-500 focus:border-purple-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">

                                        <option>Semua</option>
                                        <option>Submission Saya</option>
                                        {{-- <option {{count($query_param) > 0 ? ($query_param['berdasarkan'] == 'Tags' ? 'selected' : '') : ''}}>Tags</option> --}}
                                        @foreach ($sektors ?? [] as $value)
                                            <option value="{{ $value->id }}">{{ $value->sektor }}</option>
                                        @endforeach
                                    </select>
                                    <a class="text-md underline mt-6 text-center flex flex-col w-full" href="javascript:"
                                        ng-click="refreshFilter()">Hapus
                                        Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of filter mobile --}}

                </div>
                <div class="md:mt-12 mt-6">
                    <div class="flex flex-wrap w-full bg-def-green rounded-3xl justify-between p-6 min-h-52">
                        <div class="w-full md:w-6/12">
                            <h2 class="text-2xl lg:text-2xl font-normal md:font-semibold">{{ $cta }}</h2>
                        </div>
                        {{-- {% user == null ? 'onclick=onClickSolution()' : (user.consent_date != null && user.email_verified_at != null ? (user.is_blocked ? 'onclick=onClickSolutionIsBlocked()' : '') : 'onclick=onClickSolutionNotVerified()') %} --}}
                        {{-- {% ( user == null ? 'data-modal-target=auth-modal data-modal-toggle=auth-modal' : (user.consent_date != null && user.email_verified_at != null && !user.is_blocked ? (user.guide ? 'data-modal-target=submission-form-modal data-modal-toggle=submission-form-modal' : 'data-modal-target=submission-guide-modal data-modal-toggle=submission-guide-modal') : ''))  %} --}}
                        <div class="w-full sm:w-12/12 md:w-4/12 lg:w-3/12 self-end mt-10 md:mt-0">
                            <button ng-click="kirimIdeTrigger()"
                                class="flex justify-between self-center w-full p-1 ps-10 text-lg font-bold text-gray-900 rounded-full bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:bg-def-green hover:shadow-lg hover:text-white hover:border-2 hover:border-white hover:scale-105 transition-all duration-300">
                                <span class="self-center w-full">
                                    Kirim Ide
                                </span>
                                <span
                                    class="self-end text-def-green border-2 border-def-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm p-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-white hover:scale-105 hover:border-white transition-all duration-300">
                                    <i class="ph ph-arrow-right text-3xl"></i>
                                </span>
                            </button>


                        </div>
                    </div>
                </div>

                <div class="mt-6 flex flex-col gap-6">
                    <div class="flex flex-col rounded-3xl bg-white gap-4 p-6 " ng-repeat="$value in solutions">
                        <div class="flex justify-between">
                            <div class="flex flex-col gap-1">
                                <h4 class="text-md font-semibold">{%replaceAfterSpaceWithX($value.user.name)%}</h4>
                                <p class="text-sm">{%$value.created_at | date:'dd/MM/yyyy HH:mm' %}</p>
                            </div>
                            <button type="button" ng-if="$value.type == 1" data-tooltip-target="tooltip-default{%$index%}"
                                class="border rounded-3xl py-1 md:py-2 px-4 flex justify-between items-center gap-2">
                                <span class="text-sm md:text-normal">Advanced</span>
                                <i class="ph-bold ph-question text-xl"></i>
                            </button>

                            <div id="tooltip-default{%$index%}" role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Advanced category merupakan sebuah jalur yang dipertujukan untuk ide-ide yang lebih
                                komprehensif yang juga dikemas dalam bentuk proposal/dokumen. Dokumen tersebut tidak
                                ditunjukkan kepada publik untuk melindungi ide yang diberikan.
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h4 class="text-md font-bold">{%$value.title%}</h4>
                            <p class="text-sm text-pretty leading-6">{%$value.solution%}</p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex gap-2 items-center">
                                <div class="flex flex-row items-center gap-1 hover:cursor-pointer"
                                    data-toggle="comment-reply" ng-click="value.expand = !value.expand">
                                    <p class="text-md">{%$value.comment.length%} Komentar</p>
                                    <i class="ph-bold ph-caret-down text-md" ng-if="!value.expand"></i>
                                    <i class="ph-bold ph-caret-up text-md" ng-if="value.expand"></i>
                                </div>
                                <div class="text-md mx-4 hover:cursor-pointer reply"
                                    ng-click="sendCommentModal($value.id)">
                                    Reply
                                </div>
                            </div>
                            <div class="flex gap-2 items-center">
                                <p class="text-md">{% $value.vote.length %} </p>

                                <input type="hidden" value="{%$value.id%}" name="solution_id">
                                <input type="hidden" value="" name="vote">

                                <button type="submit" ng-if="isUserInVote($value.vote)"
                                    ng-click="sendVote($value.id,true)"><i
                                        class="ph-bold ph-thumbs-up text-2xl text-def-green"></i></button>
                                <button type="submit" ng-if="!isUserInVote($value.vote)"
                                    ng-click="sendVote($value.id,false)"><i
                                        class="ph-bold ph-thumbs-up text-2xl"></i></button>

                            </div>
                        </div>
                        <div class="flex flex-col pl-8 gap-4" ng-show="$value.comment.length > 0 && value.expand">
                            <div class="flex flex-col gap-2"
                                ng-repeat="$comment in $value.comment | limitTo:$value.limit">
                                <div class="flex justify-between">
                                    <div class="flex flex-col gap-1">
                                        <h4 class="text-md font-semibold">{%replaceAfterSpaceWithX($comment.user.name)%}
                                        </h4>
                                        <p class="text-sm">{%$comment.created_at | date:'dd/MM/yyyy HH:mm' %}</p>
                                    </div>

                                    {{-- <form action="{{route('lokasi.delete-comment')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{%$comment.id%}" name="comment_id" />
                                        <button type="submit"><i class="ph-bold ph-trash text-2xl text-red-500"></i></button>
                                    </form> --}}

                                </div>

                                <div class="flex flex-col gap-2">
                                    <p class="text-sm text-pretty leading-6">{%$comment.title%}</p>

                                </div>
                            </div>
                            <span class="text-md hover:cursor-pointer font-semibold"
                                ng-if="$value.limit < $value.comment.length"
                                ng-click="$value.limit = (limitComment + $value.limit)">Muat Lebih Banyak</span>

                            <div>

                                <div class="flex flex-col pl-8 gap-4" ng-if="$value.comment.length == 0">
                                    {{-- &nbsp; --}}
                                    <div>


                                    </div>
                                </div>

                            </div>




                        </div>




                    </div>
                    <div class="container mx-auto mt-5 text-center" ng-if="solutions.length == 0">
                        <div class="flex flex-col rounded-3xl bg-white gap-4 p-6">
                            <h4>Belum ada ide terkumpul</h4>
                        </div>
                    </div>
                    {{-- pagination --}}
                    <div class="container mx-auto mt-5 px-0" ng-if="totalSolutions > 5">
                        <div class="self-end">
                            <nav aria-label="Page navigation example">
                                <ul class="flex items-center -space-x-px h-8 text-sm">
                                    <li ng-if="params.paginate > 1">
                                        <a href="javascript:" ng-click="previous()" 
                                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li ng-if="paginateTotal.length > 0 && paginateTotal[0] != 1 ">
                                        <button ng-disabled="true"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 " >...</button>
                                    </li>
                                    <li ng-repeat="paging in paginateTotal">
                                        <button href="javascript:"
                                            ng-click="params.paginate = paging;loadLocation(paging)"
                                            ng-if="paging == params.paginate"
                                            class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{%paging%}</button>

                                        <button href="javascript:"
                                            ng-click="params.paginate = paging;loadLocation(paging)"
                                            ng-if="paging != params.paginate"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{%paging%}</button>
                                    </li>
                                    <li ng-if="paginateTotal.length > 0 && paginateTotal[(paginateTotal.length-1)] != totalPagesHtml ">
                                        <button ng-disabled="true"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 ">...</button>
                                    </li>
                                    <li ng-if="params.paginate < totalPagesHtml">
                                        <a href="javascript:" ng-click="next()" 
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
        </section>

        {{-- end of Solution section --}}
        {{-- Hide Modal Location --}}
        <button id="hideGuide" data-modal-hide="submission-guide-modal" style="display:none"></button>
        <button id="hideComment" data-modal-hide="comment-form-modal" style="display:none"></button>
        <button id="hideSolution" data-modal-hide="submission-form-modal" style="display:none"></button>
    </div>
    <script>
        angular.module('myApp')
            .controller('lokasiController', function($scope, $http, $rootScope) {
                //Location Variable
                $scope.user = null;

                $scope.params = {
                    search: "",
                    urut: "Terpopuler",
                    berdasarkan: "Semua",
                    slug: '{{ $slug }}',
                    paginate: 1,
                    limit: 5
                }

                $scope.paginateTotal = [1];
                $scope.totalSolutions = 0;
                $scope.user_id = '{{ Auth::id() }}'
                $scope.limitComment = 5;

                $scope.solutions = []

                $scope.refreshFilter = () => {
                    $scope.params = {
                        search: "",
                        urut: "Terpopuler",
                        berdasarkan: "Semua",
                        slug: '{{ $slug }}',
                        paginate: 1,
                        limit: 5
                    }
                    $scope.loadLocation()
                }

                $scope.previous = () =>{
                    if($scope.params.paginate != 1){
                        $scope.params.paginate = $scope.params.paginate-1;
                        $scope.loadLocation()
                    }
                }

                $scope.next = () =>{
                    if($scope.params.paginate != $scope.totalPagesHtml){
                        $scope.params.paginate = $scope.params.paginate+1;
                        $scope.loadLocation()
                    }
                }

                $scope.replaceAfterSpaceWithX = (expression) => {
                    if (!expression) return '';

                    return expression.split(' ').map(function(word) {
                        return word.charAt(0) + '*'.repeat(word.length - 1);
                    }).join(' ');
                }

                $scope.initLocation = () => {
                    $scope.loadLocation()
                    $scope.loadUser()
                }

                $scope.sendCommentModal = (solution_id) => {
                    if ($scope.user == null) {
                        onClickSolution()
                        return;
                    }
                    $scope.solution_id = solution_id;
                    $('[data-modal-toggle="comment-form-modal"]').first().trigger('click');
                }

                $rootScope.sendComment = () => {
                    Swal.showLoading()

                    $rootScope.commentDisabled = true


                    $http.post('{{ route('lokasi.send-comment') }}', {
                            'solution_id': $scope.solution_id,
                            'title': $rootScope.titleComment,
                            'g-captcha-response': $rootScope.recaptchaResponse
                        }, {
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(function(response) {
                            // Handle success response

                            $rootScope.commentDisabled = false;
                            $('#hideComment').first().trigger('click');
                            if (response.data.data == 'deleted') {
                                $('[data-modal-toggle="comment-blocked-modal"]').first().trigger('click');
                            }
                            $scope.loadLocation()
                            resetRecaptchaComment()
                            swal.close()

                        }, function(error) {
                            resetRecaptchaComment()
                            $('[data-modal-toggle="comment-failed-modal"]').first().trigger('click');

                            // Handle error response
                            $rootScope.commentDisabled = false;
                            toastErrorAlert(error.data.message)

                        });
                }

                $rootScope.acceptGuide = () => {
                    $rootScope.guideDisabled = true;
                    $http.post('{{ route('lokasi.send-guide') }}', {}, {
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(function(response) {
                            // Handle success response

                            $rootScope.guideDisabled = false;

                            $('#hideGuide').first().trigger('click');
                            $('#toggleSubmissionModal').first().trigger('click');


                        }, function(error) {
                            // Handle error response
                            $rootScope.guideDisabled = false;
                            toastErrorAlert(error.data.message)

                        });
                }

                function resetRecaptcha() {
                    var recaptchaElement = document.getElementById('recaptcha');
                    var recaptchaParent = recaptchaElement.parentNode;
                    var newRecaptchaElement = document.createElement('div');
                    newRecaptchaElement.id = 'recaptcha';

                    // Remove the existing reCAPTCHA widget
                    recaptchaParent.replaceChild(newRecaptchaElement, recaptchaElement);

                    // Render a new reCAPTCHA widget
                    grecaptcha.render('recaptcha', {
                        'sitekey': "{{ env('RECAPTCHA_SITE_KEY') }}", // Replace 'YOUR_SITE_KEY' with your reCAPTCHA site key
                        'callback': enableBtn // Replace with your callback function
                    });
                }

                function resetRecaptchaComment() {
                    var recaptchaElement = document.getElementById('recaptcha-comment');
                    var recaptchaParent = recaptchaElement.parentNode;
                    var newRecaptchaElement = document.createElement('div');
                    newRecaptchaElement.id = 'recaptcha-comment';

                    // Remove the existing reCAPTCHA widget
                    recaptchaParent.replaceChild(newRecaptchaElement, recaptchaElement);

                    // Render a new reCAPTCHA widget
                    grecaptcha.render('recaptcha-comment', {
                        'sitekey': "{{ env('RECAPTCHA_SITE_KEY') }}", // Replace 'YOUR_SITE_KEY' with your reCAPTCHA site key
                        'callback': enableBtn // Replace with your callback function
                    });
                }


                $rootScope.submitForm = () => {
                    Swal.showLoading()

                    $rootScope.submissionDisabled = true

                    var links = [];
                    var boleh = true;
                    $rootScope.formData.link.forEach(element => {
                        links.push(element.text)
                        if (element.text != "") {
                            if (!isValidUrl(element.text)) {
                                boleh = false;
                            }
                        }
                    });

                    if (!boleh) {
                        $('#hideSolution').first().trigger('click');
                        $('[data-modal-toggle="form-submission-failed-modal"]').first().trigger('click');
                        swal.close()
                        $scope.loadLocation();
                        resetRecaptcha()
                        return;
                    }



                    var formData = new FormData();
                    var file = document.getElementById('file_input').files[
                    0]; // Get the file from the input element
                    if (file != undefined) {
                        formData.append('uploaded_file', file);
                    }

                    // Append additional form data
                    for (var key in $rootScope.formData) {
                        if ($rootScope.formData.hasOwnProperty(key)) {
                            if (key != 'link') {
                                formData.append(key, $rootScope.formData[key]);
                            } else {
                                formData.append('link', links);
                            }
                        }
                    }
                    formData.append('location_id', '{{ $data->id }}')
                    formData.append('g-captcha-response', $rootScope.recaptchaResponse)

                    $http.post('{{ route('lokasi.send-solution') }}', formData, {
                        headers: {
                            'Content-Type': undefined,
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        transformRequest: angular.identity // Don't transform the request data
                    }).then(function(response) {
                        // Handle success response

                        $rootScope.submissionDisabled = false;
                        $('#hideSolution').first().trigger('click');

                        $scope.loadLocation()

                        swal.close()


                        if (response.data.data == 'thankyou') {
                            $('[data-modal-toggle="thankyou-modal"]').first().trigger('click');
                            console.log('tracking berhasil');
                            _paq.push(['trackEvent', 'Conversion', 'Kirim Ide', 'Ide', 1]);
                            gtag('event', 'Kirim Ide');
                        } else {
                            $('[data-modal-toggle="blocked-modal"]').first().trigger('click');
                        }
                        resetRecaptcha()

                    }, function(error) {
                        resetRecaptcha()
                        // Handle error response
                        $rootScope.submissionDisabled = false;
                        $('[data-modal-toggle="form-submission-failed-modal"]').first().trigger('click');

                        toastErrorAlert(error.data.message)

                    });

                }

                $scope.isUserInVote = function(votes) {
                    var voteStatus = votes.some(function(item) {
                        return item.user_id == $scope.user_id && item.vote;
                    });
                    return voteStatus
                };

                $scope.sendVote = (solution_id, vote) => {

                    if ($scope.user == null) {
                        onClickSolution()
                        return
                    }

                    $http.post('{{ route('lokasi.send-vote') }}', {
                            solution_id: solution_id,
                            vote: vote
                        }, {
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(function(response) {
                            // Handle success response

                            $scope.loadLocation()

                        }, function(error) {
                            // Handle error response
                            toastErrorAlert(error.data.message)

                        });
                }

                $scope.loadLocation = () => {
                    //Global Recaptcha RootScope
                    $rootScope.recaptchaResponse = "";

                    //Comment RootScope Variable
                    $rootScope.titleComment = "";
                    $rootScope.commentDisabled = false;
                    $rootScope.captchaVerified = false;

                    //Guide RootScope Variable
                    $rootScope.guideDisabled = false;

                    //Submission RootScope Variable
                    $rootScope.formData = {
                        link: [{
                            text: ''
                        }]
                    }
                    $rootScope.submissionDisabled = false;
                    $('.alert-link').hide()

                    $http.get('{{ route('lokasi.get-location') }}', {
                            params: $scope.params
                        })
                        .then(function(response) {
                            // Handle success response

                            $scope.solutions = response.data.solutions;
                            $scope.solutions.forEach(element => {
                                element.expand = false;
                                element.limit = 3
                            });
                            $scope.totalSolutions = response.data.totalSolutions;
                            
                            if ($scope.totalSolutions > $scope.params.limit) {
                                $scope.paginateTotal = [];
                                $scope.totalPagesHtml = Math.ceil($scope.totalSolutions / $scope.params.limit);
                                var totalPages = Math.ceil($scope.totalSolutions / $scope.params.limit);
                                var maxVisiblePages = 5; // Atur jumlah halaman yang ingin ditampilkan sekaligus

                                // Tentukan halaman awal dan akhir yang ditampilkan
                                var startPage = Math.max($scope.params.paginate - Math.floor(maxVisiblePages / 2), 1);
                                var endPage = startPage + maxVisiblePages - 1;

                                // Pastikan endPage tidak melebihi total halaman
                                if (endPage > totalPages) {
                                    endPage = totalPages;
                                    startPage = Math.max(endPage - maxVisiblePages + 1, 1);
                                }

                                for (let i = startPage; i <= endPage; i++) {
                                    $scope.paginateTotal.push(i);
                                }
                            } 


                        }, function(error) {
                            // Handle error response
                            toastErrorAlert(error.data.message)

                        });
                }

                $scope.kirimIdeTrigger = () => {
                    if ($scope.user == null) {
                        onClickSolution()
                        $('[data-modal-toggle="auth-modal"]').first().trigger('click');
                    } else if ($scope.user.consent_date == null || $scope.user.email_verified_at == null) {
                        onClickSolutionNotVerified()
                    } else if ($scope.user.is_blocked) {
                        onClickSolutionIsBlocked()
                    } else {
                        $('[data-modal-toggle="submission-form-modal"]').first().trigger('click');
                    }

                }

                $scope.loadUser = () => {

                    $http.get('{{ route('lokasi.get-user') }}')
                        .then(function(response) {
                            // Handle success response

                            $scope.user = response.data.data;

                        }, function(error) {
                            // Handle error response
                            toastErrorAlert(error.data.message)

                        });
                }

                $rootScope.linkBlur = (index) => {




                    if ($rootScope.formData.link[(index - 1)].text != "") {
                        if (isValidUrl($rootScope.formData.link[(index - 1)].text)) {
                            $('.link-' + (index - 1)).removeClass('border-red-500')
                            $rootScope.formData.link.push({
                                text: ''
                            });
                            $('.alert-link').hide()

                        } else {
                            $('.link-' + (index - 1)).addClass('border-red-500')
                            $('.alert-link').show()

                        }
                    }


                }

                function isValidUrl(url) {
                    var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name and extension
                        '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                        '(\\:\\d+)?(\\/[-a-z\\d%@_.~+&:]*)*' + // port and path
                        '(\\?[;&a-z\\d%@_.,~+&:=-]*)?' + // query string
                        '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
                    return !!pattern.test(url);
                }


            });

        @if (request()->has('search'))
            document.addEventListener("DOMContentLoaded", function() {
                // Get the target element
                var targetElement = document.getElementById("solusi");

                var xPosition = 0;
                var yPosition = targetElement.offsetTop;
                window.scrollTo(xPosition, yPosition);
            });
        @endif

        $(function() {
            $('.js-example-basic-multiple').select2({
                selectionCssClass: 'text-gray-900 text-sm !rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6',
                placeholder: "Pilih Tags",
            });



            $('.alert-link').hide()
            $('.upload-submission').hide()

            {{-- var blacklist_words = '{{$blacklist_words->words}}';
            blacklist_words = blacklist_words.split(','); --}}

            $('.upload-submission').on('click', function() {
                setTimeout(() => {
                    $('.uploaded_file').first().trigger('click');
                }, 500);
            })

            $('.uploaded_file').on('change', function() {
                if (this.value) {
                    $('.span-unggah').text(this.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]);
                } else {
                    $('.span-unggah').text('Belum ada file')
                }
            })


            $('#submission-checkbox').on('change', function() {
                var checked = this.checked;
                if (checked) {
                    $('.submission-label').text('Advance Category')
                    $('.upload-submission').show()
                } else {
                    $('.submission-label').text('Open Category')
                    $('.upload-submission').hide()
                }
            })


        });

        function onClickSolution() {
            toast_global('error', 'Harap login terlebih dahulu..');
        }

        function onClickSolutionNotVerified() {
            toast_global('error', 'Akun anda belum terverifikasi...');
        }

        function onClickSolutionIsBlocked() {
            toast_global('error', 'Akun anda terblokir, tidak bisa kirim ide...');

        }

        function toastErrorAlert(message) {
            toast_global('error', message);

        }
    </script>
@endsection
