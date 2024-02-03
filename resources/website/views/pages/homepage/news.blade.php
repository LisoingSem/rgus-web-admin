<div class="grid grid-cols-1 lg:grid-cols-2 wrapper">
        <div class="press-breifing">
                <div class="header-wrapper">
                        <a href="{{ route(config('dummy.menu.press-breifing.slug')) }}">
                                <h1 @class(['font-km' => !!$isLocaleKm])>{{ __('website.menu.press-breifing-highlight.text') }}
                                </h1>
                        </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 xs:gap-0 sm:gap-3 lg:gap-0 lg:grid-cols-1">
                        @foreach ($press_breifing as $item)
                                <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1 lg:grid-cols-7 news">
                                        <div class="xs:col-span-2 lg:col-span-3">
                                                <div class="thumbnail">
                                                        <a href="{{ route(config('dummy.menu.details.slug'), ['press-breifing', $item->id]) }}"><img src="{{ asset($item->images) }}"
                                                                        alt=""
                                                                        oncontextmenu="return false;"></a>
                                                        <div class="date">
                                                                <div class="date-wrapper">
                                                                        <strong>{{ translateDayNumber($item->date) }}</strong>
                                                                        <span>{{ translateMonthYear($item->date) }}</span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                                <a href="{{ route(config('dummy.menu.details.slug'), ['press-breifing', $item->id]) }}">
                                                        <h2> {{ $item->title->{app()->getLocale()} ?? '' }}</h2>
                                                </a>

                                                <a href="#">
                                                        <div class="read-more">@lang('website.read-more')</div>
                                                </a>
                                        </div>
                                </div>
                        @endforeach

                        {{-- <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1  lg:grid-cols-7 news">
                                <div class="xs:col-span-2 lg:col-span-3">
                                        <div class="thumbnail">
                                                <a href="#"><img src="{{ asset('assets/images/news/02.jpeg') }}"
                                                                alt="" oncontextmenu="return false;"></a>
                                                <div class="date">
                                                        <div class="date-wrapper">
                                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                        <a href="#">
                                                <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                        និងសាធារណមតិប្រកាសថា
                                                        ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                        Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                        </a>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        </div>

                        <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1  lg:grid-cols-7 news">
                                <div class="xs:col-span-2 lg:col-span-3">
                                        <div class="thumbnail">
                                                <a href="#"><img src="{{ asset('assets/images/news/03.jpeg') }}"
                                                                alt="" oncontextmenu="return false;"></a>
                                                <div class="date">
                                                        <div class="date-wrapper">
                                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                        <a href="#">
                                                <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                        និងសាធារណមតិប្រកាសថា
                                                        ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                        Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                        </a>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        </div>

                        <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1  lg:grid-cols-7 news">
                                <div class="xs:col-span-2 lg:col-span-3">
                                        <div class="thumbnail">
                                                <a href="#"><img src="{{ asset('assets/images/news/04.jpeg') }}"
                                                                alt="" oncontextmenu="return false;"></a>
                                                <div class="date">
                                                        <div class="date-wrapper">
                                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                        <a href="#">
                                                <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                        និងសាធារណមតិប្រកាសថា
                                                        ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                        Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                        </a>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        </div>

                        <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1  lg:grid-cols-7 news">
                                <div class="xs:col-span-2 lg:col-span-3">
                                        <div class="thumbnail">
                                                <a href="#"><img src="{{ asset('assets/images/news/04.jpeg') }}"
                                                                alt="" oncontextmenu="return false;"></a>
                                                <div class="date">
                                                        <div class="date-wrapper">
                                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                        <a href="#">
                                                <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                        និងសាធារណមតិប្រកាសថា
                                                        ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                        Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                        </a>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        </div>

                        <div class="grid grid-cols-1 xs:grid-cols-5 sm:grid-cols-1  lg:grid-cols-7 news">
                                <div class="xs:col-span-2 lg:col-span-3">
                                        <div class="thumbnail">
                                                <a href="#"><img src="{{ asset('assets/images/news/06.jpeg') }}"
                                                                alt="" oncontextmenu="return false;"></a>
                                                <div class="date">
                                                        <div class="date-wrapper">
                                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="xs:col-span-3 sm:col-span-2 lg:col-span-4">
                                        <a href="#">
                                                <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                        និងសាធារណមតិប្រកាសថា
                                                        ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                        Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                        </a>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        </div> --}}

                </div>

                <div class="pagination">
                        <ul>
                                <li><a href="#"><i class="fa-solid fa-angles-left"></i>
                                                <span>@lang('website.paginations.privious')</span></a></li>
                                <li class="active"><a href="#">{{ translateNumber(1) }}</a></li>
                                <li><a href="#">{{ translateNumber(2) }}</a></li>
                                <li><a href="#">{{ translateNumber(3) }}</a></li>
                                <li><a href="#">{{ translateNumber(4) }}</a></li>
                                <li><a href="#"><span>@lang('website.paginations.next')</span> <i
                                                        class="fa-solid fa-angles-right"></i></a>
                                </li>
                        </ul>
                </div>
        </div>

        <div class="press-release">
                <div class="header-wrapper">
                        <a href="#">
                                <h1 @class(['font-km' => !!$isLocaleKm])>{{ __('website.menu.press-release-highlight.text') }}
                                </h1>
                        </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 xs:gap-0 sm:gap-3 lg:gap-0 lg:grid-cols-1">

                        @foreach ($press_release as $item)
                                <div class="news">
                                        <div class="header">
                                                <div class="date-wrapper">
                                                        <strong>{{ translateDayNumber($item->date) }}</strong>
                                                        <span>{{ translateMonthYear($item->date) }}</span>
                                                </div>
                                                <div class="title">
                                                        <a href="{{ route(config('dummy.menu.details.slug'), ['press-release', $item->id]) }}">
                                                                <h2>
                                                                    {{ $item->title->{app()->getLocale()} ?? '' }}
                                                                </h2>
                                                        </a>
                                                        <div class="options">
                                                                <a href="#"><span>@lang('website.articles-by') :
                                                                                {{ $item->article_by }}</span></a>
                                                                <a href="#"><span>{{ translateNumber($item->comments) }}
                                                                                @lang('website.comment')</span></a>
                                                        </div>
                                                </div>
                                        </div>

                                        <p class="description">
                                            {{ $item->description->{app()->getLocale()} ?? '' }}
                                        </p>

                                        <a href="#">
                                                <div class="read-more">@lang('website.read-more')</div>
                                        </a>
                                </div>
                        @endforeach

                        {{-- <div class="news">
                                <div class="header">
                                        <div class="date-wrapper">
                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                        </div>
                                        <div class="title">
                                                <a href="#">
                                                        <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                                និងសាធារណមតិប្រកាសថា
                                                                ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                                Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                                </a>
                                                <div class="options">
                                                        <a href="#"><span>@lang('website.articles-by') :
                                                                        Admin</span></a>
                                                        <a href="#"><span>@lang('website.number.10')
                                                                        @lang('website.comment')</span></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="description">
                                        ទិន្នន័យ គឺសំខាន់ណាស់ ព្រោះជាផែនទី
                                        និងត្រីយ៍វិស័យសម្រាប់យើងទាំងក្របខណ្ឌរៀបចំគោលនយោបាយ
                                        និងសេដ្ឋកិច្ច"
                                        ដូចនេះជំរឿនសេដ្ឋកិច្ច គឺដើម្បីចងក្រងស្ថិតិមូលដ្ឋានគ្រឹះស្តីពីអង្គភាពសេដ្ឋកិច្ច
                                        និងបង្កើតបញ្ជីមេនៃអង្គភាព
                                </div>

                                <a href="#">
                                        <div class="read-more">@lang('website.read-more')</div>
                                </a>
                        </div>

                        <div class="news">
                                <div class="header">
                                        <div class="date-wrapper">
                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                        </div>
                                        <div class="title">
                                                <a href="#">
                                                        <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                                និងសាធារណមតិប្រកាសថា
                                                                ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                                Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                                </a>
                                                <div class="options">
                                                        <a href="#"><span>@lang('website.articles-by') :
                                                                        Admin</span></a>
                                                        <a href="#"><span>@lang('website.number.10')
                                                                        @lang('website.comment')</span></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="description">
                                        ទិន្នន័យ គឺសំខាន់ណាស់ ព្រោះជាផែនទី
                                        និងត្រីយ៍វិស័យសម្រាប់យើងទាំងក្របខណ្ឌរៀបចំគោលនយោបាយ
                                        និងសេដ្ឋកិច្ច"
                                        ដូចនេះជំរឿនសេដ្ឋកិច្ច គឺដើម្បីចងក្រងស្ថិតិមូលដ្ឋានគ្រឹះស្តីពីអង្គភាពសេដ្ឋកិច្ច
                                        និងបង្កើតបញ្ជីមេនៃអង្គភាព
                                </div>

                                <a href="#">
                                        <div class="read-more">@lang('website.read-more')</div>
                                </a>
                        </div>

                        <div class="news">
                                <div class="header">
                                        <div class="date-wrapper">
                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                        </div>
                                        <div class="title">
                                                <a href="#">
                                                        <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                                និងសាធារណមតិប្រកាសថា
                                                                ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                                Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                                </a>
                                                <div class="options">
                                                        <a href="#"><span>@lang('website.articles-by') :
                                                                        Admin</span></a>
                                                        <a href="#"><span>@lang('website.number.10')
                                                                        @lang('website.comment')</span></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="description">
                                        ទិន្នន័យ គឺសំខាន់ណាស់ ព្រោះជាផែនទី
                                        និងត្រីយ៍វិស័យសម្រាប់យើងទាំងក្របខណ្ឌរៀបចំគោលនយោបាយ
                                        និងសេដ្ឋកិច្ច"
                                        ដូចនេះជំរឿនសេដ្ឋកិច្ច គឺដើម្បីចងក្រងស្ថិតិមូលដ្ឋានគ្រឹះស្តីពីអង្គភាពសេដ្ឋកិច្ច
                                        និងបង្កើតបញ្ជីមេនៃអង្គភាព
                                </div>

                                <a href="#">
                                        <div class="read-more">@lang('website.read-more')</div>
                                </a>
                        </div>

                        <div class="news">
                                <div class="header">
                                        <div class="date-wrapper">
                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                        </div>
                                        <div class="title">
                                                <a href="#">
                                                        <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                                និងសាធារណមតិប្រកាសថា
                                                                ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                                Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                                </a>
                                                <div class="options">
                                                        <a href="#"><span>@lang('website.articles-by') :
                                                                        Admin</span></a>
                                                        <a href="#"><span>@lang('website.number.10')
                                                                        @lang('website.comment')</span></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="description">
                                        ទិន្នន័យ គឺសំខាន់ណាស់ ព្រោះជាផែនទី
                                        និងត្រីយ៍វិស័យសម្រាប់យើងទាំងក្របខណ្ឌរៀបចំគោលនយោបាយ
                                        និងសេដ្ឋកិច្ច"
                                        ដូចនេះជំរឿនសេដ្ឋកិច្ច គឺដើម្បីចងក្រងស្ថិតិមូលដ្ឋានគ្រឹះស្តីពីអង្គភាពសេដ្ឋកិច្ច
                                        និងបង្កើតបញ្ជីមេនៃអង្គភាព
                                </div>

                                <a href="#">
                                        <div class="read-more">@lang('website.read-more')</div>
                                </a>
                        </div>

                        <div class="news">
                                <div class="header">
                                        <div class="date-wrapper">
                                                <strong>{{ translateDayNumber($currentDate) }}</strong>
                                                <span>{{ translateMonthYear($currentDate) }}</span>
                                        </div>
                                        <div class="title">
                                                <a href="#">
                                                        <h2>លេខាធិការដ្ឋាននៃគណៈកម្មាធិការជាតិសម្របសម្រួលកិច្ចការព័ត៌មាន
                                                                និងសាធារណមតិប្រកាសថា
                                                                ព័ត៌មានដែលបង្ហោះដោយទំព័រហ្វេសប៊ុក The
                                                                Cambodia Daily Khmer នេះ គឺជាព័ត៌មានក្លែងក្លាយ</h2>
                                                </a>
                                                <div class="options">
                                                        <a href="#"><span>@lang('website.articles-by') :
                                                                        Admin</span></a>
                                                        <a href="#"><span>@lang('website.number.10')
                                                                        @lang('website.comment')</span></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="description">
                                        ទិន្នន័យ គឺសំខាន់ណាស់ ព្រោះជាផែនទី
                                        និងត្រីយ៍វិស័យសម្រាប់យើងទាំងក្របខណ្ឌរៀបចំគោលនយោបាយ
                                        និងសេដ្ឋកិច្ច"
                                        ដូចនេះជំរឿនសេដ្ឋកិច្ច គឺដើម្បីចងក្រងស្ថិតិមូលដ្ឋានគ្រឹះស្តីពីអង្គភាពសេដ្ឋកិច្ច
                                        និងបង្កើតបញ្ជីមេនៃអង្គភាព
                                </div>

                                <a href="#">
                                        <div class="read-more">@lang('website.read-more')</div>
                                </a>
                        </div> --}}

                </div>

                <div class="pagination">
                        <ul>
                                <li><a href="#"><i class="fa-solid fa-angles-left"></i>
                                                <span>@lang('website.paginations.privious')</span></a></li>
                                <li class="active"><a href="#">{{ translateNumber(1) }}</a></li>
                                <li><a href="#">{{ translateNumber(2) }}</a></li>
                                <li><a href="#">{{ translateNumber(3) }}</a></li>
                                <li><a href="#">{{ translateNumber(4) }}</a></li>
                                <li><a href="#"><span>@lang('website.paginations.next')</span> <i
                                                        class="fa-solid fa-angles-right"></i></a>
                                </li>
                        </ul>
                </div>
        </div>
</div>
