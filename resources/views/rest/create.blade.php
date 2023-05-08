@extends('base')

@section('title')
    Registrar un Restaurante
@endsection

@section('men-rest')
    active
@endsection

@section('ite-rest-create')
    active
@endsection

@section('content')
    <div class="row">
        <div class="offset-2 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('rest.store') }}" method="post" enctype="multipart/form-data">
                        @include('rest._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- bs-custom-file-input -->
    <script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            bsCustomFileInput.init();
        });
        $(document).ready(function(e) {
            $('#customFile').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection