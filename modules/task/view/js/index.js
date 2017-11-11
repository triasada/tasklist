/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$('body').modalBaseLoad();

$(document).on("click", "#historyFunc", function () {
    var id = $(this).data('id');
    var globaldata;
    $.ajax({
        type: "POST",
        url: home + 'task/getHistory',
        data: {id: id},
        success: function (data) {
            if (data.success) {
                showHistory(data.data)

            }
        },
        dataType: 'JSON'
    });

});
$(document).on("click", "#updateFunc", function () {
    var vdata = parsingData(this);
    updateHistory(vdata);

});

function showHistory(data) {
    $('#baseModal').addClass('history');
    var modal = $('#baseModal .modal-body');
    modal.empty();
    modal.append("<table class='table table-striped table-bordered table-hover'></table>");
    modal.has('table').children('table').append('<thead></thead>').append('<tbody></tbody>');
    var thead = modal.has('table').children('table').has('thead').children('thead');
    var tbody = modal.has('table').children('table').has('tbody').children('tbody');
    thead.append(' <tr><th>Task</th><th>Status</th><th>Progress</th><th>Notes</th><th>Created</th><th>By</th> </tr>');
    var i;
    for (i = 0; i < data.length; i++) {
        tbody.append('<tr><td>' + data[i].task + '</td><td>' + data[i].taskstatus + '</td><td>' + data[i].progress + '</td><td>' + data[i].notes + '</td><td>' + data[i].created + '</td><td>' + data[i].createdby + '</td></tr>');
    }
    $('#baseModalLabel').html('History Of Task ' + data[0].task);
}

function updateHistory(data) {
    var statustask;
    switch (data.statusid) {
        case 0:
            statustask = 1;
            break;
        case 1:
            statustask = 1;
            break;
        case 2:
            statustask = 3;
            break;
        case 3:
            statustask = 1;
            break;
    }

    $('#baseModalLabel').html('Update Of Task ' + data.task);
    $('#baseModal').addClass('updateHistory');
    var modal = $('#baseModal .modal-body');
    var footer = $('#baseModal .modal-footer');
    footer.find('.btn-success').remove();
    modal.empty();
    modal.append("<form id='historyForm'></form>");
    var $form = modal.has('form').children('form');
    $form.append(" <div class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Task</span><input class='form-control'  disabled value ='" + data.task + "'/></div>");
    $form.append("<input type='hidden' name='taskid' value ='" + data.taskid + "'/>");
    $form.append("<input type='hidden' name= statusid value ='" + statustask + "'/>");
    $form.append("<div class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Progress</span><input type='text' name='progress' value ='" + data.progress + "'/></div>");
    $form.append("<div class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Notes</span><input type='text' name='notes' value =''/></div>");
    footer.append("<button  type='button' class='btn btn-success' onclick='updater()' data-dismiss='modal'>Submit</button>")
    console.log(data);
}

function updater() {
    var data = $("#historyForm").serialize();
    postHistory(data);

}

function done(data) {
    var vdata = parsingData(data);
    delete vdata.task;
    postHistory(vdata);
}

function postHistory(data) {
    $.ajax({
        type: "POST",
        url: home + 'task/save/',
        data: data,
        success: function (data) {
            if (data.success) {
                splash('glyphicon glyphicon-ok', 'alert alert-success', data.msg);
                redirect();

            } else {
                splash('glyphicon glyphicon-remove', 'alert alert-danger', data.msg);
            }

        },
        dataType: 'JSON'
    });
}

function parsingData(data) {
    console.log(data);
    var xdata = {taskid: $(data).data('id'), task: $(data).data('task'), statusid: $(data).data('statusid'), progress: $(data).data('progress')};
    return xdata;
}