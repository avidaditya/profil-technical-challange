<footer class="relative bg-gray-300 pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 flex flex-col md:flex-row md:items-start">
                <img class="object-center px-auto md:px-0 lg:px-0 object-contain h-20 md:h-28 mb-6 md:mb-0"
                    src="{{ ImageService::getImageUrl(@$globalSection['footer']['logo_1']) }}" alt="">
                <img class="object-center px-auto md:px-0 lg:px-0 object-contain h-16 md:h-20 md:ms-14 md:mt-4 mt-4 mb-6 md:mb-0"
                    src="{{ ImageService::getImageUrl(@$globalSection['footer']['logo_2']) }}" alt="">
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6 mt-6 mb:mt-0 lg:mt-0">
                    <div class="w-full lg:w-6/12 px-4">
                        <ul class="list-unstyled">
                            <li>
                                <a class="bg-transparent text-center md:text-start float-start text-gray-800 font-normal h-10 w-full rounded-full outline-none focus:outline-none mr-2"
                                    href="{{ @$globalSection['social-media']['linkedin']['link'] }}">
                                    <i class="flex fab fa-linkedin-in mr-3"></i>
                                    {{ @$globalSection['social-media']['linkedin']['text'] }}</a>
                            </li>
                            <li>
                                <a class="bg-transparent text-center md:text-start float-start text-gray-800 font-normal h-10 w-full rounded-full outline-none focus:outline-none mr-2"
                                    href="{{ @$globalSection['social-media']['website']['link'] }}">
                                    <i class="flex fas fa-globe mr-3"></i>
                                    {{ @$globalSection['social-media']['website']['text'] }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <ul class="list-unstyled">
                            <li>
                                <a class="bg-transparent text-center md:text-start float-start text-gray-800 font-normal h-10 w-full rounded-full outline-none focus:outline-none mr-2"
                                    href="mailto:{{ @$globalSection['contact-information']['email'] }}">
                                    <i class="flex far fa-envelope mr-3"></i>
                                    {{ @$globalSection['contact-information']['email'] }}</a>
                            </li>
                            <li>
                                <a class="bg-transparent text-center md:text-start float-start text-gray-800 font-normal h-10 w-full rounded-full outline-none focus:outline-none mr-2"
                                    href="{{ @$globalSection['social-media']['instagram']['link'] }}">
                                    <i class="flex fab fa-instagram mr-3"></i>
                                    {{ @$globalSection['social-media']['instagram']['text'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block items-top mb-3 mt-8 md:mt-12 lg:mt-12">
                    <div class="w-full lg:w-12/12 px-4">
                        <span
                            class="block text-gray-800 text-sm mb-2 tracking-wider text-center md:text-left lg:text-left">
                            {{ @$globalSection['footer']['copyright'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
