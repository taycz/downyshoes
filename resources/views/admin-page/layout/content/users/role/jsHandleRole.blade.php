<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#roleHandle').change(function() {
      
        var value = $(this).val();
     var name = $(this).closest('#selectRole').siblings('#userName').find('#username').attr('value');
        console.log(name);
      if(value == 'Manager'){
        alert 
        Swal.fire({
        title: 'Are you sure?',
        text: "Bạn muốn thăng "+name+" thành "+value+" chứ? Điều này sẽ giáng cấp bạn thành Admin.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Thăng Cấp',
                'Lưu thăng cấp.Click Update để tiếp tục!',
                'success'
            )
        }
    })
  }
   
    })
   
});
</script>