

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <di>

        </di>
        <form class="row g-3" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="col-md-5">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$user->name) }}">
            </div>
            <div class="col-md-5">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name',$user->last_name) }}">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Categoria</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="proceedings" class="form-label">Expediente</label>
                <input type="text" class="form-control" id="proceedings" name="proceedings" value="{{ old('proceedings',$user->proceedings)  }}">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Sección</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-5">
                <label for="ableness" class="form-label">Habilidades</label>
                <input type="text" class="form-control" id="ableness" name="ableness" placeholder="Apartment, studio, or floor" value="{{ old('ableness',$user->ableness)  }}">
            </div>
            <div class="col-10">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="{{ old('address',$user->address)  }}">
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Centro de trabajo</label>
                <input type="text" class="form-control" id="inputAddress2" name="" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-5">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email',$user->email)  }}">
            </div>
            <div class="col-5">
                <label for="note" class="form-label">Notas</label>
                <input type="text" class="form-control" id="note" name="note" placeholder="Apartment, studio, or floor" value="{{ old('note',$user->note)  }}">
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"   autocomplete="password" autofocus disabled>
                {!! $errors->first('password', '<small>:message</small>') !!}<br>
            </div>

        <!--
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"  name="restablecer" id="restablecer" {{ old('restablecer') ? 'checked' : '' }}> {{ __('Restablecer contraseña') }}
                    <span class="form-check-sign"><span class="check"></span></span>
                </label>
            </div>
            -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </form>

        </tr>

        </tbody>
        </table>
    </x-slot>


</x-app-layout>
