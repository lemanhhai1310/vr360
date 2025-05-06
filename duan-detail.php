<?php $data["title"] = "Dự án chi tiết"; ?>
<?php $isHome = false; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-xsmall uk-background-norepeat uk-background-norepeat uk-background-center-center uk-background-blend-screen bgc-c3f5ff uk-background-cover" data-src="images/bg-breacrumd.webp" uk-img>
    <div class="uk-container">
        <h2 class="fz-24 barlow-semibold text-3161C2 uk-margin-remove">Dự án nổi bật</h2>
        <nav class="item-14px" aria-label="Breadcrumb">
            <ul class="uk-breadcrumb uk-margin-remove">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Dự án nổi bật</a></li>
                <li><span aria-current="page">Di tích - Danh lam thắng cảnh</span></li>
            </ul>
        </nav>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <h1 class="uk-text-center uk-text-uppercase fz-24 text-F69C1F uk-margin-remove-bottom">quốc tử giám</h1>
        <div class="uk-cover-container uk-background-muted item-14px">
            <img src="https://picsum.photos/seed/project/1201/664" alt="Quốc Tử Giám" uk-cover="">
            <canvas width="1201" height="664"></canvas>
        </div>
        <div class="uk-margin-auto duan__box uk-padding-small uk-light uk-position-relative uk-text-center">
            <h2 class="fz-28 lh-128 uk-margin-remove">Tên dự án: Văn Miếu - Quốc Tử Giám</h2>
            <div class="item-7px">Xem toàn cảnh dự án tại đây: <strong class="text-F69C1F"><a href="" class="uk-link-toggle">http://vanmieu.gov.vn/vanmieu_vr360</a></strong></div>
            <div class="uk-margin-top">
                <a href="" class="uk-button uk-button-default uk-border-pill fz-16 barlow-bold bgc-F69C1F">liên hệ tư vấn</a>
            </div>
        </div>
        <ul class="uk-list item-45px">
            <li><strong>Địa chỉ:</strong> 58 Quốc Tử Giám, Đống Đa, Hà Nội</li>
            <li><strong>Lĩnh vực:</strong> Di tích - Danh lam thắng cảnh  </li>
            <li><strong>Dịch vụ:</strong> VR360 Virtual Tour </li>
        </ul>
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
    </div>
</div>
<div class="uk-section-small bg-F6F8F9">
    <div class="uk-container">
        <h3 class="uk-text-uppercase text-3161C2 fz-24">dự án khác</h3>
        <div class="uk-child-width-1-3@l uk-grid-small uk-grid-30-l" uk-grid>
            <?php
            $relatedNews = [
                [
                    'date' => '19/03/2025',
                    'title' => 'Đền Hùng VR360'
                ],
                [
                    'date' => '18/03/2025',
                    'title' => 'Chùa Bái Đính VR360'
                ],
                [
                    'date' => '17/03/2025',
                    'title' => 'Vịnh Hạ Long VR360'
                ]
            ];
            foreach ($relatedNews as $index => $news): ?>
                <div>
                    <div class="uk-cover-container uk-background-muted uk-border-rounded">
                        <img src="https://picsum.photos/seed/news<?= $index ?>/369/191" alt="" uk-cover="">
                        <canvas width="369" height="191"></canvas>
                    </div>
                    <h6 class="text-0B0B0B fz-18 barlow-semibold lh-144 uk-margin-remove-bottom item-12px"><a href=""
                                                                                                              class="uk-link-toggle"><?= $news['title'] ?></a>
                    </h6>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>