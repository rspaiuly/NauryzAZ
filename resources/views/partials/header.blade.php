<header class="header">
    <div class="container">
        <div class="menu">
            <nav class="navbar">
                <button class="btn">Зарегестрировать чек</button>
                <a href="{{ url('/#rules') }}">Правила</a>
                <a href="{{ url('/#products') }}">Продукты</a>
                <a href="{{ url('/#winners') }}">Победители</a>
                <a href="{{ url('/#faq') }}">FAQ</a>
                <a href="@include('partials.url_for_auth', ['main_url' => route('profile')])">Личный кабинет</a>
                @auth <a href="#">Выход</a> @endauth
            </nav>
            <div class="yalniz">
                <img src="./image/YALNIZ.png" alt="">
            </div>
            <div class="burger" id="burger" type="button">
                <svg width="50" height="50" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.5 5.25H17.5V7H3.5V5.25ZM3.5 9.625H17.5V11.375H3.5V9.625ZM3.5 14H17.5V15.75H3.5V14Z" fill="white"></path>
                </svg>
            </div>
        </div>
    </div>
</header>
