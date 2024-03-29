<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp accordion">
            <div class="section-header">
                <h2>Event Schedule</h2>
                <p>Here is our event schedule</p>
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active li-tap1" data-toggle="collapse" data-parent="#accordion" href="#collapse1" id="hug">Day 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link li-tap2" href="#day-2" role="tab2" data-toggle="tab2">Day 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#day-3" role="tab3" data-toggle="tab3">Day 3</a>
                </li>
            </ul>

            <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3>

            <div class="tab-content row justify-content-center">

                <!-- Schdule Day 1 -->
                <div role="tabpanel" class="col-lg-9 tab-pane fade show active hung-tap1 hien">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>09:30 AM ---- Tap 1</time></div>
                                    <div class="col-md-10">
                                        <h4>Registration</h4>
                                        <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                                    </div>
                                </div>
                            </diV>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>10:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Brenden Legros">
                                        </div>
                                        <h4>Keynote <span>Brenden Legros</span></h4>
                                        <p>Facere provident incidunt quos voluptas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>11:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Hubert Hirthe">
                                        </div>
                                        <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                        <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>12:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Cole Emmerich">
                                        </div>
                                        <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                        <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>02:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Jack Christiansen">
                                        </div>
                                        <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                        <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>03:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Alejandrin Littel">
                                        </div>
                                        <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                        <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>04:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Willow Trantow">
                                        </div>
                                        <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                        <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    <!-- End Schdule Day 1 -->

                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active hung-tap2 hien">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>09:30 AM ---- Tap 2</time></div>
                                    <div class="col-md-10">
                                        <h4>Registration</h4>
                                        <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                                    </div>
                                </div>
                            </diV>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>10:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Brenden Legros">
                                        </div>
                                        <h4>Keynote <span>Brenden Legros</span></h4>
                                        <p>Facere provident incidunt quos voluptas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>11:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Hubert Hirthe">
                                        </div>
                                        <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                        <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>12:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Cole Emmerich">
                                        </div>
                                        <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                        <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>02:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Jack Christiansen">
                                        </div>
                                        <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                        <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>03:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Alejandrin Littel">
                                        </div>
                                        <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                        <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>04:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Willow Trantow">
                                        </div>
                                        <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                        <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Schdule Day 2 -->

                    <!-- Schdule Day 3 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active hung-tap3 hien">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>09:30 AM ---- Tap 3</time></div>
                                    <div class="col-md-10">
                                        <h4>Registration</h4>
                                        <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                                    </div>
                                </div>
                            </diV>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>10:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Brenden Legros">
                                        </div>
                                        <h4>Keynote <span>Brenden Legros</span></h4>
                                        <p>Facere provident incidunt quos voluptas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>11:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Hubert Hirthe">
                                        </div>
                                        <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                        <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>12:00 AM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Cole Emmerich">
                                        </div>
                                        <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                        <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>02:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Jack Christiansen">
                                        </div>
                                        <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                        <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>03:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Alejandrin Littel">
                                        </div>
                                        <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                        <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-slide">
                                <div class="row schedule-item">
                                    <div class="col-md-2"><time>04:00 PM</time></div>
                                    <div class="col-md-10">
                                        <div class="speaker">
                                            <img src="images/speakers/1.jpg" alt="Willow Trantow">
                                        </div>
                                        <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                        <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Schdule Day 2 -->

                </div>

            </div>

    </section>
</div>