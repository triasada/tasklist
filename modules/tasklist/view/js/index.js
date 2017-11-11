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


function showHistory(data){
    $('#baseModal').addClass('history');
    var modal=$('#baseModal .modal-body');
    modal.empty();
    modal.append("<table class='table table-striped table-bordered table-hover'></table>");
    modal.has('table').children('table').append('<thead></thead>').append('<tbody></tbody>');
    var thead =modal.has('table').children('table').has('thead').children('thead');
    var tbody =modal.has('table').children('table').has('tbody').children('tbody');
    thead.append(' <tr><th>Task</th><th>Status</th><th>Progress</th><th>Notes</th><th>Created</th><th>By</th> </tr>');
    var i;
    for(i=0;i<data.length;i++){
        tbody.append('<tr><td>'+data[i].task+'</td><td>'+data[i].taskstatus+'</td><td>'+data[i].progress+'</td><td>'+data[i].notes+'</td><td>'+data[i].created+'</td><td>'+data[i].createdby+'</td></tr>'); 
    }
     console.log(data);
     $('#baseModalLabel').html('History Of Task '+data[0].task);
}
