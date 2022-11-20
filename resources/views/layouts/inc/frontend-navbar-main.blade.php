<header class="header-bar d-flex justify-content-between">
    <div class="d-flex p-4">
        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="bg-white rounded-circle" width="130px" />
        <h1 class="d-flex justify-content-center align-items-center mx-5" style="font-size: 4rem">
            YUZU DIGITAL SOLUTION
        </h1>
    </div>
    <div class="d-flex justify-content-center align-items-center p-4">
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <img src="{{ asset('assets/images/user.png') }}" alt="user" />
        </a>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</header>
