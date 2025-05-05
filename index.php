<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="home__duan__section">
    <div class="home__duan__bg uk-section uk-position-relative uk-background-norepeat uk-background-center-center uk-background-image@l" data-src="images/abstrak-1-min-1.webp" uk-img>
        <div class="uk-container">
            <h2 class="fz-38 uk-text-center uk-text-uppercase text-F69C1F">DỰ ÁN NỔI BẬT</h2>
            <p class="uk-light uk-text-center fz-18 barlow-semibold">Dự án VR360THT mang đến trải nghiệm thực tế ảo sống động, giúp người xem tương tác và khám phá không gian theo cách hoàn toàn mới</p>
        </div>
        <div class="uk-position-relative uk-visible-toggle item-50px" tabindex="-1"
             uk-slider="clsActivated: uk-transition-active; center: true; autoplay: true; pauseOnHover: false; autoplayInterval: 3000">

        <div class="uk-slider-items uk-grid uk-light uk-grid uk-grid-small uk-grid-28-l" uk-grid>
                <?php
                $projects = [
                    [
                        'image' => 'https://picsum.photos/1800/1200?random=1',
                        'title' => 'VR Hotel Tour',
                        'description' => 'Virtual tour for luxury hotel chains'
                    ],
                    [
                        'image' => 'https://picsum.photos/1800/1200?random=2',
                        'title' => 'Real Estate VR',
                        'description' => 'Virtual property viewing experience'
                    ],
                    [
                        'image' => 'https://picsum.photos/1800/1200?random=3',
                        'title' => 'Museum Tour',
                        'description' => 'Interactive museum exhibitions'
                    ],
                    [
                        'image' => 'https://picsum.photos/1800/1200?random=4',
                        'title' => 'Education VR',
                        'description' => 'Virtual learning environments'
                    ],
                    [
                        'image' => 'https://picsum.photos/1800/1200?random=5',
                        'title' => 'Architecture VR',
                        'description' => 'Virtual architectural visualization'
                    ],
                ];
                foreach ($projects as $project): ?>
                    <div class="uk-width-3-4 uk-width-auto@l">
                        <div class="uk-cover-container rounded-23px uk-background-muted">
                            <img data-src="<?= $project['image'] ?>" width="1800" height="1200" alt="" uk-cover uk-img>
                            <canvas width="892" height="497"></canvas>
                            <div class="uk-position-cover home__duan__overlay uk-transition-fade"></div>
                            <div class="uk-padding-small padding-m-32 uk-position-bottom uk-transition-slide-bottom">
                                <h3 class="uk-margin-remove fz-32 line-clamp-1"><?= $project['title'] ?></h3>
                                <p class="uk-margin-remove-bottom item-3px line-clamp-1"><?= $project['description'] ?></p>
                                <div class="item-3px text-F69C1F barlow-bold">
                                    <a href="" class="uk-link-toggle home__duan__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                            <path d="M20.9091 6.15899C20.7715 6.14877 20.6644 6.04559 20.6377 5.9102C20.3499 4.45336 19.0627 3.35742 17.5249 3.35742C15.987 3.35742 14.6999 4.45333 14.4121 5.9102C14.3854 6.04559 14.2782 6.14877 14.1406 6.15899C8.35949 6.58843 3.33118 8.13653 3.33118 10.7042V24.9852C3.33118 26.9006 6.12058 28.2417 9.9351 28.9796C10.1212 29.0156 10.2971 28.8725 10.2971 28.683V22.605C10.2971 22.4608 10.3958 22.3399 10.5377 22.3139C11.3792 22.16 12.3077 22.0325 13.305 21.935C13.4421 21.9216 13.5579 22.0229 13.5579 22.1607L13.558 31.2307C13.558 31.5 13.7763 31.7143 14.0456 31.7143H21.0043C21.2736 31.7143 21.4919 31.496 21.4919 31.2267L21.4919 22.1673C21.4919 22.0302 21.6141 21.9222 21.7506 21.9356C22.7457 22.033 23.6723 22.1603 24.5122 22.3139C24.6541 22.3399 24.7527 22.4609 24.7527 22.6052V28.6823C24.7527 28.8718 24.9287 29.0156 25.1148 28.9796C28.9292 28.2417 31.7187 26.9006 31.7187 24.9852V10.7042C31.7186 8.13653 26.6903 6.58843 20.9091 6.15899ZM16.0096 6.05492C16.2158 5.41227 16.8188 4.94421 17.5249 4.94421C18.231 4.94421 18.834 5.41227 19.0403 6.05492C19.0879 6.20565 19.1117 6.36435 19.1117 6.53097C19.1117 6.88005 19.0006 7.20534 18.8102 7.46715C18.5167 7.86384 18.0485 8.11773 17.5249 8.11773C17.0013 8.11773 16.5332 7.86384 16.2396 7.46715C16.0492 7.20534 15.9381 6.88005 15.9381 6.53097C15.9381 6.36438 15.9619 6.20568 16.0096 6.05492ZM8.8849 26.9107C8.8849 27.1099 8.68963 27.2519 8.49771 27.1988C6.10366 26.5366 4.74345 25.6786 4.74345 24.9852L4.74341 13.3042C4.74341 13.1056 4.95628 12.9908 5.12705 13.0922C6.03571 13.632 7.24301 14.0777 8.65306 14.4249C8.78731 14.458 8.8849 14.5748 8.8849 14.713V26.9107ZM22.2852 20.2434C22.2852 20.4214 22.1347 20.5588 21.9577 20.5411C21.3967 20.485 20.8348 20.4396 20.2721 20.4049C20.0745 20.3926 19.9051 20.5516 19.9051 20.7496V29.8256C19.9051 29.9057 19.8733 29.9825 19.8166 30.0391C19.76 30.0957 19.6832 30.1275 19.6031 30.1275H15.4467C15.3666 30.1275 15.2898 30.0957 15.2332 30.0391C15.1765 29.9825 15.1447 29.9057 15.1447 29.8256V20.7496C15.1447 20.5516 14.9753 20.3926 14.7777 20.4049C14.215 20.4396 13.6531 20.4851 13.0921 20.5411C12.9151 20.5588 12.7646 20.4213 12.7646 20.2434L12.7646 13.6715C12.7646 12.6395 15.5298 12.087 17.5249 12.0847C19.5208 12.087 22.2853 12.6394 22.2853 13.6715L22.2852 20.2434ZM30.3064 24.9852C30.3064 25.6787 28.9528 26.5368 26.552 27.1992C26.3601 27.2521 26.1649 27.1058 26.1649 26.9067L26.1649 14.7158C26.1649 14.5775 26.2625 14.458 26.3968 14.4249C27.8068 14.0777 29.0141 13.6319 29.9228 13.0922C30.0935 12.9908 30.3064 13.1055 30.3064 13.3042L30.3064 24.9852ZM24.998 13.2816C24.8579 13.3101 24.7527 13.4328 24.7527 13.5758V20.9231C24.4658 20.8715 24.169 20.8264 23.872 20.7814V13.6715C23.872 10.587 18.175 10.4979 17.5253 10.4979C16.8757 10.4979 11.1778 10.587 11.1778 13.6715V20.7814C10.8809 20.8264 10.5841 20.8714 10.2972 20.923V13.5758C10.2972 13.4328 10.1919 13.31 10.0518 13.2815C6.68776 12.5966 4.74348 11.5331 4.74348 10.7042C4.74348 9.56804 8.37282 7.99079 14.294 7.56207C14.4252 7.55257 14.5453 7.63241 14.5959 7.75385C15.0725 8.8986 16.2068 9.70452 17.525 9.70452C18.8431 9.70452 19.9774 8.89856 20.4541 7.75385C20.5046 7.63241 20.6247 7.55257 20.7559 7.56207C26.6771 7.99075 30.3065 9.56804 30.3065 10.7042C30.3064 11.5332 28.3621 12.5967 24.998 13.2816Z" fill="#F69C1F"/>
                                        </svg>
                                        Tham quan
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                            <path d="M0.70592 6.22439H12.591L9.14616 9.75947C8.87085 10.042 8.87085 10.5056 9.14616 10.7881C9.42147 11.0706 9.8662 11.0706 10.1415 10.7881L14.7935 6.01432C15.0688 5.7318 15.0688 5.27543 14.7935 4.99292L10.1486 0.211877C10.0167 0.0762307 9.83762 0 9.65089 0C9.46416 0 9.28511 0.0762307 9.15322 0.211877C8.87791 0.494392 8.87791 0.950764 9.15322 1.23328L12.591 4.7756H0.70592C0.317664 4.7756 0 5.10157 0 5.49999C0 5.89841 0.317664 6.22439 0.70592 6.22439Z" fill="#F69C1F"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="uk-container item-19px">
                <div class="uk-grid uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <a class="home__duan__slidenav uk-border-pill" href uk-slider-item="previous">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                                <path d="M14.8764 11.375H6.03351L9.89684 15.645C10.2056 15.9862 10.2056 16.5462 9.89684 16.8875C9.58809 17.2287 9.08934 17.2287 8.78059 16.8875L3.56351 11.1212C3.25476 10.78 3.25476 10.2287 3.56351 9.88749L8.77267 4.11249C8.92058 3.94865 9.12139 3.85657 9.3308 3.85657C9.54021 3.85657 9.74102 3.94865 9.88892 4.11249C10.1977 4.45374 10.1977 5.00499 9.88892 5.34624L6.03351 9.62499H14.8764C15.3118 9.62499 15.6681 10.0187 15.6681 10.5C15.6681 10.9812 15.3118 11.375 14.8764 11.375Z" fill="#0B0B0B"/>
                            </svg>
                        </a>
                        <a class="home__duan__slidenav uk-border-pill" href uk-slider-item="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                                <path d="M4.12358 11.375H12.9665L9.10316 15.645C8.79441 15.9862 8.79441 16.5462 9.10316 16.8875C9.41191 17.2287 9.91066 17.2287 10.2194 16.8875L15.4365 11.1212C15.7452 10.78 15.7452 10.2287 15.4365 9.88749L10.2273 4.11249C10.0794 3.94865 9.87861 3.85657 9.6692 3.85657C9.45979 3.85657 9.25898 3.94865 9.11108 4.11249C8.80233 4.45374 8.80233 5.00499 9.11108 5.34624L12.9665 9.62499H4.12358C3.68816 9.62499 3.33191 10.0187 3.33191 10.5C3.33191 10.9812 3.68816 11.375 4.12358 11.375Z" fill="#0B0B0B"/>
                            </svg>
                        </a>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="uk-button uk-button-default uk-light uk-border-pill bg-3161C2 barlow-bold">Xem tất cả</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="uk-container uk-margin-top">
            <h2 class="fz-38 uk-text-center uk-text-uppercase text-3161C2">TIN TỨC</h2>
            <div class="uk-child-width-1-2@l item-37px uk-grid uk-grid-50-l" uk-grid>
                <div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <div class="uk-slider-items uk-child-width-1-1" uk-grid>
                            <?php
                            $sliderImages = [
                                ['url' => 'https://picsum.photos/555/330?random=11'],
                                ['url' => 'https://picsum.photos/555/330?random=12'],
                                ['url' => 'https://picsum.photos/555/330?random=13'],
                                ['url' => 'https://picsum.photos/555/330?random=14'],
                                ['url' => 'https://picsum.photos/555/330?random=15']
                            ];
                            foreach ($sliderImages as $image): ?>
                                <div>
                                    <div class="uk-cover-container uk-background-muted uk-border-rounded">
                                        <img data-src="<?= $image['url'] ?>" alt="" uk-cover uk-img>
                                        <canvas width="555" height="330"></canvas>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                    <div class="fz-14 text-3161C2 item-10px">16/02/2025</div>
                    <h3 class="fz-18 barlow-semibold uk-margin-remove-bottom item-9px"><a href="" class="uk-link-toggle">Tổ chức nghiệm thu và đánh giá chức năng,an toàn thông tin hệ thống xuất bản điện tử</a></h3>
                    <p class="item-10px">Ứng dụng công nghệ số là bước phát triển tất yếu của ngành xuất bản không chỉ bởi thói quen đọc sách của độc giả đã  một phần thay đổi gắn với những thiết bị thông minh</p>
                    <ul class="uk-nav uk-nav-default home__tintuc__nav">
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Phát triển du lịch giáo dục trải ngiệm gắn với quá trình chuyển đổi số</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">“ Sách – Tri thức, Hội nhập, phát triển”</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Hội thảo chuyển đổi số phát triển làng nghề Hà Nội</a></li>
                        <li class="uk-nav-divider"></li>
                    </ul>
                </div>
                <div>
                    <?php
                    $news = [
                        [
                            'image' => 'https://picsum.photos/163/113?random=6',
                            'date' => '16/02/2025',
                            'title' => 'Meta: Theo đuổi sản xuất "Vật liệu kỳ diệu" cho phép kính Orion AR có trường nhìn'
                        ],
                        [
                            'image' => 'https://picsum.photos/163/113?random=7',
                            'date' => '15/02/2025',
                            'title' => 'Apple Vision Pro: Bước đột phá trong công nghệ thực tế ảo'
                        ],
                        [
                            'image' => 'https://picsum.photos/163/113?random=8',
                            'date' => '14/02/2025',
                            'title' => 'VR trong giáo dục: Cách mạng hóa phương pháp học tập'
                        ],
                        [
                            'image' => 'https://picsum.photos/163/113?random=9',
                            'date' => '13/02/2025',
                            'title' => 'Ứng dụng VR trong ngành bất động sản phát triển mạnh mẽ'
                        ],
                        [
                            'image' => 'https://picsum.photos/163/113?random=10',
                            'date' => '12/02/2025',
                            'title' => 'Xu hướng công nghệ VR năm 2025: Những điều cần biết'
                        ]
                    ];
                    ?>
                    <div class="uk-child-width-1-1 uk-grid-small uk-grid-24-l" uk-grid>
                        <?php foreach ($news as $item): ?>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-background-muted uk-border-rounded">
                                            <img data-src="<?= $item['image'] ?>" alt="" uk-cover uk-img>
                                            <canvas width="163" height="113"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="fz-14 text-3161C2"><?= $item['date'] ?></div>
                                        <h3 class="fz-18 barlow-semibold uk-margin-remove-bottom item-9px"><a href=""
                                                                                                              class="uk-link-toggle"><?= $item['title'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-position-relative">
    <div class="uk-position-cover home__doitac__overlay" style="--path-to-image: url(images/doitac_overlay.webp)"></div>
    <div class="uk-position-relative uk-position-z-index uk-section">
        <div class="uk-container">
            <h2 class="fz-38 uk-text-center uk-text-uppercase text-3161C2">ĐỐI TÁC TIÊU BIỂU</h2>
        </div>
        <div class="uk-position-relative uk-visible-toggle item-51px" tabindex="-1"
             uk-slider="center: true; autoplay: true; pauseOnHover: false; autoplayInterval: 3000">

        <div class="uk-slider-items uk-child-width-auto uk-grid uk-grid-small" uk-grid>
                <?php
                $domains = [
                    'amazon.com',
                    'google.com',
                    'facebook.com',
                    'microsoft.com',
                    'apple.com',
                    'netflix.com',
                    'twitter.com',
                    'instagram.com',
                    'linkedin.com',
                    'spotify.com',
                    'adobe.com',
                    'salesforce.com',
                    'intel.com',
                    'ibm.com',
                    'oracle.com',
                    'samsung.com',
                    'sony.com',
                    'nvidia.com',
                    'cisco.com',
                    'hp.com'
                ];
                foreach ($domains as $domain): ?>
                    <div>
                        <div class="uk-cover-container uk-background-default rounded-10px">
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center padding-10">
                                <img class="uk-responsive-height"
                                     data-src="https://img.logo.dev/<?= $domain ?>?token=pk_MSCFV2IwQtS8u3CVawIOqA&retina=true"
                                     alt="" uk-img>
                            </div>
                            <canvas width="187" height="83"></canvas>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>