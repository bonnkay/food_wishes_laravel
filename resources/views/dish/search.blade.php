@extends('base')
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title')
    Registrar un Platillo
@endsection

@section('men-dish')
    active
@endsection

@section('ite-dish-search')
    active
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body overflow-auto" style="max-height: 50rem;">
                    <table class="table table-striped table-bordered table-hover" id="example1">
                        <thead>
                            <tr>
                                <th class="text-title-table">Imagen</th>
                                <th class="text-title-table">Código</th>
                                <th class="text-title-table">Nombre</th>
                                <th class="text-title-table">Precio</th>
                                <th class="text-title-table">Categoria</th>
                                <th class="text-title-table">Estado</th>
                                <th class="text-title-table">Editar</th>
                                <th class="text-title-table">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($dishes)
                                @foreach ($dishes as $dish)
                                    <tr>
                                        <td id="casillaImg"><img src="{{ asset('storage/dishes/' . $dish->image) }}"
                                                alt=""></td>
                                        <td>{{ $dish->id }}</td>
                                        <td>{{ $dish->name }}</td>
                                        <td>{{ $dish->price }}</td>
                                        <td>{{ $dish->category }}</td>
                                        <td>{{ $dish->state }}</td>
                                        <td class="text-center"> <a href="{{ route('dish.edit', $dish) }}" class="btn btn-info">
                                                <i class="fas fa-edit nav-icon"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('dish.destroy', $dish) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="" class="btn btn-danger"
                                                    onclick="return confirm('¿Está seguro de eliminar los datos del perrito?')">
                                                    <i class="fas fa-minus-circle nav-icon"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
