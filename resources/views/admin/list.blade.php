@extends('layouts.basic')

@section('content-index')
<header class="header">
    <a href="{{ route('home.index') }}"><img src=""></a>
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
    <form action={{ route('list_store.index') }} method="post" enctype="multipart/form-data">
        @csrf

        <nav class="manager">
            <ul>
                <li><a href="{{ route ('store.index') }}">Cadastro de Lojas</a></li>

                <li><a href="{{ route ('cashback.index') }}">Cadastros de Cashback</a></li>

                <li><a href="{{ route ('list_store.index') }}">Lojas Cadastradas</a></li>

                <li><a href="{{ route ('list_cashback.index') }}">Cashbacks Cadastrados</a></li>
            </ul>
        </nav>

        <div class="main-login">

            <div class="right-login">

                <div class="textfield">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Loja">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>

                <button type="submit" class="btn-list">pesquisar</button>

                <div class="list">
                    <table>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->link }}</td>
                                <td>Excluir</td>
                                <td><a href="{{ route('store.edit', $store->id) }}">Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        </div>
    </form>
</body>
@endsection