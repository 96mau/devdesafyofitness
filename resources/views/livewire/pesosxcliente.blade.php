<div>

    <x-basetitulocontent>
        <h1 class="text-bold text-primary">Clientes</h1>

        <x-slot name="pageSeeder">
            <li class="breadcrumb-item"><a href="{{ route('clientes') }}">Clientes</a></li>
            <li class="breadcrumb-item active">Pesos y Masas</li>
        </x-slot>
    </x-basetitulocontent>

    <style>
        .accordion .card-header:after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
        }

        .accordion .card-header.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\f067";
        }

        .table td {

            padding: 0.2px;
        }
    </style>

    <div class="container-fluid pl-4">
        <div class="row">
                <div class="card col-md-11 col-md-12">
                    <div class="card-header">
                        Informacion de Cliente
                    </div>
                    <div class="card-body text-danger">
                        <h4><b>NOMBRE: </b> {{ $DatCliente->nombre }} {{ $DatCliente->apellido }} <b>  EMAIL: </b> {{ $DatCliente->email }}</h4>
                        <button type="button" wire:click="clearPesoMasa()"  class="btn btn-info float-right"
                        data-toggle="modal" data-target="#UpdateModal">Nuevo Peso</button>
                    </div>

                </div>
                {{-- <div class="card col-md-12 col-sm-12 p-2">
                    <div class="card-header pb-0">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <a href="#NewPesoMasa" class="VerMas text-center" data-toggle="collapse"><h4 class="SubTitu text-center mb-0 text-bold text-info pb-0 w-100">Registar nuevo
                                    historial de peso  <i class="fas fa-user-clock"></i><i class="fas fa-plus"></i></h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse" id="NewPesoMasa">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_id_PYeard">Año</label>

                                    <select class="form-control" placeholder="Año" id="FP_id_PYeard"
                                        wire:model.lazy="FP_id_PYeard">
                                        <option>Selecciona una opciòn</option>
                                        @foreach ($PYear as $year)
                                            <option value="{{ $year->id }}">{{ $year->Year }}</option>
                                        @endforeach
                                    </select>
                                    @error('FP_id_PYeard')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_mes">Mes</label>
                                    <select class="form-control" placeholder="Mes" id="FP_mes"
                                        wire:model.lazy="FP_mes">
                                        <option>Selecciona una opciòn</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>

                                    @error('FP_mes')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_peso">Peso</label>
                                    <input type="number" class="form-control" id="FP_peso" wire:model.lazy="FP_peso"
                                        placeholder="00.00">
                                    @error('FP_peso')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_por_grasa">% Grasa</label>
                                    <input type="number" class="form-control" id="FP_por_grasa"
                                        wire:model.lazy="FP_por_grasa" placeholder="%00.00">
                                    @error('FP_por_grasa')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_lbs_grasa">Libs Grasa</label>
                                    <input type="number" class="form-control" id="FP_lbs_grasa"
                                        wire:model.lazy="FP_lbs_grasa" placeholder="00.00">
                                    @error('FP_lbs_grasa')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_masa_muscular">Masa Muscular</label>
                                    <input type="number" class="form-control" id="FP_masa_muscular"
                                        wire:model.lazy="FP_masa_muscular" placeholder="00.00">
                                    @error('FP_masa_muscular')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 col-md-3  col-sm-12">
                                    <label for="FP_bmi">BMI</label>
                                    <input type="number" class="form-control" id="FP_bmi" wire:model.lazy="FP_bmi"
                                        placeholder="00.00">
                                    @error('FP_bmi')
                                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3  col-sm-12">
                                    <br>
                                    <button type="button" wire:click="AddPesoMasa()"
                                        class="btn btn-info float-right">Guardar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="row col-md-12 col-sm-12 p-2">
                    <div class="card col-md-3  col-sm-12">
                        <div class="card-header pb-0 pt-0">
                            <p class="align-items-center text-center pb-0 pt-0">
                                <a class="text-info p-0" data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <h4 class="text-center text-bold  pb-0 w-100">Nuevo Año <i
                                            class="far fa-calendar-plus"></i></h4>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body form-group">
                                    <input type="number" class="form-control" placeholder="Año"
                                        wire:model.lazy="NewYeard">
                                    <button type="button" class="btn btn-primary mt-1"
                                        wire:click="AddYeard()">Agregar</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover max-h-50">
                                <thead>
                                    <th class="text-center">Año</th>
                                </thead>
                                <tbody>
                                    @foreach ($PYear as $year)
                                        <tr>
                                            <td class="text-center" wire:click='PesoMes({{ $year->id }})'>{{ $year->Year }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card col-md-9  col-sm-12">


                        <div class="card-header pb-0">
                            <h4 class="align-items-center text-center text-bold text-info pb-0 w-100">
                                Historial de peso de: -{{ $yeard_lista }}-
                            </h4>
                        </div>
                        <div class="card-body table-responsive">
                            @if ($PMonts)


                                <table class="table">
                                    <thead>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                        <th>Mes</th>
                                        <th>Peso</th>
                                        <th>% Grasa</th>
                                        <th>Lbs Grasa</th>
                                        <th>Masa Muscular</th>
                                        <th>BMI</th>
                                        <th>Registrado</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($PMonts as $Mon)
                                            @php
                                                $elmes = '';
                                                if ($Mon->mes == 1) {
                                                    $elmes = 'Enero';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Febrero';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Marzo';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Abril';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Mayo';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Junio';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Julio';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Agosto';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Septiembre';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Octubre';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Noviembre';
                                                } elseif ($Mon->mes == 1) {
                                                    $elmes = 'Diciembre';
                                                }
                                            @endphp
                                            <tr>
                                                <td wire:click="EditPesoMes({{ $Mon->id }})"  data-toggle="modal" data-target="#UpdateModal"><i
                                                        class="fas fa-edit"></i></td>
                                                <td wire:click="deletePesoMasa_Id({{ $Mon->id }})"
                                                    data-toggle="modal" data-target="#exampleModal"><i
                                                        class="fas fa-trash-alt"></i></td>
                                                <td>{{ $elmes }}</td>
                                                <td>{{ $Mon->peso }}</td>
                                                <td>{{ $Mon->por_grasa }}</td>
                                                <td>{{ $Mon->lbs_grasa }}</td>
                                                <td>{{ $Mon->masa_muscular }}</td>
                                                <td>{{ $Mon->bmi }}</td>
                                                <td class="">{{ date('d-m-Y', strtotime($Mon->created_at)) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="button" wire:click.prevent="DeleteRecordPesoMasa()"
                        class="btn btn-danger close-modal" data-dismiss="modal">Si, Elimiar</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="UpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="UpdateModalLabel">Modificar CLiente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body row">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_id_PYeard">Año</label>

                            <select class="form-control" placeholder="Año" id="FP_id_PYeard"
                                wire:model.lazy="FP_id_PYeard">
                                <option>Selecciona una opciòn</option>
                                @foreach ($PYear as $year)
                                    <option value="{{ $year->id }}">{{ $year->Year }}</option>
                                @endforeach
                            </select>
                            @error('FP_id_PYeard')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_mes">Mes</label>
                            <select class="form-control" placeholder="Mes" id="FP_mes"
                                wire:model.lazy="FP_mes">
                                <option>Selecciona una opciòn</option>
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="4">Abril</option>
                                <option value="5">Mayo</option>
                                <option value="6">Junio</option>
                                <option value="7">Julio</option>
                                <option value="8">Agosto</option>
                                <option value="9">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>

                            @error('FP_mes')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_peso">Peso</label>
                            <input type="number" class="form-control" id="FP_peso" wire:model.lazy="FP_peso"
                                placeholder="00.00">
                            @error('FP_peso')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_por_grasa">% Grasa</label>
                            <input type="number" class="form-control" id="FP_por_grasa"
                                wire:model.lazy="FP_por_grasa" placeholder="%00.00">
                            @error('FP_por_grasa')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_lbs_grasa">Libs Grasa</label>
                            <input type="number" class="form-control" id="FP_lbs_grasa"
                                wire:model.lazy="FP_lbs_grasa" placeholder="00.00">
                            @error('FP_lbs_grasa')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_masa_muscular">Masa Muscular</label>
                            <input type="number" class="form-control" id="FP_masa_muscular"
                                wire:model.lazy="FP_masa_muscular" placeholder="00.00">
                            @error('FP_masa_muscular')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-3 col-md-3  col-sm-12">
                            <label for="FP_bmi">BMI</label>
                            <input type="number" class="form-control" id="FP_bmi" wire:model.lazy="FP_bmi"
                                placeholder="00.00">
                            @error('FP_bmi')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3  col-sm-12">
                            {{-- <button type="button" wire:click="AddPesoMasa()"
                                class="btn btn-info float-right">Guardar</button> --}}
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" wire:click="clearPesoMasa()" class="btn btn-warning close-btn float-left">Limpiar</button>
                <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click="AddPesoMasa()" class="btn btn-success float-right">Guardar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->

    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('cerrarModal', function () {
                $('#UpdateModal').modal('hide'); // Cierra el modal usando jQuery
                // $('#exampleModal').modal('hide');
            });
        });
    </script>

</div>
