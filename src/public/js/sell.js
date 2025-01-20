"use strict";


const category_number = 14;

const i = 1
while (i <= category_number) {
    $(document).ready(function () {
        $("#sell_category_".i).on('click',function () {
                var payment_method = $(this).val();
                var purchase_payment_table = '';

                if (payment_method == 'コンビニ支払い') {
                    purchase_payment_table = 'コンビニ支払い';
                } else if (payment_method == 'カード支払い') {
                    purchase_payment_table = 'カード支払い';
                } else {
                    purchase_payment_table = '---';
                }

                $("#purchase_payment_table").text(purchase_payment_table);
            });
        });
}
    


