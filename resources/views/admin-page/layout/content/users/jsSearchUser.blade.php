<script>
// 
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#search').bind('keyup autocomplete', function() {

        var value = $(this).val();
        //   console.log(value);
        $.ajax({
            url: '/admin/usersSearch',
            method: 'POST',
            data: {
                'search': value
            },
            dataType: "json",
            success: function(data) {

                //   console.log(responseData);
                var showListUser="";
                for (var i = 0; i < data.length; i++) {
                     showListUser +=` <tr>
                         <td>`+data[i]['id']+`</td>
                         <td>`+data[i]['username']+`</td>
                         <td>`+data[i]['email']+`</td>
                         <td>
                         <button type="button" class="btn btn-block bg-gradient-success btn-xs">`+data[i]['role']+`</button>
                         </td>
                         <td>
                         `+data[i]['created_at']+`
                         </td>
                         <td>
                            <a href="{{url('admin/roleAdmin')}}`+`/`+data[i]['id']+`">
                            <button type="button" class="btn btn-info btn-flat">
                                 <i class="far fa-edit"></i>
                             </button>
                            </a>
                            <a href="{{url('admin/roleAdminDestroy')}}`+`/`+data[i]['id']+`">
                            <button type="button" class="btn btn-info btn-flat btn-danger">
                                 <i class="fas fa-trash-alt"></i>
                             </button>
                            </a>

                         </td>

                     </tr>`;
                   
                
                    // console.log(data.length)
                }
                $('.showListUsers').empty().append(showListUser);
                console.log(data.length)
                  
            },
            error: function(data) {
                console.log('err')
            }
        });
    })
})
 </script>