
<h2><p>Детская Художественная Школа</p>
    <p>станица Ленинградская</p>
</h2>
        <div class="panel-body">
            <div class="back"><span class="glyphicon glyphicon-arrow-left"></span></div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                <div class="panel-heading">Авторизация</div>
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" placeholder="E-Mail" class="form-control" name="email" value="{{ old('email') }}"required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" placeholder="Пароль" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="bottompanel">
                    <div class="form-group" >
                        <div class="col-md-6">
                            <a class="btn btn-link" href="/register">
                                Создать аккаунт
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Восстановление пароля
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Войти
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

