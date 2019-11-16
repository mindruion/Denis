$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var _token = $('meta[name="csrf-token"]').attr('content');
var default__cities = ["Anenii Noi", "Basarabeasca", "Bender", "Briceni", "Bălți", "Cahul", "Cantemir", "Chișinău", "Cimișlia", "Criuleni", "Călărași", "Căușeni", "Dondușeni", "Drochia", "Dubăsari", "Edineț", "Florești", "Fălești", "Glodeni", "Găgăuzia", "Hîncești", "Ialoveni", "Leova", "Nisporeni", "Ocnița", "Orhei", "Rezina", "Rîșcani", "Soroca", "Strășeni", "Stînga Nistrului", "Sîngerei", "Taraclia", "Telenești", "Ungheni", "Șoldănești", "Ștefan Vodă"];

$(document).ready( function() {
  $('option').each( function() {
    var country = $(this).val();

    $('.country-selector').append('<div class="country" data-value="' + country + '">' + country + '</div>');
  });
});

$(document).ready(function() {
  let cities = Cookies.getJSON('cities');

  if ( cities == undefined || cities.length == 0 )
    cities = default__cities;

  // console.log(cities);

  $.each(cities, function(index, item) {
    // console.log(item);
    $('.country-selector').append('<div class="country" data-value="' + item + '">' + item + '</div>');
  });

  // for ( let i = 1; i < cities.lenght; i++ ){
  //   // $('.country-selector').append('<div class="country" data-value="' + cities[i] + '">' + cities[i] + '</div>');
  //   $('.country-selector').append(cities[i] + '');
  //   console.log(cities[i]);
  // }
});

$(document).on('click', '.country-selector .country', function() {

  if ( !$(this).hasClass('active') ) {
    let city = $(this).data('value');
    $(this).addClass('active');
    $(this).attr('data-value', city);

    // $('select.crs-country').data('value', city);
    // $('.selected__cities').append('<div class="s__city" data-value="' + city + '"><i class="fas fa-check"></i><span>' + city + '</span></div>')
  }
  else {
    let city = $(this).data('value');
    $(this).removeClass('active');

    console.log('selected city: ' + city);

    // $('.selected__cities').each( function() {
    //   let s_city = $(this).find('.s__city').data('value');
    //
    //   if ( s_city == city )
    //     $(this).find('.s__city').remove();
    // });
  }
});

$(document).on('submit', '#step_2', function(event) {
  event.preventDefault();

  let form = new FormData(this),
      cities = {},
      employees = $('.employees').val(),
      department = $('.department').val(),
      industry = $('.industry').val(),
      counter = 0;

  $('.country-selector .country').each( function (){
    if ( $(this).hasClass('active') ) {
      counter++;
      cities['city_' + counter] = $(this).data('value');
    }
  });

  console.log(cities);

  // $.ajax({
  //   url: '/register-company/step2',
  //   type: 'post',
    // headers: {
    //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    // },
  //   dataType: "json",
  //   data: {
  //     form : form,
  //     cities: cities
  //   },
    // cache: false,
    // contentTye: false,
    // processData: false,
  //   success: response => {
  //     console.log('DATA SEND ' + response);
  //   },
  //   error: response => {
  //     console.log('ERROR' + response);
  //   }
  // })

  $.ajax({
    url: '/register-company/step2',
    type: 'POST',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
      cities : cities,
      employees: employees,
      department: department,
      industry: industry
    },
    success: data => {
      console.log("[*] DATA SEND");
      window.location.replace('/register-company/step3');
    },
    error: data => {
      console.log('[*] ERROR:');
      console.log(data);
    }
  })
});

$(document).on('click', '.crs-cities', function() {
  let cities = [];
  $('.crs-cities option').each(function() {
    cities.push( $(this).html() );
  });

  console.log(cities);
  Cookies.set('cities', cities, { expires: 7 });
});

$(document).on('click', '.choose__acc', function() {
  $('.c__l__card').each( function(){
    if ( $(this).hasClass('c__l__active') ){
      $(this).removeClass('c__l__active');

      let id = $(this).data('id');
      $('#' + id).addClass('d-none');
    }
    else {
      $(this).addClass('c__l__active');

      let id = $(this).data('id');
      $('#' + id).removeClass('d-none');
    }
  });
});

$(document).on('click', '.c__cont .add_jobs', function () {
  window.location.replace('/add-jobs');
});

$(document).on('submit', '.add__logo', function(event) {
  event.preventDefault();
  let form = new FormData(this);

  $.ajax({
    url: $(this).attr('action') + '?_token=' + $('meta[name="csrf-token"]').attr('content'),
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    type: 'POST',
    dataType:'json',
    success: data => {
      console.log(data);
    },
    error: data => {
      console.log('[*] ERROR: ' + data);
    }
  })
});

$(document).on('click', '.main_det .profile__img', function(){
  $('.main_det form input[type="file"]').focus().click(function() {
    $(this).focus().click();
  });
})

$(function () {
    var fileupload = $("#FileUpload1");
    var filePath = $("#spnFilePath");
    var image = $(".profile__img");
    image.click(function () {
        fileupload.click();
        console.log('img click');
    });
    fileupload.change(function () {
        var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
        filePath.html("<b>Selected File: </b>" + fileName);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile__img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

var init_email = '';

$(document).on('click', 'span.user_email', function(event) {
  let init = $(this).html();
  init_email = init;
  $(this).html('');
  $(this).html('<input class="n__u__email" type="user_email" name="email" value="' + init + '">');
  $(this).removeClass('user_email');
});

$(document).on('keypress', '.n__u__email', function(event) {
  console.log(event.wich || event.keyCode);

  if( event.which == 13 ) {
    console.log('You pressed enter!');
    let current = $(this).val().replace(" ", "");

    //
    if ( (current !== init_email) && (current.lenght != 0) ) {
      // const swal = Swal.mixin({
      //   customClass: {
      //     confirmButton: 'btn btn-success',
      //     cancelButton: 'btn btn-danger'
      //   },
      //   buttonsStyling: false
      // })

      swal.fire({
        title: 'Do you want to change your email ?',
        // text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {

          $.ajax({
            url: '/edit-candidate-profile?&email=' + current + '&_token=' + _token,
            method: 'post',
            success: data => {
              if ( data.status == 200 )
                swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              else
                swal.fire({
                  title: 'An Error Happend',
                  type: 'error'
                });
            }, error: data => {
              swal.fire({
                title: 'An Error Happend',
                type: 'error'
              });
            }

          });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel ||
          result.dismiss === Swal.DismissReason.backdrop ||
          result.dismiss === Swal.DismissReason.close
        ) {
          swal.fire(
            'Your email is not changed',
          )
        }
      })

      // $.ajax({
      //   url: '/edit-candidate-profile?&email=' + current + '&_token=' + _token,
      //   method: 'post',
      //   success: data => {
      //     if ( data.status == 200 )
      //       swal.fire({
      //         title: 'Your email have been changed, check your mailbox to confirm new email',
      //         content: 'Some content',
      //         type: 'success'
      //       });
      //     else
      //       swal.fire({
      //         title: 'An Error Happend',
      //         type: 'error'
      //       });
      //   }, error: data => {
      //     swal.fire({
      //       title: 'An Error Happend',
      //       type: 'error'
      //     });
      //   }
      //
      // });
    }
    //
  }

});
