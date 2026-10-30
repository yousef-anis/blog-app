<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay updated with our latest news.</p>

                    <div id="mc_embed_signup">
                        <form
                            target="_blank"
                            novalidate
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get"
                            class="form-inline"
                        >
                            <div class="d-flex flex-row">

                                <input
                                    class="form-control"
                                    name="EMAIL"
                                    placeholder="Enter Email"
                                    required
                                    type="email"
                                >

                                <button type="submit" class="click-btn btn btn-default">
                                    <span class="lnr lnr-arrow-right"></span>
                                </button>

                                <div style="position: absolute; left: -5000px;">
                                    <input
                                        name="b_36c4fd991d266f23781ded980_aefe40901a"
                                        tabindex="-1"
                                        value=""
                                        type="text"
                                    >
                                </div>

                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instagram Feed</h6>

                    <ul class="instafeed d-flex flex-wrap">
                        @foreach (range(1, 8) as $image)
                            <li>
                                <img
                                    src="{{ asset('assets/img/instagram/i' . $image . '.jpg') }}"
                                    alt="Instagram image {{ $image }}"
                                >
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>

                    <div class="footer-social d-flex align-items-center">
                        <a href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="Dribbble">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" aria-label="Behance">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Copyright --}}
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                Copyright &copy; {{ date('Y') }} All rights reserved |
                This template is made with
                <i class="fa fa-heart" aria-hidden="true"></i>
                by
                <a href="https://colorlib.com" target="_blank" rel="noopener noreferrer">
                    Colorlib
                </a>
            </p>
        </div>

    </div>
</footer>