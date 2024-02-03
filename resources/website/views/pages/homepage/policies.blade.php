<div class="grid md:grid-cols-7 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-5">
        <div class="category-wrapper md:col-span-2 lg:col-span-1">
                <h2 @class(['font-km' => !!$isLocaleKm, 'policy-text'])><span>@lang('website.policies.text')</span> <i class="fa-solid fa-angle-down"></i>
                </h2>

                <ul class="policy-category">
                        <li>
                                <a href="#" data-image-src="assets/images/policies/01.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.1')</span>
                                </a>
                        </li>
                        <li>
                                <a href="#" data-image-src="assets/images/slide/mission.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.2')</span>
                                </a>
                        </li>
                        <li>
                                <a href="#" data-image-src="assets/images/slide/festival.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.3')</span>
                                </a>
                        </li>
                        <li>
                                <a href="#" data-image-src="assets/images/slide/mission.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.4')</span>
                                </a>
                        </li>
                        <li>
                                <a href="#" data-image-src="assets/images/policies/01.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.5')</span>
                                </a>
                        </li>
                        <li>
                                <a href="#" data-image-src="assets/images/slide/festival.jpg">
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>@lang('website.policies.list.6')</span>
                                </a>
                        </li>
                </ul>
        </div>

        <div class="md:col-span-5 lg:col-span-3 content-wrapper">
                <img id="policy-image" src="{{ asset('assets/images/policies/01.jpg') }}" alt=""
                        oncontextmenu="return false;">
        </div>
</div>

<script type="module">
        $(document).ready(function() {
                $(window).resize(function() {
                        var windowWidth = $(window).width();
                        if (windowWidth >= 746) {
                                $('.policy-category').css('display', 'block');
                        } else {
                                $('.policy-category').css('display', 'none');
                        }
                });

                $('.policy-text').click(function() {
                        var windowWidth = $(window).width();
                        if (windowWidth <= 768) {
                                $('.policy-category').slideToggle();
                                $('.policy-text i').toggleClass('rotate rotate-up');
                        }
                });
        });

        $(document).ready(function() {
                var activeIndex = localStorage.getItem('activePolicyIndex');
                var $policyItems = $('.policy-category li');

                if (activeIndex !== null) {
                        $policyItems.removeClass('active');
                        $policyItems.eq(activeIndex).addClass('active');

                        var imageSrc = $policyItems.eq(activeIndex).find('a').data('image-src');
                        $('#policy-image').attr('src', imageSrc);
                } else {
                        $policyItems.first().addClass('active');
                }

                $('.policy-category a').click(function(event) {
                        event.preventDefault();

                        var imageSrc = $(this).data('image-src');
                        $('#policy-image').attr('src', imageSrc);

                        $policyItems.removeClass('active');

                        $(this).closest('li').addClass('active');

                        var activeIndex = $policyItems.index($(this).closest('li'));
                        localStorage.setItem('activePolicyIndex', activeIndex);
                });
        });
</script>
