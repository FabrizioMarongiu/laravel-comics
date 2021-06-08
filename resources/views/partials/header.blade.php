<header>
    <section class="container header-box">
        <a href="{{ route('home') }}">
            <img src=" {{ asset('images/dc-logo.png') }} " alt="">
        </a>
    

        <nav class="main-nav">
            <ul>
                <li>
                    <a href=" {{ route('comics') }} " class="active">Comics</a>
                </li>
            
                <li>
                    <a href=" {{ route('news')}} ">News</a>
                </li>
            
        </nav>
    </section>
</header>