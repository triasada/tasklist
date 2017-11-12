/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery.fn.extend({

    validasi: function (option) {
        if (option.role !== undefined) {
            var objRole = option.role;
            var property;

            for (property in objRole) {
                var elemen = $(this).find('#' + property);
                var elementObj = elemen.find(':input');
//                console.log(elemen);
                elemen.removeClass('has-error');
                elemen.removeClass('has-success');
//                 elementObj.removeClass('has-error');
//                elementObj.removeClass('has-success');
                elemen.addClass(objRole[property]);
                elemen.find('.help-block').html('');

                if (elementObj.val() === "") {
                    elemen.error();
//                    elementObj.error();
                    if (option.message !== undefined) {
                        if (option.message[property] !== undefined) {
                            elemen.find('.help-block').html(option.message[property]);
                        } else {
                            elemen.find('.help-block').html('required');
                        }
                    } else {
                        elemen.find('.help-block').html('required');
                    }

                } else if (option.minLength !== undefined) {
                    if (elementObj.val().length < option.minLength[property]) {
                        elemen.error();
//                        elementObj.error();
                        elemen.find('.help-block').html('minimal ' + option.minLength[property] + ' karakter');



                    }

                }
            }
        }
        return !($(this).find('div').hasClass('has-error'));

    },
    error: function () {
        return this.addClass('has-error');
    },
    success: function () {
        return this.addClass('has-success');
    },
    modalLoad: function (title, classmodal) {
        var dialog = "<div class='modal fade " + classmodal + " ' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'><\n\
                    div class='modal-dialog'>\n\
                    <div class='modal-content'>\n\
                                        <div class='modal-header'>\n\
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>\n\
                                            <h4 class='modal-title' id='myModalLabel'>" + title + "</h4>\n\
                                        </div>\n\
                                        <div class='modal-body'>\n\
                                           \n\
                                        </div>\n\
                                        <div class='modal-footer'>\n\
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>\n\
                                            <button type='button' class='btn btn-primary' onclick='' data-dismiss='modal'>Save changes</button>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                            </div>";
        return $(this).append(dialog);

    },
    modalBaseLoad: function () {
        var dialog = "<div class='modal fade ' id='baseModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>\n\
\n\<div class='modal-content'>\n\
                                        <div class='modal-header'>\n\
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>\n\
                                            <h4 class='modal-title' id='baseModalLabel'></h4>\n\
                                        </div>\n\
                                        <div class='modal-body'>\n\
                                           \n\
                                        </div>\n\
                                        <div class='modal-footer'>\n\
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>\n\
                                        </div>\n\
                                    </div>\n\
                            </div>";
        return $(this).append(dialog);

    }
});
function showHistory(data){
    $('#baseModal').addClass('history');
    $('#baseModal .modal-header').removeClass('modal-header-info').addClass('modal-header-info');
    $('#baseModal .modal-footer').removeClass('modal-footer-info').addClass('modal-footer-info')
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
