<div class="container  mt-5 d-flex justify-content-center">
    <div class="register-form">
        <h2 class="text-center">Slider</h2>
        <form>
            <div class="form-group">
                <label for="slider-key"><i class="fas fa-key"></i> Clave del slider</label>
                <input type="text" class="form-control" id="slider-key" value="" readonly>
            </div>
            <div class="form-group">
                <label for="slider-image"><i class="fas fa-image"></i> Imagen Slider</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="slider-image">
                        <label class="custom-file-label" for="slider-image">Selecciona un archivo...</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alt-text"><i class="fas fa-font"></i> Texto alternativo</label>
                <input type="text" class="form-control" id="alt-text" value="">
            </div>
            <div class="form-group">
                <label for="status"><i class="fas fa-toggle-on"></i> Estado</label>
                <select class="form-control" id="status">
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div><br><br>
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> Guardar</button>
            <button type="reset" class="btn btn-secondary btn-block"><i class="fas fa-times"></i> Cancelar</button>
        </form>
    </div>
</div>
