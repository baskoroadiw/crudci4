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
                var aksi = '<a href="javascript:void(0)">Edit Data</a>'
                for (var i=0;i<data.length;i++){
                    html+= '<tr>'+
                        '<td>'+no+++'</td>'+
                        '<td>'+data[i].nim+'</td>'+
                        '<td>'+data[i].nama+'</td>'+
                        '<td>'+aksi+'</td>'
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