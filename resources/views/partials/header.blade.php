@php
    $menu = [
        [
            "link" => "home",
            "text" => "Home"
        ],
        [
            "link" => "films",
            "text" => "Film con la P"
        ]
    ];
@endphp
<header>
    <div class="container">
        <nav>
            <h1>{{ $title }}</h1>
            <ul>
                @foreach ($menu as $item)
                    <li>
                        <a href="{{ route($item["link"]) }}" 
                        class="{{ Route::currentRouteName() == $item['link'] ? 'active' : '' }}">{{ $item['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>