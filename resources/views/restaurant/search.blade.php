@extends('base')
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title')
    Registrar un Restaurante
@endsection

@section('men-rest')
    active
@endsection

@section('ite-rest-search')
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
                                <th class="text-title-table">Nombre</th>
                                <th class="text-title-table">Email</th>
                                <th class="text-title-table">Dirección</th>
                                <th class="text-title-table">Teléfono</th>
                                <th class="text-title-table">Descripción</th>
                                <th class="text-title-table">Link</th>
                                <th class="text-title-table">Editar</th>
                                <th class="text-title-table">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($restaurants)
                                @foreach ($restaurants as $restaurant)
                                    <tr>
                                        <td id="casillaImg"><img src="{{ asset('storage/restaurants/' . $restaurant->image) }}"
                                                alt="">
                                        </td>
                                        <td>{{ $restaurant->name }}</td>
                                        <td>{{ $restaurant->email }}</td>
                                        <td>{{ $restaurant->adress }}</td>
                                        <td>{{ $restaurant->phone }}</td>
                                        <td>{{ $restaurant->description }}</td>
                                        <td>{{ $restaurant->link }}</td>
                                        <td class="text-center"> <a href="{{ route('restaurant.edit', $restaurant) }}"
                                                class="btn btn-info">
                                                <i class="fas fa-edit nav-icon"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('restaurant.destroy', $restaurant) }}" method="POST">
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
