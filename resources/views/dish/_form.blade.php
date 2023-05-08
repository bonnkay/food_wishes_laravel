@csrf
<div class="row">
    <div class="col">

        <!-- restaurant -->
        <div class="form-group">
            <label class="form-label" for="restaurant_id">Restaurante:</label>
            <select class="form-control" aria-label="Disabled select example" id="restaurant_id" name="restaurant_id">
                <option selected>Seleccione un Restaurante</option>
                @isset($restaurants)
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}"
                            @isset($dish)@selected(old('restaurant_id', $dish->restaurant->id) == $restaurant->id)@endisset>
                            {{ $restaurant->name }}</option>
                    @endforeach
                @endisset
            </select>
        </div>

        <!-- dish name -->
        <div class="form-group">
            <label class="form-label" for="name">Nombre del platillo:</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre del Platillo"
                value="{{ old('name', $dish) }}" autocomplete="off">
            @error('name')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- dish price -->
        <div class="form-group">
            <label class="form-label" for="name">Precio del platillo:</label>
            <input class="form-control" type="integer" id="price" name="price" placeholder="Precio del Platillo"
                value="{{ old('price', $dish) }}" autocomplete="off">
            @error('price')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- dish category -->
        <div class="form-group">
            <label class="form-label" for="category">Categoria:</label>
            <select class="form-control" aria-label="Default select example" id="category" name="category">
                <option value="" selected>Seleccione una Categoria</option>
                <option value="Parrilla" @selected(old('category', $dish) == 'Parrilla')>Parrilla
                </option>
                <option value="Tipico Colombiano" @selected(old('category', $dish) == 'Tipico Colombiano')>Tipico Colombiano
                </option>
                <option value="Comida Rapida" @selected(old('category', $dish) == 'Comida Rapida')>
                    Comida Rapida</option>
                <option value="Mariscos y Pescados" @selected(old('category', $dish) == 'Mariscos y Pescados')>Mariscos y Pescados
                </option>
                <option value="Ensaladas" @selected(old('category', $dish) == 'Ensaladas')>
                    Ensaladas
                </option>
                <option value="Oriental" @selected(old('category', $dish) == 'Oriental')>Oriental
                </option>
            </select>
            @error('category')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- dish description -->
        <div class="form-group">
            <label class="form-label" for="description">Descripción del Platillo:</label>
            <br>
            <textarea class="textarea" name="description" id="description" cols="75" rows="5" placeholder="Escribe aquí la descripción">{{ old('description', $dish) }}</textarea>
            @error('description')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- dish image -->
        <div class="col">
            <div class="form-group">
                <label class="form-label" for="customFile">Imagen del platillo:</label>
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="customFile"
                        placeholder="Selecciona una imagen" value="{{ old('image', $dish) }}" accept="image/*">
                    <label class="custom-file-label" for="customFile">Seleccionar</label>
                </div>
                @error('image')
                    <div class="text-xs text-red">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-center">
                <img id="preview-image-before-upload"
                    src="@isset($dish) {{ asset('storage/dishes/' . $dish->image) }} @else {{ asset('img/upload-image.png') }} @endisset"
                    alt="preview image" style="width: 250px; height: 330px;">
            </div>
        </div>

        <!-- dish category -->
        <div class="form-group">
            <label class="form-label" for="state">Estado:</label>
            <select class="form-control" aria-label="Default select example" id="state" name="state">
                <option value="" selected>Seleccione una Categoria</option>
                <option value="Disponible" @selected(old('state', $dish) == 'Disponible')>Disponible
                </option>
                <option value="No Disponible" @selected(old('state', $dish) == 'No Disponible')>No Disponible
                </option>
                <option value="Desactivado" @selected(old('state', $dish) == 'Desactivado')>Desactivado
                </option>
            </select>
            @error('state')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>
    
    </div>
    <br />
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">
            @isset($dish)
                Editar
            @else
                Registrar
            @endisset
        </button>
    </div>
    <br />
