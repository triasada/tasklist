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
    $('#baseModal').addClass('history');
}
