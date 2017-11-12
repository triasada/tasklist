/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('body').modalLoad('Delete Tasklist','delete');
$('body').modalBaseLoad();
$(document).on("click", "#deleteFunc", function () {
     var data = $(this).data('id');
     $("#myModal .modal-footer .btn-primary").attr('onclick',"del('"+data+"')");
     $("#myModal .modal-body").empty().append('<span>Hapus Project Id '+data+'? </span>');
});
$(document).on("click", "#historyFunc", function () {
    var id = $(this).data('id');
    var globaldata;
    $.ajax({
        type: "POST",
        url: home+'tasklist/getHistory',
        data: {id:id},
        success: function (data) {
            if (data.success) {
               showHistory(data.data) 
                
            } 
        },
        dataType: 'JSON'
    });
    
});


function del(id) {

$('#splash').removeClass();
    $('#splash span').removeClass();
    $.ajax({
        type: "POST",
        url: home+'tasklist/del/'+id,
        data: id,
        success: function (data) {
            if (data.success) {

                splash('glyphicon glyphicon-ok', 'alert alert-success', data.msg); 
                redirect('user');
                
            } else {
                splash('glyphicon glyphicon-remove', 'alert alert-danger', data.msg);

            }

        },
        dataType: 'JSON'
    });
    
}



