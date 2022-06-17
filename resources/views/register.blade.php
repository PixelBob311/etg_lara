<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--<div class="container">--}}
{{--    <div class="row justify-content-md-center">--}}
{{--        <form action="{{route('register')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <label for="">Логин</label>--}}
{{--            <input name="login" type="text">--}}
{{--            <label for="">Пароль</label>--}}
{{--            <input name="password" type="password">--}}
{{--            <button type="submit" class="btn btn-primary"> Подтвердить</button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--</div>--}}

<div class="container">
    <h5>Регистрация</h5>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
    </form>
</div>



