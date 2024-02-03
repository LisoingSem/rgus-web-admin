<aside class="w-[300px] h-[100vh] bg-[#333e52] overflow-y-scroll">
    <ul>
        <div class="text-slate-500 py-1 px-3 text-[12px]">Navigation</div>
        <li class="{{ request()->is('admin/dashboard*') ? 'before:bg-[#fe9e00] bg-[#5d78ab]' : '' }} hover:bg-[#5d78ab] relative before:content-[''] before:w-[2px] before:h-[80%] before:top-[10%] before:absolute text-white mb-[1px]">
            <a href="#">
                <div class="flex items-center py-2 px-4 gap-3">
                    <div class="icon"><i class="{{ __('admin.label.menu.dashboard.icon') }}"></i></div>
                    <span class="text-[15px]">{{ __('admin.label.menu.dashboard.text') }}</span>
                </div>
            </a>
        </li>

        <li class="{{ request()->is('admin/categories*') ? 'before:bg-[#fe9e00] bg-[#5d78ab]' : '' }} hover:bg-[#5d78ab] relative before:content-[''] before:w-[2px] before:h-full before:absolute text-white mb-[1px]">
            <a href="#">
                <div class="flex items-center py-2 px-4 gap-3">
                    <div class="icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <span class="text-[15px]">{{ __('admin.label.menu.article.text') }}</span>
                </div>
            </a>
        </li>

    </ul>
</aside>
