@extends('admin.layout.main')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <h3>Lời chúc</h3>
                    
                </div>
                <div
                    class=""
                >
                    <table
                        class="table table-striped"
                        id="example"
                        style="width:100%"
                    >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Lời chúc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                            @foreach ($data as $v)
                            <tr class="">
                                <td scope="row">{{ $v->id }}</td>
                                <td>{{ $v->name }}</td>
                                <td>{{ $v->message }}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
@endsection
@push('custom_css')
<link rel="stylesheet" href="/lib/datatable/dataTables.bootstrap5.min.css">
@endpush
@push('custom_js')
<script src="/lib/datatable/jquery.dataTables.min.js"></script>
<script src="/lib/datatable/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush