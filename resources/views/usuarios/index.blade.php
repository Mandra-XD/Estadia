

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
<di>

</di>
        <table class="table">
            <button type="button" class="btn btn-outline-primary"><a href="{{ route('user.create') }}">Agregar</a></button>
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Expediente</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>

                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->proceedings}}</td>

                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">

                        <button  type="button" class="btn btn-outline-primary"><a href="{{ route('user.edit',$user->id) }}">Editar</a></button>
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-outline-primary">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </x-slot>

</x-app-layout>
