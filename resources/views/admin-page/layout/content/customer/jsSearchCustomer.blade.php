<script>
 $(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#search').keyup(function(){
        var value = $(this).val();
        $.ajax({
                    type: "POST",
                    url: '/admin/searchCustomer',
                    data: {data: value},
                    dataType:'json',
                    success: function( data ) {
                       
                        var showCustomer=''
                        for(var i=0; i<data.length; i++){
                            showCustomer += ` <tr>
                         <td>`+data[i]['id']+`</td>

                         <td>`+data[i]['name']+`</td>
                         <td>`+data[i]['phonenumber']+`</td>
                         <td>`+data[i]['email']+`</td>
                         <td>`+data[i]['address']+`</td>

                         <td>`+data[i]['created_at']+`</td>
                         </td>
                         <td>
                             <a href="{{url('admin/customer/')}}`+`/`+data[i]['id']+`"><button type="button"
                                     class="btn btn-info btn-flat">
                                     <i class="far fa-edit"></i>
                                 </button></a>
                             <a href="{{url('admin/delete/')}}`+`/`+data[i]['id']+`">
                                 <button type="button" class="btn btn-info btn-flat btn-danger">
                                     <i class="fas fa-trash-alt"></i>
                                 </button>
                             </a>

                         </td>
                     </tr>`
                        }
                       $('#showListCustomer').empty().append(showCustomer);
                    },
                    error: function( data ) {
                        console.log('err');
                    }
                });
    })
 })
</script>