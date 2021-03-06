<div id="homepage">
    <div id="left">

        @include('partials.category_menu')

        @include('partials.left_specials')

        @include('partials.mailing_list')
    </div>

    <div id="right">
        <div id="{{ lan_is('ar') ? 'headrightaboutus' : 'headright' }}"><span>{{ trans('words.our_products') }}</span></div>
        <div id="productspage">
            @foreach($categories as $category)
            <div class="products11">
                @if($image = $category->getImage('main'))
                <a href="{{ URL::category($category) }}">{{ $image->html(114, 115, true) }}</a>
                @endif
                <a href="{{ URL::category($category) }}"><h4>{{ $category->title }}</h4></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
