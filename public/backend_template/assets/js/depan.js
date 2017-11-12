/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('body').modalBaseLoad();
$(document).on("click", "#loginFunc", function () {
    
    loginIn();

});

function loginIn(){
    $('#baseModal').removeClass('updateHistory').addClass('updateHistory');
    var header = $('#baseModal .modal-header');
    var body = $('#baseModal .modal-body');
    var footer = $('#baseModal .modal-footer');
    footer.empty();
    body.empty();
    $('#baseModalLabel').append('Login');
    body.append("<form role='form'  id='loginForm' action='login/login/run' method='POST'></form>");
    var $form = body.has('form').children('form');
    $form.append(" <div class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Username</span><input class='form-control' name='login'  value =''/></div>");
    $form.append("<div class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Password</span><input class='form-control' type='password' name='password' value =''/></div>");
    footer.append("<button  type='submit' class='btn btn-success' onclick='kirim()' data-dismiss='modal'>Submit</button>")
    
    
}
function loginOut(){
    window.location.href = 'dashboard/dashboard/logout'
}

function kirim(){
     $( "#loginForm" ).submit();
}
