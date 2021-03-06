<form class="needs-validation" id="seccionnueva" novalidate>
    <div class="row">

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel5" class="encabezado-tabla my-2">Sección:</label>
                <input type="text" class="form-control" name="seccion" id="seccion" required>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel1" class="encabezado-tabla my-2">Asignatura:</label>
                <select class="form-control seleccion-asignatura" name="asignatura" id="asignatura" required>
                    <option value=""></option>
                </select>
                <div class="invalid-feedback">
                    Se requiere una asignatura válida.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel3" class="encabezado-tabla my-2">Docente:</label>
                <select class="form-control seleccion-docente" name="docente" id="docente" required>
                    <option value=""></option>
                </select>
                <div class="invalid-feedback">
                    Se requiere un docente válido.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel4" class="encabezado-tabla my-2">Cupos:</label>
                <input type="number" class="form-control" name="cupos" id="cupos" required>
                <div class="invalid-feedback">
                    Se requieren cupos válidos.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel5" class="encabezado-tabla my-2">Dias:</label>
                <input type="text" class="form-control" name="dias" id="dias" placeholder="LuMaMiJuViSa" required>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel6" class="encabezado-tabla my-2">Periodo:</label>
                <select class="form-control" name="periodo" id="periodo" required>
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel5" class="encabezado-tabla my-2">Año:</label>
                <input type="text" class="form-control" name="anio" id="anio" required>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel7" class="encabezado-tabla my-2">Hora Inicial:</label>
                <select class="form-control" name="hi" id="hi" required>
                    <option value=""></option>
                    <option>0600</option>
                    <option>0700</option>
                    <option>0800</option>
                    <option>0900</option>
                    <option>1000</option>
                    <option>1100</option>
                    <option>1200</option>
                    <option>1300</option>
                    <option>1400</option>
                    <option>1500</option>
                    <option>1600</option>
                    <option>1700</option>
                    <option>1800</option>
                    <option>1900</option>
                    <option>2000</option>
                </select>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel8" class="encabezado-tabla my-2">Hora Final:</label>
                <select class="form-control" name="hf" id="hf" required>
                    <option value=""></option>
                    <option>0700</option>
                    <option>0800</option>
                    <option>0900</option>
                    <option>1000</option>
                    <option>1100</option>
                    <option>1200</option>
                    <option>1300</option>
                    <option>1400</option>
                    <option>1500</option>
                    <option>1600</option>
                    <option>1700</option>
                    <option>1800</option>
                    <option>1900</option>
                    <option>2000</option>
                    <option>2100</option>
                </select>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel9" class="encabezado-tabla my-2">Edificio:</label>
                <select class="form-control" name="eficicio" id="eficicio" required>
                    <option value=""></option>
                    <option>F1</option>
                    <option>D1</option>
                    <option>B1</option>
                    <option>B2</option>
                    <option>E1</option>
                    <option>C3</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>I</option>
                </select>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="sel10" class="encabezado-tabla my-2">Aula:</label>
                <input type="text" class="form-control" name="aula" id="aula" required>
                <div class="invalid-feedback">
                    Se requiere llenar este campo.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <button type="submit" id="crear-seccion" class="btn aceptar" style="margin-bottom: 1em; background: #2980b9; color:white;">Crear
                Sección</button>
        </div>
    </div>
</form>

<!-- <input type="number" class="form-control" name="aula">
<input type="text" class="form-control" name="aula">
<button type="submit">aceptar</button> -->