@extends('application.layouts.app')
@section('content')
<div class="site_content">
    <!-- Preloader Start -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Header Section Start -->
    <header id="top-navbar" class="top-navbar">
        <div class="container">
            <div class="top-navbar_full">
                <div class="back-btn d-flex align-items-center">
                    <a href="shopping-cart.html"><img src="assets/images/forget-password-screen/back-btn.svg" alt="back-btn-img"></a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>Checkout</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!-- Checkout page Section Start -->
    <section id="checkout-page">
        <div class="checkout-page-increment-sec-full mt-24">
            <div class="container">
                @if(empty($cart))
                    <p>The cart is empty</p>
                @else
                <div class="check-page-top-content">
                    <div class="checkout-page-top-sec">
                        <div class="checkout-page-top-sec-img">
                            <img src="assets/images/checkoutpage/chair.png" alt="chair-img" class="img-fluid">
                        </div>
                        <div class="checkout-quantity-sec">
                            <p class="chek-txt1">Chairs</p>
                            <h3 class="chek-txt2 mt-16">Wing Chair</h3>
                            <h4 class="chek-txt3 mt-8">Qty: 2</h4>
                        </div>
                        <div class="checkoutpage-increment-full">
                            <div class="checkoutpage-increment-full-details">
                                <p class="chek-txt4">$200</p>
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="quantity__minus sub">
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H7" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                    <input name="quantity" type="text" class="quantity__input" value="2">
                                    <a href="javascript:void(0)" class="quantity__plus add">
                                        <span>
                                            <svg  width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4H7" stroke="#e7ef04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4 7V1" stroke="#e7ef04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkoutpage-boder mt-16"></div>
                </div>
                @endif
                <div class="check-page-top-content mt-16">
                    <div class="checkout-page-top-sec">
                        <div class="checkout-page-top-sec-img">
                            <img src="assets/images/checkoutpage/light.png" alt="light-img" class="img-fluid">
                        </div>
                        <div class="checkout-quantity-sec">
                            <p class="chek-txt1">Lamps</p>
                            <h3 class="chek-txt2 mt-16">Round White Light</h3>
                            <h4 class="chek-txt3 mt-8">Qty:1</h4>
                        </div>
                        <div class="checkoutpage-increment-full">
                            <div class="checkoutpage-increment-full-details">
                                <p class="chek-txt4">$40</p>
                                <div class="quantity">
                                    <a href="javascript:void(0)" class="quantity__minus sub">
                                        <span>
                                            <svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H7" stroke="#666666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                    <input name="quantity" type="text" class="quantity__input" value="2">
                                    <a href="javascript:void(0)" class="quantity__plus add">
                                        <span>
                                            <svg  width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 4H7" stroke="#e7ef04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4 7V1" stroke="#e7ef04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkoutpage-boder mt-16"></div>
                </div>
            </div>
        </div>
        <div class="checkoutpage-second-sec mt-24">
            <div class="container">
                <div class="payment-mode-sec">
                    <div class="payment-mode-custom">
                        <input  type="radio" name="payment-type" id="payment-type1" value="payment-type1" checked>
                        <label class="payment-mode-custom-label" for="payment-type1">
                            Delivery
                        </label>
                    </div>
                    <div class="payment-mode-custom">
                        <input type="radio" name="payment-type" id="payment-type2" value="payment-type2">
                        <label class="payment-mode-custom-label" for="payment-type2">
                            Pickup
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkoutpage-third-sec mt-24">
            <div class="container">
                <div class="time-addreess-sec">
                    <div class="time-addreess-sec-deatils">
                        <div class="time-add-main-sec">
                            <h4 class="time-txt1">Delivery Date & Time</h4>
                            <div class="time-add-main-sec-full">
                                <div class="time-content-sec">
                                    <p class="time-txt2">Monday, December 26</p>
                                    <p class="time-txt3">05:00 PM</p>
                                </div>
                                <div class="time-icon-sec">
                                    <a href="javascript:void(0)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_1_2447)">
                                                <path d="M8.91016 19.92L15.4302 13.4C16.2002 12.63 16.2002 11.37 15.4302 10.6L8.91016 4.08002" stroke="#666666" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="time-add-main-sec mt-24">
                            <h4 class="time-txt1">Delivery Address</h4>
                            <div class="time-add-main-sec-full">
                                <div class="time-content-sec">
                                    <p class="time-txt2">Home</p>
                                    <p class="time-txt3">121 Parkview Street, Albert View, NY 01256</p>
                                </div>
                                <div class="time-icon-sec">
                                    <a href="javascript:void(0)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_1_2447)">
                                                <path d="M8.91016 19.92L15.4302 13.4C16.2002 12.63 16.2002 11.37 15.4302 10.6L8.91016 4.08002" stroke="#666666" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="checkoutpage-boder mt-24"></div>
                        </div>
                        <div class="checkout-message mt-24">
                            <div class="checkout-message-full">
                                <h4 class="time-txt1">Special Notes for catchyTAT <span>(Optional)</span></h4>
                                <form class="checkout-message-des">
                                    <div class="checkout-message-form">
                                        <textarea class="checkout-message"  id="message" placeholder="Write your message"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="checkoutpage-boder mt-24"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="payment-method-checkoutpage mt-24">
            <div class="container">
                <div class="row" >
                    <div class="col-8">
                        <h4 class="pay-text1">Payment Method</h4>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a href="paypal.html"><p class="add-btn-cheackpage">Add</p></a>
                    </div>
                </div>
            </div>
            <div class="payment-method-checkoutpage-full payment-mode mt-12">
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html"   id="payment-1" name="payment-option" checked >
                    <label class="payment-custom-radio " for="payment-1">
                        <svg width="51" height="22" viewBox="0 0 51 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.45424 3.03397C8.86669 3.75242 7.92661 4.3191 6.98653 4.23814C6.86902 3.26671 7.32926 2.23456 7.86785 1.59705C8.4554 0.858358 9.48362 0.332163 10.316 0.291687C10.4139 1.3036 10.032 2.29527 9.45424 3.03397ZM10.3061 4.4304C9.47792 4.38114 8.72223 4.68778 8.11184 4.93545C7.71903 5.09484 7.3864 5.22981 7.13334 5.22981C6.84935 5.22981 6.50299 5.08762 6.1141 4.92798C5.60453 4.71879 5.02195 4.47964 4.41102 4.49111C3.01069 4.51135 1.70828 5.331 0.993431 6.63636C-0.475447 9.2471 0.611523 13.1126 2.03144 15.2376C2.72671 16.29 3.55907 17.4436 4.65583 17.4031C5.13834 17.3843 5.48543 17.2321 5.84464 17.0746C6.25818 16.8933 6.68778 16.7049 7.35857 16.7049C8.0061 16.7049 8.41692 16.8883 8.81127 17.0645C9.18624 17.2319 9.54633 17.3927 10.0809 17.3829C11.2168 17.3626 11.9317 16.3305 12.6269 15.2781C13.3773 14.1486 13.707 13.0462 13.757 12.879L13.7629 12.8596C13.7617 12.8584 13.7524 12.854 13.7361 12.8463L13.7361 12.8463C13.4852 12.7276 11.5682 11.8207 11.5498 9.38876C11.5313 7.34751 13.0703 6.31329 13.3126 6.15048C13.3274 6.14057 13.3373 6.13389 13.3418 6.13041C12.3625 4.63278 10.8349 4.47088 10.3061 4.4304ZM18.1696 17.2715V1.49585H23.8982C26.8556 1.49585 28.9218 3.60062 28.9218 6.67683C28.9218 9.75304 26.8164 11.8781 23.8199 11.8781H20.5394V17.2715H18.1696ZM20.5392 3.56015H23.2713C25.3277 3.56015 26.5028 4.69349 26.5028 6.68696C26.5028 8.68042 25.3277 9.82388 23.2615 9.82388H20.5392V3.56015ZM36.7461 15.3793C36.1194 16.6138 34.7387 17.393 33.2502 17.393C31.0469 17.393 29.5094 16.037 29.5094 13.993C29.5094 11.9691 30.9979 10.8054 33.7496 10.6334L36.7069 10.4513V9.58102C36.7069 8.2959 35.8942 7.59768 34.4449 7.59768C33.2502 7.59768 32.3787 8.23518 32.2024 9.20662H30.0676C30.1362 7.16256 31.9967 5.67505 34.5134 5.67505C37.226 5.67505 38.9886 7.14232 38.9886 9.41912V17.2715H36.7951V15.3793H36.7461ZM33.8865 15.521C32.6233 15.521 31.8203 14.8936 31.8203 13.9323C31.8203 12.9406 32.5939 12.3638 34.0726 12.2727L36.7068 12.1007V12.9912C36.7068 14.4686 35.4925 15.521 33.8865 15.521ZM46.2644 17.8888C45.3145 20.6513 44.2275 21.5621 41.9165 21.5621C41.7402 21.5621 41.1527 21.5418 41.0156 21.5013V19.6091C41.1624 19.6293 41.5248 19.6495 41.7108 19.6495C42.7586 19.6495 43.3462 19.1942 43.7085 18.0102L43.9239 17.312L39.909 5.82684H42.3865L45.1774 15.1465H45.2263L48.0172 5.82684H50.4262L46.2644 17.8888Z" fill="#1E293B"/>
                        </svg>
                    </label>
                </div>
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html" id="payment-2" name="payment-option" >
                    <label class="payment-custom-radio " for="payment-2">
                        <svg width="50" height="22" viewBox="0 0 50 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.0603 16.703V10.7114H26.1786C27.4564 10.7114 28.535 10.2868 29.4142 9.44938L29.6252 9.23708C31.2313 7.5033 31.1258 4.80237 29.4142 3.19832C28.5584 2.34912 27.3861 1.88914 26.1786 1.91273H21.1729V16.703H23.0603ZM23.0605 8.89493V3.72896H26.2262C26.9063 3.72896 27.5511 3.98844 28.0319 4.46021C29.0519 5.45095 29.0754 7.10217 28.0905 8.12829C27.6098 8.63545 26.9297 8.91852 26.2262 8.89493H23.0605ZM38.4293 7.37351C37.6204 6.63046 36.5185 6.25304 35.1234 6.25304C33.3298 6.25304 31.9816 6.91353 31.0907 8.22271L32.7553 9.27242C33.3649 8.37604 34.1973 7.92785 35.2524 7.92785C35.9206 7.92785 36.5654 8.17554 37.0695 8.62373C37.5618 9.04833 37.8432 9.66164 37.8432 10.3103V10.7467C37.1163 10.3457 36.2019 10.1334 35.0765 10.1334C33.7635 10.1334 32.7085 10.4401 31.923 11.0652C31.1376 11.6903 30.739 12.5159 30.739 13.5656C30.7155 14.521 31.1258 15.4291 31.8527 16.0424C32.5912 16.7029 33.5291 17.0332 34.631 17.0332C35.9323 17.0332 36.9639 16.4552 37.7494 15.2994H37.8315V16.7029H39.6368V10.4637C39.6368 9.15448 39.2382 8.11656 38.4293 7.37351ZM33.3066 14.8394C32.9197 14.5564 32.6852 14.0964 32.6852 13.601C32.6852 13.0467 32.9432 12.5867 33.4473 12.2211C33.9632 11.8554 34.6081 11.6667 35.3702 11.6667C36.4255 11.6549 37.2462 11.8908 37.8325 12.3626C37.8325 13.1646 37.5159 13.8605 36.8945 14.4502C36.3317 15.0164 35.5696 15.3348 34.7723 15.3348C34.2446 15.3466 33.7287 15.1697 33.3066 14.8394ZM43.693 21.1494L50.0001 6.58327H47.9485L45.0295 13.8486H44.9943L42.0049 6.58327H39.9534L44.0916 16.0542L41.747 21.1494H43.693Z" fill="#3C4043"/>
                            <path d="M16.5442 9.41404C16.5442 8.83611 16.4973 8.25818 16.4035 7.69205H8.44353V10.9591H13.0038C12.8163 12.0088 12.2066 12.9524 11.3157 13.5421V15.6651H14.0355C15.6298 14.1908 16.5442 12.0088 16.5442 9.41404Z" fill="#4285F4"/>
                            <path d="M8.44389 17.7173C10.7182 17.7173 12.6408 16.9625 14.0358 15.6651L11.3161 13.5421C10.5541 14.0611 9.58103 14.3559 8.44389 14.3559C6.23995 14.3559 4.37597 12.858 3.70775 10.853H0.90593V13.0467C2.33615 15.9128 5.25521 17.7173 8.44389 17.7173Z" fill="#25D366"/>
                            <path d="M3.70806 10.853C3.35631 9.80331 3.35631 8.65924 3.70806 7.59774V5.41577H0.905785C-0.301888 7.81004 -0.301888 10.6407 0.905785 13.035L3.70806 10.853Z" fill="#FBBC04"/>
                            <path d="M8.44389 4.09475C9.65137 4.07116 10.812 4.53114 11.6795 5.36855L14.0944 2.93889C12.5587 1.49997 10.5423 0.709743 8.44389 0.733332C5.25521 0.733332 2.33615 2.54968 0.90593 5.41573L3.70775 7.60949C4.37597 5.59264 6.23995 4.09475 8.44389 4.09475Z" fill="#EA4335"/>
                        </svg>
                    </label>
                </div>
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html" id="payment-3" name="payment-option" >
                    <label class="payment-custom-radio " for="payment-3">
                        <svg width="50" height="17" viewBox="0 0 50 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1329 16.3773H8.89223L5.71227 3.99276C5.56133 3.42308 5.24086 2.91944 4.76944 2.68207C3.59298 2.08555 2.2966 1.61081 0.88236 1.37138V0.894577H7.7137C8.65653 0.894577 9.36365 1.61081 9.4815 2.44264L11.1314 11.376L15.37 0.894577H19.4928L13.1329 16.3773ZM21.8499 16.3773H17.8449L21.1428 0.894577H25.1477L21.8499 16.3773ZM30.3291 5.18376C30.447 4.34987 31.1541 3.87306 31.979 3.87306C33.2754 3.75335 34.6876 3.99278 35.8661 4.58724L36.5732 1.25374C35.3947 0.77694 34.0983 0.537506 32.9219 0.537506C29.0348 0.537506 26.2063 2.68209 26.2063 5.65849C26.2063 7.92279 28.2098 9.1117 29.624 9.82794C31.1541 10.5421 31.7433 11.0189 31.6255 11.7331C31.6255 12.8043 30.447 13.2812 29.2705 13.2812C27.8563 13.2812 26.442 12.9241 25.1477 12.3275L24.4406 15.6631C25.8548 16.2576 27.3848 16.497 28.7991 16.497C33.1576 16.6146 35.8661 14.4721 35.8661 11.2563C35.8661 7.20656 30.3291 6.96919 30.3291 5.18376V5.18376ZM49.8824 16.3773L46.7024 0.894577H43.2867C42.5796 0.894577 41.8725 1.37138 41.6368 2.08555L35.7483 16.3773H39.871L40.6939 14.115H45.7596L46.231 16.3773H49.8824ZM43.876 5.06404L45.0525 10.8992H41.7546L43.876 5.06404Z" fill="#172B85"/>
                        </svg>
                    </label>
                </div>
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html"  id="payment-4" name="payment-option" >
                    <label class="payment-custom-radio " for="payment-4">
                        <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.08806 26.6652L7.5425 23.7066L6.53018 23.6824H1.6962L5.05565 1.84959C5.06611 1.78348 5.09995 1.72211 5.14936 1.67845C5.19901 1.63479 5.2623 1.61084 5.3285 1.61084H13.4793C16.1855 1.61084 18.0529 2.18789 19.0277 3.32702C19.4848 3.86141 19.7759 4.41999 19.9169 5.03447C20.0646 5.67937 20.067 6.44977 19.923 7.38956L19.9125 7.45792V8.06017L20.3696 8.32562C20.7544 8.53493 21.0604 8.77443 21.295 9.04861C21.6859 9.50566 21.9388 10.0865 22.0457 10.7748C22.1562 11.4828 22.1197 12.3255 21.9388 13.2796C21.7302 14.3768 21.3931 15.3325 20.9377 16.1144C20.519 16.8349 19.9855 17.4327 19.3519 17.8957C18.7471 18.3358 18.0285 18.6698 17.2161 18.8836C16.4287 19.0937 15.531 19.1997 14.5464 19.1997H13.9121C13.4587 19.1997 13.0181 19.3671 12.6722 19.6673C12.3254 19.9736 12.0961 20.3923 12.0257 20.8501L11.9778 21.1165L11.1748 26.3314L11.1385 26.5227C11.1288 26.5834 11.1122 26.6136 11.0879 26.634C11.0662 26.6527 11.0351 26.6652 11.0047 26.6652H7.08806Z" fill="#28356A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8028 7.52747C20.7787 7.68688 20.7507 7.84979 20.7196 8.0172C19.6447 13.6739 15.9671 15.6281 11.2704 15.6281H8.87897C8.30454 15.6281 7.82041 16.0555 7.73108 16.6363L6.15991 26.8512C6.10174 27.2327 6.38847 27.5762 6.76379 27.5762H11.0053C11.5075 27.5762 11.9342 27.2023 12.0133 26.6946L12.0549 26.4738L12.8535 21.2793L12.9049 20.9944C12.983 20.485 13.4106 20.1108 13.9128 20.1108H14.5471C18.6565 20.1108 21.8735 18.4008 22.8138 13.4521C23.2064 11.3849 23.0032 9.65878 21.9638 8.44481C21.6494 8.07882 21.2592 7.77495 20.8028 7.52747Z" fill="#298FC2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6779 7.068C19.5136 7.01886 19.3442 6.97445 19.1704 6.93428C18.9956 6.89511 18.8167 6.86044 18.6325 6.83C17.9877 6.72322 17.2811 6.67258 16.5243 6.67258H10.1357C9.97825 6.67258 9.8288 6.709 9.69517 6.77486C9.40041 6.92006 9.18159 7.20597 9.12853 7.55599L7.76937 16.3791L7.73042 16.6363C7.81975 16.0555 8.30388 15.6282 8.87831 15.6282H11.2697C15.9665 15.6282 19.644 13.673 20.7189 8.01728C20.751 7.84988 20.7781 7.68697 20.8022 7.52755C20.5303 7.37961 20.2358 7.25312 19.9186 7.14534C19.8402 7.11865 19.7594 7.09295 19.6779 7.068Z" fill="#22284F"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.1289 7.55602C9.18196 7.206 9.40078 6.92009 9.69554 6.77589C9.83014 6.70978 9.97862 6.67336 10.1361 6.67336H16.5247C17.2814 6.67336 17.988 6.72425 18.6328 6.83103C18.8171 6.86122 18.996 6.89614 19.1707 6.93531C19.3445 6.97523 19.5139 7.01989 19.6782 7.06878C19.7598 7.09373 19.8406 7.11968 19.9197 7.14537C20.2368 7.25315 20.5316 7.38063 20.8035 7.52758C21.1233 5.43718 20.8008 4.01389 19.6982 2.72507C18.4824 1.30603 16.2884 0.698792 13.4807 0.698792H5.32962C4.75616 0.698792 4.26692 1.12615 4.17832 1.70794L0.783332 23.7653C0.716396 24.2016 1.04475 24.5953 1.47411 24.5953H6.50623L9.1289 7.55602Z" fill="#28356A"/>
                        </svg>
                    </label>
                </div>
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html" id="payment-5" name="payment-option" >
                    <label class="payment-custom-radio " for="payment-5">
                        <svg width="47" height="28" viewBox="0 0 47 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3685 24.3601C20.9307 26.3978 17.7686 27.6279 14.3132 27.6279C6.60315 27.6279 0.352936 21.5035 0.352936 13.9487C0.352936 6.3939 6.60315 0.269531 14.3132 0.269531C17.7686 0.269531 20.9307 1.49963 23.3685 3.5373C25.8062 1.49963 28.9684 0.269531 32.4238 0.269531C40.1338 0.269531 46.384 6.3939 46.384 13.9487C46.384 21.5035 40.1338 27.6279 32.4238 27.6279C28.9684 27.6279 25.8062 26.3978 23.3685 24.3601Z" fill="#ED0006"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3685 24.3601C26.3701 21.8511 28.2734 18.1177 28.2734 13.9487C28.2734 9.7797 26.3701 6.0463 23.3685 3.53729C25.8062 1.49962 28.9684 0.269531 32.4237 0.269531C40.1338 0.269531 46.384 6.3939 46.384 13.9487C46.384 21.5035 40.1338 27.6279 32.4237 27.6279C28.9684 27.6279 25.8062 26.3978 23.3685 24.3601Z" fill="#F9A000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3685 24.36C26.3701 21.851 28.2734 18.1177 28.2734 13.9487C28.2734 9.77974 26.3701 6.04636 23.3685 3.53735C20.3669 6.04636 18.4636 9.77974 18.4636 13.9487C18.4636 18.1177 20.3669 21.851 23.3685 24.36Z" fill="#FF5E00"/>
                        </svg>
                    </label>
                </div>
                <div class="check-select-mode">
                    <input type="radio" data-target="paypal.html"  id="payment-6" name="payment-option" >
                    <label class="payment-custom-radio " for="payment-6">
                        <svg width="42" height="27" viewBox="0 0 42 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.9643 21.449C33.3658 24.8208 26.6997 26.6136 20.9588 26.6136C12.9131 26.6136 5.66811 23.6585 0.186026 18.7403C-0.244327 18.354 0.139058 17.8265 0.656793 18.1261C6.57142 21.5456 13.8863 23.6053 21.4415 23.6053C26.5381 23.6053 32.1403 22.5549 37.2958 20.3822C38.0724 20.0534 38.7245 20.8901 37.9643 21.449ZM39.8768 19.2786C40.4655 20.0274 39.2225 23.1105 38.6677 24.4876C38.4995 24.9044 38.8599 25.0726 39.24 24.7568C41.7064 22.7068 42.3442 18.4104 41.8396 17.7897C41.3383 17.1743 37.026 16.6447 34.3936 18.4809C33.9884 18.7631 34.0583 19.1538 34.5072 19.0995C35.9894 18.9237 39.2892 18.5298 39.8768 19.2786Z" fill="#FF9900"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33.2195 13.758L38.0058 1.65457C38.1063 1.40931 38.1577 1.23676 38.1577 1.13583C38.1577 0.963282 38.0561 0.876465 37.8529 0.876465H36.635C36.4024 0.876465 36.244 0.913362 36.1555 0.984987C36.0682 1.0577 35.9819 1.21614 35.8945 1.4614L32.9574 9.84689L29.9121 1.4614C29.8248 1.21614 29.7385 1.0577 29.6511 0.984987C29.5637 0.913362 29.4042 0.876465 29.1716 0.876465H27.8663C27.6632 0.876465 27.5616 0.963282 27.5616 1.13583C27.5616 1.23676 27.6118 1.40931 27.7134 1.65457L31.9121 11.9424L31.4992 13.045C31.2524 13.7374 30.9771 14.2127 30.6724 14.4721C30.3676 14.7315 29.9394 14.8606 29.3889 14.8606C29.1421 14.8606 28.9466 14.8454 28.8024 14.8172C28.6571 14.789 28.5479 14.7738 28.4758 14.7738C28.2585 14.7738 28.1492 14.9105 28.1492 15.184V15.7461C28.1492 15.948 28.1853 16.0956 28.2584 16.1889C28.3305 16.2822 28.4463 16.3517 28.6069 16.394C28.9684 16.4939 29.3824 16.546 29.8466 16.546C30.6735 16.546 31.3441 16.33 31.8586 15.897C32.3752 15.4662 32.8285 14.7521 33.2195 13.758Z" fill="#232F3E"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3522 3.85111C15.1413 3.15223 14.841 2.55753 14.4489 2.06809C14.0578 1.57866 13.5794 1.20317 13.0136 0.943807C12.4489 0.684439 11.8176 0.555298 11.1207 0.555298C10.4686 0.555298 9.82966 0.676842 9.20707 0.922102C8.58338 1.16736 7.99574 1.52766 7.44415 2.00298L7.33601 1.31061C7.29232 1.02303 7.12521 0.878693 6.83466 0.878693H5.87784C5.58839 0.878693 5.44312 1.02303 5.44312 1.31061V15.8569C5.44312 16.1456 5.58839 16.2888 5.87784 16.2888H7.16125C7.45179 16.2888 7.59597 16.1445 7.59597 15.8569V10.7998C8.5386 11.6495 9.66254 12.0749 10.9678 12.0749C11.6778 12.0749 12.3233 11.9338 12.9033 11.6538C13.4833 11.3728 13.9759 10.9799 14.3822 10.4753C14.7885 9.97175 15.1042 9.35969 15.3281 8.63802C15.5531 7.91743 15.6657 7.11003 15.6657 6.21689C15.6678 5.33895 15.5619 4.54999 15.3522 3.85111ZM10.4686 10.3451C9.48123 10.3451 8.5244 9.99997 7.59706 9.3076V3.27811C8.5102 2.61505 9.48232 2.28405 10.5123 2.28405C12.485 2.28405 13.4713 3.6319 13.4713 6.32541C13.4702 9.00591 12.4697 10.3451 10.4686 10.3451Z" fill="#232F3E"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.1616 1.4039C24.5084 0.842839 23.4937 0.561768 22.1164 0.561768C21.4348 0.561768 20.7532 0.623625 20.0716 0.74517C19.389 0.867799 18.8166 1.0295 18.3524 1.23135C18.1787 1.30406 18.0619 1.37894 18.004 1.45816C17.9461 1.53738 17.9166 1.67846 17.9166 1.87922V2.46199C17.9166 2.72135 18.0105 2.85158 18.1995 2.85158C18.2574 2.85158 18.3196 2.84073 18.3852 2.81902C18.4507 2.79732 18.5053 2.77996 18.5479 2.76476C19.6653 2.43377 20.7303 2.26773 21.7461 2.26773C22.6155 2.26773 23.225 2.42617 23.5734 2.74414C23.9219 3.06103 24.0955 3.60798 24.0955 4.38608V5.81206C23.0808 5.5668 22.1666 5.44526 21.354 5.44526C20.0782 5.44526 19.0635 5.75888 18.3087 6.38506C17.555 7.01123 17.1771 7.85119 17.1771 8.90277C17.1771 9.8838 17.4819 10.6641 18.0914 11.2479C18.6997 11.8318 19.5266 12.1226 20.5708 12.1226C21.1945 12.1226 21.8214 12 22.4528 11.7558C23.0841 11.5116 23.6597 11.1644 24.1818 10.7183L24.2911 11.4313C24.3347 11.7048 24.4942 11.8415 24.7706 11.8415H25.7055C25.995 11.8415 26.1414 11.6972 26.1414 11.4096V4.01928C26.1403 2.83747 25.8137 1.96604 25.1616 1.4039ZM24.0955 9.40197C23.6171 9.76226 23.1169 10.0357 22.5948 10.2235C22.0727 10.4112 21.5724 10.5045 21.094 10.5045C20.5282 10.5045 20.0935 10.357 19.7887 10.0618C19.484 9.7666 19.3322 9.34554 19.3322 8.7975C19.3322 7.54407 20.1514 6.91681 21.7898 6.91681C22.1666 6.91681 22.5544 6.94286 22.953 6.99278C23.3517 7.04378 23.7329 7.11215 24.0955 7.19789V9.40197Z" fill="#232F3E"/>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="checkoutpage-boder mt-24"></div>
            </div>
        </div>
        <div class="checkoutpage-fifth-sec mt-24">
            <div class="container">
                <div class="checkoutpage-price-sec">
                    <div class="checkoutpage-price-sec-full">
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">Price</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="check-page-bottom mt-12">
                            <div class="check-page-bottom-deatails">
                                <div class="check-price-name">
                                    <p>Wing Chair x 2</p>
                                </div>
                                <div class="check-price-list">
                                    <p>$200.00</p>
                                </div>
                            </div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div class="check-price-name">
                                    <p>Roung White Lamp x 1</p>
                                </div>
                                <div class="check-price-list">
                                    <p>$40.00</p>
                                </div>
                            </div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div class="check-price-name">
                                    <p>Coupon Offer</p>
                                </div>
                                <div >
                                    <p class="col-green">- $00.00</p>
                                </div>
                            </div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div class="check-price-name">
                                    <p >Include taxes</p>
                                </div>
                                <div >
                                    <p class="col-red">+ $20.00</p>
                                </div>
                            </div>
                            <div class="checkoutpage-boder mt-12"></div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div>
                                    <p class="col-black">Total Price</p>
                                </div>
                                <div>
                                    <p class="col-black">$260.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buy-now-btn mt-24">
            <a href="{{route('paymentSuccess')}}" class="checkout-1">Buy Now</a>
            <a href="{{route('paymentSuccess')}}"  class="checkout-2" >Buy Now</a>
        </div>
    </section>
    <!-- Checkout page Section End -->
</div>
@endsection
