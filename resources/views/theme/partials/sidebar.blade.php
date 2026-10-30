<aside class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">

        {{-- Newsletter --}}
        <div class="single-sidebar-widget newsletter-widget">
            <h4 class="single-sidebar-widget__title">Newsletter</h4>

            <div class="form-group mt-30">
                <div class="col-autos">
                    <input
                        type="email"
                        class="form-control"
                        id="inlineFormInputGroup"
                        placeholder="Enter email"
                    >
                </div>
            </div>

            <button type="button" class="bbtns d-block mt-20 w-100">
                Subscribe
            </button>
        </div>

        {{-- Categories --}}
        <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">Category</h4>

            <ul class="cat-list mt-20">
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                    </a>
                </li>
            </ul>
        </div>

        {{-- Recent Posts --}}
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Recent Post</h4>

            <div class="popular-post-list">

                @foreach (range(1, 3) as $recent)
                    <div class="single-post-list">
                        <div class="thumb">
                            <img
                                class="card-img rounded-0"
                                src="{{ asset('assets/img/blog/thumb/thumb' . $recent . '.png') }}"
                                alt="Recent post {{ $recent }}"
                            >

                            <ul class="thumb-info">
                                <li><a href="#">Adam Colinge</a></li>
                                <li><a href="#">Dec 15</a></li>
                            </ul>
                        </div>

                        <div class="details mt-20">
                            <a href="blog-single.html">
                                <h6>
                                    Tennessee outback steakhouse worker
                                    diagnosed with an unusual condition.
                                </h6>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</aside>
