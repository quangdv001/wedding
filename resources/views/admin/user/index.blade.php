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
                                <th scope="col">Lucky Number</th>
                                <th scope="col">Nhóm</th>
                                <th scope="col">Nhà</th>
                                <th scope="col">Tham dự</th>
                                <th scope="col">Link mời</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                            @foreach ($data as $v)
                            <tr class="">
                                <td scope="row">{{ $v->id }}</td>
                                <td>
                                    <a href="#" class="editable" id="user_{{ $v->id }}" data-type="text" data-pk="{{ $v->id }}" data-url="/admin/user/editName" data-title="Nhập tên">{{ $v->name }}</a>
                                </td>
                                <td>{{ $v->code }}</td>
                                <td>{{ $v->group }}</td>
                                <td>{{ $v->from == 1 ? 'Nhà trai' : 'Nhà gái' }}</td>
                                <td>@if($v->is_join == 0) Chưa chọn @elseif($v->is_join == 1) Đi @else Không đi @endif</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="link_{{ $v->id }}" value="{{ route('site.home.account', $v->code) }}">
                                        <button class="btn btn-outline-secondary" type="button" onclick="copyLink('link_{{ $v->id }}')">Copy</button>
                                    </div>
                                </td>
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
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet">
@endpush
@push('custom_js')
<script src="/lib/datatable/jquery.dataTables.min.js"></script>
<script src="/lib/datatable/dataTables.bootstrap5.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
<script>
    	
    $('#inputGroupFile01').on('change', function () {
        // Lấy file từ input file
        let file = this.files[0];

        // Kiểm tra xem có file được chọn không
        if (file) {
            let formData = new FormData();
            formData.append('file', file);
            if (!init.conf.ajax_sending) {
                $.ajax({
                    url: @json(route('admin.user.import')),
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        init.conf.ajax_sending = true;
                    },
                    success: function (res) {
                        if (res.success) {
                            window.location.reload();
                        }
                    },
                    complete: function () {
                        $('#inputGroupFile01').val('');
                        init.conf.ajax_sending = false;
                    }
                });
            }
        } else {
            console.log('Không có file được chọn');
        }
    });

    let dataTable = new DataTable('#example');

    function copyLink(id) {
        var textToCopy = $(`#${id}`).val();

        // Check if the Clipboard API is available
        if (navigator.clipboard) {
            navigator.clipboard.writeText(textToCopy)
                .then(function () {
                    console.log('Text copied to clipboard');
                })
                .catch(function (err) {
                    console.error('Unable to copy text to clipboard', err);
                });
        } else {
            // Fallback for browsers that do not support Clipboard API
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();

            try {
                // Execute the copy command
                document.execCommand('copy');
                console.log('Text copied to clipboard (fallback)');
            } catch (err) {
                console.error('Unable to copy text to clipboard (fallback)', err);
            }

            tempInput.remove();
        }
    }

    $.fn.editable.defaults.mode = 'inline';
    $(document).ready(function() {
        $('.editable').editable();
    });

    dataTable.on('draw', function() {
        // Your custom logic here
        console.log('Table redrawn, filtering complete.');

        // Call your custom function or execute code after filtering
        $.fn.editable.defaults.mode = 'inline';
        $('.editable').editable();
    });
</script>
@endpush