@extends(layouts.basic)

@section('content-index')
<body>
    <div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>
                            Nome
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection