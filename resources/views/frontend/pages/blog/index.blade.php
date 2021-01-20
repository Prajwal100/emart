@extends('frontend.layouts.master')

@section('content')

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
                <h6 class="banner-title">Blog</h6>
            </div>
        </div>
    </div>


    <section class="blog-page pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-grid mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-grid-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content mt-20">
                            <h3 class="blog-title"><a href="blog-details.html">Pellentesque malesuadadapibus
                                    maximus.</a></h3>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="lni lni-user"></i> shamiyo </a></li>
                                <li><a href="#"><i class="lni lni-comment-alt"></i> 245 Comment </a></li>
                                <li><a href="#"><i class="lni lni-calendar"></i> 02-07-2022 </a></li>
                            </ul>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor
                                incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Class aptent taciti sociosqu ad
                                litora torquent…</p>
                            <a class="more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="single-blog-grid mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-grid-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content mt-20">
                            <h3 class="blog-title"><a href="blog-details.html">Pellentesque malesuadadapibus
                                    maximus.</a></h3>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="lni lni-user"></i> shamiyo </a></li>
                                <li><a href="#"><i class="lni lni-comment-alt"></i> 245 Comment </a></li>
                                <li><a href="#"><i class="lni lni-calendar"></i> 02-07-2022 </a></li>
                            </ul>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor
                                incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Class aptent taciti sociosqu ad
                                litora torquent…</p>
                            <a class="more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="single-blog-grid mt-30">
                        <div class="blog-image">
                            <img src="frontend/assets/images/blog-grid-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content mt-20">
                            <h3 class="blog-title"><a href="blog-details.html">Pellentesque malesuadadapibus
                                    maximus.</a></h3>
                            <ul class="blog-meta">
                                <li><a href="#"><i class="lni lni-user"></i> shamiyo </a></li>
                                <li><a href="#"><i class="lni lni-comment-alt"></i> 245 Comment </a></li>
                                <li><a href="#"><i class="lni lni-calendar"></i> 02-07-2022 </a></li>
                            </ul>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor
                                incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Class aptent taciti sociosqu ad
                                litora torquent…</p>
                            <a class="more" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="blog-pagination d-sm-flex justify-content-between align-items-center mt-30">
                        <div class="product-results text-center text-sm-left mt-20">
                            <p class="text">Showing: 1 - 4 Of 17</p>
                        </div>
                        <ul class="pagination align-items-end justify-content-center justify-content-sm-end mt-20">
                            <li class="page-item">
                                <a href="#" tabindex="-1"><i class="lni lni-chevron-left"></i></a>
                            </li>
                            <li class="page-item"><a href="#">1</a></li>
                            <li class="page-item active"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item">
                                <a href="#"><i class="lni lni-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar mt-30">
                        <div class="sidebar-post">
                            <div class="sidebar-title">
                                <h4 class="title">RECENT POSTS</h4>
                            </div>
                            <div class="post-list pt-10">
                                <ul>
                                    <li>
                                        <div class="single-sidebar-post d-flex">
                                            <div class="post-image">
                                                <a href="blog-details.html"><img src="frontend/assets/images/blog-1.jpg"
                                                                                 alt="Post"></a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h5 class="post-title"><a href="#">Nam lobortis elit justo ultrices</a>
                                                </h5>
                                                <span><i class="lni lni-calendar"></i> 27-07-2022</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-sidebar-post d-flex">
                                            <div class="post-image">
                                                <a href="blog-details.html"><img src="frontend/assets/images/blog-2.jpg"
                                                                                 alt="Post"></a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h5 class="post-title"><a href="#">Nam lobortis elit justo ultrices</a>
                                                </h5>
                                                <span><i class="lni lni-calendar"></i> 27-07-2022</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-sidebar-post d-flex">
                                            <div class="post-image">
                                                <a href="blog-details.html"><img src="frontend/assets/images/blog-3.jpg"
                                                                                 alt="Post"></a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h5 class="post-title"><a href="#">Nam lobortis elit justo ultrices</a>
                                                </h5>
                                                <span><i class="lni lni-calendar"></i> 27-07-2022</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-about mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">About</h4>
                            </div>
                            <div class="sidebar-about-content pt-20">
                                <div class="about-image">
                                    <img src="frontend/assets/images/about-w.jpg" alt="about">
                                </div>
                                <div class="about-content pt-30">
                                    <h4 class="title">Pellentesque malesapibus maximus.</h4>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
                                        illum ratione,</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-category mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">CATEGORIES</h4>
                            </div>
                            <div class="sidebar-category-list pt-10">
                                <ul>
                                    <li><a href="#"><i class="lni lni-folder"></i> All about clothing
                                            <span>(50)</span></a></li>
                                    <li><a href="#"><i class="lni lni-folder"></i> Make-up & beauty
                                            <span>(18)</span></a></li>
                                    <li><a href="#"><i class="lni lni-folder"></i> Accessories <span>(0)</span></a></li>
                                    <li><a href="#"><i class="lni lni-folder"></i> Fashion trends <span>(11)</span></a>
                                    </li>
                                    <li><a href="#"><i class="lni lni-folder"></i> Haircuts & hairstyles
                                            <span>(15)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-add mt-30">
                            <img src="frontend/assets/images/add-blog.jpg" alt="Add">
                        </div>
                        <div class="sidebar-tag mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">POPULAR TAGS</h4>
                            </div>
                            <div class="sidebar-tag-list pt-15">
                                <ul>
                                    <li><a href="#"> Fashion</a></li>
                                    <li><a href="#"> Clothing</a></li>
                                    <li><a href="#"> Trends</a></li>
                                    <li><a href="#"> Shoes</a></li>
                                    <li><a href="#"> Tops</a></li>
                                    <li><a href="#"> Sell Off</a></li>
                                    <li><a href="#"> Women Fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
