<footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Inicio</h4>
                            <ul>
                                <li>
                                    <a href="#">¿Quiénes somos?</a>
                                </li>
                                <li>
                                    <a href="#">¿Qué hacemos?</a>
                                </li>
                                <li>
                                    <a href="#">¿Cómo lo hacemos?</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Cursos</h4>
                            <ul>
                                <li>
                                    <a href="#">Salesforce fos Success</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Analyst</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Administrator</a>
                                </li>
                                <li>
                                    <a href="#">Salesforce Developer</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">El programa</h4>
                            <ul>
                                <li>
                                    <a href="#">Características</a>
                                </li>
                                <li>
                                    <a href="#">Beneficios</a>
                                </li>
                                <li>
                                    <a href="#">Testimoniales</a>
                                </li>
                                <li>
                                    <a href="#">Nuestra Alianza</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-lg-3 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contáctanos</h4>
                            <p>
                                Stay connected with us and let's hear more stories about scholarships and education
                            </p>
                            <ul class="social">
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoFacebook.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoTwitter.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoInstagram.png') ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/img/home/iconoPinterest.png') ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="pt-5 footer-bottom" style="background-color: #ffffff;">
        <div class="row container">
            <div class="col-lg-2 col-md" style="padding-left: 2rem;">
                <img src="<?= base_url('assets/img/home/footerLogo.png') ?>" style="width: 100%;">
            </div>
            <div class="col-10 col-md">
                <small class="d-block mb-3 text-muted" style="color: #00215B !important;">
                    Emerging Technologies Institute | All Rights Reserved
                </small>
            </div>
        </div>
    </div>
    <!-- End Footer-->
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?= base_url('assets/js/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/equal-height.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/modernizr.custom.13711.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/progress-bar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/count-to.js') ?>"></script>
    <script src="<?= base_url('assets/js/YTPlayer.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/circle-progress.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootsnav.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script src="<?= base_url('assets/js/TweenMax.js') ?>"></script>
    <script>
        const counterUp = window.counterUp.default

        const callback = entries => {
            entries.forEach(entry => {
                const el = entry.target
                if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                    counterUp(el, {
                        duration: 2000,
                        delay: 16,
                    })
                    el.classList.add('is-visible')
                }
            })
        }
        const IO = new IntersectionObserver(callback, {
            threshold: 1
        })
        const el = document.querySelector('#counter')
        IO.observe(el)

        const el2 = document.querySelector('#counter2')
        IO.observe(el2)

        const el3 = document.querySelector('#counter3')
        IO.observe(el3)


        var cards = $('#card-slider .slider-item').toArray();

        startAnim(cards);

        function startAnim(array) {
            if (array.length >= 4) {
                TweenMax.fromTo(array[0], 0.5, {
                    x: 0,
                    y: 0,
                    opacity: 0.75,
                    backgroundColor: "unset"
                }, {
                    x: 0,
                    y: -120,
                    opacity: 0,
                    zIndex: 0,
                    delay: 0.03,
                    ease: Cubic.easeInOut,
                    onComplete: sortArray(array),
                    backgroundColor: "unset"
                });

                TweenMax.fromTo(array[1], 0.5, {
                    x: 79,
                    y: 125,
                    opacity: 1,
                    zIndex: 1,
                    backgroundColor: "unset"
                }, {
                    x: 0,
                    y: 0,
                    opacity: 0.75,
                    zIndex: 0,
                    boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
                    ease: Cubic.easeInOut,
                    backgroundColor: "unset"
                });

                TweenMax.to(array[2], 0.5, {
                    bezier: [{
                        x: 0,
                        y: 250
                    }, {
                        x: 65,
                        y: 200
                    }, {
                        x: 79,
                        y: 125
                    }],
                    boxShadow: '-5px 8px 8px 0 rgba(82,89,129,0.05)',
                    zIndex: 1,
                    opacity: 1,
                    ease: Cubic.easeInOut,
                    backgroundColor: "#25C7D9",
                    color: "#ffffff"
                });

                TweenMax.fromTo(array[3], 0.5, {
                    x: 0,
                    y: 400,
                    opacity: 0,
                    zIndex: 0
                }, {
                    x: 0,
                    y: 250,
                    opacity: 0.75,
                    zIndex: 0,
                    ease: Cubic.easeInOut
                }, );
            } else {
                $('#card-slider').append('<p>Sorry, carousel should contain more than 3 slides</p>')
            }
        }

        function sortArray(array) {
            clearTimeout(delay);
            var delay = setTimeout(function() {
                var firstElem = array.shift();
                array.push(firstElem);
                return startAnim(array);
            }, 3000)
        }
    </script>
</body>

</html>