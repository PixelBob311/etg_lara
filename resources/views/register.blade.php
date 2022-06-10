<form action="{{route('register')}}" method="POST">
    @csrf
    <label for="">Логин</label>
    <input name="email"  type="text">
    <label for="">Пароль</label>
    <input name="password" type="password">
    <button type="submit">Подтвердить</button>
</form>
