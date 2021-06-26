<script>
var path
var image
var name
var price
var size
var color
// cookie
var imageCookie
var nameCookie
var priceCookie
var sizeCookie
var colorCookie
var data
var char = 0;
$('#addtocart').click(function() {
    //    set expires 
    var now = new Date();
    now.setMonth(now.getMonth() + 1)
    // console.log(now)


    var product = [];
    path = $(this).closest('.simpleCart_shelfItem');
    image = path.siblings('.imageCart').find('img').attr('src')
    name = path.find('h3').text();
    price = path.find('.item_price').attr('price');
    size = path.find('#country1').val();
    color = path.find('#country2').val()


    product = [image, size, color, name, price];
    document.cookie = 'product' + Math.random() + '=' + (product).toString() +'; expires='+ now.toUTCString() + ';path=/';
  console.log(document.cookie)
})
</script>