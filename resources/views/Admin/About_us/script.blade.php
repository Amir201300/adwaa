@include('Admin.includes.scripts.dataTableHelper')

<script type="text/javascript">

    var table = $('#datatable').DataTable({
        bLengthChange: false,
        searching: true,
        responsive: true,
        'processing': true,
        'language': {
            'loadingRecords': '&nbsp;',
            'processing': '<div class="spinner"></div>',
            'sSearch' : 'بحث :',
            "paginate": {
                "next": "التالي",
                "previous": "السابق"
            },
            "sInfo": "عرض صفحة _PAGE_ من _PAGES_",
        },
        serverSide: true,

        order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],

        ajax: "{{ route('About_us.allData')}}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'image', name: 'image'},
            {data: 'our_phone', name: 'our_phone'},
            {data: 'our_email', name: 'our_email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#formSubmit').submit(function (e) {
        e.preventDefault();
        saveOrUpdate( save_method ==  "{{ route('About_us.update') }}");
    });


    function editFunction(id) {

        save_method = 'edit';

        $('#err').slideUp(200);

        $('#loadEdit_' + id).css({'display': ''});

        $.ajax({
            url: "/Admin/About_us/edit/" + id,
            type: "GET",
            dataType: "JSON",

            success: function (data) {

                $('#loadEdit_' + id).css({'display': 'none'});

                $('#save').text('تعديل');

                $('#titleOfModel').text('تعديل المعلومات');

                $('#formSubmit')[0].reset();

                $('#formModel').modal();

                $('#title').val(data.title);
                $('#our_vision').val(data.our_vision);
                $('#our_massage').val(data.our_massage);
                $('#our_goals').val(data.our_goals);
                $('#about_us').val(data.about_us);
                $('#our_phone').val(data.our_phone);
                $('#our_email').val(data.our_email);
                $('#id').val(data.id);
            }
        });
    }



</script>
