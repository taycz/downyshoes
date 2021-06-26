<script>
$(document).ready(function() {

    // handle string
    var data = document.cookie;
    var products = [];
    var dataArr = data.split(";");
    var getNameProduct=[];
    var nameCookie
    dataArr.pop();
    for (var i = 0; i < dataArr.length; i++) {
        var product = dataArr[i].split("=")[1];
         nameCookie=dataArr[i].split("=")[0];
        product = product.split(",");
        getNameProduct.push(nameCookie)
        products.push(product);

    }
    
    var showList = '';
    var showTotal = ''
    for (var i = 0; i < products.length; i++) {
      
        showList += `<tr class="rem0">
								<td class="invert">` + [i + 1] + `</td>
								<td class="invert-image"><a href=""><img src="` + products[i][0] + `" alt=" " class="img-responsive"></a></td>
								<td class="invert">
                                ` + products[i][1] + `
								</td>
								<td class="invert">` + products[i][2] + `</td>
								<td class="invert">` + products[i][3] + `</td>
								<td class="invert">` + products[i][4] + `</td>
								<td class="invert">
									<div class="rem" >
										<div data-index=`+[i]+`  class="close1"></div>
									</div>

								</td>
							</tr>`
        showTotal += `   <li>`+products[i][3]+` <i>-</i> <span class="priceSpan`+[i]+`">` + products[i][4] + ` </span></li>`


    }
   
    //   list product
    $('#listProduct').empty().append(showList);
    // listPrice
    $('#priceList').empty().append(showTotal);
     // delete products
     $('.close1').click(function(){
         var index= $(this).attr('data-index');
        var name = getNameProduct[index]
        $(this).closest('.rem0').remove()
         document.cookie= name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT;'; 
       
     });
    //  show quantity product
    var quantity = products.length + " Product"
    $('#showQuantity').html(quantity);
    // total show 
    var total=$('.priceSpan');
    var showTotal=0
   
    for(var i=0;i<products.length;i++){
        
        showTotal += parseInt($('.priceSpan'+[i]).html())
      
    }
    $('#total').html(showTotal+"$");
})
</script>