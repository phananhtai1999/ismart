<div id="menu-respon">
    <a href="{{ route('user.index') }}" title="" class="logo">VSHOP</a>
    <div id="menu-respon-wp">
        <ul id="main-menu-respon" class="" >
            <li>
                <a href=" {{ route('user.index') }}"
            title>Trang chủ</a>
            </li>
            @foreach ($categoryProductParent as $item)
                <li>
                    <a href="{{ route('user.category', $item->slug) }}" title="">{{ $item->name }}</a>
                    @if ($item->catProductChild->count() > 0)
                        @include('user.components.categoryProductChild', ['categoryProductChild' =>
                        $item->catProductChild])
                    @endif
                </li>
            @endforeach
            <li>
                <a href="{{ route('user.blog') }}" title="">Blog</a>
            </li>
            @foreach ($pages as $item)
                <li>
                    <a href="{{ route('user.page', ['id' => $item->id]) }}"
                        title="{{ $item->title }}">{{ $item->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
