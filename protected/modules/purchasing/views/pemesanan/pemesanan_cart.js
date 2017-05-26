$(document).on('click', ".addCart", function () {
  var produk_atr = $('#produk');
  var qty_atr = $('#qty');
  if((produk_atr.val()) && (qty_atr.val())){
    var id_produk = produk_atr.val();
    var qty = qty_atr.val();
    //
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: {
            id_produk: id_produk,
            qty: qty,
        },
        url: window.location.origin + '/purchasing/pemesanan/addCart',
        complete:  function(response){
          console.log(response);
    //         // btnAdd.prop('disabled', true);//komen dulu karena pengen bisa add tindakan lebih dari satu kalii
    //         // setTimeout(function(){}, 1000);
    //         // total += parseFloat(tarif);// * qty;
    //         // $('.sum-total').text(total);
              $.fn.yiiGridView.update('cart-grid', {
                    complete: function(jqXHR, status) {
                        console.log(status);
                    }
                });
              // $('#cart-grid').yiiGridView('update');
        }
    });
    // alert("oke");
  }else{
    alert("Produk harus dipilih & Quantity tidak boleh kosong");
  }
});

function removecartitem(id,id_produk)
{
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: {
            id: id,
            id_produk: id_produk
        },
        url: window.location.origin + '/purchasing/pemesanan/removeCart',
        success:  function(response){
            $.fn.yiiGridView.update('cart-grid', {
                    complete: function(jqXHR, status) {
                        console.log(status);
                    }
            });
        }
    });
}
