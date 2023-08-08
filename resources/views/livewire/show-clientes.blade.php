<div>

    <form wire:submit.prevent="saveContact">

        <div class="modal-body row">
            <!-- Name -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Nombre:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre" id="Inombre" wire:model.lazy="Inombre">
                    @error('nombre')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror

                </div>
                <!-- /.name -->
            </div>
            <!-- /.form group -->
            <!-- Apellido -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Apellidos:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Apellido"
                        id="apellido" wire:model.lazy="Iapellido">
                    @error('apellido')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.Apellido -->
            </div>
            <!-- /.form group -->
            <!-- phone mask -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Telefono:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"'
                        id="telefono" wire:model.lazy="Itelefono" data-mask>

                    @error('telefono')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <!-- /.form group -->
            <!-- Date dd/mm/yyyy -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Correo Electrónico:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control"
                        placeholder="Enter email" id="email" wire:model.lazy="Iemail">

                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Date mm/dd/yyyy -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Fecha de Nacimineto:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                        data-inputmask-inputformat="mm/dd/yyyy" id="f_nacimiento" wire:model.lazy="If_nacimiento" data-mask>

                    @error('f_nacimiento')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Genero -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Genero:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <select class="form-control" placeholder="Genero" id="genero" wire:model.lazy="Igenero">
                        <option>Selecciona una opciòn</option>
                        <option value="HOMBRE">Hombre</option>
                        <option value="MUJER">Mujer</option>
                    </select>

                    @error('genero')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /.form Genero -->

            <div class="form-group col-md-6 col-sm-12">
                <label>Estatura:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"mask": "99.99"'
                        id="estatura" wire:model.lazy="Iestatura" data-mask>

                    @error('estatura')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.input group -->
            </div>

            <!-- Activo -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Activo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <select class="form-control" placeholder="Activo" id="activo" wire:model.lazy="Iactivo">
                        <option value="">Selecciona una opciòn</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>

                    @error('activo')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /.form Activo -->


            <!-- pago -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Pago:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <select class="form-control" placeholder="Pago" id="pago" wire:model.lazy="Ipago">
                        <option value="">Selecciona una opciòn</option>
                        <option value="ACTUALIZADO">Actualizado</option>
                        <option value="VENCIDO">Vencido</option>
                    </select>

                    @error('pago')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /.form pago -->


            <!-- Date mm/dd/yyyy -->
            <div class="form-group col-md-6 col-sm-12">
                <label>Fecha de Pago:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                        data-inputmask-inputformat="mm/dd/yyyy" id="f_pago" wire:model.lazy="If_pago" data-mask>

                    @error('f_pago')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="clearitems()">Limpiar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
