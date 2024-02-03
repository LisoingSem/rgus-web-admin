<div class="search">
    <div class="filter">
        <div class="text">
            <span>@lang('website.work') </span><i class="fa-solid fa-angle-down"></i>
        </div>

        <ul class="list-category">
            <li><a href="#">2019</a></li>
            <li><a href="#">2020</a></li>
            <li><a href="#">2021</a></li>
            <li><a href="#">2022</a></li>
            <li><a href="#">2023</a></li>
            <li><a href="#">2024</a></li>
        </ul>
    </div>
    <form>
        <input type="text" value="{{ __('website.search') }}"
            onfocus="if (this.value==this.defaultValue) this.value = ''"
            onblur="if (this.value=='') this.value = this.defaultValue">
        <button class="icon"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
