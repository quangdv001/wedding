@extends('admin.layout.main')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h3>Danh sách khách mời</h3>
                    <div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Import</label>
                            <input type="file" class="form-control d-none" id="inputGroupFile01">
                        </div>
                    </div>
                </div>
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                        id="example"
                    >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Nhóm</th>
                                <th scope="col">Nhà</th>
                                <th scope="col">Link mời</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                            @foreach ($data as $v)
                            <tr class="">
                                <td scope="row">{{ $v->id }}</td>
                                <td>{{ $v->name }}</td>
                                <td>{{ $v->group }}</td>
                                <td>{{ $v->from == 1 ? 'Nhà trai' : 'Nhà gái' }}</td>
                                <td></td>
                                
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
@push('custom_js')
<script src="/lib/datatable/jquery.dataTables.min"></script>
<script>
    new DataTable('#example');
</script>
@endpush