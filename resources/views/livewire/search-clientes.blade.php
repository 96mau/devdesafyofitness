<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card">

        <div class="input-group mb-3">
            <input type="text" class="form-control"  wire:model='search' placeholder="buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-info" wire:click="render()">Actualizar</button>
            </div>
        </div>
        <!-- /.card-header -->
        <style>
            .table td
            {
                padding-top: 3px;
                padding-bottom: 3px;
            }
            .table button
            {
                padding-top: 1px;
                padding-bottom: 1px;
                justify-content: center;
                justify-items: center;
            }
        </style>
        <div class="card-body">
          <table id="TableOrder" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Historial</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Fecha Nacimineto</th>
              <th>Genero</th>
              <th>Activo</th>
              <th>Pago</th>
              <th>Fecha Pago</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($clientes as $cliente)
                <tr class="">
                    <td class="justify-center text-center"><a href="{{ route('mostrarpesos', ['id'=>$cliente->id]) }}" style=" width: 100%;" class="btn btn-outline-primary p-0"><i class="fas fa-angle-double-right" style="font-size: 15px; width: 100%;"></i></a></td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->f_nacimiento}}</td>
                    <td>{{$cliente->genero}}</td>
                    <td>{{$cliente->activo}}</td>
                    <td>{{$cliente->pago}}</td>
                    <td>{{$cliente->f_Pago}}</td>
                    {{-- <td><button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}"><i class="fas fa-edit"></i> Editar</button></td> --}}
                    <td class="justify-center text-center"><button type="button" wire:click="updateId({{ $cliente->id }})" class="btn btn-outline-secondary" data-toggle="modal" data-target="#UpdateModal"><i class="fas fa-trash-alt"></i> Editar</button></td>
                    <td class="justify-center text-center"><button type="button" wire:click="deleteId({{ $cliente->id }})" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i> Eliminar</button></td>
                </tr>
                {{-- editar --}}
                {{-- @include('adminLTE.infocliente') --}}
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot> --}}
          </table>
        </div>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirma eliminar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                   <div class="modal-body">
                        <p>¿Estas seguro de eliminar este registro?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                        <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Si, Elimiar</button>
                    </div>
                </div>
            </div>
        </div>

        <div wire:ignore.self class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="UpdateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateModalLabel">Modificar CLiente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <x-formcliente>
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                        {{-- <button type="button" wire:click.prevent="UpdateRecord()" class="btn btn-danger close-modal" data-dismiss="modal">Si, Elimiar</button> --}}
                        <button type="submit" class="btn btn-primary" >Guardar</button>
                    </x-formcliente>

                </div>
            </div>
        </div>

    </div>

        <script>
            document.addEventListener('livewire:load', function () {
                Livewire.on('cerrarModal', function () {
                    $('#UpdateModal').modal('hide'); // Cierra el modal usando jQuery
                    $('#exampleModal').modal('hide');
                });
            });
        </script>
</div>
