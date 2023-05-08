@extends('base')

@section('title')
    Registrar un Platillo
@endsection

@section('men-dish')
    active
@endsection

@section('ite-dish-create')
    active
@endsection

@section('content')
    <div class="row">
        <div class="offset-2 col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dish.store') }}" method="post" enctype="multipart/form-data">
                        @include('dish._form')
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