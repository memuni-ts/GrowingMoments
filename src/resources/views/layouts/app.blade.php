<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowingMoments</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <h1 class="header-ttl">
            <a href="#">GrowingMoments</a>
        </h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/categories') }}">CATEGORY</a></li>
                <li><a href="{{ url('/archives') }}">ARCHIVE</a></li>
                <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                <li>
                    <form action="{{ url('/search') }}" method="GET">
                        <input type="text" name="query" placeholder="SEARCH">
                        <button type="submit">検索</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
