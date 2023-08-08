<div>

    <x-basetitulocontent>
        <h1 class="text-bold text-primary">Clientes</h1>

        <x-slot name="pageSeeder">
            <li class="breadcrumb-item"><a href="{{ route('clientes') }}">Clientes</a></li>
            <li class="breadcrumb-item active">Pesos y Masas</li>
        </x-slot>
    </x-basetitulocontent>

    <div class="container-fluid pl-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Informacion de Cliente
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-5 p-2">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="align-items-center text-center text-bold text-info pb-0 w-100">
                            Registar nuevo historial de peso
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="text" placeholder="Año">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 p-2">
                <div class="card">
                    <div class="card-header pb-0">
                        <p class="align-items-center text-center pb-0">
                            <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Nuevo Año <i class="far fa-calendar-plus"></i>
                            </a>
                          </p>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <input type="number" placeholder="Año" wire:model.lazy="NewYeard">
                                <button type="button" class="btn btn-primary mt-1" wire:click="AddYeard()">Agregar</button>
                            </div>
                          </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>Año</th>
                            </thead>
                            <tbody>
                                @foreach ($PYear as $year)
                                <tr>
                                    <td wire:click='PesoMes({{ $year->id }})'>{{ $year->Year }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5 p-2">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="align-items-center text-center text-bold text-info pb-0 w-100">
                            Historial de peso
                        </h4>
                    </div>
                    <div class="card-body">
                        @if ($PMonts)


                        <table class="table table-bordered table-hover">
                            <thead>
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
                                <tr>
                                    <td>{{ $Mon->mes }}</td>
                                    <td>{{ $Mon->peso }}</td>
                                    <td>{{ $Mon->por_grasa }}</td>
                                    <td>{{ $Mon->lbs_grasa }}</td>
                                    <td>{{ $Mon->masa_muscular }}</td>
                                    <td>{{ $Mon->bmi }}</td>
                                    <td>{{ $Mon->created_at }}</td>
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
</div>
