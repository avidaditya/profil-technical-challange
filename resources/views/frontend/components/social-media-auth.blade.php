<div class="flex flex-col gap-4 items-baseline">
    <a href="{{ route('auth.sso', ['provider' => 'google', 'redirectTo' => url()->full()]) }}"
        class="bg-red-500/80 text-white p-4 w-full flex items-center gap-6">
        <svg fill="#ffffff" class="w-10 h-10" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <title>ionicons-v5_logos</title>
            <path
                d="M473.16,221.48l-2.26-9.59H262.46v88.22H387c-12.93,61.4-72.93,93.72-121.94,93.72-35.66,0-73.25-15-98.13-39.11a140.08,140.08,0,0,1-41.8-98.88c0-37.16,16.7-74.33,41-98.78s61-38.13,97.49-38.13c41.79,0,71.74,22.19,82.94,32.31l62.69-62.36C390.86,72.72,340.34,32,261.6,32h0c-60.75,0-119,23.27-161.58,65.71C58,139.5,36.25,199.93,36.25,256S56.83,369.48,97.55,411.6C141.06,456.52,202.68,480,266.13,480c57.73,0,112.45-22.62,151.45-63.66,38.34-40.4,58.17-96.3,58.17-154.9C475.75,236.77,473.27,222.12,473.16,221.48Z" />
        </svg>
        <span>Masuk/Daftar dengan Google</span>
    </a>
    {{-- <a href="{{ route('auth.sso', ['provider' => 'facebook', 'redirectTo' => url()->full()]) }}"
        class="bg-light-blue-700 text-white p-4 w-full flex items-center gap-6">
        <svg fill="#ffffff" class="w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310 310" xml:space="preserve">
            <g id="XMLID_834_">
                <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
                    c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
                    V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
                    C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
                    c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z" />
            </g>
        </svg>
        <span>Masuk/Daftar dengan Facebook</span>
    </a> --}}
</div>
