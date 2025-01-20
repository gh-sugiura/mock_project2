"use strict";


$(document).ready(function () {
    $("#purchase_payment").on('change',function () {
        var $payment_method = $(this).val();
        var purchase_payment_table = '';

        if ($payment_method == 'コンビニ支払い') {
            purchase_payment_table = 'コンビニ支払い';
        } else if ($payment_method == 'カード支払い') {
            purchase_payment_table = 'カード支払い';
        } else {
            purchase_payment_table = '---';
        }

        $("#purchase_payment_table").text(purchase_payment_table);
    });
});



// jQueryを使用せずに実装
// document.getElementById("purchase_payment").onchange = changePaymentMethod;

// function changePaymentMethod() {
//     let $payment_method = document.getElementById("purchase_payment").value;
//     let purchase_payment_table = '';

//     if ($payment_method == 'コンビニ支払い') {
//         purchase_payment_table = 'コンビニ支払い';
//     } else if ($payment_method == 'カード支払い') {
//         purchase_payment_table = 'カード支払い';
//     } else {
//         purchase_payment_table = '---';
//     }
//     document.getElementById("purchase_payment_table").textContent = purchase_payment_table;
// }