<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>


    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
         uk-slideshow="ratio: false; autoplay: true; autoplay-interval: 5000; animation: fade; pause-on-hover: false">

        <div class="uk-slideshow-items" uk-height-viewport="">
            <?php
            $slides = [
                [
                    'image' => 'https://picsum.photos/1920/1080?random=1',
                    'title' => 'Video VR360',
                    'description' => 'Công nghệ quay video 360 độ, Flycam với những góc nhìn rộng, chuyên nghiệp full HD',
                    'button' => [
                        'text' => 'Xem dự án',
                        'url' => '#'
                    ]
                ],
                [
                    'image' => 'https://picsum.photos/1920/1080?random=2',
                    'title' => 'Ảnh VR360',
                    'description' => 'Chụp ảnh 360 độ chất lượng cao với công nghệ hiện đại',
                    'button' => [
                        'text' => 'Xem thêm',
                        'url' => '#'
                    ]
                ],
                [
                    'image' => 'https://picsum.photos/1920/1080?random=3',
                    'title' => 'Tour VR360',
                    'description' => 'Tạo tour thực tế ảo tương tác cao với không gian 360 độ',
                    'button' => [
                        'text' => 'Khám phá',
                        'url' => '#'
                    ]
                ]
            ];
            foreach ($slides as $slide): ?>
                <div>
                    <div class="uk-position-relative uk-height-1-1 uk-background-norepeat uk-background-cover uk-background-center-center uk-flex uk-flex-middle"
                         data-src="<?= $slide['image'] ?>" uk-img="loading: eager">
                        <div class="uk-position-cover home__slider__overlay"></div>
                        <div class="uk-width uk-section uk-position-relative uk-text-center uk-text-left@l">
                            <div class="uk-container uk-container-xlarge">
                                <h2 class="uk-text-uppercase fz-47" uk-slideshow-parallax="x: 200,0,0"><?= $slide['title'] ?></h2>
                                <p class="w-545 fz-18 barlow-medium" uk-slideshow-parallax="x: 400,0,0;"><?= $slide['description'] ?></p>
                                <a href="<?= $slide['button']['url'] ?>" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0" class="home__slider__btn barlow-bold uk-button uk-button-default uk-border-pill">
                                    <?= $slide['button']['text'] ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                                        <path d="M1.20592 6.22439H13.091L9.64616 9.75947C9.37085 10.042 9.37085 10.5056 9.64616 10.7881C9.92147 11.0706 10.3662 11.0706 10.6415 10.7881L15.2935 6.01432C15.5688 5.7318 15.5688 5.27543 15.2935 4.99292L10.6486 0.211877C10.5167 0.0762307 10.3376 0 10.1509 0C9.96416 0 9.78511 0.0762307 9.65322 0.211877C9.37791 0.494392 9.37791 0.950764 9.65322 1.23328L13.091 4.7756H1.20592C0.817664 4.7756 0.5 5.10157 0.5 5.49999C0.5 5.89841 0.817664 6.22439 1.20592 6.22439Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
           uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
           uk-slideshow-item="next"></a>

        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav home__slider__dotnav uk-flex-center uk-margin uk-grid-24-l" uk-height-match=".my-class">
                <?php for ($i = 0; $i < count($slides); $i++): ?>
                    <li uk-slideshow-item="<?= $i ?>">
                        <a href class="uk-link-toggle">
                            <div class="uk-grid-10 uk-grid uk-flex-bottom uk-visible@l" uk-grid>
                                <div>
                                    <div class="uk-flex uk-flex-bottom my-class">
                                        <?php if ($i==0): ?>
                                            <svg width="31" height="43" viewBox="0 0 31 43" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="31" height="43" fill="url(#pattern0_4856_228)"/>
                                                <defs>
                                                    <pattern id="pattern0_4856_228" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_4856_228" transform="matrix(0.0223725 0 0 0.016129 -0.00338189 0)"/>
                                                    </pattern>
                                                    <image id="image0_4856_228" width="45" height="62" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
                                                </defs>
                                            </svg>
                                        <?php endif; ?>
                                        <?php if ($i==1): ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="37" viewBox="0 0 42 37" fill="none">
                                                <g clip-path="url(#clip0_4937_286)">
                                                    <path d="M40.5438 14.0534C36.4308 16.8563 31.7971 17.5564 27.1174 18.0845C26.8214 18.1179 26.4126 18.0258 26.2089 17.8323C25.7628 17.4087 26.1015 16.7814 26.8144 16.679C28.0302 16.5044 29.2493 16.3551 30.4662 16.1875C30.7249 16.1519 30.9788 16.0819 31.298 16.0145C31.298 12.7573 31.2958 9.51299 31.2991 6.25739C31.3001 5.20811 31.6059 4.94997 32.6159 5.1747C35.64 5.84727 38.911 7.1396 41.0413 8.99725C41.7359 9.60299 42.0022 10.4669 42.0005 11.4105C41.9919 17.5483 41.9908 23.686 42.0005 29.8238C42.0319 33.1338 36.6625 34.7969 34.0505 35.4727C27.933 37.041 21.7232 37.2851 15.4572 36.7305C10.54 36.2708 5.39799 35.4975 1.36705 32.4332C0.385102 31.7256 -6.26787e-06 30.6472 0.00593509 29.3959C0.0329413 23.5227 0.0432036 17.6496 -6.26784e-06 11.777C-0.0108087 10.2907 0.432633 8.9994 1.67492 8.28749C3.90131 7.01133 6.47553 6.00194 8.96496 5.30027C9.54127 5.13751 9.8378 5.53685 9.83942 6.30158C9.84428 9.21389 9.84158 12.1262 9.84158 15.0391C9.84158 15.3004 9.84158 15.5618 9.84158 15.9757C11.9265 16.2365 13.967 16.5955 16.0222 16.7226C18.5943 16.8822 21.1777 16.8563 23.7568 16.8978C24.3023 16.9064 24.9175 16.8353 24.9035 17.6124C24.8916 18.2898 24.3396 18.3405 23.7995 18.3507C16.2215 18.3766 8.07052 18.4316 1.51288 14.0167C1.39459 19.1192 1.5226 24.1974 1.45455 29.2989C1.4486 30.2597 1.80671 30.9647 2.52237 31.5434C3.89915 32.6563 5.52654 33.2561 7.1912 33.7541C7.40509 33.8182 7.78209 33.621 7.9733 33.4329C10.069 31.3726 12.142 29.2897 14.2236 27.2143C14.9782 26.462 15.272 26.4776 15.9633 27.307C17.2569 28.8591 18.5473 30.4139 19.9008 32.0419C20.105 31.7843 20.2811 31.5736 20.4442 31.3537C22.137 29.0725 23.827 26.7891 25.5192 24.5073C26.2025 23.5858 26.5838 23.5745 27.3054 24.4615C29.6765 27.3755 32.0542 30.2845 34.4053 33.2141C34.7467 33.6398 35.0508 33.7924 35.5536 33.5364C36.8343 32.8832 38.1603 32.3103 39.3988 31.5871C40.2311 31.101 40.5654 30.2759 40.5584 29.2552C40.5238 24.2255 40.5427 19.1957 40.5427 14.0534H40.5438ZM20.879 33.2076C21.4305 33.8754 21.9231 34.528 22.4826 35.1176C22.6798 35.3256 23.0438 35.4937 23.3252 35.484C26.788 35.4366 29.9023 34.8228 33.4185 34.2828C31.0204 31.3354 28.7551 28.5519 26.445 25.7134C24.5664 28.2426 22.7489 30.6898 20.879 33.2076ZM32.7736 15.7316C33.4558 15.5489 34.0802 15.4508 34.6478 15.2169C36.151 14.5982 37.7249 14.0739 39.0958 13.2294C41.0126 12.0486 40.9813 10.4383 39.1082 9.19126C37.1697 7.92372 35.0248 7.28403 32.7731 6.65996C32.7731 9.75119 32.7731 12.6754 32.7731 15.7316H32.7736ZM8.36002 6.79469C6.82877 7.39666 5.40177 7.89516 4.03364 8.52192C3.34822 8.83611 2.70439 9.31521 2.15887 9.84119C1.27198 10.6965 1.29305 11.6918 2.14374 12.5821C2.48888 12.9432 2.88317 13.3021 3.32607 13.5182C4.44683 14.0658 5.60053 14.5486 6.75478 15.0229C7.25169 15.2271 7.78371 15.3452 8.36002 15.5209V6.79469ZM9.2966 34.3404C13.1034 35.1779 16.9032 35.5471 20.912 35.5277C18.8795 33.0848 16.9734 30.7938 15.1159 28.5605C13.172 30.4915 11.267 32.3836 9.2966 34.3404Z" fill="white"/>
                                                    <path d="M20.5787 14.9157C18.4819 14.9157 16.3846 14.9183 14.2879 14.9146C12.7194 14.9119 11.9621 14.18 11.9567 12.6387C11.9475 9.89724 11.9475 7.15522 11.9573 4.41374C11.9627 2.89723 12.7059 2.16753 14.2236 2.14813C14.3198 2.14705 14.4191 2.13304 14.5126 2.14975C15.4113 2.31412 15.9812 2.01502 16.3339 1.11772C16.6401 0.338979 17.3428 0.00107669 18.1984 0.00646587C19.741 0.0161664 21.2841 0.0317951 22.8262 0.000537768C23.84 -0.0199411 24.5778 0.390715 24.9397 1.31173C25.2157 2.01502 25.6488 2.264 26.365 2.15298C27.8412 2.02202 29.1731 2.48711 29.1991 4.13027C29.2455 7.06361 29.2461 9.99856 29.1991 12.9319C29.1791 14.1816 28.3441 14.9043 27.0872 14.9113C24.9181 14.9237 22.7484 14.9146 20.5792 14.9151L20.5787 14.9157ZM20.5819 13.466C22.6317 13.466 24.682 13.4676 26.7318 13.4654C27.6662 13.4643 27.764 13.369 27.7656 12.4296C27.7688 9.97538 27.7667 7.52061 27.7667 5.06637C27.7667 3.80045 27.7683 3.62261 26.2992 3.62261C25.0023 3.62261 24.0944 3.42105 23.7141 2.07699C23.5812 1.60705 23.2258 1.43622 22.7143 1.447C21.2679 1.47771 19.8204 1.48041 18.3745 1.48041C17.8765 1.48041 17.6707 1.71592 17.534 1.96328C16.5251 3.78752 17.0452 3.5865 14.6465 3.59836C14.5261 3.5989 14.4051 3.59674 14.2852 3.59728C13.556 3.5989 13.3994 3.84949 13.4042 4.49189C13.4248 7.18702 13.428 9.88215 13.4026 12.5767C13.3956 13.2892 13.6954 13.4854 14.3613 13.4762C16.4349 13.4487 18.5095 13.466 20.583 13.466H20.5819Z" fill="white"/>
                                                    <path d="M20.0321 25.8589C18.5046 25.8654 17.3709 24.7493 17.3709 23.2387C17.3887 19.7923 22.5971 19.7357 22.6495 23.2026C22.6701 24.7256 21.5601 25.8525 20.0321 25.8589ZM21.1934 23.27C21.209 22.5678 20.7451 22.0817 20.0451 22.0671C18.4566 22.0358 18.4074 24.3645 19.9813 24.4103C20.677 24.4259 21.1782 23.9549 21.1934 23.2705V23.27Z" fill="white"/>
                                                    <path d="M19.0464 3.9077C20.8812 3.24106 22.9574 3.82093 24.1208 5.38595C24.6096 6.04289 24.9062 6.82379 24.9316 7.66127C25.0077 10.1521 23.2037 12.1408 20.7451 12.2749C18.1487 12.4167 15.8813 9.96407 16.2561 7.41067C16.3263 6.93157 16.4824 6.47942 17.0971 6.54409C17.6674 6.60445 17.7236 7.03073 17.7139 7.50498C17.6761 9.29042 18.4306 10.3656 19.9554 10.7283C21.2101 11.0268 22.5075 10.4405 23.1308 9.29311C24.5648 6.66103 21.4888 3.96051 19.0572 5.45493C18.5873 5.75942 18.1465 6.20942 17.6399 5.55356C17.1165 4.7732 18.0715 4.26123 19.0458 3.90716L19.0464 3.9077Z" fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4937_286">
                                                        <rect width="42" height="37" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        <?php endif; ?>
                                        <?php if ($i==2): ?>
                                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="38" height="38" fill="url(#pattern0_4860_356)"/>
                                                <defs>
                                                    <pattern id="pattern0_4860_356" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_4860_356" transform="scale(0.016129)"/>
                                                    </pattern>
                                                    <image id="image0_4860_356" width="62" height="62" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
                                                </defs>
                                            </svg>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div>
                                    <div class="fz-14 barlow-bold text-FFF"><?= $slides[$i]['title'] ?></div>
                                </div>
                            </div>
                            <div class="home__slider__loadtimebar uk-border-rounded item-9px"></div>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
<div class="uk-section uk-background-norepeat uk-background-top-center" uk-toggle="cls: uk-background-cover; mode: media; media: (max-width: 959px)" data-src="images/MFC-PROFILE-231120-7-3.webp" uk-img>
    <div class="uk-container">
        <h2 class="fz-32 uk-text-center text-000">Giới thiệu <span class="uk-text-uppercase fz-38 text-3161C2">vr360tht</span></h2>
        <div uk-grid>
            <div class="uk-width-1-5@l">

            </div>
            <div class="uk-width-expand">
                <p>Công ty THT hoạt động trong lĩnh vực cung cấp các giải pháp, phần mềm, thiết bị và dịch vụ công nghệ thông tin theo nhu cầu của khách hàng. Công ty cung cấp các giải pháp công nghệ, chuyển đổi số, ứng dụng VR360</p>

                <p class="fz-18 text-3161C2 barlow-bold">DỊCH VỤ CHỤP ẢNH & QUAY VIDEO VR360 – ĐẲNG CẤP TRẢI NGHIỆM SỐ</p>
                <p>Trong thời đại công nghệ số phát triển mạnh mẽ, chụp ảnh và quay video VR360 đang trở thành xu hướng dẫn đầu trong lĩnh vực truyền thông, quảng cáo và trải nghiệm thực tế ảo. Công ty chúng tôi tự hào cung cấp dịch vụ chụp ảnh & quay video VR360 chuyên nghiệp, mang đến giải pháp hình ảnh sống động, chân thực và đột phá dành cho doanh nghiệp.</p>
            </div>
        </div>
        <div class="uk-child-width-1-4@l uk-grid-small uk-grid-19-l item-71px uk-grid-match" uk-grid>
            <div class="home__about__column">
                <div class="home__about__box uk-padding-small rounded-7px">
                    <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                                <g clip-path="url(#clip0_4873_287)">
                                    <path d="M18.9426 10.3617C24.1741 10.4793 28.1434 12.4529 31.7724 15.2625C32.7578 16.0244 33.7279 16.8297 34.5787 17.7398C36.5849 19.8899 36.0287 21.0761 34.8478 22.2905C30.5306 26.7286 25.5607 29.9678 19.1204 29.9703C14.8006 29.9703 11.0801 28.1398 7.67711 25.6268C6.43272 24.709 5.25945 23.6761 4.14966 22.5973C2.91543 21.3982 2.22214 19.5984 3.95157 18.0441C8.21041 13.6494 13.1626 10.5994 18.9426 10.3617ZM19.3616 28.6384C24.0547 28.6486 27.9275 24.9135 27.9555 20.3501C27.9834 15.733 24.0801 11.9186 19.3438 11.9288C14.6863 11.939 10.8033 15.7432 10.8109 20.2913C10.8185 24.847 14.6914 28.6281 19.3591 28.6384H19.3616ZM28.5497 25.9284C28.8926 25.7444 29.0729 25.5628 29.4868 25.2407C31.1198 23.8474 32.7832 22.4848 34.3552 21.025C34.6294 20.7693 34.9977 20.1276 34.5609 19.6521C32.7172 17.6504 31.4423 16.6584 29.5554 15.2165C29.2786 15.0197 28.5675 14.5033 28.3364 14.3754C30.1471 17.9776 30.3808 22.2445 28.5523 25.9284H28.5497ZM10.6078 14.3448C10.3767 14.4726 9.66558 14.989 9.38877 15.1859C7.50188 16.6303 6.22448 17.6197 4.3833 19.6214C3.9465 20.097 4.31473 20.7387 4.589 20.9943C6.16099 22.4541 7.8244 23.8142 9.45734 25.21C9.83827 25.5347 9.91446 25.5859 10.3944 25.8978C8.56341 22.2138 8.79959 17.9469 10.6103 14.3448H10.6078Z" fill="#070A71"/>
                                    <path d="M15.7554 18.8673C16.1211 19.4962 16.6138 19.8464 17.297 19.8438C17.7592 19.8438 18.1604 19.6623 18.4779 19.3172C19.2194 18.5093 19.0289 17.5506 17.9522 16.6431C18.94 16.0806 20.9641 16.1778 22.2415 17.5941C23.5062 18.9925 23.5849 21.1017 22.4065 22.6202C21.2637 24.0903 19.1331 24.5274 17.5281 23.6224C15.8443 22.6714 15.0901 20.7105 15.7529 18.8673H15.7554Z" fill="#070A71"/>
                                    <path d="M10.4884 39H4.45949C2.0012 39 0.00256348 36.9854 0.00256348 34.5133V30.2694H1.5263V34.5133C1.5263 36.1418 2.84179 37.4661 4.45949 37.4661H10.4884V39Z" fill="#070A71"/>
                                    <path d="M1.52374 9.64326H0V4.48672C0 2.01455 2.00117 0 4.45693 0H10.4858V1.53392H4.45693C2.83923 1.53392 1.52374 2.85821 1.52374 4.48672V9.64326Z" fill="#070A71"/>
                                    <path d="M39 9.64326H37.4762V4.48672C37.4762 2.85821 36.1608 1.53392 34.5431 1.53392H27.864V0H34.5431C37.0013 0 39 2.01455 39 4.48672V9.64326Z" fill="#070A71"/>
                                    <path d="M34.5431 39H27.864V37.4661H34.5431C36.1608 37.4661 37.4762 36.1418 37.4762 34.5133V30.2694H39V34.5133C39 36.988 37.0013 39 34.5431 39Z" fill="#070A71"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4873_287">
                                        <rect width="39" height="39" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="uk-width-expand">
                            <h6 class="barlow-semibold fz-16 text-0B0B0B ls--016">Trải nghiệm chân thực và sống động</h6>
                        </div>
                    </div>
                    <div class="fz-14 uk-margin-top">Khách hàng cảm nhận không gian chân thực, tạo ấn tượng mạnh mẽ và cuốn hút hơn</div>
                </div>
            </div>
            <div class="home__about__column uk-light">
                <div class="home__about__box uk-padding-small rounded-7px">
                    <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="46" viewBox="0 0 29 46" fill="none">
                                <g clip-path="url(#clip0_4875_206)">
                                    <path d="M10.9383 46C10.8148 45.9454 10.6975 45.8847 10.5741 45.8301C9.97531 45.5936 9.61728 45.0779 9.60494 44.441C9.60494 44.2893 9.60494 44.1437 9.60494 43.9921C9.54938 43.0882 8.89506 42.4634 7.96913 42.4573C6.75308 42.4452 5.53086 42.4573 4.31481 42.4573C3.25926 42.4573 2.57407 41.784 2.57407 40.7406C2.57407 39.588 2.55555 38.4354 2.58025 37.2829C2.59259 36.8279 2.43827 36.6884 1.98148 36.7005C0.913579 36.7248 0.28395 36.2577 0.0555545 35.3538C-0.080248 34.8321 0.104937 34.3832 0.395061 33.9586C1.01234 33.0669 1.65432 32.1933 2.24074 31.2895C2.42593 31.0044 2.54321 30.6343 2.55555 30.2946C2.59259 29.0996 2.54938 27.8985 2.57407 26.7034C2.67284 22.1113 4.67284 18.5262 8.51234 15.9238C8.8642 15.6811 8.98148 15.4991 8.85802 15.0684C7.68518 10.9798 10.5556 6.76381 14.8642 6.21786C18.8333 5.71436 22.4691 8.52908 22.9321 12.4357C23.0432 13.376 22.9506 14.2859 22.6975 15.1837C22.6049 15.5113 22.6667 15.6629 22.9444 15.8389C26.0802 17.8771 28.0679 20.6979 28.7654 24.3315C29.5432 28.3838 28.5309 32.0113 25.8642 35.1718C25.0062 36.191 24.5556 37.3011 24.5617 38.6174C24.5617 40.3099 24.5123 42.0024 24.5802 43.6948C24.6235 44.7989 24.3951 45.6482 23.2099 46.0061H10.9568L10.9383 46ZM9.54321 16.8762C8.30247 17.6162 7.2716 18.5383 6.40741 19.6363C4.93827 21.5047 4.0679 23.6097 3.95679 25.9815C3.88889 27.4617 3.88889 28.9418 3.88271 30.422C3.88271 31.0347 3.70988 31.5624 3.35185 32.0538C2.7963 32.8181 2.24691 33.5946 1.72222 34.3832C1.5679 34.6137 1.51234 34.911 1.41358 35.1779C1.7037 35.2568 2 35.4266 2.28395 35.4084C3.19136 35.3477 3.91358 36.0393 3.88271 36.9614C3.8395 38.1261 3.87037 39.2968 3.87037 40.4616C3.87037 41.0621 3.97531 41.1592 4.59259 41.1592C5.7037 41.1592 6.81481 41.147 7.92592 41.1592C9.71605 41.1834 10.8519 42.2875 10.8889 44.0527C10.8951 44.4471 11.0062 44.6048 11.4383 44.5987C15.1852 44.5866 18.9321 44.5866 22.679 44.5987C23.1111 44.5987 23.2284 44.4592 23.2222 44.0527C23.2037 42.2086 23.2284 40.3706 23.2099 38.5264C23.1914 36.925 23.7407 35.5601 24.7901 34.3408C26.9815 31.8051 27.8827 28.8508 27.5741 25.5569C27.3518 23.1911 26.4136 21.08 24.8519 19.2663C24.037 18.3139 23.0988 17.4889 22 16.8701C21.4877 17.4828 20.9815 18.0591 20.5123 18.6657C20.0062 19.3269 19.7531 20.0852 19.7593 20.9223C19.7654 21.5957 19.7593 22.269 19.7593 22.9424C19.7593 23.5793 19.537 24.101 18.9815 24.4771C18.8457 24.5681 18.7407 24.738 18.6728 24.8896C18.1605 26.0786 17.0988 26.8126 15.8519 26.8187C14.5123 26.8187 13.463 26.1332 12.9259 24.9139C12.8519 24.7501 12.7222 24.5802 12.5741 24.4771C12.037 24.1131 11.7963 23.6157 11.7963 22.9848C11.7963 22.3115 11.7901 21.6381 11.7963 20.9648C11.8025 20.1762 11.5926 19.4422 11.1358 18.8113C10.6543 18.144 10.0988 17.5313 9.54938 16.864L9.54321 16.8762ZM18.4321 20.249C18.642 18.9083 19.3395 17.8832 20.2037 16.9247C21.3086 15.6993 21.7407 14.207 21.537 12.5934C21.1173 9.29342 18.037 7.18238 15.0432 7.61308C12.8025 7.94066 11.216 9.1357 10.3951 11.18C9.5679 13.2243 9.88272 15.1898 11.3272 16.8944C12.1173 17.8286 12.8333 18.7628 13.0802 19.9821C13.0988 20.0852 13.2654 20.2368 13.3642 20.2368C15.037 20.255 16.7099 20.249 18.4383 20.249H18.4321ZM13.1914 21.6381C13.1914 22.1416 13.1667 22.6087 13.2099 23.0637C13.2222 23.179 13.4259 23.3609 13.5494 23.3609C15.037 23.3791 16.5247 23.3791 18.0123 23.3609C18.1358 23.3609 18.3519 23.2093 18.358 23.1122C18.3951 22.6269 18.3765 22.1416 18.3765 21.6321H13.1975L13.1914 21.6381ZM17.1852 24.7319H14.3951C14.7593 25.3325 15.2716 25.5448 15.8519 25.5205C16.3827 25.4962 16.8765 25.3021 17.1852 24.7319Z" fill="#FFDA79"/>
                                    <path d="M15.963 0C16.3765 0.230516 16.5185 0.576289 16.5 1.03732C16.4753 1.85626 16.5 2.68126 16.4876 3.5002C16.4876 4.07649 16.2222 4.39193 15.7593 4.39193C15.3025 4.39193 15.0556 4.07649 15.0556 3.48807C15.0556 2.65093 15.0741 1.81379 15.0432 0.982725C15.0247 0.527759 15.1852 0.206251 15.5926 0H15.9568L15.963 0Z" fill="#FFDA79"/>
                                    <path d="M9.53088 1.71066C9.6173 1.77132 9.87038 1.86232 9.98149 2.03824C10.5185 2.88751 11.0247 3.76104 11.5185 4.63457C11.7222 4.99854 11.605 5.38678 11.284 5.57483C10.9383 5.77502 10.5247 5.68402 10.2963 5.31399C9.77779 4.47078 9.27162 3.61545 8.79014 2.75405C8.51853 2.26269 8.83952 1.73493 9.53088 1.71673V1.71066Z" fill="#FFDA79"/>
                                    <path d="M8.07407 8.3653C8.06172 8.96586 7.53703 9.32983 7.09258 9.09931C6.15431 8.61402 5.23456 8.08626 4.32715 7.5403C3.98765 7.33405 3.92592 6.99434 4.12962 6.63644C4.30863 6.32099 4.68518 6.1936 5.03703 6.38166C5.93826 6.87302 6.8395 7.37045 7.71604 7.90427C7.90123 8.01346 7.99382 8.26218 8.07407 8.37137V8.3653Z" fill="#FFDA79"/>
                                    <path d="M27.5123 7.12173C27.4383 7.22485 27.3272 7.47963 27.1358 7.59489C26.2963 8.10445 25.4383 8.57762 24.5741 9.05078C24.179 9.2631 23.784 9.15997 23.5802 8.82633C23.3704 8.48662 23.463 8.10445 23.8642 7.86787C24.7222 7.36437 25.5864 6.86695 26.4691 6.39378C26.963 6.12687 27.5062 6.44838 27.5123 7.11566V7.12173Z" fill="#FFDA79"/>
                                    <path d="M22.8395 2.49927C22.8148 2.56599 22.7716 2.72978 22.6914 2.8693C22.2407 3.64578 21.784 4.42225 21.3272 5.19872C21.0494 5.66582 20.6482 5.79928 20.2654 5.57483C19.9074 5.36251 19.8333 4.96821 20.0926 4.51931C20.5556 3.71251 21.0309 2.91177 21.5 2.11103C21.6914 1.78952 21.9753 1.63787 22.3457 1.73492C22.6667 1.82592 22.8457 2.0625 22.8395 2.49927Z" fill="#FFDA79"/>
                                    <path d="M17.6914 14.7287C17.1975 14.7469 16.7531 14.6863 16.7407 14.1585C16.7346 13.928 16.9074 13.6065 17.1049 13.467C17.5679 13.1333 18.0864 12.8725 18.5926 12.6056C19.0247 12.3751 19.3765 12.4721 19.642 12.8967C19.9259 13.3578 20.1852 13.8309 20.463 14.292C20.6728 14.6438 20.6914 14.9835 20.3519 15.2565C20.0123 15.5295 19.6728 15.4445 19.3765 15.1534C19.3457 15.123 19.3025 15.1048 19.2346 15.0624C19.1543 15.1655 19.0679 15.2626 18.9938 15.3718C18.0556 16.7185 16.4753 17.319 14.8457 16.955C13.3457 16.6214 12.1481 15.305 11.9506 13.7399C11.7469 12.1203 12.3827 10.8524 13.7716 10.0153C15.1852 9.16603 16.6296 9.24489 18.0123 10.1548C18.4383 10.4339 18.5556 10.8403 18.3333 11.18C18.0926 11.55 17.6914 11.5925 17.2222 11.2831C16.358 10.7129 15.4506 10.6583 14.5556 11.1497C13.6728 11.635 13.2531 12.4236 13.2963 13.4184C13.3333 14.4315 14.1049 15.3414 15.142 15.6205C16.0741 15.8752 17.142 15.5234 17.6914 14.7287Z" fill="#FFDA79"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4875_206">
                                        <rect width="29" height="46" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="uk-width-expand">
                            <h6 class="barlow-semibold fz-16 text-0B0B0B ls--016">Tăng tương tác và ghi nhớ thương hiệu</h6>
                        </div>
                    </div>
                    <div class="fz-14 uk-margin-top">Nâng cao trải nghiệm cá nhân, tạo kết nối mạnh mẽ  với sản phẩm, dịch vụ của bạn.</div>
                </div>
            </div>
            <div class="home__about__column">
                <div class="home__about__box uk-padding-small rounded-7px">
                    <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <svg width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4873_249)">
                                    <path d="M21.967 18.1675L20.9992 18.9245C20.8492 19.0462 20.6243 19.0191 20.5016 18.8704C20.3789 18.7217 20.4062 18.4987 20.5561 18.377C20.5561 18.377 20.5561 18.377 20.5629 18.377L20.597 18.35C19.4247 18.715 18.7772 19.9518 19.1453 21.1143C19.2543 21.4523 19.4384 21.7564 19.6905 22.0133C19.8268 22.1552 19.82 22.3782 19.6837 22.5134C19.5474 22.6418 19.3293 22.6418 19.193 22.5134C18.0479 21.3779 18.0479 19.5396 19.193 18.4041C19.6224 17.9783 20.1813 17.6944 20.7811 17.593L20.5561 17.4173C20.3994 17.2956 20.3721 17.0794 20.4948 16.9239C20.6175 16.7685 20.8356 16.7414 20.9923 16.8631C20.9923 16.8631 20.9923 16.8631 20.9992 16.8631L21.967 17.6201C22.1238 17.7417 22.1442 17.9648 22.0283 18.1135C22.0079 18.1337 21.9943 18.1472 21.967 18.1675Z" fill="#070A71"/>
                                    <path d="M21.2651 25.1831C18.6205 25.1831 16.4804 23.0609 16.4804 20.4385C16.4804 17.8161 18.6205 15.6938 21.2651 15.6938C23.9096 15.6938 26.0497 17.8161 26.0497 20.4385C26.0429 23.0541 23.9028 25.1763 21.2651 25.1831ZM21.2651 16.3967C19.0159 16.3967 17.1892 18.2081 17.1892 20.4385C17.1892 22.6689 19.0159 24.4802 21.2651 24.4802C23.5143 24.4802 25.3409 22.6689 25.3409 20.4385C25.3341 18.2081 23.5143 16.4035 21.2651 16.3967Z" fill="#070A71"/>
                                    <path d="M29.0895 21.851H27.6855C27.5219 22.5945 27.2288 23.2974 26.813 23.9395L27.8081 24.9263C27.9445 25.0614 27.9445 25.2845 27.8081 25.4264L26.295 26.9269C26.1587 27.062 25.9338 27.062 25.7907 26.9269L24.7956 25.9401C24.1481 26.3524 23.4392 26.643 22.6895 26.8052V28.1975C22.6895 28.3935 22.5328 28.549 22.3351 28.549H20.195C19.9973 28.549 19.8405 28.3935 19.8405 28.1975V26.8052C19.0908 26.643 18.382 26.3524 17.7345 25.9401L16.7394 26.9269C16.6031 27.062 16.3781 27.062 16.235 26.9269L14.7287 25.4264C14.5924 25.2912 14.5924 25.0682 14.7287 24.9263L15.7238 23.9395C15.3081 23.2974 15.015 22.5945 14.8514 21.851H13.4406C13.2429 21.851 13.0861 21.6956 13.0861 21.4996V19.3773C13.0861 19.1813 13.2429 19.0259 13.4406 19.0259H14.8446C15.0082 18.2824 15.3013 17.5795 15.717 16.9374L14.7219 15.9506C14.5856 15.8155 14.5856 15.5924 14.7219 15.4505L16.2418 13.9501C16.3781 13.8149 16.6031 13.8149 16.7462 13.9501L17.7413 14.9368C18.3888 14.5246 19.0976 14.2339 19.8474 14.0717V12.6794C19.8474 12.4834 20.0041 12.328 20.2018 12.328H22.3419C22.5396 12.328 22.6963 12.4834 22.6963 12.6794V14.0717C23.4461 14.2339 24.1549 14.5246 24.8024 14.9368L25.7975 13.9501C25.9338 13.8149 26.1587 13.8149 26.3019 13.9501L27.815 15.4505C27.9513 15.5857 27.9513 15.8087 27.815 15.9506L26.8199 16.9374C27.2356 17.5795 27.5287 18.2824 27.6923 19.0259H29.0963C29.294 19.0259 29.4507 19.1813 29.4507 19.3773V21.4996C29.4439 21.6956 29.2872 21.851 29.0895 21.851ZM28.7351 19.7288H27.3924C27.222 19.7288 27.072 19.6071 27.0448 19.4382C26.9016 18.5933 26.5677 17.7958 26.0701 17.0996C25.9679 16.9577 25.9883 16.7685 26.111 16.6468L27.0584 15.7073L26.0497 14.707L25.0887 15.6397C24.966 15.7614 24.7751 15.7749 24.632 15.6803C23.93 15.1869 23.1189 14.8557 22.2738 14.707C22.1034 14.68 21.9807 14.5313 21.9807 14.3623V13.0309H20.5494V14.3623C20.5494 14.5313 20.4267 14.68 20.2563 14.707C19.4043 14.849 18.6001 15.1801 17.8981 15.6803C17.7549 15.7817 17.5641 15.7614 17.4414 15.6397L16.494 14.7003L15.4853 15.7006L16.4259 16.6468C16.5485 16.7685 16.5622 16.9577 16.4667 17.0996C15.9692 17.7958 15.6352 18.6001 15.4921 19.4382C15.4648 19.6071 15.3149 19.7288 15.1445 19.7288H13.795V21.1481H15.1377C15.3081 21.1481 15.458 21.2698 15.4853 21.4387C15.6284 22.2836 15.9624 23.0811 16.4599 23.7773C16.5622 23.9192 16.5417 24.1085 16.419 24.2301L15.4785 25.1763L16.4872 26.1766L17.4414 25.2372C17.5641 25.1155 17.7549 25.102 17.8981 25.1966C18.6001 25.69 19.4111 26.0212 20.2563 26.1699C20.4267 26.1969 20.5494 26.3456 20.5494 26.5146V27.846H21.9807V26.5146C21.9807 26.3456 22.1034 26.1969 22.2738 26.1699C23.1257 26.0279 23.93 25.6968 24.632 25.1966C24.7751 25.0952 24.966 25.1155 25.0887 25.2372L26.036 26.1766L27.0448 25.1763L26.1042 24.2301C25.9815 24.1085 25.9679 23.9192 26.0633 23.7773C26.5609 23.0811 26.8948 22.2768 27.038 21.4387C27.0652 21.2698 27.2152 21.1481 27.3856 21.1481H28.7283V19.7288H28.7351Z" fill="#070A71"/>
                                    <path d="M21.749 23.3042L21.9739 23.4799C22.1307 23.6016 22.158 23.8178 22.0353 23.9733C21.9126 24.1287 21.6945 24.1558 21.5377 24.0341C21.5377 24.0341 21.5377 24.0341 21.5309 24.0341L20.5631 23.2771C20.4063 23.1555 20.3859 22.9325 20.5017 22.7838C20.5222 22.7635 20.5358 22.7432 20.5631 22.7229L21.5309 21.9659C21.6809 21.8443 21.9058 21.8713 22.0285 22.02C22.1511 22.1687 22.1239 22.3918 21.9739 22.5134C21.9739 22.5134 21.9739 22.5134 21.9671 22.5134L21.933 22.5404C23.1054 22.1755 23.7529 20.9386 23.3848 19.7761C23.2757 19.4382 23.0917 19.1273 22.8395 18.8772C22.7032 18.742 22.7032 18.519 22.8395 18.3771C22.9759 18.2419 23.2008 18.2419 23.3439 18.3771C24.489 19.5125 24.489 21.3509 23.3439 22.4864C22.9077 22.9189 22.3488 23.2028 21.749 23.3042Z" fill="#070A71"/>
                                </g>
                                <path d="M35.2187 16.519C34.4854 16.519 33.7928 16.1989 33.3136 15.6372C32.8738 15.1217 32.6611 14.4645 32.712 13.8005H28.7566C28.4136 13.8005 28.1354 13.5248 28.1354 13.1846V9.0306C28.1354 8.84778 28.2173 8.67439 28.359 8.55735C28.5006 8.44032 28.6876 8.39184 28.8687 8.42474L28.9059 8.43151C29.2795 8.49939 29.6611 8.39973 29.9529 8.15852C30.2447 7.91724 30.4121 7.56281 30.4121 7.18603C30.4121 6.8093 30.2448 6.45493 29.9529 6.21372C29.6612 5.97257 29.2795 5.87315 28.9058 5.94091L28.8686 5.94768C28.6872 5.98064 28.5005 5.93204 28.359 5.815C28.2174 5.69797 28.1355 5.52464 28.1355 5.34182V0.790925C28.1355 0.450726 28.4136 0.174957 28.7567 0.174957H39.0613C40.6133 0.174957 41.876 1.42703 41.876 2.96609V13.1846C41.876 13.5248 41.5979 13.8005 41.2548 13.8005H37.7268C37.7852 14.4499 37.5858 15.0973 37.1643 15.6064C36.6929 16.1755 35.9972 16.508 35.2552 16.5187C35.2431 16.5189 35.2309 16.519 35.2187 16.519ZM29.3778 12.5686H33.4426C33.6269 12.5686 33.8017 12.6498 33.9198 12.7902C34.0378 12.9305 34.0869 13.1156 34.0537 13.2954L33.969 13.7543C33.8973 14.1429 34.0041 14.5391 34.262 14.8415C34.5118 15.1342 34.8586 15.2916 35.2371 15.2869C35.6128 15.2814 35.9653 15.1129 36.2042 14.8245C36.443 14.5361 36.541 14.1603 36.4733 13.7932L36.3815 13.2954C36.3483 13.1156 36.3974 12.9305 36.5154 12.7901C36.6334 12.6497 36.8082 12.5685 36.9925 12.5685H40.6336V2.96609C40.6336 2.10632 39.9282 1.40689 39.0613 1.40689H29.3778V4.69936C29.8765 4.74673 30.354 4.9415 30.7483 5.26747C31.3242 5.74343 31.6544 6.44274 31.6544 7.18603C31.6544 7.92938 31.3242 8.62875 30.7483 9.1047C30.354 9.43073 29.8765 9.62557 29.3778 9.673V12.5686Z" fill="#070A71"/>
                                <path d="M16.4818 6.60158C16.4818 7.32873 16.1591 8.01553 15.5927 8.49081C15.0728 8.92692 14.4101 9.13776 13.7405 9.08731L13.7405 13.0097C13.7405 13.3498 13.4624 13.6256 13.1193 13.6256L8.93032 13.6256C8.74596 13.6256 8.5711 13.5445 8.45308 13.404C8.33506 13.2635 8.28618 13.078 8.31935 12.8985L8.32618 12.8616C8.39463 12.4911 8.29413 12.1127 8.05088 11.8234C7.80757 11.534 7.45016 11.368 7.07019 11.368C6.69029 11.368 6.33293 11.5339 6.08969 11.8233C5.8465 12.1126 5.74625 12.4912 5.81457 12.8617L5.82141 12.8986C5.85464 13.0785 5.80563 13.2636 5.68761 13.404C5.56959 13.5443 5.39479 13.6256 5.21043 13.6256L0.621164 13.6256C0.278096 13.6256 1.89519e-06 13.3497 1.88019e-06 13.0096L1.42976e-06 2.79114C1.36193e-06 1.25214 1.26264 4.71364e-06 2.81467 4.64637e-06L13.1193 4.1997e-06C13.4624 4.18483e-06 13.7405 0.275772 13.7405 0.615972L13.7405 4.11448C14.3954 4.05652 15.0481 4.25425 15.5615 4.6723C16.1354 5.1397 16.4707 5.82964 16.4816 6.56536C16.4818 6.57743 16.4818 6.5895 16.4818 6.60158ZM12.4982 12.3936L12.4982 8.36281C12.4982 8.18006 12.58 8.00672 12.7216 7.88963C12.8631 7.77266 13.0498 7.72393 13.2311 7.75688L13.6938 7.84084C14.0857 7.91192 14.4853 7.80604 14.7902 7.55029C15.0854 7.30261 15.2441 6.95865 15.2393 6.58334C15.2339 6.21081 15.0639 5.86125 14.773 5.62434C14.4823 5.38757 14.1032 5.2903 13.7331 5.35751L13.2311 5.44855C13.0497 5.48144 12.8631 5.43278 12.7215 5.31574C12.58 5.19871 12.4981 5.02538 12.4981 4.84262L12.4981 1.232L2.81467 1.232C1.94765 1.232 1.24233 1.93143 1.24233 2.79114L1.24233 12.3936L4.56256 12.3936C4.61033 11.8991 4.80674 11.4256 5.13546 11.0346C5.61543 10.4636 6.32063 10.1361 7.07019 10.1361C7.81981 10.1361 8.52508 10.4636 9.00505 11.0346C9.33383 11.4257 9.5303 11.8991 9.57813 12.3936L12.4982 12.3936Z" fill="#070A71"/>
                                <path d="M8.02793 24.656C8.76121 24.656 9.4538 24.976 9.93309 25.5377C10.3729 26.0532 10.5855 26.7104 10.5346 27.3744L14.4901 27.3744C14.8331 27.3744 15.1112 27.6502 15.1112 27.9904L15.1112 32.1444C15.1112 32.3272 15.0294 32.5006 14.8877 32.6176C14.746 32.7346 14.559 32.7831 14.3779 32.7502L14.3407 32.7434C13.9671 32.6756 13.5855 32.7752 13.2938 33.0164C13.0019 33.2577 12.8345 33.6121 12.8345 33.9889C12.8345 34.3657 13.0019 34.72 13.2937 34.9612C13.5855 35.2024 13.9672 35.3018 14.3409 35.234L14.378 35.2273C14.5594 35.1943 14.7461 35.2429 14.8877 35.36C15.0292 35.477 15.1112 35.6503 15.1112 35.8331L15.1112 40.384C15.1112 40.7242 14.833 41 14.49 41L4.18536 41C2.63338 41 1.37069 39.7479 1.37069 38.2089L1.37068 27.9904C1.37068 27.6502 1.64878 27.3744 1.99185 27.3744L5.51986 27.3744C5.46141 26.725 5.6608 26.0777 6.08238 25.5686C6.55372 24.9995 7.24948 24.667 7.9914 24.6562C8.00357 24.656 8.01575 24.656 8.02793 24.656ZM13.8688 28.6064L9.80401 28.6064C9.61971 28.6064 9.44492 28.5252 9.32684 28.3848C9.20888 28.2444 9.15974 28.0593 9.19298 27.8795L9.27764 27.4207C9.34932 27.0321 9.24255 26.6358 8.98464 26.3335C8.73487 26.0408 8.38801 25.8834 8.00954 25.8881C7.63386 25.8935 7.28135 26.0621 7.04245 26.3505C6.80368 26.6388 6.7056 27.0147 6.77336 27.3818L6.86517 27.8796C6.89834 28.0594 6.84927 28.2445 6.73125 28.3849C6.61323 28.5252 6.43843 28.6064 6.25414 28.6064L2.61307 28.6064L2.61307 38.2089C2.61307 39.0686 3.3184 39.7681 4.18536 39.7681L13.8688 39.7681L13.8688 36.4756C13.3702 36.4282 12.8926 36.2335 12.4983 35.9075C11.9225 35.4315 11.5923 34.7322 11.5923 33.9889C11.5923 33.2456 11.9225 32.5462 12.4983 32.0703C12.8927 31.7442 13.3702 31.5494 13.8688 31.502L13.8688 28.6064Z" fill="#070A71"/>
                                <path d="M25.5182 34.3368C25.5182 33.6097 25.841 32.9229 26.4074 32.4476C26.9273 32.0115 27.59 31.8006 28.2596 31.8511L28.2596 27.9287C28.2596 27.5886 28.5377 27.3127 28.8808 27.3127L33.0698 27.3127C33.2541 27.3127 33.429 27.3939 33.547 27.5344C33.665 27.6749 33.7139 27.8603 33.6807 28.0399L33.6739 28.0768C33.6054 28.4473 33.7059 28.8257 33.9492 29.115C34.1925 29.4044 34.5499 29.5704 34.9299 29.5704C35.3098 29.5704 35.6671 29.4044 35.9104 29.1151C36.1536 28.8257 36.2538 28.4472 36.1855 28.0767L36.1787 28.0398C36.1454 27.8599 36.1944 27.6748 36.3125 27.5344C36.4305 27.3941 36.6053 27.3128 36.7896 27.3128L41.3789 27.3128C41.722 27.3128 42.0001 27.5886 42.0001 27.9288L42.0001 38.1472C42.0001 39.6862 40.7374 40.9384 39.1854 40.9384L28.8808 40.9384C28.5377 40.9384 28.2596 40.6626 28.2596 40.3224L28.2596 36.8239C27.6047 36.8819 26.9519 36.6841 26.4385 36.2661C25.8647 35.7987 25.5293 35.1087 25.5185 34.373C25.5183 34.361 25.5182 34.3489 25.5182 34.3368ZM29.5019 28.5447L29.5019 32.5756C29.5019 32.7583 29.4201 32.9317 29.2785 33.0488C29.1369 33.1657 28.9503 33.2145 28.769 33.1815L28.3063 33.0975C27.9144 33.0265 27.5148 33.1323 27.2099 33.3881C26.9147 33.6358 26.756 33.9797 26.7607 34.355C26.7662 34.7276 26.9362 35.0771 27.227 35.314C27.5178 35.5508 27.8968 35.6481 28.267 35.5809L28.769 35.4898C28.9503 35.4569 29.137 35.5056 29.2786 35.6226C29.4201 35.7397 29.502 35.913 29.502 36.0958L29.502 39.7064L39.1854 39.7064C40.0524 39.7064 40.7577 39.0069 40.7577 38.1472L40.7577 28.5447L37.4375 28.5447C37.3897 29.0392 37.1933 29.5128 36.8646 29.9038C36.3846 30.4748 35.6794 30.8023 34.9299 30.8023C34.1803 30.8023 33.475 30.4748 32.995 29.9038C32.6662 29.5127 32.4698 29.0392 32.4219 28.5447L29.5019 28.5447Z" fill="#070A71"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5936 7.78608L16.3577 7.78608L16.3577 6.4884L17.5936 6.4884L17.5936 7.78608ZM21.3014 7.78608L18.8296 7.78608L18.8296 6.4884L21.3014 6.4884L21.3014 7.78608ZM25.0092 7.78608L22.5373 7.78608L22.5373 6.4884L25.0092 6.4884L25.0092 7.78608ZM27.481 7.78608L26.2451 7.78608L26.2451 6.4884L27.481 6.4884L27.481 7.78608Z" fill="#070A71"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6307 34.45L14.3948 34.45L14.3948 33.1523L15.6307 33.1523L15.6307 34.45ZM19.3385 34.45L16.8666 34.45L16.8666 33.1523L19.3385 33.1523L19.3385 34.45ZM23.0462 34.45L20.5744 34.45L20.5744 33.1523L23.0462 33.1523L23.0462 34.45ZM25.5181 34.45L24.2821 34.45L24.2821 33.1523L25.5181 33.1523L25.5181 34.45Z" fill="#070A71"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.85179 23.3582L7.85179 24.6559L6.54317 24.6559L6.54317 23.3582L7.85179 23.3582ZM7.85179 19.4652L7.85179 22.0606L6.54317 22.0606L6.54317 19.4652L7.85179 19.4652ZM7.85179 15.5722L7.85179 18.1675L6.54317 18.1675L6.54317 15.5722L7.85179 15.5722ZM7.85179 12.9768L7.85179 14.2745L6.54317 14.2745L6.54317 12.9768L7.85179 12.9768Z" fill="#070A71"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.9871 27.2513L35.9871 28.549L34.6785 28.549L34.6785 27.2513L35.9871 27.2513ZM35.9871 23.3582L35.9871 25.9536L34.6785 25.9536L34.6785 23.3582L35.9871 23.3582ZM35.9871 19.4652L35.9871 22.0606L34.6785 22.0606L34.6785 19.4652L35.9871 19.4652ZM35.9871 16.8698L35.9871 18.1675L34.6785 18.1675L34.6785 16.8698L35.9871 16.8698Z" fill="#070A71"/>
                                <defs>
                                    <clipPath id="clip0_4873_249">
                                        <rect width="16.3578" height="16.221" fill="white" transform="matrix(1 0 0 -1 13.0861 28.549)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="uk-width-expand">
                            <h6 class="barlow-semibold fz-16 text-0B0B0B ls--016">Ứng dụng linh hoạt trong nhiều lĩnh vực</h6>
                        </div>
                    </div>
                    <div class="fz-14 uk-margin-top">Giúp nâng cao hiệu quả quảng bá và tiếp thị trong Bất động sản, du lịch, khách sạn,...</div>
                </div>
            </div>
            <div class="home__about__column uk-light">
                <div class="home__about__box uk-padding-small rounded-7px">
                    <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                <path d="M24.2812 35.4375H22.9688V29.0063C22.9688 28.8322 22.8996 28.6653 22.7765 28.5422C22.6535 28.4191 22.4865 28.35 22.3125 28.35C22.1385 28.35 21.9715 28.4191 21.8485 28.5422C21.7254 28.6653 21.6562 28.8322 21.6562 29.0063V35.4375H4.59375V22.3125H10.0538C10.2278 22.3125 10.3947 22.2434 10.5178 22.1203C10.6409 21.9972 10.71 21.8303 10.71 21.6562C10.71 21.4822 10.6409 21.3153 10.5178 21.1922C10.3947 21.0691 10.2278 21 10.0538 21H3.9375C3.76345 21 3.59653 21.0691 3.47346 21.1922C3.35039 21.3153 3.28125 21.4822 3.28125 21.6562V35.4375H1.96875C1.7947 35.4375 1.62778 35.5066 1.50471 35.6297C1.38164 35.7528 1.3125 35.9197 1.3125 36.0938V37.4062C1.3125 38.2765 1.6582 39.1111 2.27356 39.7264C2.88891 40.3418 3.72351 40.6875 4.59375 40.6875H21.6562C22.5265 40.6875 23.3611 40.3418 23.9764 39.7264C24.5918 39.1111 24.9375 38.2765 24.9375 37.4062V36.0938C24.9375 35.9197 24.8684 35.7528 24.7453 35.6297C24.6222 35.5066 24.4553 35.4375 24.2812 35.4375ZM23.625 37.4062C23.625 37.9284 23.4176 38.4292 23.0484 38.7984C22.6792 39.1676 22.1784 39.375 21.6562 39.375H20.3438V38.7188C20.3438 38.5447 20.2746 38.3778 20.1515 38.2547C20.0285 38.1316 19.8615 38.0625 19.6875 38.0625C19.5135 38.0625 19.3465 38.1316 19.2235 38.2547C19.1004 38.3778 19.0312 38.5447 19.0312 38.7188V39.375H7.21875V38.7188C7.21875 38.5447 7.14961 38.3778 7.02654 38.2547C6.90347 38.1316 6.73655 38.0625 6.5625 38.0625C6.38845 38.0625 6.22153 38.1316 6.09846 38.2547C5.97539 38.3778 5.90625 38.5447 5.90625 38.7188V39.375H4.59375C4.0716 39.375 3.57085 39.1676 3.20163 38.7984C2.83242 38.4292 2.625 37.9284 2.625 37.4062V36.75H23.625V37.4062Z" fill="#FFDA79"/>
                                <path d="M35.4375 5.25H36.75C36.924 5.25 37.091 5.18086 37.214 5.05779C37.3371 4.93472 37.4062 4.7678 37.4062 4.59375C37.4062 4.4197 37.3371 4.25278 37.214 4.12971C37.091 4.00664 36.924 3.9375 36.75 3.9375H35.4375C34.9154 3.9375 34.4146 4.14492 34.0454 4.51413C33.6762 4.88335 33.4688 5.38411 33.4688 5.90625V6.5625H32.8125C32.6385 6.5625 32.4715 6.63164 32.3485 6.75471C32.2254 6.87778 32.1562 7.0447 32.1562 7.21875C32.1562 7.3928 32.2254 7.55972 32.3485 7.68279C32.4715 7.80586 32.6385 7.875 32.8125 7.875H33.4688V9.84375C33.4688 10.0178 33.5379 10.1847 33.661 10.3078C33.784 10.4309 33.951 10.5 34.125 10.5C34.299 10.5 34.466 10.4309 34.589 10.3078C34.7121 10.1847 34.7812 10.0178 34.7812 9.84375V7.875H35.4375C35.6115 7.875 35.7785 7.80586 35.9015 7.68279C36.0246 7.55972 36.0938 7.3928 36.0938 7.21875C36.0938 7.0447 36.0246 6.87778 35.9015 6.75471C35.7785 6.63164 35.6115 6.5625 35.4375 6.5625H34.7812V5.90625C34.7812 5.7322 34.8504 5.56528 34.9735 5.44221C35.0965 5.31914 35.2635 5.25 35.4375 5.25Z" fill="#FFDA79"/>
                                <path d="M38.7188 1.3125H30.8438C30.3216 1.3125 29.8208 1.51992 29.4516 1.88913C29.0824 2.25835 28.875 2.75911 28.875 3.28125V4.59375C28.875 4.7678 28.9441 4.93472 29.0672 5.05779C29.1903 5.18086 29.3572 5.25 29.5312 5.25C29.7053 5.25 29.8722 5.18086 29.9953 5.05779C30.1184 4.93472 30.1875 4.7678 30.1875 4.59375V3.28125C30.1875 3.1072 30.2566 2.94028 30.3797 2.81721C30.5028 2.69414 30.6697 2.625 30.8438 2.625H38.7188C38.8928 2.625 39.0597 2.69414 39.1828 2.81721C39.3059 2.94028 39.375 3.1072 39.375 3.28125V11.1562C39.375 11.3303 39.3059 11.4972 39.1828 11.6203C39.0597 11.7434 38.8928 11.8125 38.7188 11.8125H30.8438C30.6697 11.8125 30.5028 11.7434 30.3797 11.6203C30.2566 11.4972 30.1875 11.3303 30.1875 11.1562V7.21875C30.1875 7.0447 30.1184 6.87778 29.9953 6.75471C29.8722 6.63164 29.7053 6.5625 29.5312 6.5625C29.3572 6.5625 29.1903 6.63164 29.0672 6.75471C28.9441 6.87778 28.875 7.0447 28.875 7.21875V11.1562C28.875 11.6784 29.0824 12.1792 29.4516 12.5484C29.8208 12.9176 30.3216 13.125 30.8438 13.125H38.7188C39.2409 13.125 39.7417 12.9176 40.1109 12.5484C40.4801 12.1792 40.6875 11.6784 40.6875 11.1562V3.28125C40.6875 2.75911 40.4801 2.25835 40.1109 1.88913C39.7417 1.51992 39.2409 1.3125 38.7188 1.3125Z" fill="#FFDA79"/>
                                <path d="M32.1562 27.5625C32.1562 28.0817 32.3102 28.5892 32.5986 29.0209C32.8871 29.4526 33.297 29.789 33.7767 29.9877C34.2564 30.1864 34.7842 30.2383 35.2934 30.1371C35.8026 30.0358 36.2703 29.7858 36.6374 29.4187C37.0045 29.0515 37.2545 28.5838 37.3558 28.0746C37.4571 27.5654 37.4051 27.0376 37.2064 26.558C37.0078 26.0783 36.6713 25.6683 36.2396 25.3799C35.8079 25.0915 35.3004 24.9375 34.7813 24.9375C34.0851 24.9375 33.4174 25.2141 32.9251 25.7063C32.4328 26.1986 32.1562 26.8663 32.1562 27.5625ZM36.0938 27.5625C36.0938 27.8221 36.0168 28.0758 35.8726 28.2917C35.7283 28.5075 35.5234 28.6758 35.2835 28.7751C35.0437 28.8744 34.7798 28.9004 34.5252 28.8498C34.2706 28.7991 34.0367 28.6741 33.8532 28.4906C33.6696 28.307 33.5446 28.0732 33.494 27.8186C33.4433 27.564 33.4693 27.3001 33.5687 27.0602C33.668 26.8204 33.8362 26.6154 34.0521 26.4712C34.2679 26.327 34.5217 26.25 34.7813 26.25C35.1293 26.25 35.4632 26.3883 35.7093 26.6344C35.9555 26.8806 36.0938 27.2144 36.0938 27.5625Z" fill="#FFDA79"/>
                                <path d="M38.7188 21.6562H30.8438C30.3216 21.6562 29.8208 21.8637 29.4516 22.2329C29.0824 22.6021 28.875 23.1029 28.875 23.625V31.5C28.875 32.0221 29.0824 32.5229 29.4516 32.8921C29.8208 33.2613 30.3216 33.4688 30.8438 33.4688H38.7188C39.2409 33.4688 39.7417 33.2613 40.1109 32.8921C40.4801 32.5229 40.6875 32.0221 40.6875 31.5V30.1875C40.6875 30.0135 40.6184 29.8465 40.4953 29.7235C40.3722 29.6004 40.2053 29.5312 40.0312 29.5312C39.8572 29.5312 39.6903 29.6004 39.5672 29.7235C39.4441 29.8465 39.375 30.0135 39.375 30.1875V31.5C39.375 31.674 39.3059 31.841 39.1828 31.964C39.0597 32.0871 38.8928 32.1562 38.7188 32.1562H30.8438C30.6697 32.1562 30.5028 32.0871 30.3797 31.964C30.2566 31.841 30.1875 31.674 30.1875 31.5V23.625C30.1875 23.451 30.2566 23.284 30.3797 23.161C30.5028 23.0379 30.6697 22.9688 30.8438 22.9688H38.7188C38.8928 22.9688 39.0597 23.0379 39.1828 23.161C39.3059 23.284 39.375 23.451 39.375 23.625V27.5625C39.375 27.7365 39.4441 27.9035 39.5672 28.0265C39.6903 28.1496 39.8572 28.2188 40.0312 28.2188C40.2053 28.2188 40.3722 28.1496 40.4953 28.0265C40.6184 27.9035 40.6875 27.7365 40.6875 27.5625V23.625C40.6875 23.1029 40.4801 22.6021 40.1109 22.2329C39.7417 21.8637 39.2409 21.6562 38.7188 21.6562Z" fill="#FFDA79"/>
                                <path d="M16.0584 9.08906C16.1629 9.15379 16.2834 9.18789 16.4063 9.1875C16.509 9.18688 16.6101 9.16216 16.7016 9.11531L20.6391 7.14656C20.7466 7.09149 20.8368 7.00782 20.8998 6.90477C20.9628 6.80172 20.9961 6.68328 20.9961 6.5625C20.9961 6.44172 20.9628 6.32328 20.8998 6.22023C20.8368 6.11718 20.7466 6.03351 20.6391 5.97844L16.7016 4.00969C16.6017 3.95934 16.4906 3.93538 16.3788 3.94006C16.267 3.94474 16.1583 3.97792 16.063 4.03644C15.9676 4.09496 15.8888 4.17688 15.834 4.27442C15.7793 4.37196 15.7503 4.48188 15.75 4.59375V8.53125C15.7498 8.64277 15.778 8.75252 15.8319 8.85012C15.8859 8.94772 15.9639 9.02995 16.0584 9.08906ZM17.0625 5.65687L18.8738 6.5625L17.0625 7.46812V5.65687Z" fill="#FFDA79"/>
                                <path d="M17.7187 12.4687C18.8869 12.4687 20.0288 12.1223 21.0001 11.4733C21.9714 10.8244 22.7284 9.90192 23.1754 8.8227C23.6224 7.74347 23.7394 6.55592 23.5115 5.41022C23.2836 4.26452 22.7211 3.21213 21.8951 2.38612C21.0691 1.56012 20.0167 0.997603 18.871 0.769709C17.7253 0.541815 16.5378 0.658779 15.4585 1.10581C14.3793 1.55284 13.4569 2.30986 12.8079 3.28114C12.1589 4.25241 11.8125 5.39433 11.8125 6.56247C11.8125 8.12891 12.4348 9.63119 13.5424 10.7388C14.65 11.8465 16.1523 12.4687 17.7187 12.4687ZM17.7187 1.96872C18.6273 1.96872 19.5155 2.23814 20.2709 2.74291C21.0263 3.24768 21.6151 3.96512 21.9628 4.80452C22.3105 5.64392 22.4015 6.56757 22.2242 7.45867C22.047 8.34977 21.6095 9.1683 20.967 9.81075C20.3246 10.4532 19.506 10.8907 18.6149 11.068C17.7238 11.2452 16.8002 11.1542 15.9608 10.8065C15.1214 10.4589 14.404 9.87006 13.8992 9.11462C13.3944 8.35919 13.125 7.47103 13.125 6.56247C13.125 5.34413 13.609 4.1757 14.4705 3.3142C15.332 2.45271 16.5004 1.96872 17.7187 1.96872Z" fill="#FFDA79"/>
                                <path d="M24.2812 15.0937C24.3831 15.0937 24.4836 15.07 24.5747 15.0244C24.6658 14.9789 24.7451 14.9127 24.8062 14.8312L26.775 12.2062C26.8794 12.067 26.9242 11.892 26.8996 11.7197C26.875 11.5474 26.783 11.3919 26.6437 11.2875C26.5045 11.183 26.3295 11.1382 26.1572 11.1628C25.9849 11.1874 25.8294 11.2795 25.725 11.4187L23.7562 14.0437C23.6518 14.183 23.607 14.358 23.6316 14.5303C23.6562 14.7026 23.7482 14.858 23.8875 14.9625C24.0011 15.0477 24.1392 15.0937 24.2812 15.0937Z" fill="#FFDA79"/>
                                <path d="M25.725 17.4562C25.7861 17.5377 25.8654 17.6039 25.9565 17.6494C26.0476 17.695 26.1481 17.7187 26.25 17.7187C26.392 17.7187 26.5301 17.6727 26.6437 17.5875L29.2687 15.6187C29.408 15.5143 29.5 15.3588 29.5246 15.1865C29.5492 15.0142 29.5044 14.8392 29.4 14.7C29.2955 14.5607 29.1401 14.4687 28.9678 14.4441C28.7955 14.4195 28.6205 14.4643 28.4812 14.5687L25.8562 16.5375C25.717 16.6419 25.6249 16.7974 25.6003 16.9697C25.5757 17.142 25.6205 17.317 25.725 17.4562Z" fill="#FFDA79"/>
                                <path d="M32.1564 18.9C32.1408 18.813 32.1078 18.73 32.0593 18.6561C32.0109 18.5822 31.948 18.5188 31.8744 18.4697C31.8009 18.4207 31.7182 18.387 31.6313 18.3708C31.5444 18.3545 31.4552 18.3559 31.3689 18.375L28.0876 19.0312C28.0014 19.0398 27.9178 19.0654 27.8415 19.1063C27.7651 19.1472 27.6976 19.2028 27.6428 19.2698C27.532 19.4052 27.4796 19.5791 27.497 19.7531C27.5144 19.9271 27.6002 20.0872 27.7356 20.1979C27.871 20.3087 28.0448 20.3611 28.2189 20.3437H28.3501L31.6314 19.6875C31.7184 19.6719 31.8013 19.6389 31.8753 19.5904C31.9492 19.542 32.0126 19.4791 32.0616 19.4055C32.1106 19.332 32.1443 19.2493 32.1606 19.1624C32.1769 19.0756 32.1754 18.9863 32.1564 18.9Z" fill="#FFDA79"/>
                                <path d="M1.96875 19.0312H9.84375C10.0178 19.0312 10.1847 18.9621 10.3078 18.839C10.4309 18.716 10.5 18.549 10.5 18.375V7.875C10.5 7.70095 10.4309 7.53403 10.3078 7.41096C10.1847 7.28789 10.0178 7.21875 9.84375 7.21875H1.96875C1.7947 7.21875 1.62778 7.28789 1.50471 7.41096C1.38164 7.53403 1.3125 7.70095 1.3125 7.875V18.375C1.3125 18.549 1.38164 18.716 1.50471 18.839C1.62778 18.9621 1.7947 19.0312 1.96875 19.0312ZM2.625 8.53125H9.1875V17.7188H2.625V8.53125Z" fill="#FFDA79"/>
                                <path d="M7.21875 9.84375H5.90625C5.7322 9.84375 5.56528 9.91289 5.44221 10.036C5.31914 10.159 5.25 10.326 5.25 10.5C5.25 10.674 5.31914 10.841 5.44221 10.964C5.56528 11.0871 5.7322 11.1562 5.90625 11.1562H7.21875C7.3928 11.1562 7.55972 11.0871 7.68279 10.964C7.80586 10.841 7.875 10.674 7.875 10.5C7.875 10.326 7.80586 10.159 7.68279 10.036C7.55972 9.91289 7.3928 9.84375 7.21875 9.84375Z" fill="#FFDA79"/>
                                <path d="M7.21875 12.4688H4.59375C4.4197 12.4688 4.25278 12.5379 4.12971 12.661C4.00664 12.784 3.9375 12.951 3.9375 13.125C3.9375 13.299 4.00664 13.466 4.12971 13.589C4.25278 13.7121 4.4197 13.7812 4.59375 13.7812H7.21875C7.3928 13.7812 7.55972 13.7121 7.68279 13.589C7.80586 13.466 7.875 13.299 7.875 13.125C7.875 12.951 7.80586 12.784 7.68279 12.661C7.55972 12.5379 7.3928 12.4688 7.21875 12.4688Z" fill="#FFDA79"/>
                                <path d="M7.21875 15.0938H4.59375C4.4197 15.0938 4.25278 15.1629 4.12971 15.286C4.00664 15.409 3.9375 15.576 3.9375 15.75C3.9375 15.924 4.00664 16.091 4.12971 16.214C4.25278 16.3371 4.4197 16.4062 4.59375 16.4062H7.21875C7.3928 16.4062 7.55972 16.3371 7.68279 16.214C7.80586 16.091 7.875 15.924 7.875 15.75C7.875 15.576 7.80586 15.409 7.68279 15.286C7.55972 15.1629 7.3928 15.0938 7.21875 15.0938Z" fill="#FFDA79"/>
                                <path d="M23.7036 18.8344C23.6606 18.7594 23.6031 18.6936 23.5346 18.6409C23.4661 18.5881 23.3879 18.5493 23.3044 18.5268C23.2209 18.5042 23.1338 18.4983 23.0481 18.5095C22.9623 18.5206 22.8796 18.5485 22.8046 18.5916C22.7296 18.6347 22.6639 18.6921 22.6111 18.7606C22.5583 18.8291 22.5195 18.9073 22.497 18.9908C22.4744 19.0743 22.4685 19.1614 22.4797 19.2472C22.4908 19.3329 22.5187 19.4157 22.5618 19.4906L25.4558 24.4978L14.9558 28.4353C14.9558 28.4353 14.9558 28.4353 14.9099 28.4353H14.8574L13.1512 29.4197L12.0158 30.0759C11.8664 30.1624 11.7013 30.2184 11.5302 30.2409C11.359 30.2635 11.1851 30.252 11.0183 30.2072C10.6834 30.1167 10.3979 29.8973 10.2243 29.5969L8.91178 27.3263C8.75737 27.0292 8.72232 26.6843 8.81382 26.3623C8.90531 26.0402 9.11643 25.7653 9.40396 25.5938L11.6746 24.2813L13.3152 27.1228C13.373 27.223 13.4563 27.3061 13.5565 27.3637C13.6568 27.4213 13.7705 27.4514 13.8862 27.4509C14.0016 27.4514 14.1151 27.4214 14.2152 27.364C14.3153 27.3066 14.3985 27.2238 14.4564 27.124C14.5143 27.0241 14.5449 26.9108 14.545 26.7953C14.5451 26.6799 14.5148 26.5665 14.4571 26.4666L12.764 23.5397L20.9999 16.7475L21.269 17.2134C21.3121 17.2884 21.3695 17.3542 21.438 17.4069C21.5065 17.4597 21.5847 17.4985 21.6682 17.521C21.7517 17.5436 21.8388 17.5495 21.9246 17.5384C22.0103 17.5272 22.093 17.4993 22.168 17.4563C22.243 17.4132 22.3088 17.3557 22.3615 17.2872C22.4143 17.2187 22.4531 17.1405 22.4756 17.057C22.4982 16.9735 22.5041 16.8864 22.4929 16.8007C22.4818 16.7149 22.4539 16.6322 22.4108 16.5572L21.7546 15.4219C21.7065 15.3397 21.6411 15.2689 21.5629 15.2145C21.4847 15.1601 21.3956 15.1234 21.3018 15.1069C21.2075 15.0891 21.1104 15.0922 21.0174 15.116C20.9244 15.1398 20.8378 15.1838 20.7637 15.2447L11.5762 22.8178L8.78053 24.4322C8.27883 24.7244 7.88817 25.1747 7.66968 25.7126C7.45119 26.2505 7.4172 26.8457 7.57303 27.405L6.91678 27.7791C6.57865 27.9732 6.30579 28.2634 6.1328 28.6129C5.95981 28.9623 5.89448 29.3553 5.94509 29.7419C5.99571 30.1285 6.15998 30.4914 6.41709 30.7845C6.6742 31.0777 7.01256 31.2879 7.38928 31.3884C7.55628 31.4327 7.72839 31.4547 7.90115 31.4541C8.24639 31.4526 8.58542 31.3622 8.88553 31.1916L9.54178 30.8175C9.85702 31.1432 10.2535 31.3788 10.6902 31.5C10.9145 31.5627 11.1464 31.5937 11.3793 31.5919C11.8406 31.5929 12.2937 31.4706 12.6918 31.2375L13.2627 30.9094L14.5752 33.1866C14.8361 33.6375 15.265 33.9667 15.7681 34.102C16.2712 34.2374 16.8074 34.1677 17.2593 33.9084C17.4835 33.7793 17.68 33.6072 17.8376 33.402C17.9952 33.1969 18.1109 32.9626 18.1779 32.7128C18.2449 32.4629 18.2621 32.2022 18.2283 31.9457C18.1946 31.6892 18.1106 31.4418 17.9812 31.2178L16.7868 29.1375L26.6305 25.4428C26.7198 25.4093 26.8007 25.3567 26.8675 25.2887C26.9344 25.2206 26.9857 25.1389 27.0177 25.0491C27.0497 24.9603 27.0621 24.8657 27.0542 24.7717C27.0462 24.6777 27.0181 24.5865 26.9718 24.5044L23.7036 18.8344ZM8.20303 30.0497C8.12829 30.0929 8.04577 30.1209 7.96019 30.1322C7.87461 30.1435 7.78764 30.1377 7.70428 30.1153C7.53614 30.0716 7.39219 29.9631 7.30396 29.8134C7.26076 29.7387 7.23273 29.6562 7.22146 29.5706C7.2102 29.485 7.21594 29.3981 7.23834 29.3147C7.26074 29.2309 7.29954 29.1524 7.35248 29.0837C7.40542 29.0149 7.47146 28.9574 7.54678 28.9144L8.11771 28.5863L8.77396 29.7216L8.20303 30.0497ZM16.8393 31.8872C16.8825 31.9619 16.9105 32.0444 16.9218 32.13C16.933 32.2156 16.9273 32.3026 16.9049 32.3859C16.8581 32.5528 16.7472 32.6943 16.5965 32.7797C16.4466 32.8658 16.2688 32.8893 16.1016 32.8451C15.9345 32.8008 15.7916 32.6924 15.704 32.5434L14.3915 30.2663L15.4808 29.6428H15.5333L16.8393 31.8872Z" fill="#FFDA79"/>
                            </svg>
                        </div>
                        <div class="uk-width-expand">
                            <h6 class="barlow-semibold fz-16 text-0B0B0B ls--016">Tối ưu hóa chiến dịch truyền thông số</h6>
                        </div>
                    </div>
                    <div class="fz-14 uk-margin-top">Dễ dàng tích hợp trên website, mạng xã hội,  giúp doanh nghiệp tiếp cận khách hàng hiện đại.</div>
                </div>
            </div>
        </div>
    </div>
</div>

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

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover1" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover1" href uk-slidenav-next uk-slider-item="next"></a>

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