$(document).ready(function () {
  // validate Add category schedule =============>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// alert&modal =>>>>>>>>>>>>>>>>>>>]

  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  // code7
  // toastr.options = {
  //   "closeButton": false,
  //   "debug": false,
  //   "newestOnTop": true,
  //   "progressBar": false,
  //   "positionClass": "toast-top-right",
  //   "preventDuplicates": false,
  //   "onclick": null,
  //   "showDuration": "300",
  //   "hideDuration": "1000",
  //   "timeOut": "5000",
  //   "extendedTimeOut": "1000",
  //   "showEasing": "swing",
  //   "hideEasing": "linear",
  //   "showMethod": "fadeIn",
  //   "hideMethod": "fadeOut"
  // }
  //Add category schedule=>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  $('#subformcategory1').on('click', function () {

    let vnf_regex = /((03|01|07|08|05)+([0-9]{8})\b)/g;
    let hotline = $('#hotlinecategory').val();
    let province = $('#provincecategory').val();
    let odering = $('#odercategory').val();
    if (hotline == "") {
      Toast.fire({
        icon: 'error',
        title: 'SĐT không được rỗng'
      })
    } else if (province == "") {
      Toast.fire({
        icon: 'error',
        title: ' Province không được rỗng'
      })
    } else if (odering == "") {
      Toast.fire({
        icon: 'error',
        title: ' Odering không được rỗng'
      })
    } else {
      if (vnf_regex.test(hotline) == false) {
        Toast.fire({
          icon: 'warning',
          title: 'Số ĐT không hợp lệ.'
        })
      } else {
        Swal.fire({
          icon: 'success',
          title: 'Submit thành công',

        })
      }
    }
  })
//  Add Schedule Manager =>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  $('#buttonSchedule').on('click', function () {
    let email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let name = $('#nameschedule').val()
    let type = $('#typeschedule').val()
    let time = $('#timeschedule').val()
    let length = $('#lengthschedule').val()
    let odering = $('#oderingschedule').val()
    if (name == "") {
          toastr.info('Name không được rỗng')
        }
       else if (type == "") {
          toastr.info('Type không được rỗng')
        }
       else if (time == "") {
          toastr.info('Time không được rỗng')
        }
       else if (length == "") {
          toastr.info('Length không được rỗng')
        }
       else if (odering == "") {
          toastr.info('Odering không được rỗng')
        }
       else {
      if (email.test(type) == false) {
        toastr.info('Type khong hop le')
          } else if (length.length > 8) {
            toastr["warning"]("Length không hợp lệ!")
          } else {
            Swal.fire({
              icon: 'success',
              title: 'Submit thành công',

            })
          }
    }

  })
  // Price + Time ================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  $('#priceinfo').on('change', function () {
    let vnd = $(this).val()
    let vndLocal = parseFloat(vnd).toLocaleString("da-DK");
    $(this).val(vndLocal)
  })

  $('#timeinfo,#timeschedule').on('change', function () {
    let time = $(this).val()
    if (parseFloat(time) < 24) {
    } else {
      Toast.fire({
        icon: 'error',
        title: ' Time phải bé hơn 24',
        timer: 2000
      })
    }
  })
  $('#buttonScheduleinfo').on('click', function () {
    let price = $('#priceinfo').val()
    let time = $('#timeinfo').val()
    let oder = $('#oderinfo').val()
    if (price != "" && time != "" && oder != "") {
      if (parseInt(price) <= 0) {
        toastr.info('price phải lớn hơn 0')
        console.log(price)
      } else {
        Swal.fire({
          icon: 'success',
          title: 'Submit thành công',

        })
      }

    } else {
      if (price == "") {
        toastr.info('price không được rỗng')
      }
      if (time == "") {
        toastr.info('Start Time không được rỗng')
      }
      if (oder == "") {
        toastr.info('Odering không được rỗng')
      }
    }
  })

})
