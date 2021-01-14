<?php
    require_once './header.php';
?>
<div class="section ">
    <h2>Testimonials </h2>
    <div class="sliderShow">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-slide-header">
                        <svg class="avatar " viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            style="width: 10%;">
                            <defs>
                                <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
                                    <image xlink:href="./img/client-avatar-1.jpg" x="-25" width="150" height="100" />
                                </pattern>
                            </defs>
                            <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)" style="" />
                        </svg>

                        <h4 class="title title-h3">Daniel Trump</h4>
                    </div>
                    <p class="review-catiop">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi et fugit eaque fugiat quia cumque, alias ea veniam at culpa
                        necessitatibus accusantium laboriosam!
                        Iure iusto iste laboriosam? Explicabo, ducimus inventore.
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-header">
                        <svg class="avatar " viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            style="width: 10%;">
                            <defs>
                                <pattern id="img1" patternUnits="userSpaceOnUse" width="100" height="100">
                                    <image xlink:href="./img/client-avatar-2.jpg" x="-25" width="150" height="100" />
                                </pattern>
                            </defs>
                            <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img1)" style="" />
                        </svg>

                        <h4 class="title title-h3">Hana Lowis</h4>
                    </div>
                    <p class="review-catiop">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi et fugit eaque fugiat quia cumque, alias ea veniam at culpa
                        necessitatibus accusantium laboriosam!
                        Iure iusto iste laboriosam? Explicabo, ducimus inventore.
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-header">
                        <svg class="avatar " viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            style="width: 10%;">
                            <defs>
                                <pattern id="img2" patternUnits="userSpaceOnUse" width="100" height="100">
                                    <image xlink:href="./img/client-avatar-3.jpg" x="-25" width="150" height="100" />
                                </pattern>
                            </defs>
                            <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img2)" style="" />
                        </svg>

                        <h4 class="title title-h3">Jane Whip</h4>
                    </div>
                    <p class="review-catiop">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi et fugit eaque fugiat quia cumque, alias ea veniam at culpa
                        necessitatibus accusantium laboriosam!
                        Iure iusto iste laboriosam? Explicabo, ducimus inventore.
                    </p>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-header">
                        <svg class="avatar " viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            style="width: 10%;">
                            <defs>
                                <pattern id="img4" patternUnits="userSpaceOnUse" width="100" height="100">
                                    <image xlink:href="./img/client-avatar-4.jpg" x="-25" width="150" height="100" />
                                </pattern>
                            </defs>
                            <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img4)" style="" />
                        </svg>

                        <h4 class="title title-h3">Harkin White</h4>
                    </div>
                    <p class="review-catiop">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi et fugit eaque fugiat quia cumque, alias ea veniam at culpa
                        necessitatibus accusantium laboriosam!
                        Iure iusto iste laboriosam? Explicabo, ducimus inventore.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var mySwiper = new Swiper('.swiper-container', {
    //     direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 5000,
    },
});
</script>
<?php
    require_once './footer.php';
?>