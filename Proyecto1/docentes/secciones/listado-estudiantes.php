<div class="container">
    <br>
    <div class="">
        <h3 style="color: brown">Lista de estudiantes:</h3>
    </div>
    <table class="table table-striped table-responsive-lg forma03-tabla">
        <thead>
            <tr>
                <th>No.</th>
                <th>Cuenta</th>
                <th>Nombre</th>
                <th>Correo Personal</th>
                <th>Correo Institucional</th>
            </tr>
        </thead>
        <tbody id="lista-estudiantes">
        </tbody>
    </table>
    <div class="row">
        <div class="col-6">
            <span id="p1" class="d-none"></span>
            <button type="button" class="btn btn-lg btn-block btn-light text-dark" onclick="copiarAlPortapapeles('p1')">Copiar Correos Personales</button>
        </div>
        <div class="col-6">
        <span id="p2" class="d-none"></span>
            <button type="button" class="btn btn-lg btn-block btn-light text-dark" onclick="copiarAlPortapapeles('p2')">Copiar Correos Institucionales</button>
        </div>
    </div>
    
</div>