<header class=" flex justify-between py-1 px-10 bg-[#F7F7F7] border-[#575757] border-b items-center">
    <div class="flex items-center gap-4">
        <img class="h-[50px]" src="{{ asset('assets/images/main/logo.png') }}" alt="">
        <button class="h-[30px] w-[30px] bg-slate-200 rounded-full focus:ring-4 flex items-center justify-center pt-[1px] focus:ring-gray-300"
            onclick="toggleFullScreen()"><i id="changeIcon" class="fa-solid fa-expand"></i></button>
    </div>


    <div class="flex gap-[20px]">
        <div class="flex items-center relative">
            <button id="language-menu-button"
                class="inline-flex gap-2 items-center font-medium justify-center px-4 py-2 text-sm text-gray-900  rounded-lg cursor-pointer hover:bg-gray-100 ">
                <img class="h-[16px]"
                    src="{{ asset('assets/images/flag/' . (app()->getLocale() === 'km' ? 'cambodia' : 'english') . '.png') }}"
                    alt="">
                {{ __('admin.label.lang.' . (app()->getLocale() === 'km' ? 'km' : 'en')) }}
            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden absolute top-[100%] right-0 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2 w-[130px]">

                    <li>
                        <a href="{{ route('website-switch-lang', config('dummy.locale.km')) }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <div class="flex gap-[10px] items-center">
                                <img class="h-[15px] w-[30px] object-cover" src="{{ asset('assets/images/flag/cambodia.png') }}" alt="">
                                <span class="text-[15px]">{{ __('admin.label.lang.km') }}</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website-switch-lang', config('dummy.locale.en')) }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <div class="flex gap-[10px] items-center">
                                <img class="h-[15px] w-[30px] object-cover" src="{{ asset('assets/images/flag/english.png') }}" alt="">
                                <span class="text-[15px]">{{ __('admin.label.lang.en') }}</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex items-center relative">
            <button
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ asset('assets/images/social/google-bg.png') }}"
                    alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden absolute top-[100%] right-0  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email
                        }}</span>
                </div>
                <ul class="py-2">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Front-End</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <div class="flex gap-[10px] items-center">
                                <span>Sign out</span>
                                <i class="fa-solid fa-power-off"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script type="module">
    $(document).ready(function(){
        $('#user-menu-button').click(function() {
            $('#user-dropdown').slideToggle();
            $('#language-dropdown-menu').slideUp();
        });

        $('#language-menu-button').click(function() {
            $('#language-dropdown-menu').slideToggle();
            $('#user-dropdown').slideUp();
        });
     })
</script>
<script>
    function toggleFullScreen() {
    var elem = document.documentElement;

    if (!document.fullscreenElement && !document.mozFullScreenElement &&
      !document.webkitFullscreenElement && !document.msFullscreenElement) {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) {
        elem.msRequestFullscreen();
      }
      document.getElementById("changeIcon").className = "fa-solid fa-compress";
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
      document.getElementById("changeIcon").className = "fa-solid fa-expand";
    }
  }

</script>
