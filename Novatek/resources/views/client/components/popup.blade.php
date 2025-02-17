<div class="popup-wrapper">
    <div class="bg-layer"></div>
    <div class="popup-content" data-rel="1">
        <div class="layer-close"></div>
        <div class="popup-container size-1">
            <div class="popup-align">
                <h3 class="h3 text-center">Log in</h3>
                <div class="empty-space col-xs-b30"></div>
                <input class="simple-input" type="text" value="" placeholder="Your email"  />
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <input class="simple-input" type="password" value="" placeholder="Enter password" />
                <div class="empty-space col-xs-b10 col-sm-b20"></div>
                <div class="row">
                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                        <div class="empty-space col-sm-b5"></div>
                        <a class="simple-link">Forgot password?</a>
                        <div class="empty-space col-xs-b5"></div>
                        <a class="simple-link">register now</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="button size-2 style-3" href="#">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">submit</span>
                            </span>
                        </a>  
                    </div>
                </div>
                <div class="popup-or">
                    <span>or</span>
                </div>
                <div class="row m5">
                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                        <a class="button facebook-button size-2 style-4 block" href="{{URL::to('login-facebook')}}">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">facebook</span>
                            </span>
                        </a>
                    </div>
                   
                    <div class="col-sm-6">
                        <a class="button google-button size-2 style-4 block" href="{{URL::to('login-google')}}">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">google+</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    <div class="popup-content" data-rel="2">
        <div class="layer-close"></div>
        <div class="popup-container size-1">
            <div class="popup-align">
                <h3 class="h3 text-center">register</h3>
                <form action="{{URL::to('/register')}}" method="post">
                    @csrf
                    <div class="empty-space col-xs-b30"></div>
                    <input class="simple-input" type="text" value="" name="user_name" placeholder="Your name" required/>
                    <div class="col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="email" value="" name="user_email" placeholder="Your email" required />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="text" value="" name="user_phone" placeholder="Your phone" required pattern="[0-9]" title="Phone must be digits"/>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="text" value="" name="user_address" placeholder="Your address" required />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" id="password" name="user_password" placeholder="Enter password" required minlength="8" />
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <input class="simple-input" type="password" id="confirm_password" name="user_repeat_password" placeholder="Repeat password" required />
                    <span id="message" style="font-size:20px;height:10px"></span>
                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                    <div class="row">
                        <div class="col-sm-10 text-right">
                            <span class="button size-2 style-3">
                                <span class="button-wrapper">
                                    {{-- <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span> --}}
                                    <span style="height:20px;width:100px;font-size:15px"><input type="submit" value="" name="register">submit</span>
                                </span>
                            </span>  
                        </div>
                    </div>
                </form>
                <div class="popup-or">
                    <span>or</span>
                </div>
                <div class="row m5">
                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                        <a class="button facebook-button size-2 style-4 block" href="{{URL::to('login-facebook')}}">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">facebook</span>
                            </span>
                        </a>
                    </div>
                    
                    <div class="col-sm-6">
                        <a class="button google-button size-2 style-4 block" href="{{URL::to('login-google')}}">
                            <span class="button-wrapper">
                                <span class="icon"><img src="{{ asset('client/img/icon-4.png')}}" alt="" /></span>
                                <span class="text">google+</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

    <div class="popup-content" data-rel="3">
        <div class="layer-close"></div>
        <div class="popup-container size-2">
            <div class="popup-align">
                <div class="row">
                    <div class="col-sm-6 col-xs-b30 col-sm-b0">
                        
                        <div class="main-product-slider-wrapper swipers-couple-wrapper">
                            <div class="swiper-container swiper-control-top">
                               <div class="swiper-button-prev hidden"></div>
                               <div class="swiper-button-next hidden"></div>
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-4.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-5.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-6.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-7.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-8.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-9.jpg')}}"></div>
                                   </div>
                                   <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="{{ asset('client/img/product-preview-10.jpg')}}"></div>
                                   </div>
                               </div>
                            </div>

                            <div class="empty-space col-xs-b30 col-sm-b60"></div>

                            <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                               <div class="swiper-button-prev hidden"></div>
                               <div class="swiper-button-next hidden"></div>
                               <div class="swiper-wrapper">
                                   <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-4_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-5_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-6_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-7_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-8_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-9_.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ asset('client/img/product-preview-10_.jpg')}}" alt="" />
                                        </div>
                                   </div>

                               </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                        <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                        <div class="row col-xs-b25">
                            <div class="col-sm-6">
                                <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="rate-wrapper align-inline">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="simple-article size-2 align-inline">128 Reviews</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                            </div>
                        </div>
                        <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">size:</div>
                            </div>
                            <div class="col-sm-9">
                                <select class="SlectBox">
                                    <option disabled="disabled" selected="selected">Choose size</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title">color:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="color-selection size-1">
                                    <div class="entry active" style="color: #a7f050;"></div>
                                    <div class="entry" style="color: #50e3f0;"></div>
                                    <div class="entry" style="color: #eee;"></div>
                                    <div class="entry" style="color: #4d900c;"></div>
                                    <div class="entry" style="color: #edb82c;"></div>
                                    <div class="entry" style="color: #7d3f99;"></div>
                                    <div class="entry" style="color: #3481c7;"></div>
                                    <div class="entry" style="color: #bf584b;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">quantity:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="quantity-select">
                                    <span class="minus"></span>
                                    <span class="number">1</span>
                                    <span class="plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row m5 col-xs-b40">
                            <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                <a class="button size-2 style-2 block" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="{{ asset('client/img/icon-2.png')}}" alt=""></span>
                                        <span class="text">add to cart</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a class="button size-2 style-1 block noshadow" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                    <span class="text">add to favourites</span>
                                </span>
                            </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-2">share:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="follow light">
                                    <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-close"></div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>