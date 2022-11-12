<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5 shadow ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container d-flex justify-content-center">
                <a href="" class="me-4 text-reset">
                    <img src="/img/facebook.png" alt="" width="50px">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="/img/whatsapp.png" alt="" width="50px">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="/img/instagram.png" alt="" width="50px">
                </a>
                <a href="" class="me-4 text-reset">
                    <img src="/img/linkedin.png" alt="" width="50px">
                </a>
                <div class="work">
                    <a href="{{ route('revisor.become') }}" class="btn boton-nav text-black fw-bold px-3 ms-5">{{__('Trabaja con nosotros')}}</a>
                </div>

        </div>
    </section>

    <section class="">
        <div class="container  text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 d-flex justify-content-evenly ">
                    <div class="row mb-3">
                        <h6 class="text-uppercase fw-bold mb-4">{{__('Tecnologías utilizadas')}}</h6>
                        <div>
                          <a class=" text-reset ms-5 mb-3">
                            <img src="/img/html.png" width="40px">
                            <img src="/img/css.png" width="40px">
                        </a>
                        </div>
                       <div>
                        <a class=" text-reset mb-3 ms-5">
                          <img src="/img/git.png" width="40px">
                          <img src="/img/js.png" width="40px">
                      </a>
                       </div>
                        <div>
                          <a class=" text-reset mb-3 ms-5">
                            <img src="/img/laravel.png" width="40px">
                            <img src="/img/php.png" width="40px">
                        </a>
                        </div>

                    </div>
                </div>


                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">{{__('Secciones')}}</h6>
                    @foreach($categories as $category)
                        <p>
                            <a class="text-reset text-capitalize"
                                href="{{ route('category.ads',$category) }}">{{__("{$category->name}")}}
                            </a>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Pagaya</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
