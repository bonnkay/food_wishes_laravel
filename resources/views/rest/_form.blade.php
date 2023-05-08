@csrf
<div class="row">
    <div class="col">

        <!-- restaurant -->
        <!-- name -->
        <div class="form-group">
            <label class="form-label" for="name">Nombre del Restaurante:</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre del Restaurante"
                value="{{ old('name', $restaurant) }}" autocomplete="off">
            @error('name')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- email -->
        <div class="form-group">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" name="email" type="email" id="email" placeholder="Email"
                value="{{ old('email', $restaurant) }}" autocomplete="off">
            @error('price')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- adress -->
        <div class="form-group">
            <label class="form-label" for="adress">Dirección:</label>
            <input class="form-control" name="adress" type="text" id="adress" placeholder="Dirección"
                value="{{ old('adress', $restaurant) }}" autocomplete="off">
            @error('adress')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- phone -->
        <div class="form-group">
            <label class="form-label" for="phone">Teléfono/Celular:</label>
            <input class="form-control" name="phone" type="tel" id="phone" placeholder="Teléfono/Celular"
                value="{{ old('phone', $restaurant) }}" autocomplete="off">
            @error('phone')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- restaurant description -->
        <div class="form-group">
            <label class="form-label" for="description">Descripción del Restaurante:</label>
            <br>
            <textarea class="textarea" name="description" id="description" cols="75" rows="5" placeholder="Escribe aquí la descripción">{{ old('description', $restaurant) }}</textarea>
            @error('description')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
        </div>

        <!-- dish image -->
        <div class="col">
            <div class="form-group">
                <label class="form-label" for="customFile">Imagen del Restaurante:</label>
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="customFile"
                        placeholder="Selecciona una imagen" value="{{ old('image', $restaurant) }}" accept="image/*">
                    <label class="custom-file-label" for="customFile">Seleccionar</label>
                </div>
                @error('image')
                    <div class="text-xs text-red">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-center">
                <img id="preview-image-before-upload"
                    src="@isset($dish) {{ asset('storage/restaurants/' . $restaurant->image) }} @else {{ asset('img/upload-image.png') }} @endisset"
                    alt="preview image" style="width: 250px; height: 330px;">
            </div>
        </div>

        <!-- link restaurant -->
        <div class="form-group">
            <label class="form-label" for="link">Link pag Web:</label>
            <input class="form-control" name="link" type="url" id="link" placeholder="URL"
                value="{{ old('link', $restaurant) }}" autocomplete="off">
            @error('link')
                <div class="text-xs text-red">{{ $message }}</div>
            @enderror
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
    </div>