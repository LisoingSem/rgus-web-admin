@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.unit-activity.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto unit-activity-wrapper">
        <h1 class="header-style">{{ __('website.menu.unit-activity.text') }}</h1>
        <div class="grid grid-cols-4 gap-5">
            <form class="col-span-1 filter-option">

                <div class="item-select">
                    <label for="">@lang('website.labels.select-year')</label>
                    <div class="select-wrapper">
                        <select class="year-select" name="years">
                            @foreach ($years as $item)
                            <option value="{{ $item->slug }}" {{ (Request::query('years')==$item->slug) ? 'selected' :
                                '' }}>{{ $item->name->{app()->getLocale()} ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="item-select">
                    <label for="">@lang('website.labels.select-category')</label>
                    <div class="select-wrapper">
                        <select class="category-select" name="category">
                            @foreach ($categories as $item)
                            <option value="{{ $item->slug }}" {{ (Request::query('category')==$item->slug) ? 'selected'
                                : '' }}>{{ $item->name->{app()->getLocale()} ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <a href="#"><button>{{ __('website.btnSearch') }}</button></a>
            </form>

            <div class="col-span-3 content-wrapper">
                <div class="grid grid-cols-3 gap-4" id="includeData">
                    @if(count($articles) > 0)
                    @foreach ($articles as $item)
                    <div class="item">
                        <a href="#">
                            <div class="thumbnail">
                                <img src="{{ asset($item->thumbnail) }}" alt="">
                                <span>
                                    @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                    {{ $category->name->{app()->getLocale()} ?? '' }}
                                    @endif
                                    @endforeach
                                </span>
                            </div>
                        </a>
                        <div class="title">
                            <a href="#">
                                <h3>
                                    {{ $item->title->{app()->getLocale()} ?? '' }}
                                </h3>
                            </a>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span>{{ translateDate($item->date) }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h1>Opps don't have data!!</h1>
                    @endif


                    {{--<div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សិក្ខាសាលា</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>កិច្ចប្រជុំ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ក្រោមជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សិក្ខាសាលា</span>
                        </div>
                        <div class="title">
                            <h3>សេចក្ដីថ្លែងការណ៏របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល
                                សេចក្ដីថ្លែងការណ៏របស់អង្គភាពអ្នកនាំពាក្យរាជរដ្ឋាភិបាល
                                http://127.0.0.1:8000/unit-activity</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                            <span>សន្និសីទថ្នាក់ជាតិ</span>
                        </div>
                        <div class="title">
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum accusamus beatae non
                                nostrum labore a, est suscipit quae autem omnis.</h3>
                            <div class="date">
                                <i class="fa-regular fa-calendar"></i>
                                <span> ថ្ងៃទី 19 ខែ July ឆ្នាំ 2023</span>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>
        </div>
    </section>
</main>

@endsection
