<div class="flex">
    @session('auth')
        <div class="card d-flex flex-row">
            <div class="card-header text-center">
                {{ session()->get('user-name') }}
            </div>
            <form method="POST" action="login/logout">
                @csrf
                <button class="btn btn-warning block">Выйти</button>
            </form>
        </div>
    @endsession
    
    
    @if(!($page_is == 'Login page') && !($page_is == 'Admin page') && session()->get('auth') == false)
        <a href="login" class="btn btn-primary">Войти</a>
    @endif

    @if(!($page_is == 'Admin page') && session()->get('auth') == false)
        <a href="register" class="btn btn-dark">Зарегистрироваться</a>
    @endif
</div>