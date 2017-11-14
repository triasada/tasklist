/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#atas").fadeIn(3000);
$('body').modalBaseLoad();
$(document).on("click", "#loginFunc", function () {

    loginIn();

});


function loginIn() {
    $('#baseModal').removeClass('updateHistory').addClass('updateHistory');
    $('#baseModal .modal-content').removeClass('modal-content-login').addClass('modal-content-login');
    var header = $('#baseModal .modal-header');
    var body = $('#baseModal .modal-body');
    var footer = $('#baseModal .modal-footer');
    body.removeClass('modal-body-login').addClass('modal-body-login');
    header.removeClass('modal-header-primary').addClass('modal-header-primary');
    header.has('h4').children('h4').attr('align', 'center');
    header.has('h4').children('h4').empty().append("<img height='60px' src='public/img/jict.png'/>");
    footer.empty();
    footer.addClass('modal-footer-primary');
    body.empty();
//    $('#baseModalLabel').empty().append('Login');
    body.append("<form role='form'  id='loginForm' action='login/login/run' method='POST'></form>");
    var $form = body.has('form').children('form');
    $form.append(" <div id='login' class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Username</span><input class='form-control' name='login'  value =''/></div>");
    $form.append("<div id='password' class='form-group input-group input-group'><span class='input-group-addon' style='width: 100px'>Password</span><input class='form-control' type='password' name='password' value =''/></div>");
    footer.append("<button  type='submit' class='btn btn-warning' onclick='kirim()' >Submit</button>")
    $("#loginForm input").keyup(function (e) {
        if (e.keyCode == 13)
        {
           kirim()
        }
    });


}
function loginOut() {
    window.location.href = 'dashboard/dashboard/logout'
}

function kirim() {
    var a = false;
    a = $('#loginForm').validasi({
        role: {
            login: 'required',
            password: 'required',
        }
    });
//    console.log(a);
    if (a) {
        $('#baseModal').modal('hide');
        $("#loginForm").submit();

    }
}
