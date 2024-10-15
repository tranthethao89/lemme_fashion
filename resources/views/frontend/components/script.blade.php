 <!-- Javascript -->
 <script type="text/javascript" src=" {{ asset('frontend/js/bootstrap.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/jquery.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/carousel.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/count-down.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/lazysize.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/wow.min.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/multiple-modal.js') }}"></script>
 <script type="text/javascript" src=" {{ asset('frontend/js/main.js') }}"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;

     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;

     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;

     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break;
  }
  @endif
 </script>
