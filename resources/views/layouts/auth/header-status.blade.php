<div class="flex">
    @session('auth')
        <div class="card">
            <div class="card-header text-center">
                Юрий Романов
            </div>
            <form method="POST" action="login/logout">
                @csrf
                <button class="btn btn-warning block">Выйти</button>
            </form>
        </div>
    @endsession
    
    
    @if(!($page_is == 'Login page') && !($page_is == 'Admin page'))
        <a href="login" class="btn btn-primary">Войти</a>
    @endif

    @if(!($page_is == 'Admin page'))
        <a href="register" class="btn btn-dark">Зарегистрироваться</a>
    @endif
</div>