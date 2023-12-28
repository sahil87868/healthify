@extends('PATIENTS.layout.structure')

@section('main_content')


   <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('website/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('website/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('website/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('website/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('website/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('website/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{url('website/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('website/js/main.js')}}"></script>
</body>
@endsection

</html>