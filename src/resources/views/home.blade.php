@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

@section('content')
    <div class="pickup">
        <article>
            <img src="img/pickup.png">
            <h2 class="article-ttl">ピックアップ記事1</h2>
            <div class="read-more">
                <a href="#">READ MORE</a>
            </div>
        </article>
        <article>
            <img src="img/pickup2.png">
            <h2 class="article-ttl">ピックアップ記事2</h2>
            <div class="read-more">
                <a href="#">READ MORE</a>
            </div>
        </article>
        <article>
            <img src="img/pickup3.png">
            <h2 class="article-ttl">ピックアップ記事3</h2>
            <div class="read-more">
                <a href="#">READ MORE</a>
            </div>
        </article>
    </div>
    <div class="container">
        <div class="latest-posts">
            <article>
                <h2 class="article-ttl">
                    <a href="#">最新記事1</a>
                </h2>
                <ul class="meta">
                    <li class="date">
                        <a href="#">2025年3月4日</a>
                    </li>
                    <li class="category">
                        <a href="#">カテゴリー名</a>
                    </li>
                </ul>
                <a href="#">
                    <img src="img/latest-posts.png">
                </a>
                <p class="text">ここに記事本文を入れます。</p>
                <div class="read-more">
                    <a href="#">READ MORE</a>
                </div>
            </article>
            <article>
                <h2 class="article-ttl">
                    <a href="#">最新記事2</a>
                </h2>
                <ul class="meta">
                    <li class="date">
                        <a href="#">2025年3月4日</a>
                    </li>
                    <li class="category">
                        <a href="#">カテゴリー名</a>
                    </li>
                </ul>
                <a href="#">
                    <img src="img/latest-posts2.png">
                </a>
                <p class="text">ここに記事本文を入れます。</p>
                <div class="read-more">
                    <a href="#">READ MORE</a>
                </div>
            </article>
            <article>
                <h2 class="article-ttl">
                    <a href="#">最新記事3</a>
                </h2>
                <ul class="meta">
                    <li class="date">
                        <a href="#">2025年3月4日</a>
                    </li>
                    <li class="category">
                        <a href="#">カテゴリー名</a>
                    </li>
                </ul>
                <a href="#">
                    <img src="img/latest-posts3.png">
                </a>
                <p class="text">ここに記事本文を入れます。</p>
                <div class="read-more">
                    <a href="#">READ MORE</a>
                </div>
            </article>
        </div>
        <div class="sidebar">
            <section class="author">
                <img src="img/author.png">
                <h3 class="side-ttl">ブログの著者は私</h3>
                <p class="profile">ここにプロフィールの簡単な説明や画像を入れます。自己紹介や最近の活動内容を載せると良いでしょう。
                </p>
            </section>
            <section class="ranking">
                <h3 class="side-ttl">Ranking</h3>
                <article>
                    <a href="#">
                        <img src="img/ranking.png">
                        <h4 class="article-ttl">ランキング記事1</h4>
                    </a>
                    <a href="#">
                        <img src="img/ranking2.png">
                        <h4 class="article-ttl">ランキング記事2</h4>
                    </a>
                    <a href="#">
                        <img src="img/ranking3.png">
                        <h4 class="article-ttl">ランキング記事3</h4>
                    </a>
                </article>
            </section>
            <div class="archive">
                <h3 class="side-ttl">Archive</h3>
                <ul>
                    <li>
                        <a href="#">XXXX年XX月</a>
                    </li>
                    <li>
                        <a href="#">XXXX年XX月</a>
                    </li>
                    <li>
                        <a href="#">XXXX年XX月</a>
                    </li>
                    <li>
                        <a href="#">XXXX年XX月</a>
                    </li>
                    <li>
                        <a href="#">XXXX年XX月</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection