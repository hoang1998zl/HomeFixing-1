<x-frame>
    <section class="index-aboutUs">
        <div class="index-aboutUs-content">
            <div class="title">
                Về chúng tôi
                <div class="dots-wrapper">
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle"></i>
                </div>
            </div>

            <div class="content">
                <p>
                    <strong>
                        Công ty TNHH Xây Dựng Thương Mại Dũng Tuấn - Home
                        <strong class="color-orange">Fixing</strong>
                    </strong>
                    với mục tiêu nâng cao chất lượng cuộc sống của Quý khách, với đội ngũ nhân viên giàu
                    kinh nghiệm, chúng tôi chuyên cung cấp dịch vụ sửa chữa, vệ sinh, bảo dưỡng nhà chuyên
                    nghiệp cho các Khách hàng là hộ gia đình nhỏ, doanh nghiệp nhỏ và lớn.
                </p>
                <p>
                    Những người thợ của HomeFixing là những chuyên gia sửa chữa nhà cửa. Chúng tôi có tất cả
                    các công cụ phù hợp để hoàn thành công việc ngay lần đầu tiên. <br>
                    Dịch vụ sửa nhà giá rẻ chất lượng cao của chúng tôi dựa trên tiêu chí đáp ứng nhanh,
                    chính xác nhu cầu khách hàng.
                </p>
            </div>
        </div>
        <div class="img-wrapper">
            <img src="{{ asset('img/index/1.png') }}" alt="">
        </div>
    </section>

    <!-- why choose us -->
    <section class="whyChooseUs">
        <div class="title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-12 col-lg-6">
                        Tại sao chọn Home<strong>Fixing</strong> ?
                        <div class="dots-wrapper">
                            <i class="fa-solid fa-circle"></i>
                            <i class="fa-solid fa-circle"></i>
                            <i class="fa-solid fa-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="whyChooseUs-wrapper">
            <div class="img-wrapper">
                <img src="{{ asset('img/index/2.png') }}" alt="">
            </div>
            <div class="whyChooseUs-content content">
                <ul>
                    <li>
                        <h2 class="fw-bold text-capitalize">Lịch sự và kịp thời</h2>
                        <p>
                            Các phép lịch sự phổ biến như đến đúng giờ và đáp ứng thời hạn thường bị các công ty
                            dịch vụ sửa chữa thông thường bỏ qua. <br>
                            Chúng tôi coi đây là một cơ hội để tiếp cận nhiều khách hàng, giúp họ tiết kiệm thời
                            gian, năng lượng và xua tan đi sự thất vọng của khách hàng vì phải chờ đợi và không được
                            hỗ trợ kịp thời. <br>
                            Khách hàng của chúng tôi luôn đánh giá cao sự đáp ứng kịp thời mà chúng tôi cung cấp cho
                            họ về các câu hỏi, mối quan tâm cũng như yêu cầu sửa chữa của họ.
                        </p>
                    </li>
                    <li>
                        <h2 class="fw-bold text-capitalize">Tính chuyên nghiệp</h2>
                        <p>
                            Các chuyên gia sửa chữa của chúng tôi là những chuyên gia có nhiều năm kinh nghiệm trong
                            lĩnh vự xây dựng và sửa chữa các công trình từ quy mô chung cư cho đến nhà ở thông
                            thường. Không những bạn sẽ thấy rằng mỗi chuyên gia sửa chữa của chúng tôi đều cư xử và
                            giao tiếp chuyên nghiệp mà bạn cũng sẽ thấy họ hết sức thân thiện.
                        </p>
                    </li>
                    <li>
                        <h2 class="fw-bold text-capitalize">Uyển chuyển</h2>
                        <p>
                            Khi bạn làm việc với HomeFixing, bạn không phải trả nhiều tiền nhất để có được tác phẩm
                            tuyệt vời. Bởi vì mỗi dự án sửa chữa nhà là duy nhất, chúng tôi tạo ra một kế hoạch tùy
                            chỉnh phù hợp với từng nhu cầu và mong đợi cụ thể của khách hàng.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <x-service-intro />
    <div class="container mx-auto my-4">
        <p class="index-title">
            Gợi ý sản phẩm
        </p>
    </div>
    <x-products />
    <x-mobile-app />
</x-frame>
