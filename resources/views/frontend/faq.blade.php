@extends('frontend.components.main')

@section('seo_title', @$seo['title'])
@section('seo_description', @$seo['description'])
@section('seo_keywords', @$seo['keywords'])
@section('seo_image', @$seo['image'])

@section('content')
    @php
        $slug = 'test';
    @endphp
    <main>
        {{-- About Section --}}
        <section class="relative py-20 bg-gray-200 mt-0 md:mt-5 hidden">
            <div class="container mx-auto px-2 md:px-4 lg:px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-7/12 md:w-12/12 ml-auto mr-auto lg:pe-4">
                        <img alt="..."
                            class="max-w-full rounded-3xl shadow-lg md:h-96 lg:h-96 h-56 w-full object-cover mb-10"
                            src="{{ ImageService::getImageUrl(@$content['about']['img']) }}">
                    </div>
                    <div class="w-full lg:w-4/12 md:w-12/12 ml-auto mr-auto px-3 lg:ps-4 sm:hidden md:hidden lg:flex">
                        <div class="md:pr-12">
                            <h3
                                class="md:text-3xl lg:text-3xl text-2xl font-semibold md:pt-0 lg:pt-0 pt-6 text-center md:text-left lg:text-left">
                                {{ @$content['about']['title'] }}</h3>
                            <p
                                class="mt-4 md:text-lg lg:text-lg text-base leading-relaxed text-gray-600 text-center md:text-left lg:text-left">
                                {!! @$content['about']['description'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of About Section --}}

        <section class="pt-10 pb-20 bg-transparent rounded-none">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-8">
                    <div class="w-full lg:w-8/12">
                        <h2 class="text-2xl md:text-4xl font-semibold pb-8">{{ @$content['faq']['title'] }}</h2>
                    </div>
                </div>
                <div id="accordion-collapse" data-accordion="collapse" class="w-full lg:w-10/12 block text-center mx-auto">
                    @php $i = 0; @endphp
                    @foreach (@$faqs ?? [] as $item)
                        @php $i++; @endphp
                        <div class="mb-6">
                            <h2 id="accordion-collapse-heading-{{ $i }}">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                                    data-accordion-target="#accordion-collapse-body-{{ $i }}"
                                    aria-expanded="{{ $loop->index === 0 ? 'true' : 'false' }}"
                                    aria-controls="accordion-collapse-body-{{ $i }}">
                                    <span>{{ @$item['question'] }}</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $i }}" class="hidden"
                                aria-labelledby="accordion-collapse-heading-1">
                                <div
                                    class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start faq-answer">
                                    {!! @$item['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection

@section('script')
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                const topOffset = section.getBoundingClientRect().top + window.scrollY;
                window.scrollTo({
                    top: topOffset - 80,
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endsection
