// init datatable
var tabel;
function initDatatable() {
    tabel = $('#tabel-lihatdata').DataTable({
        searching : false,
        info : false,
        paging : false,
        ajax : {
            url: base_url+"/crud/getdata",
            type: "POST",
            success : function (data) {
                var html = '';
                var no=1;
                for (var i=0;i<data.length;i++){
                    html+= '<tr>'+
                        '<td>'+no+++'</td>'+
                        '<td>'+data[i].nim+'</td>'+
                        '<td>'+data[i].nama+'</td>'+
                        '<td>'+'<a href="javascript:void(0)" onclick="getEditData('+data[i].nim+')">Edit | </a> <a href="javascript:void(0)" onclick="hapusData('+data[i].nim+')">Hapus</a>'+'</td>'
                }
                $('#bodytable-data').html(html);
            }
        }
    });
}

// function add data
function addData(){
    $('#form-add').submit(function (e) {
        e.preventDefault();

        var dataform = new FormData(this);

        $.ajax({
            type: 'POST',
            url: base_url+'/crud/tambahdata',
            dataType: 'JSON',
            contentType : false,
            processData: false,
            data: dataform,
            success: function (data) {
                if (data.status === 'sukses'){
                    $('#modal-tambah').modal('hide');
                    tabel.ajax.reload();
                    $('#form-add input').val('');
                }
            },
            error: function (data) {
                console.log('error tambah data : '+data);
            }
        });
    });
}

function getEditData(id=null) {
    if (id){
        $.ajax({
            type: 'POST',
            url: base_url+'/crud/getEditData',
            dataType: 'JSON',
            data: {
                nim : id
            },
            success: function (data) {
                $('#modal-edit').modal('show');
                $('#modal-edit #inputnim').val(data.nim);
                $('#modal-edit #inputnama').val(data.nama);
                $('#modal-edit #tempId').val(data.nim);
            },
            error: function (data) {
                console.log('error get data edit: '+data);
            }
        });
    }
}

function editData() {
    $('#form-edit').submit(function (e) {
        e.preventDefault();

        var dataform = new FormData(this);

        $.ajax({
            type: 'POST',
            url: base_url+'/crud/editData',
            dataType: 'JSON',
            contentType : false,
            processData: false,
            data: dataform,
            success: function (data) {
                if (data.status === 'sukses'){
                    $('#modal-edit').modal('hide');
                    tabel.ajax.reload();
                    $('#form-edit input').val('');
                }
            },
            error: function (data) {
                console.log('error edit data : '+data);
            }
        });
    });
}

function hapusData(id=null) {
    if (id){
        $.ajax({
            type: 'POST',
            url: base_url+'/crud/hapusData',
            dataType: 'JSON',
            data: {
                nim : id
            },
            success: function (data) {
                if (data.status === 'sukses'){
                    tabel.ajax.reload();
                }
            },
            error: function (data) {
                console.log('error hapus data: '+data);
            }
        });
    }
}