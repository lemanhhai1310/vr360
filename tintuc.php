<?php $data["title"] = "Tin tức"; ?>
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
        <h1 class="uk-text-center uk-text-uppercase fz-24 text-F69C1F uk-margin-remove-bottom">tin tức hoạt động</h1>
        <div class="uk-child-width-1-3@l uk-grid item-34px uk-grid-match uk-grid-small uk-grid-30-l" uk-grid uk-height-match=".my-class-title">
            <?php
            $news = [
                [
                    'date' => '24/03/2025',
                    'title' => 'Truy xuất nguồn gốc thực phẩm bằng mã QR Code',
                    'description' => 'Thực phẩm không an toàn vẫn đang hoành hành và qua mặt người tiêu dùng mỗi ngày...'
                ],
                [
                    'date' => '23/03/2025',
                    'title' => 'Ứng dụng công nghệ trong nông nghiệp',
                    'description' => 'Công nghệ đang thay đổi cách chúng ta canh tác và phát triển nông nghiệp...'
                ],
                [
                    'date' => '22/03/2025',
                    'title' => 'Giải pháp thông minh cho doanh nghiệp',
                    'description' => 'Các giải pháp công nghệ giúp doanh nghiệp tối ưu hoá quy trình sản xuất...'
                ],
                [
                    'date' => '21/03/2025',
                    'title' => 'Chuyển đổi số trong giáo dục',
                    'description' => 'Ứng dụng công nghệ số trong giảng dạy và học tập đang là xu hướng tất yếu...'
                ],
                [
                    'date' => '20/03/2025',
                    'title' => 'IoT và những ứng dụng thực tiễn',
                    'description' => 'Internet of Things đang tạo ra cuộc cách mạng trong nhiều lĩnh vực...'
                ],
                [
                    'date' => '19/03/2025',
                    'title' => 'Blockchain và tương lai thanh toán',
                    'description' => 'Công nghệ blockchain đang thay đổi cách chúng ta nghĩ về giao dịch...'
                ],
                [
                    'date' => '18/03/2025',
                    'title' => 'AI trong nhận diện hình ảnh',
                    'description' => 'Trí tuệ nhân tạo đang cải thiện độ chính xác trong nhận diện hình ảnh...'
                ],
                [
                    'date' => '17/03/2025',
                    'title' => 'Cloud Computing và doanh nghiệp',
                    'description' => 'Điện toán đám mây đang giúp doanh nghiệp tiết kiệm chi phí vận hành...'
                ],
                [
                    'date' => '16/03/2025',
                    'title' => '5G và cách mạng công nghiệp 4.0',
                    'description' => 'Mạng 5G sẽ là nền tảng quan trọng cho cuộc cách mạng công nghiệp 4.0...'
                ]
            ];
            foreach ($news as $index => $item): ?>
                <div>
                    <div class="uk-card uk-card-default uk-border-rounded">
                        <div class="uk-card-media-top uk-cover-container uk-border-rounded">
                            <img src="https://picsum.photos/400/235?random=<?= $index ?>" alt="" uk-cover="">
                            <canvas width="400" height="235"></canvas>
                            <a href="tintuc-detail.php" class="uk-position-cover"></a>
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <div class="fz-14 text-3161C2"><?= $item['date'] ?></div>
                            <h4 class="my-class-title text-0B0B0B fz-18 barlow-semibold uk-margin-remove-bottom item-12px"><a href="tintuc-detail.php"
                                                                                                               class="uk-link-toggle"><?= $item['title'] ?></a>
                            </h4>
                            <p class="line-clamp-3"><?= $item['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav aria-label="Pagination" class="uk-margin-top">
            <ul class="uk-pagination uk-flex-center" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>…</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span aria-current="page">7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>
        </nav>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>