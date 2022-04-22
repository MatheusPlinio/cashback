@extends('layouts.basic')

@section('content-index')
    <header class="header">
        <a href=""><img src=""></a>
        <nav>
            <ul class="menu">
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Todos os Cashback</a></li>
                <li><a href="">Cadastro</a></li>
                <li><a href="">Sair</a></li>
            </ul>
        </nav>
    </header>

    <body>
        <form action={{ route('admin.store_to_add') }} method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $store->id ?? '' }}">
            @csrf

            <nav class="manager">
                <ul>
                    <li><a href="{{ route ('admin.index') }}">Cadastro de Lojas</a></li>

                    <li><a href="{{ route ('admin.cashback') }}">Cadastros de Cashback</a></li>

                    <li><a href="{{ route ('admin.list_cashback') }}">Cashbacks Cadastrados</a></li>

                    <li><a href="{{ route ('admin.list') }}">Lojas Cadastradas</a></li>
                </ul>
            </nav>

            <div class="main-login">

                <div class="right-login">

                    <div class="textfield">
                        <input type="text" name="name" value="{{ $stores->name ?? old('name') }}" placeholder="Loja">
                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                    </div>

                    <div class="textfield">
                        <input type="text" name="link" value="{{ $stores->cashback ?? old('cashback') }}" placeholder="cashback">
                        {{ $errors->has('link') ? $errors->first('cashback') : '' }}
                    </div>

                    <button type="submit" class="btn-login">Cadastrar</button>

                    @if (session('success'))
                        <p class="message">{{ session('success') }}</p>
                    @endif
                </div>
            </div>
            </div>
        </form>
    </body>
@endsection