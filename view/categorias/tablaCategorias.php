<div class="table-responsive">
    <table class="table table-hover table-dark" id="tablaCategoriasDataTable">
        <thead>
            <tr style = "text-align: center;">
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td style = "text-align: center;">
                    <span class="btn btn-warning btn-sm">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td style = "text-align: center;">
                    <span class="btn btn-danger btn-sm">
                        <span class="fas fa-trash-alt"></span>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaCategoriasDataTable').DataTable();
    });
</script>