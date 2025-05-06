<?php $data["title"] = "Tin tức chi tiết"; ?>
<?php $isHome = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall uk-background-norepeat uk-background-norepeat uk-background-center-center uk-background-blend-screen bgc-c3f5ff uk-background-cover" data-src="images/bg-breacrumd.webp" uk-img>
    <div class="uk-container">
        <h2 class="fz-24 barlow-semibold text-3161C2 uk-margin-remove">Tin tức công nghệ</h2>
        <nav class="item-14px" aria-label="Breadcrumb">
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tin tức công nghệ</a></li>
                <li><span aria-current="page">Tin tức hoạt động</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand">
                <h1 class="text-3161C2 fz-32 uk-margin-remove">Phát triển du lịch giáo dục trải ngiệm gắn với quá trình chuyển đổi số</h1>
                <div class="tintuc__box uk-margin">
                    <div class="uk-grid uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="barlow-medium text-F69C1F">Ngày 08/04/2025</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div>
                                    <div class="text-000">Chia sẻ:</div>
                                </div>
                                <div>
                                    <div>
                                        <a href="" class="uk-icon-button uk-margin-small-right text-FFF bg-29A9E1" uk-icon="x"></a>
                                        <a href="" class="uk-icon-button  uk-margin-small-right bg-3E5C9A text-FFF" uk-icon="facebook"></a>
                                        <a href="" class="uk-icon-button bg-EE3338 text-FFF" uk-icon="youtube"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias aliquid amet
                    consectetur corporis dolor dolore doloremque dolores earum eligendi error esse est
                    exercitationem explicabo facere fugiat fugit harum illum impedit in ipsa ipsum iure laboriosam
                    laborum laudantium magnam maiores maxime molestiae mollitia necessitatibus nemo nesciunt nihil
                    nisi nobis non nostrum nulla numquam obcaecati officia officiis omnis optio pariatur perferendis
                    perspiciatis placeat porro possimus praesentium quae quam quasi qui quia quidem quo quod
                    recusandae reiciendis rem repellat repellendus reprehenderit repudiandae rerum sapiente sed
                    sequi sint sit soluta sunt suscipit temporibus tenetur totam ullam unde ut velit veniam
                    veritatis voluptas voluptate voluptates voluptatibus voluptatum.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias aliquid amet
                    consectetur corporis dolor dolore doloremque dolores earum eligendi error esse est
                    exercitationem explicabo facere fugiat fugit harum illum impedit in ipsa ipsum iure laboriosam
                    laborum laudantium magnam maiores maxime molestiae mollitia necessitatibus nemo nesciunt nihil
                    nisi nobis non nostrum nulla numquam obcaecati officia officiis omnis optio pariatur perferendis
                    perspiciatis placeat porro possimus praesentium quae quam quasi qui quia quidem quo quod
                    recusandae reiciendis rem repellat repellendus reprehenderit repudiandae rerum sapiente sed
                    sequi sint sit soluta sunt suscipit temporibus tenetur totam ullam unde ut velit veniam
                    veritatis voluptas voluptate voluptates voluptatibus voluptatum.</p>
                <div class="uk-flex-middle uk-grid-small uk-margin" uk-grid>
                    <div>
                        <div class="text-000">Chia sẻ:</div>
                    </div>
                    <div>
                        <div>
                            <a href="" class="uk-icon-button uk-margin-small-right text-FFF bg-29A9E1" uk-icon="x"></a>
                            <a href="" class="uk-icon-button  uk-margin-small-right bg-3E5C9A text-FFF" uk-icon="facebook"></a>
                            <a href="" class="uk-icon-button bg-EE3338 text-FFF" uk-icon="youtube"></a>
                        </div>
                    </div>
                </div>
                <div class="item-36px uk-grid uk-grid-12 uk-grid-match" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                            <canvas width="55" height="55"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-position-relative">
                            <textarea class="uk-textarea uk-height-1-1 rounded-10px" rows="1" placeholder="Viết bình luận cho bài này" aria-label="Viết bình luận cho bài này"></textarea>
                            <a href="" class="uk-position-center-right uk-position-small">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.8736 12.925L4.88359 19.075C4.05359 19.415 3.22359 18.565 3.59359 17.745L5.95359 12.405C6.06359 12.145 6.06359 11.855 5.95359 11.595L3.59359 6.25502C3.23359 5.43502 4.05359 4.58502 4.88359 4.92502L19.8736 11.075C20.7036 11.405 20.7036 12.585 19.8736 12.925Z" fill="black" fill-opacity="0.54"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@l">
                <h5 class="uk-text-uppercase fz-20 barlow-medium text-555 uk-margin-remove">XEM NHIỀU</h5>
                <div class="tintuc__listNews item-12px">
                    <?php
                    $newsItems = [
                        ['date' => '08.04.2025', 'title' => 'Truy xuất nguồn gốc thực phẩm bằng mã QR Code – Hướng tới nông nghiệp thông minh'],
                        ['date' => '07.04.2025', 'title' => 'Ứng dụng công nghệ số trong quản lý chuỗi cung ứng nông sản'],
                        ['date' => '06.04.2025', 'title' => 'Chuyển đổi số trong nông nghiệp - Xu hướng tất yếu'],
                        ['date' => '05.04.2025', 'title' => 'Công nghệ IoT trong nông nghiệp thông minh'],
                        ['date' => '04.04.2025', 'title' => 'Ứng dụng trí tuệ nhân tạo trong canh tác nông nghiệp'],
                        ['date' => '03.04.2025', 'title' => 'Giải pháp tưới tiêu thông minh cho nông nghiệp'],
                        ['date' => '02.04.2025', 'title' => 'Blockchain và truy xuất nguồn gốc nông sản'],
                        ['date' => '01.04.2025', 'title' => 'Nông nghiệp 4.0 - Cách mạng công nghiệp mới'],
                        ['date' => '31.03.2025', 'title' => 'Ứng dụng drone trong nông nghiệp hiện đại'],
                        ['date' => '30.03.2025', 'title' => 'Big Data trong phân tích và dự báo nông nghiệp']
                    ];
                    foreach ($newsItems as $item): ?>
                        <div class="tintuc__listNews__item">
                            <div class="text-979797"><?= $item['date'] ?></div>
                            <h6 class="fz-16 text-484554 uk-margin-remove"><a href=""
                                                                              class="uk-link-toggle"><?= $item['title'] ?></a>
                            </h6>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small bg-F6F8F9">
    <div class="uk-container">
        <h3 class="uk-text-uppercase text-3161C2 fz-24">tin liên quan</h3>
        <div class="uk-child-width-1-3@l uk-grid-small uk-grid-30-l" uk-grid>
            <?php
            $relatedNews = [
                [
                    'date' => '19/03/2025',
                    'title' => 'Công ty Công nghệ THT hỗ trợ chuyển đổi số cho các mô hình phát triển nông nghiệp'
                ],
                [
                    'date' => '18/03/2025',
                    'title' => 'Ứng dụng công nghệ số trong quản lý chuỗi cung ứng nông sản'
                ],
                [
                    'date' => '17/03/2025',
                    'title' => 'Chuyển đổi số trong nông nghiệp - Xu hướng tất yếu'
                ]
            ];
            foreach ($relatedNews as $index => $news): ?>
                <div>
                    <div class="uk-cover-container uk-background-muted uk-border-rounded">
                        <img src="https://picsum.photos/seed/news<?= $index ?>/389/236" alt="" uk-cover="">
                        <canvas width="389" height="236"></canvas>
                    </div>
                    <div class="fz-14 text-3161C2 item-14px"><?= $news['date'] ?></div>
                    <h6 class="text-0B0B0B fz-18 barlow-semibold lh-144 uk-margin-remove-bottom item-12px"><a href=""
                                                                                                              class="uk-link-toggle"><?= $news['title'] ?></a>
                    </h6>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>