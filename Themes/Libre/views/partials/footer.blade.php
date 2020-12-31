<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-9 footer-contact">
                    <h3>Honduras Libre Atlantida</h3>
                    <p>
                        La Ceiba Atlantida, Honduras.<br>
                        <strong>Email:</strong> honduraslibre58@gmail.com<br>
                    </p>
                    <br>
                    <img src="{{ asset('assets/media/logo2.png') }}" class="img-fluid img-thumbnail" alt="">
                </div>



                <div class="col-lg-3 col-md-9 footer-links">
                    <h4>{{trans('page::frontend.blog.links')}}</h4>
                    {!! Menu::get('NavBar','menufooter') !!}
                </div>

                <div class="col-lg-6 col-md-6 footer-newsletter">
                    <h4>{{trans('page::frontend.blog.join_newsletter')}}</h4>
                    <p>{{trans('page::frontend.blog.join_newsletter_content')}}</p>
                    <form action="/subscribe" method="POST">
                        {{ csrf_field() }}
                        <input type="email" style="margin-left: -5px" name="email"/>
                        <input type="submit" value="{{trans('page::frontend.blog.subscribe')}}">
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Honduras Libre</span></strong>. {{trans('page::frontend.blog.rights')}}
            </div>
            <div class="credits">
                {{trans('page::frontend.blog.developed')}} <a href="https://camiloalvarado.github.io/" target="_blank">Camilo Alvardo</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://twitter.com/Honduraslibrea1" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/WILLATLANTIDA/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->