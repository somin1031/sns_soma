<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="{{ asset('images') }}" sizes="16x16" type="image/png" />
    <link rel="icon" href="{{ asset('images') }}" sizes="32x32" type="image/png" />
    <link rel="icon" href="{{ asset('images') }}" sizes="48x48" type="image/png" />
    <link rel="icon" href="{{ asset('images') }}" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
    <header>
        <div id = "head">
        <h1><a href="{{URL::to('/top')}}"><img src="images/atlas.png"></a></h1>
            <div id="header-menu">
                <div id="">
                    <p>{{ Auth::user()->username }}さん<img src="images/arrow.png"></p>
                <div>

                <div class="menu-btn">
                    <div class="button">
                        <span class="inn"></span>
                    </div>

                    <nav class="menu">
                        <div class="menu-wrapper">
                            <ul>
                                <li class="menu-item"><a href="/top">ホーム</a></li>
                                <li class="menu-item"><a href="/profile">プロフィール</a></li>
                                <li class="menu-item"><a href="/logout">ログアウト</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>{{ session('username') }}さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="JavaScriptファイルのURL"></script>
    <script src="JavaScriptファイルのURL"></script>
</body>
</html>
