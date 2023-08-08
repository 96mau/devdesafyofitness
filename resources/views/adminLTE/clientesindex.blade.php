<x-baseAdminLTE>
    <x-basetitulocontent>
        <h1 class="text-bold text-primary">Clientes</h1>
        <x-slot name="pageSeeder">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Clientes</li>
        </x-slot>
    </x-basetitulocontent>

    <div class="container-fluid pl-4">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link text-info text-bold" id="nav-home-tab" data-toggle="tab"
                    data-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                    aria-selected="true">Crear</button>
                <button class="nav-link text-info text-bold active" id="nav-profile-tab" data-toggle="tab"
                    data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                    aria-selected="false">Listar</button>
                <button class="nav-link text-info text-bold" id="nav-contact-tab" data-toggle="tab"
                    data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                    aria-selected="false">Pagos</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane pt-3 fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <h3>Crear Nuevo Cliente</h3>
                <div class="card">
                    <div class="card-body">
                        @livewire('show-clientes')
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                {{-- <h3>Crear Nuevo Cliente</h3> --}}
                @livewire('search-clientes')
            </div>
            <div class="tab-pane pt-3 fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                ...Contact
            </div>
        </div>
    </div>



</x-baseAdminLTE>
