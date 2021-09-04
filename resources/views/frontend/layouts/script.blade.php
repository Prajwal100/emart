<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/classy-nav.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/scrollup.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jarallax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jarallax-video.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>

{{--autosearch--}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/active.js')}}"></script>
<script src="{{asset('frontend/assets/js/share.js')}}"></script>

<script src="{{asset('frontend/assets/js/bootstrap-notify.js')}}"></script>


<script>
   @if(\Illuminate\Support\Facades\Session::has('success'))
       $.notify("Success: {{\Illuminate\Support\Facades\Session::get('success')}}", {
           animate: {
               enter: 'animated fadeInRight',
               exit: 'animated fadeOutRight'
           }
       });
    @endif
    @php
        \Illuminate\Support\Facades\Session::forget('success')
    @endphp

    @if(\Illuminate\Support\Facades\Session::has('error'))
    $.notify("Sorry: {{\Illuminate\Support\Facades\Session::get('error')}}", {
        animate: {
            enter: 'animated fadeInRight',
            exit: 'animated fadeOutRight'
        }
    });
    @endif
    @php
        \Illuminate\Support\Facades\Session::forget('error')
    @endphp
</script>
@yield('scripts')
<script>
    setTimeout(function(){
        $('#alert').slideUp();
    },4000);
</script>


