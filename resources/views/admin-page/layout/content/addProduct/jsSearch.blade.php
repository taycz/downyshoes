<script>
$(document).ready(function() {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $('#search').on('keyup', function() {
        var value = $(this).val();
      
      
            $.ajax({
                type: "POST",
                url: '/admin/productSearch',
                data: {
                    search:value
                },
                // dataType: "json",
                success: function(data) {
                    var product = '';
                   
                  for(var i = 0; i < data.length; i++){
                    var image=data[i]['upload'].split(',')[0];
                    product +=`  <tr>
                         <td>`+data[i]['id']+`</td>
                         <td>`+data[i]['name']+`</td>
                         <td>`+data[i]['price']+`</td>
                         <td>`+data[i]['type']+`</td>
                         <td>
                         `+data[i]['size']+`
                         </td>
                         <td>
                         `+data[i]['color']+`
                         </td>

                         <td>
                             <img style="object-fit: cover;width:150px;height:auto;" class="img-thumbnail"
                                 src="/`+image+`" alt="">

                         </td>
                         <td>
                             <div class="form-group" data-select2-id="29">
                                 <form>
                                     @csrf
                                     <select class="form-control select2 " name="status" style="width: 100%;"
                                         data-select2-id="9" tabindex="-1" aria-hidden="true"
                                         param-id="`+data[i]['id']+`">
                                         <option selected="selected" class="status" data-select2-id="11">
                                         `+data[i]['status']+`</option>
                                         <option data-select2-id="37" class="status">
                                             @if(!empty(`+data+`) && `+data[i]['status']+`=="On")
                                             Off
                                             @else
                                             On
                                             @endif
                                         </option>


                                     </select>
                                 </form>
                             </div>
                         </td>
                         <td>
                             <a href="{{url('admin/editProduct/')}}`+`/`+data[i]['id']+`">
                                 <button type="button" class="btn btn-info btn-flat">
                                     <i class="far fa-edit"></i>
                                 </button>
                                 <a href="{{url('admin/deleteProduct/')}}`+`/`+data[i]['id']+`">

                                     <button type="button" class="btn btn-info btn-flat btn-danger">
                                         <i class="fas fa-trash-alt"></i>
                                     </button>
                                 </a>

                         </td>
                     </tr>`
                    
                  }
                  console.log(image);
                  $('#showListProduct').empty().append(product);
                },
                error: function(data) {
                    console.log('err');
                }
            });
      
    })
})
</script>